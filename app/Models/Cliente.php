<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
   
    protected $table = 'clientes';
    protected $primaryKey = 'cliente_id';

    protected $fillable = [
        'nombre',
        'email',
        'password_hash',
        'telefono',
        'direccion',
    ];

    public $timestamps = true;


}
