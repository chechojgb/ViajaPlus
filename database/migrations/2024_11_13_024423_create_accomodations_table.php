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
        Schema::create('accomodations', function (Blueprint $table) {
            $table->id();
            $table->string('name');//Nombre del alojamiento
            $table->text('description');//Descripcion del alojamiento
            $table->decimal('night_price');//Precio por noche
            $table->integer('capacity');//Capacidad del alojamiento
            $table->foreignId('destination_id')->constrained('destinations');//Referencia a la tabla destinations
            $table->string('address');//Direccion del alojamiento
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
        Schema::dropIfExists('accomodations');
    }
};
