<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\LibroReciente;

class LibroRecienteController extends Controller
{
    //
     // $librosRecientes = LibroReciente::all();
        //return view('index', compact('librosRecientes'));
        // aqui tube un error por no mandar la variable a la vista por que yo pense 
        // que en compact tenia que poner el nombre de la tabla base de datos 
        //  y no de la variable
 // $librosRecientes = LibroReciente::all();
        //return view('index', compact('librosRecientes'));
        // aqui tube un error por no mandar la variable a la vista por que yo pense 
        // que en compact tenia que poner el nombre de la tabla base de datos 
        //  y no de la variable

   public function index(Request $request)
{
    $categoria = $request->input('categoria');

    if ($categoria) {
        $librosRecientes = LibroReciente::where('categoria', $categoria)->get();
    } else {
        $librosRecientes = LibroReciente::all();
    }

    return view('index', compact('librosRecientes', 'categoria'));
}


}
