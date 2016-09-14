<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
});*/

Route::get('/', array(
    'as' => 'index',
    'uses' => 'AlbumsController@getList'
));
=======
});
>>>>>>> parent of 77489f8... Test Gallerie Photo 1


Route::resource('user', 'UserController');

Route::auth();

<<<<<<< HEAD
Route::get('/addimage/{id}', array(
    'as' => 'add_image',
    'uses' => 'ImagesController@getForm'
));
Route::post('/addimage', array(
    'as' => 'add_image_to_album',
    'uses' => 'ImagesController@postAdd'
));
Route::get('/deleteimage/{id}', array(
    'as' => 'delete_image',
    'uses' => 'ImagesController@getDelete'
));
=======
});
>>>>>>> parent of 234f3a6... Auth + Table Users
=======
});
>>>>>>> parent of 234f3a6... Auth + Table Users
=======
Route::get('/home', 'HomeController@index');
>>>>>>> parent of 77489f8... Test Gallerie Photo 1
