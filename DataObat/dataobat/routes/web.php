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
    return view('welcome');
});

//Route::get('/login', 'LoginController@index');
Route::get('/sign', 'AuthController@sign');
Route::post('dashboard','AuthController@postsign');

Route::get('/dashboard', 'DashboardController@index');

Route::get('post', 'PostController@index');
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::get('post/edit/{p}', 'PostController@edit');
Route::delete('post','PostController@delete');
Route::patch('post/{p}', 'PostController@update');
Route::get('post/hapus/{id}', 'PostController@hapus');
//Route::post('post', 'PostController@obat');

Route::get('penghasilan', 'PenghasilanController@index');
Route::get('penghasilan/create', 'PenghasilanController@create');
Route::get('penghasilan/edit/{p}','PenghasilanController@edit');
Route::post('penghasilan', 'PenghasilanController@store');
//Route::delete('penghasilan','PenghasilanController@delete');
Route::patch('penghasilan/{hasil}', 'PenghasilanController@update');
Route::get('penghasilan/hapus/{id}', 'PenghasilanController@hapus');

Route::get('add-to-log', 'HomeController@myTestAddToLog');
Route::get('logActivity', 'HomeController@logActivity');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
