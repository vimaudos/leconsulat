<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class PostTranslation extends Eloquent
{
    public $timestamps = false;
    protected $fillable = ['titre','contenu'];
}
