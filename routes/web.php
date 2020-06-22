<?php

use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/pedidos/total/', 'PedidosController@pedidosTotales')->name('pedidos.totales');
Route::get('/pedidos/actual/', 'PedidosController@pedidosActuales')->name('pedidos.actuales');

Route::get('/cadetes', 'CadetesController@index')->name('cadetes.index');

Route::get('/comercios', 'ComerciosController@index')->name('comercios.index');


Route::get('/', 'LandingController@index')->name('landing.index');













