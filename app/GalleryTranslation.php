<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class GalleryTranslation extends Eloquent
{
    public $timestamps = false;
    protected $fillable = ['nom_gallery'];
    
    public function gallery_translate() 
    {
        return $this->belongsTo('App\Gallery');
    }
}
