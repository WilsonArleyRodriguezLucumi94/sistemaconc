<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracterizacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_caracterizacion',
        'observacion_caracterizacion',
    ];

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }
}
