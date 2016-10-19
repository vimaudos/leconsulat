<?php

namespace App\Repositories;

use App\Slide;

class SlideRepository extends ResourceRepository
{

    public function __construct(Slide $slide)
	{
		$this->model = $slide;
	}
    
     public function updateSlide($id,array $inputs,$url){
        
        $slide = Slide::where('id', $id) ->first();
        
        $slide->translate('fr')->titre = $inputs['titre_fr'];
        $slide->translate('en')->titre = $inputs['titre_en'];
        $slide->translate('es')->titre = $inputs['titre_es'];
        $slide->translate('pt')->titre = $inputs['titre_pt'];
        $slide->translate('it')->titre = $inputs['titre_it'];
        $slide->translate('de')->titre = $inputs['titre_de'];
         
        $slide->priorite = $inputs['priorite'];
        $slide->active = $inputs['active'];
                
        if($url != NULL){
            $slide->image = $url;    
        } 
                
        return $slide->save();
                
    }

}