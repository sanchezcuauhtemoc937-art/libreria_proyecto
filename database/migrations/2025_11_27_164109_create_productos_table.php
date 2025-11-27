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
                // Relación polimórfica
        $table->unsignedBigInteger('producto_id');
        $table->string('producto_type'); // App\Models\Libro o App\Models\LibroReciente

        // Campos útiles opcionales
        $table->boolean('visible')->default(true);
        $table->boolean('destacado')->default(false);

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
