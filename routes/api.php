<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LibroPopularController;
use Illuminate\Http\Request;

// ruta simple de prueba


Route::apiResource('productos', ProductoController::class);
Route::get('/productos/{id}', [ProductoController::class, 'show']);
Route::put('/productos/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);


Route::apiResource('libros-populares', LibroPopularController::class);
Route::get('/libros-populares/{id}', [LibroPopularController::class, 'show']);
Route::put('/libros-populares/{id}', [LibroPopularController::class, 'update']);
Route::delete('/libros-populares/{id}', [LibroPopularController::class, 'destroy']);        
