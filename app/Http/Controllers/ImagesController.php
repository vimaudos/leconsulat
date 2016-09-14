<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ImagesController extends Controller{

  public function getForm($id)
  {
    $album = Album::find($id);
    return view('gallery.addimage')
    ->with('album',$album);
  }

  public function postAdd()
  {
    $rules = array(

      'album_id' => 'required|numeric|exists:albums,id',
      'image'=>'required|image'

    );
    
    $validator = Validator::make(Input::all(), $rules);
    if($validator->fails()){

      return Redirect::route('add_image',array('id' =>Input::get('album_id')))
      ->withErrors($validator)
      ->withInput();
    }

    $file = Input::file('image');
    $random_name = str_random(8);
    $destinationPath = 'albums/';
    $extension = $file->getClientOriginalExtension();
    $filename=$random_name.'_album_image.'.$extension;
    $uploadSuccess = Input::file('image')->move($destinationPath, $filename);
    Image::create(array(
      'description' => Input::get('description'),
      'image' => $filename,
      'album_id'=> Input::get('album_id')
    ));

    return redirect('show_album',array('id'=>Input::get('album_id')));
  }
  public function getDelete($id)
  {
    $image = Image::find($id);
    $image->delete();
    return redirect('show_album',array('id'=>$image->album_id));
  }
}