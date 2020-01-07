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
Route::resource('/estado', 'EstadoController');
Route::get('/create', 'EstadoController@create')->name('estado.create');
Route::post('store', 'EstadoController@store')->name("estado.store");