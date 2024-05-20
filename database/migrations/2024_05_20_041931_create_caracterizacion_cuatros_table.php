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
        Schema::create('caracterizacion_cuatros', function (Blueprint $table) {
            $table->id();
            $table->string('formas_trabajo');
            $table->string('tenencia_propiedad');
            $table->string('areas_para_sembrar');
            $table->integer('cantidad_jornales');
            $table->string('tipo_fertilizacion');
            $table->string('donde_vende');
            $table->string('otro_donde_vende')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracterizacion_cuatros');
    }
};
