<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class SlideTranslation extends Eloquent
{
    public $timestamps = false;
    protected $fillable = ['titre'];
}
