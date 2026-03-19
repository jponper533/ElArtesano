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
        Schema::create('platos', function (Blueprint $table) {
            $table->id();
            // Campo especial para el slug de la película
            $table->string('nombre', 50);
            $table->string('descripcion', 255)->nullable();
            $table->decimal('precio', 8, 2);
            $table->string('imagen', 255)->nullable();
            $table->enum('estado', ['activo', 'inactivo'])->default('inactivo');
            $table->timestamps();
            // No necesitamos timestamps aquí
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
