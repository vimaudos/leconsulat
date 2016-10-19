<?php namespace App\Repositories;

use App\Post;

class PostRepository
{
    protected $post;

    public function __construct(Post $post)
	{
		$this->post = $post;
	}

	private function queryWithUserAndTags()
	{
		return $this->post->with('user', 'tags')
		->orderBy('posts.created_at', 'desc');		
	}

	public function getWithUserAndTagsPaginate($n)
	{
		return $this->queryWithUserAndTags()->paginate($n);
	}

	public function getWithUserAndTagsForTagPaginate($tag, $n)
	{
		return $this->queryWithUserAndTags()
		->whereHas('tags', function($q) use ($tag)
		{
		  $q->where('tags.tag_url', $tag);
		})->paginate($n);
	}

	public function storePost($inputs,$url)
	{
        //dd($inputs);
        
        $data = [
            'image' => $url,
            'user_id' => $inputs['user_id'],
            'fr'  => ['titre' => $inputs['titre_fr'],'contenu' => $inputs['contenu_fr']],
            'en'  => ['titre' => $inputs['titre_en'],'contenu' => $inputs['contenu_en']],
            'es'  => ['titre' => $inputs['titre_es'],'contenu' => $inputs['contenu_es']],
            'pt'  => ['titre' => $inputs['titre_pt'],'contenu' => $inputs['contenu_pt']],
            'it'  => ['titre' => $inputs['titre_it'],'contenu' => $inputs['contenu_it']],
            'de'  => ['titre' => $inputs['titre_de'],'contenu' => $inputs['contenu_de']],
          ];
        
		return $this->post->create($data);
	}

	public function destroyPost($id)
	{
		$post = $this->post->findOrFail($id);
		$post->tags()->detach();
		$post->delete();
	}
    
    public function getById($id)
	{
		return $this->post->findOrFail($id);
	}

}