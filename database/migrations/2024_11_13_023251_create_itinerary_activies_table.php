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
        Schema::create('itinerary_activies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('itinerary_id')->constrained('itineraries');//Referencia a la tabla de itinerarios
            $table->foreignId('experience_id')->constrained('experiences');//Referencia a la tabla experiencia
            $table->date('date_time');//Fecha y hora programada
            $table->enum('status', ['pending', 'completed', 'canceled']);//Estado de la actividad
            $table->text('custom_notes');//Notas personalizadas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itinerary_activies');
    }
};
