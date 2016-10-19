<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\SlideRepository;

use App\Http\Requests;

class SlideController extends Controller
{
    
    protected $slideRepository;

    protected $nbrPerPage = 10;

    
    public function __construct(SlideRepository $slideRepository)
	{
		$this->middleware('auth');
		$this->middleware('admin');
        $this->middleware('locale');

		$this->slideRepository = $slideRepository;
	}
 
    /*
     *
     */
    
	public function index()
	{
        
        $slides = $this->slideRepository->getPaginate($this->nbrPerPage);
		$links = $slides->render();

		return view('slides.liste', compact('slides', 'links'));
	}
    
    /*
     *
     */
    
    public function show($id)
    {
        
        $slide = $this->slideRepository->getById($id);

		return view('slides.show',  compact('slide'));
    }
    
    /*
     *
     */
    
    public function destroy($id)
	{
		$this->slideRepository->destroy($id);

		return redirect()->back();
	}
    
    
    
    public function edit($id)
	{
		$slide = $this->slideRepository->getById($id);
        //dd($slide);

		return view('slides.edit',  compact('slide'));
	}
    
    public function update(Request $request, $id)
    {
            
        $this->setActive($request);
        
        
        if  ($request->hasFile('image')){
                    
            $image = $request->file('image');

            if($image->isValid())
            {
                $chemin = config('images.slide');

                $extension = $image->getClientOriginalExtension();

                do {
                    $nom = str_random(10) . '.' . $extension;
                } while(file_exists($chemin . '/' . $nom));

                $url = $chemin . '/' . $nom;

                if($image->move($chemin, $nom)) {
                    $this->slideRepository->updateSlide($id,$request->all(),$url);
                    return redirect('slide');
                }

                return redirect('slide')
                 ->with('error','Désolé mais votre image ne peut pas être envoyée !');

            }

        } else {

                $url = NULL;

                $this->slideRepository->updateSlide($id,$request->all(),$url);
                       return redirect('slide');

        }
    }
    
    private function setActive($request)
	{
		if(!$request->has('active'))
		{
			$request->merge(['active' => 0]);
		}         
	}
}
