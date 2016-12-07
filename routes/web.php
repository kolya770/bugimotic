<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'LandingController@index');
Route::get('/contacts', 'LandingController@contacts');
Route::get('/categories-article', 'LandingController@categoriesArticle');
Route::get('/categories', 'LandingController@categories');