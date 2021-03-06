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

// Route::get('/', function () {
//     return view('welcome');
// });
// 
Route::get('/', 'ProductController@index');
Route::post('/save_product', 'ProductController@saveProduct');
Route::get('/products', 'ProductController@getProducts');

Route::resource('/icusers', 'ICUserController');
Route::get('/manage', 'ICUserController@manage');
