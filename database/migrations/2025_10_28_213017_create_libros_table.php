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
        Schema::create('libros', function (Blueprint $table) {
         $table->id();
         $table->string('titulo', 255)->nullable(false);
        $table->string('isbn', 13)->unique()->nullable(false);
        $table->decimal('precio', 10, 2)->nullable(false);
        $table->integer('stock')->nullable(false);
        $table->string('editorial', 100)->nullable(false);
        $table->date('fecha_publicacion')->nullable();
        $table->text('descripcion')->nullable();
        $table->string('portada_url', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
