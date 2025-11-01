<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use database\factories\LibrosFactory;
use App\Models\Libros;


class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //Ese comando es clave en Laravel porque sirve para insertar datos en tu base de datos automáticamente, 
    // sin tener que escribirlos a mano en phpMyAdmin ni desde un formulario.
    public function run(): void
    {
         Libros::updateOrCreate(
            ['isbn' => '9780307474728'],
            [
                'titulo' => 'Cien años de soledad',
                'precio' => 299.99,
                'stock' => 10,
                'editorial' => 'Sudamericana',
                'fecha_publicacion' => '1967-05-30',
                'descripcion' => 'Una obra maestra de Gabriel García Márquez.',
                'portada_url' => 'imagenes/libro10.jpeg',
                'resena' => 'Una obra poética que enseña sobre la amistad, la inocencia y lo esencial de la vida.',
                'categoria' => 'infantil',
            ]
        );

        Libros::factory(20)->create();

    }
}
