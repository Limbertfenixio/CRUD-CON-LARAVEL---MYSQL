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

//Creamos una ruta con variables y variables opcionales 
Route::get('/nombre{name}/apellido{apellido?}', function($name, $apellido){
    return 'Hola soy '. $name . ' ' . $apellido;
});

// Creamos una ruta por http por el metodo get tambien existen los metodos put y delete
Route::get('/mi_ruta', function(){
    return 'Hola mundo';
});

// Creamos la ruta para el controlador de AlumnosController
Route::resource('alumnos','AlumnosController');