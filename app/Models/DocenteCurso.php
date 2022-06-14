<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocenteCurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad_alumnos',
        'docente_id',
        'curso_id',
    ];
}
