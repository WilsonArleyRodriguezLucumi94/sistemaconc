<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracterizacionUno extends Model
{
    use HasFactory;

    protected $fillable = [
        'sexo',
        'edad_cumplida',
        'sabe_leer_y_escribir',
        'num_personas_dependen_jefe_familia',
        'organizacion_pertenece',
        'actividad_principal',
        'ingreso_familiar_promedio_mensual'
    ];
}
