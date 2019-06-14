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
    return view('layouts.main');
});

Route::get('/dash', function () {
    return view('layouts.dash');
});


Route::get('/form', function () {
    return view('layouts.content');
});

/*
    RUTAS PARA EL CRUD AGENDA
    @get -> para obtener/solcitar la URL
    @post -> para enviar datos con un formulario
    
    Cada ruta aputa a un metodo distinto de AgendaController
*/
Route::get('/form', 'AgendaController@create');
Route::post('/', 'AgendaController@store');
Route::get('/dash/agenda', 'AgendaController@index');
