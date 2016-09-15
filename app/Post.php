<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    use Translatable;
    
    public $translatedAttributes = ['titre','contenu'];
    
    protected $fillable = ['image','user_id','titre','contenu'];
    
    
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations']; 
    
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
    
    public function tags()
    {

        return $this->belongsToMany('App\Tag');

    } 
}
