<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Album;
use Validator;


class AlbumsController extends Controller{

  public function getList()
  {
    $albums = Album::with('Photos')->get();
    return view('gallery.index')
    ->with('albums',$albums);
  }
  public function getAlbum($id)
  {
    $album = Album::with('Photos')->find($id);
    return view('gallery.album')
    ->with('album',$album);
  }
  public function getForm()
  {
    return view('gallery.createalbum');
  }
  public function postCreate()
  {
    $rules = array(

      'name' => 'required',
      'cover_image'=>'required|image'

    );
    
    $validator = Validator::make(all(), $rules);
    if($validator->fails()){

      return redirect('create_album_form')
      ->withErrors($validator)
      ->withInput();
    }

    $file = file('cover_image');
    $random_name = str_random(8);
    $destinationPath = 'albums/';
    $extension = $file->getClientOriginalExtension();
    $filename=$random_name.'_cover.'.$extension;
    $uploadSuccess = Input::file('cover_image')
    ->move($destinationPath, $filename);
    $album = Album::create(array(
      'name' => get('name'),
      'description' => get('description'),
      'cover_image' => $filename,
    ));

    return redirect('show_album',array('id'=>$album->id));
  }

  public function getDelete($id)
  {
    $album = Album::find($id);

    $album->delete();

    return redirect('index');
  }
}