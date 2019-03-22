<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', 'ProductsController@index');

Route::post('/stores', 'StoresController@create');

// banner
Route::post('/api/banners', 'BannersController@store')->middleware('admin');
