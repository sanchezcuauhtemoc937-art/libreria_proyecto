<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
     use HasFactory;

    protected $fillable = [
        'cliente_id',
        'total',
        'status',
    ];

    // Relación con clientes
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
