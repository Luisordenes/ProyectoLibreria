<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/layouts/master');
});

Route::get('/libro/agregar', 'LibrosController@agregarLibro');
Route::post('/libro/grabar', 'LibrosController@grabarLibro');
Route::get('/libro/listar', 'LibrosController@listarLibros');
Route::get('/libro/ultimos', 'LibrosController@listarUltimosLibros');
Route::get('/libro/consultar/{dato}', 'LibrosController@consultarLibro');
Route::get('/libro/editar/{id}', 'LibrosController@editarLibro');
Route::post('/libro/regrabar/{id}', 'LibrosController@regrabarLibro');
Route::get('/libro/mensaje/{id}', 'LibrosController@mensajeLibro');
Route::get('/libro/eliminar/{id}', 'LibrosController@eliminarLibro');
Route::get('/libro/stock/{id}', 'LibrosController@stockLibro');

Route::get('/categoria/agregar', 'CategoriasController@agregarCategoria');
Route::post('/categoria/grabar', 'CategoriasController@grabarCategoria');
Route::get('/categoria/listar', 'CategoriasController@listarCategoria');
Route::get('/categoria/editar/{id}', 'CategoriasController@editarCategoria');
Route::post('/categoria/regrabar/{id}', 'CategoriasController@regrabarCategoria');
Route::get('/categoria/mensaje/{id}', 'CategoriasController@mensajeCategoria');
Route::get('/categoria/eliminar/{id}', 'CategoriasController@eliminarCategoria');
Route::get('/categoria/stock/{id}', 'CategoriasController@stockCategoria');

Route::get('/stock/agregar/{id}', 'StockController@agregarStock');
Route::post('/stock/grabar/{id}', 'StockController@grabarStock');
Route::get('/stock/listar/{id}', 'StockController@listarStock');
Route::get('/stock/editar', 'StockController@editarStock');
Route::get('/stock/editando/{id}', 'StockController@editandoStock');
Route::post('/stock/regrabar/{id}', 'StockController@regrabarStock');
Route::get('/stock/mensaje/{id}', 'StockController@mensajeStock');
Route::get('/stock/eliminar/{id}', 'StockController@eliminarStock');

Route::get('/estante/agregar', 'EstanteController@agregarEstante');
Route::post('/estante/grabar', 'EstanteController@grabarEstante');
Route::get('/estante/listar', 'EstanteController@listarEstante');
Route::get('/estante/editar/{id}', 'EstanteController@editarEstante');
Route::post('/estante/regrabar/{id}', 'EstanteController@regrabarEstante');
Route::get('/estante/mensaje/{id}', 'EstanteController@mensajeEstante');
Route::get('/estante/eliminar/{id}', 'EstanteController@eliminarEstante');
Route::get('/estante/stock/{id}', 'EstanteController@stockEstante');

Route::get('/miniatura/{filename}', 'LibrosController@getImagen');
