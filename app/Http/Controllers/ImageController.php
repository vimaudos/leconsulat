<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Image;
use App\Gallery;

class ImageController extends Controller
{
    protected $image;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->image = $imageRepository;
        $this->middleware('auth');
    }

    public function getUpload()
    {
        return view('gallery.pages.upload');
    }
    
    public function getUpload1()
    {
        $gallery = Gallery::find(1);
        return view('backoffice.galerie.album1', compact('gallery'));
    }
    
    public function getUpload2()
    {
        $gallery = Gallery::find(2);
        return view('backoffice.galerie.album2', compact('gallery'));
    }

    public function postUpload(Request $request)
    {
        $photo = Input::all();
        $response = $this->image->upload($photo,$request->all());
        return $response;

    }

    public function deleteUpload()
    {

        $filename = Input::get('id');

        if(!$filename)
        {
            return 0;
        }

        $response = $this->image->delete( $filename );

        return $response;
    }

    /**
     * Part 2 - Display already uploaded images in Dropzone
     */

    public function getServerImagesPage()
    {
        return view('gallery.pages.upload-2');
    }

    public function getServerImages()
    {
        $images = Image::get(['original_name', 'filename']);

        $imageAnswer = [];

        foreach ($images as $image) {
            $imageAnswer[] = [
                'original' => $image->original_name,
                'server' => $image->filename,
                'size' => File::size(public_path('images/full_size/' . $image->filename))
            ];
        }

        return response()->json([
            'images' => $imageAnswer
        ]);
    }
}