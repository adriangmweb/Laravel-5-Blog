<?php

// Rutas GET
Route::get('/', 'WelcomeController@index');


Route::group(['prefix' => 'articulos'], function() {
    
    require dirname(__FILE__).'/Router/Articulos.php';
    
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);