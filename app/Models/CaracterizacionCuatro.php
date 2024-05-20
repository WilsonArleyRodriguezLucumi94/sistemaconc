<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracterizacionCuatro extends Model
{
    use HasFactory;

    protected $table = 'caracterizacion_cuatro';

    protected $fillable = [
        'formas_trabajo',
        'tenencia_propiedad',
        'areas_para_sembrar',
        'cantidad_jornales',
        'tipo_fertilizacion',
        'donde_vende',
        'otro_donde_vende',
    ];
}
