<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_clientes extends Model
{
    protected $fillable = [
        'nombre',
        ];
    use HasFactory;
}
