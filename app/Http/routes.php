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


/*
 * Site Le Consulat
 */


Route::get('/', [
    'as' => 'site.index',
    'uses' => 'SiteController@index'
]);

Route::get('/galerie', [
    'as' => 'site.galerie',
    'uses' => 'SiteController@galerie'
]);

Route::get('/reservation', [
    'as' => 'site.reservation',
    'uses' => 'SiteController@reservation'
]);

Route::get('/concept', [
    'as' => 'site.concept',
    'uses' => 'SiteController@concept'
]);

Route::get('/services', [
    'as' => 'site.services',
    'uses' => 'SiteController@services'
]);

Route::get('/evenements', [
    'as' => 'site.evenements',
    'uses' => 'SiteController@evenements'
]);

Route::get('/faq', [
    'as' => 'site.faq',
    'uses' => 'SiteController@faq'
]);

Route::get('/mentions-legales', [
    'as' => 'site.mentions-legales',
    'uses' => 'SiteController@mentionsLegales'
]);

Route::get('/plan-du-site', [
    'as' => 'site.plan-du-site',
    'uses' => 'SiteController@planSite'
]);


/*
 * Backoffice
 */

Route::auth();
Route::resource('user', 'UserController');
Route::get('/home', 'HomeController@index');
Route::resource('post', 'PostController');
Route::get('post/tag/{tag}', 'PostController@indexTag');
Route::resource('slide', 'SlideController');

/*
 * Langue
 */
Route::get('langue/{langue}', 'LangueController@index');



/*
 * Galerie
 */
Route::get('gallery/', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
Route::get('/gallery/album1', ['as' => 'upload', 'uses' => 'ImageController@getUpload1']);
Route::get('/gallery/album2', ['as' => 'upload', 'uses' => 'ImageController@getUpload2']);


Route::post('gallery/upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('gallery/upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);

/**
 * Part 2 - Display already uploaded images in Dropzone
 */
Route::get('gallery/example-2', ['as' => 'upload-2', 'uses' => 'ImageController@getServerImagesPage']);
Route::get('gallery/server-images', ['as' => 'server-images', 'uses' => 'ImageController@getServerImages']);