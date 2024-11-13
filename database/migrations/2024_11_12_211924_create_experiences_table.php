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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title_experience');//titulo de la experiencia
            $table->text('description');//Descripcion de la experiencia
            $table->decimal('price');//Precio
            $table->string('duration');//Duracion
            $table->enum('type_experience', ['adventure', 'cultural']);//Tipo de experiencia
            $table->foreignId('destination_id')->constrained('destinations');//Referencia al destino
            $table->foreignId('provider_id')->constrained('providers');//Referencia al proveedor
            $table->timestamps();//Fecha de creacion y actuualizacion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
