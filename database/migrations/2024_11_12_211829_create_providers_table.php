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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();//Nombre del proveedor
            $table->enum('provider_type', ['travel_agency', 'local_guide'])->nullable();//Tipo de proveedor
            $table->string('contact');//Informacion de contato
            $table->string('address');//Direccion de proveedor
            $table->string('email')->nullable();
            $table->string('status')->default('active')->nullable();
            // $table->foreignId('destination_id')->constrained('destinations');//Referencia a la tabla destino
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
