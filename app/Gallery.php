<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Gallery extends Eloquent
{
    protected $table = 'galleries';
    
    use Translatable;
    
    public $translatedAttributes = [];
    
    protected $fillable = ['nom_gallery'];
    
    
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations']; 
    
    public function gallery_translate() 
    {
        return $this->belongsToMany('App\GalleryTranslation');
    }
    
}
