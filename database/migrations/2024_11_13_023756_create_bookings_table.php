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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');//Referencia a la tabla usuarios
            $table->enum('booking_type', ['experience', 'accommodation', 'transport']);//Tipo del booking
            $table->date('start_date');//Fecha de inicio
            $table->date('end_date');//Fecha de fin
            $table->enum('status', ['confirmed', 'pendig', 'canceled']);//Estado del booking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
