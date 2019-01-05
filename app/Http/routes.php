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

Route::get('/', 'UserController@index');
Route::post('/adduser','UserController@store');
// Route::get('/user','UserController@index');
Route::post('/del','UserController@destroy');
Route::post('/delcheck','UserController@delcheck');
Route::get('/user',function(){
	return view('addUser');
});
Route::post('/test/{idx}','UserController@testdoo');