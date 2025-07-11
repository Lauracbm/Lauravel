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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->decimal('precio')->default(5.00);
            $table->enum('estado', ['Disponible' , 'Agotado'])->default('Disponible');
            $table->integer('stock');
            $table->string('artista')->nullable();
            $table->enum('formato', ['CD', 'Vinilo', 'Cassette', 'Digital', 'no especificado'])->default('no especificado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
