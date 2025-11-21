<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoscontroller;
use App\Http\Controllers\ClienteController;
use App\Models\libros;
use App\Models\Cliente;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ProductoController;
use App\Models\LibroReciente;
use App\Http\Controllers\LibroRecienteController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CheckoutController;
use Stripe\Stripe;;
use Stripe\Charge;

// dos parametros: la ruta y el controlador con su metodo
Route::get('/productos', [productoscontroller::class, 'productos'])->name('productos');

Route::get('/', [LibroRecienteController::class, 'index'])->name('librosRecientes');   

Route::get('/clientes', [ClienteController::class, 'create'])->name('clientes');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');



Route::get('/carrito', [CarritoController::class, 'ver'])->name('carrito.ver');
Route::get('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('/carrito/total/{id}', [CarritoController::class, 'total'])->name('carrito.total');
Route::get('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');

Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
