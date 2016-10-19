<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Slide extends Eloquent
{
    use Translatable;
    
    public $translatedAttributes = ['titre'];
    
    protected $fillable = ['image','titre'];
    
    
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations']; 
}

