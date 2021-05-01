<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //

    protected $fillable = [
        'materiales', 'peso', 'precio', 'tipo', 'direccion', 'codigo', 'stock'
    ];
}
