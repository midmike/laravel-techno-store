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
Route::get('/', function () {
	if (view()->exists('welcome')) {
   	return view('welcome');
	} 
	return 'view not exists';
    
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/product/{id}',function () {
	return view('single-product');
});
Route::get('/product',function () {
	return view('single-product');
});
Route::get('/category/{name}',function () {
	return view('category');
});
Route::get('/create','productController@create');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@validator');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//SERVICE
Route::get('/sliderService', function () {
	return App\Slider::paginate();
});
Route::get('/productService', function () {
	return App\product::paginate();
});
