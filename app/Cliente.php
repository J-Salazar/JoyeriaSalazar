<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = [
        'nombre', 'apellido', 'correo', 'dni', 'telefono'
    ];
}
