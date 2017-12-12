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

Route::get('/', function(){return view('home');});
Route::get('/index',function(){return view('index');})->name('index');

Route::get('{name?}','PageController@showView');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// qweqweqweqew
Route::get('portal', 'PortalController@posts')->name('post_portal');
Route::post('portal/crear-post', 'PostController@crearPost')->name('post_crear');
Route::get('portal/borrar-post/{id}', 'PostController@borrarPost')->name('borrar_post')->middleware('auth');;
