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

Route::get('/', function () {
    return view('index');
});

// Route::get('/shop', function () {
//     return view('shop');
// });

<<<<<<< HEAD
Route::get('shop','ShopController@index');
Route::resource('product','ProductController');
=======
Route::get('shop','ProductController@index');

Route::get('/home', function () {
    return view('home');
});
>>>>>>> ac4152afe18fa7191db1530ef86f1049dff9e0da
