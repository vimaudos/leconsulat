<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Image extends Eloquent
{
    use Translatable;
    
    public $translatedAttributes = ['legende_image'];
    
    protected $fillable = ['gallery_id','original_name','filenames','legende_image'];
    
    
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations']; 
    
    public static $rules = [
        'file' => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ];

    public static $messages = [
        'file.mimes' => 'Uploaded file is not in image format',
        'file.required' => 'Image is required'
    ];
    
}