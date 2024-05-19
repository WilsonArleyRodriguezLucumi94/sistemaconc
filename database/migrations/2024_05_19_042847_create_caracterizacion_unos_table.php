<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('caracterizacion_unos', function (Blueprint $table) {
            $table->id();
            $table->string('sexo')->nullable();
            $table->unsignedInteger('edad_cumplida')->nullable();
            $table->string('sabe_leer_y_escribir')->nullable();
            $table->unsignedInteger('num_personas_dependen_jefe_familia')->nullable();
            $table->string('organizacion_pertenece')->nullable();
            $table->string('actividad_principal')->nullable();
            $table->string('ingreso_familiar_promedio_mensual')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracterizacion_unos');
    }
};
