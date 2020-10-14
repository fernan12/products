<?php

use Illuminate\Support\Facades\Route;





//Route::get('/',function(){
//	return view('welcome');
//});

//Route::get('/login','AuthController@index')->name('login');
//Route::post('/login', 'AuthController@login');
//Route::get('/dashboard','DashboardController@index');



Route::get('/','ProductsController@index');
Route::get('/products/create','ProductsController@create');
Route::get('/products/{product}','ProductsController@show');


Route::get('/products/{product}/edit','ProductsController@edit');


Route::post('/products','ProductsController@store');

Route::put('/products/{product}','ProductsController@update');

Route::delete('/products/{product}','ProductsController@destroy');