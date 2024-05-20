<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracterizacionTres extends Model
{
    use HasFactory;

    protected $fillable = [
        'formas_trabajo',
        'tenencia_propiedad',
    ];
}
