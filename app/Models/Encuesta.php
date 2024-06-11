<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'numero_encuesta',
        'nombres_apellidos',
        'vereda',
        'municipio',
        'departamento',
        'responsable',
        'email',
    ];
}
