<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Clientes API
Route::get('clientes','ClientesController@getAll')->name('getAllClientes');

Route::get('clientes/{id}','ClientesController@get')->name('getClientes');

Route::post('clientes','ClientesController@add')->name('addClientes');

Route::post('clientes/{id}','ClientesController@edit')->name('editClientes');

Route::get('clientefind/{id}','ClientesController@findByElement')->name('findByElementClientes');


// Sucursales API

Route::get('sucursal','SucursalController@getAll')->name('getAllSucursal');

Route::get('sucursal/{id}','SucursalController@get')->name('getSucursal');

Route::post('sucursal','SucursalController@add')->name('addSucursal');

Route::post('sucursal/{id}','SucursalController@edit')->name('editSucursal');

// Vehiculos

Route::get('vehiculo','VehiculoController@getAll')->name('getAllVehiculo');

Route::get('vehiculo/{id}','VehiculoController@get')->name('getVehiculo');

Route::post('vehiculo','VehiculoController@add')->name('addVehiculo');

Route::post('vehiculo/{id}','VehiculoController@edit')->name('editVehiculo');

// Transacciones
Route::get('transaccion','TransaccionController@getAll')->name('getAllTransaccion');

Route::get('transaccion/{id}','TransaccionController@get')->name('getTransaccion');

Route::post('transaccion','TransaccionController@add')->name('addTransaccion');

Route::post('transaccion/{id}','TransaccionController@edit')->name('editTransaccion');
