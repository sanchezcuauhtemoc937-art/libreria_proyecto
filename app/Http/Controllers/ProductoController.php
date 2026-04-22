<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\libros;
use App\Models\LibroReciente;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
           return Producto::with('productos')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'tipo' => 'required|string', // libro o reciente
            'id'   => 'required|integer'
        ]);

        $modelo = $request->tipo === 'libro'
            ? libros::class
            : LibroReciente::class;

        return Producto::create([
            'producto_id' => $request->id,
            'producto_type' => $modelo,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         return Producto::with('producto')->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         $producto = Producto::findOrFail($id);
        $producto->delete();

        return response()->json(['message' => 'Producto eliminado']);
    }
}
