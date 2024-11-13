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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');//Referencia a la tabla usuarios
            $table->string('name');//Nombre del destino
            $table->text('description');//Descripccion del destin
            $table->string('country');//Pais
            $table->string('city');//Region o ciudad
            $table->string('image');//Url de imagen destacada
            $table->integer('score');//puntaje
            $table->timestamps();//Fechas de creacion y actualizacion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
