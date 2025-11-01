<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libros;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libros>
 */
class LibrosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
              'titulo' => $this->faker->sentence(3),
            'isbn' => $this->faker->unique()->isbn13(),
            'precio' => $this->faker->randomFloat(2, 100, 600),
            'stock' => $this->faker->numberBetween(1, 20),
            'editorial' => $this->faker->company(),
            'fecha_publicacion' => $this->faker->date(),
            'descripcion' => $this->faker->paragraph(),
            'portada_url' => 'imagenes/libro10.jpeg',
             'resena' => $this->faker->paragraph(3),
            'categoria' => $this->faker->randomElement([
                'Terror', 
                'Ciencia Ficción', 
                'Romance', 
                'Aventura', 
                'Misterio', 
                'Infantil', 
                'Histórico'
            ]),
        ];
    }
}
