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

Auth::routes();

Route::get('verify/{token}/{id}', 'Auth\RegisterController@verify_email');

// Route Admin
Route::get('/admin', function () {
  return view('/admin/home');
});

Route::get('admin/user', 'UserController@index');
// Route::get('/admin/product', function () {
//   return view('/admin/product');
// });
Route::get('/productoverview', function () {
  return view('/user/overviewProduct');
});

// Route::resource('/admin/product','ProductController');
Route::get('/admin/product','ProductController@index');
Route::post('/admin/product','ProductController@store');
// kalau mau ada 2 POST di satu halaman, perlu nambahin 2 jobs di controllernya https://stackoverflow.com/questions/32279329/handle-multiple-post-requests-to-same-url-laravel-5


//Route tambahan
Route::redirect('/home', '/');
