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

Route::get('/', 'InterfazController@get_landing_page');
Route::get('/agendar', 'AgendaController@create');
Route::get('/dashboard/agenda', 'AgendaController@index');
Route::post('/agendar/antiguo', 'AgendaController@store_old_client');
Route::post('/agendar/nuevo', 'AgendaController@store_new_client');

// RUTAS INSUMO 
Route::get('/dashboard/insumo', 'InsumoController@index');

// RUTAS CATEGORIA 
Route::get('/dashboard/categoria', 'CategoriaController@index');
Route::get('/pages/categoria', 'CategoriaController@index');
Route::post('/categoria/insertar', 'CategoriaController@store');

// RUTAS EMPLEADO
Route::get('/dashboard/empleado', 'EmpleadoController@index');
Route::get('/pages/empleado', 'EmpleadoController@index');
Route::post('/empleado/insertar', 'EmpleadoController@store');

