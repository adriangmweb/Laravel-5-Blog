<?php


/*
 * Ruta principal /articulos/
*/
Route::get('/', [
        'as'    => 'listar_articulos',
        'uses'   => 'ArticulosControlador@index'
    ]);
    
/*
 * Ruta articulo /articulo/nombre-articulo
*/
Route::get('{/ruta}', [
        'as'    => 'ver_articulo',
        'uses'   => 'ArticulosControlador@show'
    ]);
    
/*
 * Formulario para añadir articulos /articulos/nuevo
*/
Route::get('/nuevo', [
        'as'    => 'ver_nuevo',
        'uses'   => 'ArticulosControlador@create'
    ]);
/**
 * Añadir articulo /articulos/
*/
Route::post('/', [
        'as'    => 'crear_nuevo',
        'uses'   => 'ArticulosControlador@store'
    ]);
/**
 * Ruta para editar /articulos/id/editar
*/
Route::get('/{id}/editar', [
        'as'    => 'ver_editar',
        'uses'   => 'ArticulosControlador@edit'
    ]);
/**
 * editar articulo
 */
Route::put('/{id}', [
        'as'    => 'edita_editar',
        'uses'   => 'ArticulosControlador@update'
    ]);
/**
 * Borra un articulo 
 */
Route::delete('/{id}', [
        'as'    => 'borrar_articulo',
        'uses'   => 'ArticulosControlador@destroy'
    ]);