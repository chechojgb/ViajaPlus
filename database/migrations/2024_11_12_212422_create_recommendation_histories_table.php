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
        Schema::create('recommendation_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');//Referencia a la tabla usuarios
            $table->date('recommendation_date');//Fecha de recomendacion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendation_histories');
    }
};
