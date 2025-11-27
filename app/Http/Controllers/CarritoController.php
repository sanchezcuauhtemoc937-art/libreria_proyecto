<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libros;
use App\Models\Cliente;
use App\Models\LibroReciente;
use Stripe\Stripe;;
use Stripe\Charge;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class CarritoController extends Controller
{
    // Agregar producto al carrito
    public function agregar($id)
{
    $producto = libros::findOrFail($id);
    $carrito = Session::get('carrito', []);
    $carrito[$id] = [
        'nombre' => $producto->nombre,
        'precio' => $producto->precio,
        'cantidad' => isset($carrito[$id]) ? $carrito[$id]['cantidad'] + 1 : 1,
    ];
    Session::put('carrito', $carrito);
    return redirect()->route('carrito.ver', $id);
}

public function ver()
{
    $carrito = Session::get('carrito', []);
    return view('carrito', compact('carrito'));
}


public function eliminar($id)
{
    $carrito = Session::get('carrito', []);
    if (isset($carrito[$id])) {
        unset($carrito[$id]);
        Session::put('carrito', $carrito);
    }
    return redirect()->route('carrito.ver', $id);
    
}
}
