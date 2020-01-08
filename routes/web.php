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
Route::get('editClient/{id}', 'ClientesController@editClient')->name('cliente.editClient');
Route::post('updateClient/{id}', 'ClientesController@updateClient')->name('cliente.updateClient');
Route::delete('destroyClient/{id}', 'ClientesController@destroyClient')->name('cliente.destroyClient');

//routes Estado Vehiculo
Route::get('estadoVehiculo', 'VehiculoController@index')->name('estadoVehiculo.index');
Route::get('createStatus', 'VehiculoController@createStatus')->name('estadoVehiculo.createStatus');
Route::post('storeStatus', 'VehiculoController@storeStatus')->name('estadoVehiculo.storeStatus');
Route::get('editStatus/{id}', 'VehiculoController@editStatus')->name('estadoVehiculo.editStatus');
Route::post('updateStatus/{id}', 'VehiculoController@updateStatus')->name('estadoVehiculo.updateStatus');
Route::delete('destroyStatus/{id}', 'VehiculoController@destroyStatus')->name('estadoVehiculo.destroyStatus');

//routes tipos de vehiculos
Route::get('tipoVehiculo', 'VehiculoController@indexTipo')->name('tipoVehiculo.indexTipo');
Route::get('createType', 'VehiculoController@createType')->name('tipoVehiculo.createType');
Route::post('storeType', 'VehiculoController@storeType')->name('tipoVehiculo.storeType');
Route::get('editType/{id}', 'VehiculoController@editType')->name('tipoVehiculo.editType');
Route::post('updateType/{id}', 'VehiculoController@updateType')->name('tipoVehiculo.updateType');
Route::delete('destroyType/{id}', 'VehiculoController@destroyType')->name('tipoVehiculo.destroyType');

//routes vehículos
Route::get('vehiculo', 'VehiculoController@indexVehiculo')->name('vehiculo.indexVehiculo');
Route::get('createVehicle', 'VehiculoController@createVehicle')->name('vehiculo.indexVehicle');
Route::post('storeVehicle', 'VehiculoController@storeVehicle')->name('vehiculo.storeVehicle');
Route::get('editVehicle/{id}', 'VehiculoController@editVehicle')->name('vehiculo.editVehicle');
Route::post('updateVehicle/{id}', 'VehiculoController@updateVehicle')->name('vehiculo.updateVehicle');
Route::delete('destroyVehicle/{id}', 'VehiculoController@destroyVehicle')->name('vehiculo.destroyVehicle');

