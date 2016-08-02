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

Route::auth();

Route::group(['prefix' => '_admin', 'as' => 'admin.', 'middleware' => 'auth.admin' ] , function () {

	Route::get('/', ['as' => 'home', 'uses' => 'AdminController@home']);
	Route::get('/clear-cache', ['as' => 'clear-cache', 'uses' => 'AdminController@cache']);

	Route::group(['prefix' => 'blog', 'as' => 'blog.'] , function() {
		Route::get('index', ['as' => 'index', 'uses' => 'ResourcesController@index']);
		Route::get('create', ['as' => 'create', 'uses' => 'ResourcesController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'ResourcesController@store']);
		Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'ResourcesController@edit']);
		Route::get('{id}/view', ['as' => 'view', 'uses' => 'ResourcesController@view']);
		Route::post('{id}/update', ['as' => 'update', 'uses' => 'ResourcesController@update']);
		Route::get('{id}/delete', ['as' => 'delete', 'uses' => 'ResourcesController@destroy']);
	});

	Route::get('/upload/{id?}', ['as' => 'upload', 'uses' => 'UploadController@upload']);
	Route::post('/upload', ['as' => 'save-upload', 'uses' => 'UploadController@postUpload']);
	Route::get('/upload/delete/{id?}', ['as' => 'upload.delete', 'uses' => 'UploadController@destroy']);

});


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/image.png', ['as' => 'image', 'uses' => 'ImageController@index']);
Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('/services', ['as' => 'services', 'uses' => 'HomeController@services']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
Route::get('/feedback', ['as' => 'feedback', 'uses' => 'HomeController@feedback']);
Route::get('/legals', ['as' => 'legals', 'uses' => 'HomeController@legals']);
Route::get('/feedback', ['as' => 'feedback', 'uses' => 'HomeController@feedback']);
Route::post('/feedback', ['as' => 'send-feedback', 'uses' => 'HomeController@sendFeedback']);
Route::get('/blog', ['as' => 'blog', 'uses' => 'BlogController@index']);
Route::get('/blog/{article}', ['as' => 'blog.post', 'uses' => 'BlogController@article']);
Route::get('/clients/login', ['as' => 'clients-login', 'uses' => 'HomeController@login']);
Route::post('/subscribe', ['as' => 'subscribe', 'uses' => 'HomeController@subscribe']);
Route::get('/sitemap.xml', ['as' => 'sitemap', 'uses' => 'HomeController@sitemap']);