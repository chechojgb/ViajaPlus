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
        Schema::create('itineraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // Relación con usuarios
            $table->string('name');//Nombre del itinerario
            $table->date('star_date');//Inicio
            $table->date('end_date');//Fin
            $table->foreignId('destination_id')->constrained('destinations');//Referencia a la tabla destinos
            $table->enum('estado',['planned', 'confirmed', 'completed']);//Estado del itinerario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itineraries');
    }
};
