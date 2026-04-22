<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LibroPopular;

class LibrosPopularesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LibroPopular::updateOrCreate(
    ['isbn' => '6780525536291'],
    [
        'titulo' => 'Los siete maridos de Evelyn Hugo',
        'precio' => 320.00,
        'stock' => 12,
        'editorial' => 'Atria Books',
        'fecha_publicacion' => '2017-06-13',
        'descripcion' => 'La vida y secretos de una estrella de Hollywood.',
        'portada_url' => 'imagenes/evelyn_hugo.jpeg',
        'resena' => 'Una novela cautivadora y emocional.',
        'categoria' => 'ficcion',
    ]
);

LibroPopular::updateOrCreate(
    ['isbn' => '9781250048097'],
    [
        'titulo' => 'El silencio de los corderos',
        'precio' => 280.00,
        'stock' => 8,
        'editorial' => 'St. Martin’s Press',
        'fecha_publicacion' => '1988-05-01',
        'descripcion' => 'Thriller psicológico con el icónico Hannibal Lecter.',
        'portada_url' => 'imagenes/silencio_corderos.jpeg',
        'resena' => 'Intenso y oscuro.',
        'categoria' => 'thriller',
    ]
);

LibroPopular::updateOrCreate(
    ['isbn' => '9780735211292'],
    [
        'titulo' => 'Hábitos Atómicos',
        'precio' => 350.00,
        'stock' => 15,
        'editorial' => 'Avery',
        'fecha_publicacion' => '2018-10-16',
        'descripcion' => 'Cómo los pequeños hábitos llevan a grandes resultados.',
        'portada_url' => 'imagenes/habitos_atomicos.jpeg',
        'resena' => 'Práctico y transformador.',
        'categoria' => 'desarrollo personal',
    ]
);

LibroPopular::updateOrCreate(
    ['isbn' => '9788408172173'],
    [
        'titulo' => 'La sombra del viento',
        'precio' => 300.00,
        'stock' => 10,
        'editorial' => 'Planeta',
        'fecha_publicacion' => '2001-05-01',
        'descripcion' => 'Una historia misteriosa en la Barcelona de posguerra.',
        'portada_url' => 'imagenes/sombra_viento.jpeg',
        'resena' => 'Fascinante y atmosférica.',
        'categoria' => 'novela',
    ]
);

LibroPopular::updateOrCreate(
    ['isbn' => '9780756404741'],
    [
        'titulo' => 'El nombre del viento',
        'precio' => 450.00,
        'stock' => 7,
        'editorial' => 'DAW Books',
        'fecha_publicacion' => '2007-03-27',
        'descripcion' => 'La historia de Kvothe, un hombre legendario.',
        'portada_url' => 'imagenes/nombre_del_viento.jpeg',
        'resena' => 'Épico e inolvidable.',
        'categoria' => 'fantasia',
    ]
);


        
    }
       


}

