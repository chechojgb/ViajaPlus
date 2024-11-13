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
        Schema::create('transportations', function (Blueprint $table) {
            $table->id();
            $table->enum('transport_type', ['flight', 'train', 'bus', 'car_rental']);//Tipo de transporte
            $table->foreignId('origin_id')->constrained('origins');//Referencia a la tabla origenes
            $table->foreignId('destination_id')->constrained('destinations');//Referencia a la tabla destinos
            $table->string('estimated_duration');//Duracion estimada
            $table->dateTime('departure_date');//Hora y fecha de salida
            $table->dateTime('arrival_date');//Hora y fecha de llegada
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportations');
    }
};
