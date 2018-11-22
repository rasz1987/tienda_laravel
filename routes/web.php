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

Route::get('/', function () {
    return view('welcome');
});

Route::put  => Metodo para actualizar.
Route::post => Metodos para almacenar en la DB.
Route::delete => Metodo para eliminar.
*/

Route::get('products', function() {
    return view('products.index');
});

Route::get('products/create', function() {
    return view('products.create');
});



