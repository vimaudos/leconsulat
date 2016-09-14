<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {
  
  protected $table = 'images';
  
  protected $fillable = array('album_id','description','image');
  
}