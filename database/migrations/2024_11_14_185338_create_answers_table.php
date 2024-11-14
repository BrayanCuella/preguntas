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
        Schema::create('answers', function (Blueprint $table) {
            $table->id(); // ID auto incremental
            $table->unsignedBigInteger('question_id'); // Relación con la pregunta
            $table->text('answer'); // Respuesta en texto
            $table->timestamps(); // Fechas de creación y actualización

            // Agregar la clave foránea que referencia a la tabla questions
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
