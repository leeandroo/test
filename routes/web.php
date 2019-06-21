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
Route::get('/login', 'InterfazController@get_login_page');
Route::get('/register', 'InterfazController@get_register_page');
Route::get('/profile', 'InterfazController@get_profile_page');
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/dashboard/agenda', 'AgendaController@index');
Route::post('/solicitar', 'AgendaController@store');


// RUTAS INSUMO 
Route::get('/dashboard/insumo', 'InsumoController@index');
Route::get('/pages/insumo', 'InsumoController@index');
Route::get('/insumo/create', 'InsumoController@create');
Route::post('/insumo/insertar', 'InsumoController@store');

Route::get('/insumo/{insumo}/editar', 'InsumoController@edit');
Route::put('/insumo/{insumo}', 'InsumoController@update');
Route::delete('/insumo/{insumo}', 'InsumoController@destroy');

// RUTAS CATEGORIA 
Route::get('/dashboard/categoria', 'CategoriaController@index');
Route::get('/pages/categoria', 'CategoriaController@index');
Route::post('/categoria/insertar', 'CategoriaController@store');
Route::get('/categoria/{categoria}/editar', 'CategoriaController@edit');
Route::put('/categoria/{categoria}', 'CategoriaController@update');
Route::delete('/categoria/{categoria}', 'CategoriaController@destroy');




// RUTAS EMPLEADO
Route::get('/dashboard/empleado', 'EmpleadoController@index');
Route::get('/pages/empleado', 'EmpleadoController@index');
Route::post('/empleado/insertar', 'EmpleadoController@store');
Route::get('/dashboard/empleado/{id}/index/edit','EmpleadoController@edit');
