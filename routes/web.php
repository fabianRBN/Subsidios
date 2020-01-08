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
//routes Estado_cliente
Route::get('estado', 'EstadoClienteController@index')->name('estado.index');
Route::get('/create', 'EstadoClienteController@create')->name('estado.create');
Route::post('store', 'EstadoClienteController@store')->name('estado.store');
Route::post('update/{id}', 'EstadoClienteController@updateEstadoCliente')->name('estado.update');
Route::get('edit/{id}', 'EstadoClienteController@edit')->name('estado.edit');
Route::delete('destroy/{id}', 'EstadoClienteController@destroy')->name('estado.destroy');       

//routes Cliente
Route::get('/cliente', 'ClientesController@index')->name('cliente.index');
Route::get('/createClient', 'ClientesController@createClientView')->name('cliente.create');
Route::post('storeClient', 'ClientesController@storeClient')->name('cliente.storeClient');