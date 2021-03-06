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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes', 'ClienteController@index');
Route::get('/clientes/novo', 'ClienteController@novo');
Route::post('/clientes/salvar', 'ClienteController@salvar');
Route::get('/clientes/{cliente}/editar', 'ClienteController@editar');
Route::patch('/clientes/{cliente}', 'ClienteController@atualizar');
Route::delete('/clientes/{cliente}', 'ClienteController@delete');

