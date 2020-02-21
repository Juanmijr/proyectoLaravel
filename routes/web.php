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
    return view('index');
});

Route::get('usuario/{id}',	'UsuarioController@verPerfil');
Route::get('producto/{id}',	'ProductoController@verProducto');
Route::get('componentes',	'ProductoController@verComponentes')->name('componentes');
Route::get('ordenadores',	'ProductoController@verOrdenadores');
Route::get('telefonia',	'ProductoController@verTelefonia');
Route::get('perifericos',	'ProductoController@verPerifericos');
Route::get('fotografia',	'ProductoController@verFotografia');
Route::get('televisores',	'ProductoController@verTelevisores');
Route::get('tablets',	'ProductoController@verTablets');
Route::get('consolas',	'ProductoController@verConsolas');
Route::get('impresoras',	'ProductoController@verImpresoras');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
