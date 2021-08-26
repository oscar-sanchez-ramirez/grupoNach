<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;

    protected $table = 'listas';

    protected $fillable = ['servicio', 'descripcion'];

    protected $hidden = ['created_at', 'updated_at'];
}
