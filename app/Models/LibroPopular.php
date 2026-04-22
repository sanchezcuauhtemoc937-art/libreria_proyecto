<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class LibroPopular extends Model
{

    //
   protected $table = 'libros_populares';
    protected $fillable = [
        'titulo',
        'isbn',
        'precio',
        'stock',
        'editorial',
        'fecha_publicacion',
        'descripcion',
        'portada_url',
        'resena',
        'categoria',
    ];
     public function producto()
{
    return $this->morphOne(Producto::class, 'producto');
}

}
