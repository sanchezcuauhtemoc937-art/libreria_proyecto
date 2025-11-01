<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libros;

class productoscontroller extends Controller
{
    //
    public function productos()
    {
// Obtener todos los libros desde la base de datos
        $libros = libros::all();
        return view('productos', compact('libros'));
    }
}
