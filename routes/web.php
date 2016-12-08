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

//UploadImage
Route::post('admin/ajaximage',  'Api\ImageController@uploadImage');
Route::post('admin/ajaximage2', 'Api\ImageController@dropzoneUploadImages');

Auth::routes();

Route::get('/dashboard', 'Admin\AdminController@index');
Route::resource('dashboard/blog', 'Admin\BlogController');
Route::resource('dashboard/footer', 'Admin\FooterController');
Route::resource('dashboard/contact', 'Admin\ContactController');