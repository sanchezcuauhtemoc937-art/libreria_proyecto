<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoscontroller;
use App\Models\libros;

Route::get('/', function () {
    return view('index');
});
// dos parametros: la ruta y el controlador con su metodo
Route::get('/productos', [productoscontroller::class, 'productos'])->name('productos');



