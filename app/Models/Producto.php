<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Producto extends Model
{
    //
  protected $fillable = [
        'producto_id',
        'producto_type',
        'visible',
        'destacado',
    ];

    // Relación polimórfica
    public function producto(): MorphTo
    {
        return $this->morphTo();
    }

}
