<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\LibroPopular;

class LibroPopularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $librosPopulares = LibroPopular::all();

    return view('index', compact('librosPopulares'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          $libro = LibroPopular::create($request->all());
        return response()->json($libro, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
           return LibroPopular::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
        $libro = LibroPopular::findOrFail($id);
        $libro->update($request->all());
        return response()->json($libro);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         $libro = LibroPopular::findOrFail($id);
        $libro->delete();
        return response()->json(['message' => 'Libro eliminado']);
    }



}
