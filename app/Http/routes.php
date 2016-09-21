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
Route::get('/', function () {
    return view('welcome');
});


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