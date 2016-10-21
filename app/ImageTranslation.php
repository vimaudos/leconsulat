<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class ImageTranslation extends Eloquent
{
    public $timestamps = false;
    protected $fillable = ['legende_image'];
}
