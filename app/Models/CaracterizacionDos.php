<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracterizacionDos extends Model
{
    use HasFactory;

    protected $fillable = [
        'unidad_productiva',
        'epoca_siembra',
        'que_son_cabanuelas',
        'tipos_cabanuelas',
        'cabanuelas_grandes',
        'cabanuelas_chiquitas',
        'festividad_lluvias',
    ];
}
