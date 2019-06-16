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
Route::post('/agendar', 'AgendaController@store');

// RUTAS INSUMO 
Route::get('/dashboard/insumo', 'InsumoController@index');

// RUTAS CATEGORIA 
Route::get('/dashboard/categoria', 'CategoriaController@index');
Route::get('/pages/categoria', 'CategoriaController@index');
Route::post('/categoria/insertar', 'CategoriaController@store');


