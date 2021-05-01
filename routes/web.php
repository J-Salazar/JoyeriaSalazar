<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos', 'ProductoController@index')->name('productos');

Route::get('/clientes', 'ClienteController@index')->name('clientes');

Route::get('/registrarcliente', 'ClienteController@registrar')->name('registrarcliente');
Route::post('/registrocliente', 'ClienteController@registro')->name('registro');

Route::get('/inventario', 'ProductoController@inventario')->name('inventario');

Route::get('/agregar', 'ProductoController@agregar')->name('nuevoproducto');
Route::post('/guardarproducto', 'ProductoController@store')->name('agregarproducto');

Route::get('/editarproducto/{productoid}','ProductoController@editar');
Route::post('/editar/{productoid}','ProductoController@edit');
