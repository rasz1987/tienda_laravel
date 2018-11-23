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
use Illuminate\Http\Request;
//Importamos la clase del modelo para guardar
use App\Product;

Route::get('products', function() {
    $products = Product::all();
    return view('products.index', compact('products'));
})->name('products.index');

Route::get('products/create', function() {
    return view('products.create');
})->name('products.create');

Route::post('products', function(Request $request) {
    $newProduct              = new Product;
    $newProduct->description = $request->input('description');
    $newProduct->price       = $request->input('price');
    $newProduct->save();
    return redirect()->route('products.index')->with('success', 'Product created');
})->name('products.store');



