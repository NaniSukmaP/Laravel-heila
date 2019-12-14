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

/*Route::get('/siswa', 'SiswaController@index');
 Route::get('/siswa/create', 'SiswaController@create');
 Route::post('/siswa', 'SiswaController@store');
 Route::get('/siswa/{siswas}', 'SiswaController@show');
 Route::get('/siswa/{siswas}/edit', 'SiswaController@edit');
 Route::patch('/siswa/{siswas}', 'SiswaController@update');
 Route::delete('/siswa/{siswas}', 'SiswaController@destroy');
 */

Route::get('/home','HeilaController@home');
Route::get('/product','HeilaController@product');
Route::get('/contact','HeilaController@contact');
Route::get('/order','HeilaController@order');
Route::post('/order','OrdController@store');
Route::get('/create','OrdController@create');
