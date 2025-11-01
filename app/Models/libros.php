<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    //
    use HasFactory;
    protected $table = 'libros';
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
