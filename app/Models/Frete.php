<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome_cliente',
        'peso',
        'distancia',
        'tipo_frete',
        'valor_total',
    ];
}