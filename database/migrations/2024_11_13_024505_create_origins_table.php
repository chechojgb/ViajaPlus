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
        Schema::create('origins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');//Referencia a la tabla usuarios
            $table->string('country');//Pais de origen
            $table->string('city');//Ciudad de origen
            $table->string('address');//Direccion de origen
            $table->decimal('latitude');//Latitud de la direccion
            $table->decimal('longitude');//Longitud de la direccion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origins');
    }
};
