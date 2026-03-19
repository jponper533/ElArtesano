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
        Schema::create('plato_ingrediente', function (Blueprint $table) {
            $table->foreignId('plato_id')->constrained('platos');
            $table->foreignId('ingrediente_id')->constrained('ingredientes');
           
            $table->primary(['plato_id', 'ingrediente_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plato_ingrediente');
    }
};



