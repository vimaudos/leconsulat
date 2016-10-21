<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Gallery extends Eloquent
{
    use Translatable;
    
    public $translatedAttributes = [];
    
    protected $fillable = ['nom_gallery'];
    
    protected $table = 'galleries';
    
    
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations']; 
    
}
