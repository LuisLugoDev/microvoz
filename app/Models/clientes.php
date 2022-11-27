<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
    'nombre',
    'apellido',
    'email',
    'organizacion',
    'numero_telefonico',
    'id_tipo_cliente',
    'descripcion_tipo_cliente'
    ];

    use HasFactory;
}
