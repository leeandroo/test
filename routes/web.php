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

