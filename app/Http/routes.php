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