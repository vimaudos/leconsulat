<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Tag extends Eloquent
{
    use Translatable;
    
    public $translatedAttributes = ['tag'];
    
    protected $fillable = ['tag','tag_url'];
    
    
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations']; 
    
    public function posts()
	{
		return $this->belongsToMany('App\Post');
	} 
    
}
