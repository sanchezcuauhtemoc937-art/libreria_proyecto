<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class LibroReciente extends Model
{
    //
     
    protected $table = 'libro_recientes';
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

}
