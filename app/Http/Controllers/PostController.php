<?php 

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Http\Requests\PostRequest;

use App;

use App\Tag;

use Session;

class PostController extends Controller
{

    protected $postRepository;

    protected $nbrPerPage = 5;

    public function __construct(PostRepository $postRepository)
	{
		$this->middleware('auth', ['except' => ['indexTag']]);
		$this->middleware('admin', ['only' => 'destroy']);
        $this->middleware('locale');

		$this->postRepository = $postRepository;
	}
 
    /*
     *
     */
    
	public function index()
	{
               
		$posts = $this->postRepository->getWithUserAndTagsPaginate($this->nbrPerPage);
		$links = $posts->render();

		return view('posts.liste', compact('posts', 'links'));
	}
    
    /*
     *
     */
    
	public function create()
	{
        $tags = Tag::all();
		return view('posts.add',compact('tags'));
	}
    
    /*
     *
     */
    
	public function store(PostRequest $request, TagRepository $tagRepository)
	{
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);
        
        //dd($inputs);
        
        $image = $request->file('image');

		if($image->isValid())
		{
			$chemin = config('images.path');

			$extension = $image->getClientOriginalExtension();

			do {
				$nom = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom));
            
            $url = $chemin . '/' . $nom;
            
			if($image->move($chemin, $nom)) {
                
				$post = $this->postRepository->storePost($inputs,$url);
                
                if(isset($inputs['tags'])) 
                {
                    $tagRepository->store($post, $inputs['tags']);
                }

                return redirect(route('post.index'));
			}
		}

	}
    
    /*
     *
     */
    
    public function edit($id)
	{
        $posts = $this->postRepository->getById($id);
		$tags = Tag::all();

		return view('posts.edit', compact('posts', 'tags'));
	}
    
	public function destroy($id)
	{
		$this->postRepository->destroyPost($id);

		return redirect()->back();
	}

	public function indexTag($tag)
	{
		$posts = $this->postRepository->getWithUserAndTagsForTagPaginate($tag, $this->nbrPerPage);
		$links = $posts->render();

		return view('posts.liste', compact('posts', 'links'))
		->with('info', 'Résultats pour la recherche du mot-clé : ' . $tag);
	}

}