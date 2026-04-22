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
        Schema::create('libros_populares', function (Blueprint $table) {
        $table->id();
        $table->string('isbn')->unique();
        $table->string('titulo');
        $table->decimal('precio', 8, 2);
        $table->integer('stock');
        $table->string('editorial');
        $table->date('fecha_publicacion');
        $table->text('descripcion');
        $table->string('portada_url')->nullable();
        $table->text('resena')->nullable();
        $table->string('categoria');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros_populares');
    }
};
