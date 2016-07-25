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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('/services', ['as' => 'services', 'uses' => 'HomeController@services']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
Route::get('/feedback', ['as' => 'feedback', 'uses' => 'HomeController@feedback']);
Route::get('/legals', ['as' => 'legals', 'uses' => 'HomeController@legals']);
Route::get('/feedback', ['as' => 'feedback', 'uses' => 'HomeController@feedback']);
Route::get('/blog', ['as' => 'blog', 'uses' => 'HomeController@blog']);
Route::get('/clients/login', ['as' => 'clients-login', 'uses' => 'HomeController@login']);