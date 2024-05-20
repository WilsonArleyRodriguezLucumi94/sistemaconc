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
        Schema::create('caracterizacion_dos', function (Blueprint $table) {
            $table->id();
            $table->string('unidad_productiva');
            $table->string('epoca_siembra');
            $table->text('que_son_cabanuelas')->nullable();
            $table->string('tipos_cabanuelas')->nullable();
            $table->string('cabanuelas_grandes')->nullable();
            $table->string('cabanuelas_chiquitas')->nullable();
            $table->text('festividad_lluvias')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracterizacion_dos');
    }
};
