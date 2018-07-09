<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route User
Route::get('/', function () {
    return view('index');
});
Route::get('shop','ShopController@index');

// Route Admin
Route::get('/admin', function () {
  return view('/admin/home');
});

Route::resource('product','ProductController');

Auth::routes();

Route::get('verify/{token}/{id}', 'Auth\RegisterController@verify_email');

// Route::get('/home', 'HomeController@index')->name('home');
