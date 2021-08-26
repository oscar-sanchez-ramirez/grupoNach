<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $table = 'steps';

    protected $fillable = [
        'autor', 'imagenTitulo', 'imagenUsuario', 'descripcion',
        'descripcionLarga', 'meGusta', 'comentario', 'vistas'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
