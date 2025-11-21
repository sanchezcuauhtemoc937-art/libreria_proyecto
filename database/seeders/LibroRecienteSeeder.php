<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LibroReciente;

class LibroRecienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        //      
        LibroReciente::updateOrCreate(
    ['isbn' => '9780743273565'],
    [
        'titulo' => 'El Gran Gatsby',
        'precio' => 180.50,
        'stock' => 5,
        'editorial' => 'Scribner',
        'fecha_publicacion' => '1925-04-10',
        'descripcion' => 'Una novela que explora el sueño americano, la decadencia y la riqueza.',
        'portada_url' => 'imagenes/libro11.jpeg',
        'resena' => 'Clásico de la literatura estadounidense que captura la era del jazz.',
        'categoria' => 'ficcion',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788420484931'],
    [
        'titulo' => 'Sancho Panza',
        'precio' => 350.00,
        'stock' => 3,
        'editorial' => 'Alfaguara',
        'fecha_publicacion' => '1605-01-16',
        'descripcion' => 'La obra cumbre de Miguel de Cervantes.',
        'portada_url' => 'imagenes/libro12.jpeg',
        'resena' => 'Aventuras de un hidalgo que enloquece leyendo libros de caballerías.',
        'categoria' => 'clasico',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9780061120084'],
    [
        'titulo' => 'Matar a un ruiseñor',
        'precio' => 210.99,
        'stock' => 12,
        'editorial' => 'Harper Perennial',
        'fecha_publicacion' => '1960-07-11',
        'descripcion' => 'Una novela sobre la injusticia racial y la pérdida de la inocencia en el sur de EE. UU.',
        'portada_url' => 'imagenes/libro13.jpeg',
        'resena' => 'Un poderoso examen de la moralidad y la compasión.',
        'categoria' => 'drama',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788498387082'],
    [
        'titulo' => 'El Alquimista',
        'precio' => 155.00,
        'stock' => 20,
        'editorial' => 'Planeta',
        'fecha_publicacion' => '1988-01-01',
        'descripcion' => 'La búsqueda de un tesoro por parte de un joven pastor.',
        'portada_url' => 'imagenes/libro14.jpeg',
        'resena' => 'Un viaje espiritual sobre seguir tus sueños y la Leyenda Personal.',
        'categoria' => 'autoayuda',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9780547928227'],
    [
        'titulo' => 'El Hobbit',
        'precio' => 255.75,
        'stock' => 8,
        'editorial' => 'Mariner Books',
        'fecha_publicacion' => '1937-09-21',
        'descripcion' => 'Las aventuras de Bilbo Bolsón.',
        'portada_url' => 'imagenes/libro15.jpeg',
        'resena' => 'Una puerta de entrada al mundo de la Tierra Media y la fantasía épica.',
        'categoria' => 'fantasia',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788437604947'],
    [
        'titulo' => 'Crimen y Castigo',
        'precio' => 195.00,
        'stock' => 6,
        'editorial' => 'Cátedra',
        'fecha_publicacion' => '1866-01-01',
        'descripcion' => 'La lucha moral y psicológica de un estudiante.',
        'portada_url' => 'imagenes/libro16.jpeg',
        'resena' => 'Profunda exploración de la culpa y la redención.',
        'categoria' => 'clasico',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788499088015'],
    [
        'titulo' => 'Patria',
        'precio' => 285.00,
        'stock' => 15,
        'editorial' => 'Tusquets Editores',
        'fecha_publicacion' => '2016-09-06',
        'descripcion' => 'La vida de dos familias vascas afectadas por el terrorismo de ETA.',
        'portada_url' => 'imagenes/libro17.jpeg',
        'resena' => 'Una novela conmovedora sobre el perdón, la memoria y el conflicto.',
        'categoria' => 'historica',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9780345339683'],
    [
        'titulo' => 'Dune',
        'precio' => 230.80,
        'stock' => 7,
        'editorial' => 'Ace Books',
        'fecha_publicacion' => '1965-08-01',
        'descripcion' => 'La saga de Paul Atreides en el planeta desértico Arrakis.',
        'portada_url' => 'imagenes/libro18.jpeg',
        'resena' => 'Pionero de la ciencia ficción, con intriga política y ecología.',
        'categoria' => 'ciencia_ficcion',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788439720338'],
    [
        'titulo' => 'La sombra del viento',
        'precio' => 260.00,
        'stock' => 18,
        'editorial' => 'Seix Barral',
        'fecha_publicacion' => '2001-05-10',
        'descripcion' => 'Un misterio ambientado en la Barcelona de la posguerra.',
        'portada_url' => 'imagenes/libro19.jpeg',
        'resena' => 'Una historia de amor, misterio y libros malditos.',
        'categoria' => 'misterio',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788490327334'],
    [
        'titulo' => 'Sapiens: De animales a dioses',
        'precio' => 310.50,
        'stock' => 4,
        'editorial' => 'Debate',
        'fecha_publicacion' => '2014-09-04',
        'descripcion' => 'Una breve historia de la humanidad.',
        'portada_url' => 'imagenes/libro20.jpeg',
        'resena' => 'Un best-seller que explora el papel de Homo sapiens en el mundo.',
        'categoria' => 'no_ficcion',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9786073105731'],
    [
        'titulo' => 'Como agua para chocolate',
        'precio' => 175.00,
        'stock' => 11,
        'editorial' => 'Debolsillo',
        'fecha_publicacion' => '1989-01-01',
        'descripcion' => 'Una novela mexicana de realismo mágico y recetas de cocina.',
        'portada_url' => 'imagenes/libro21.jpeg',
        'resena' => 'La pasión y el destino entrelazados con la gastronomía.',
        'categoria' => 'romance',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788498380304'],
    [
        'titulo' => 'La casa de los espíritus',
        'precio' => 205.00,
        'stock' => 9,
        'editorial' => 'Plaza & Janés',
        'fecha_publicacion' => '1982-01-01',
        'descripcion' => 'La saga de la familia Trueba a lo largo de varias generaciones.',
        'portada_url' => 'imagenes/libro22.jpeg',
        'resena' => 'Una obra esencial del realismo mágico latinoamericano.',
        'categoria' => 'ficcion',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9780064400764'],
    [
        'titulo' => 'Las Crónicas de Narnia: El león, la bruja y el armario',
        'precio' => 165.50,
        'stock' => 25,
        'editorial' => 'HarperCollins',
        'fecha_publicacion' => '1950-10-16',
        'descripcion' => 'Cuatro hermanos descubren un mundo mágico a través de un armario.',
        'portada_url' => 'imagenes/libro23.jpeg',
        'resena' => 'Aventura y alegoría en un mundo de fantasía.',
        'categoria' => 'infantil',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788497593290'],
    [
        'titulo' => 'La chica del tren',
        'precio' => 190.00,
        'stock' => 17,
        'editorial' => 'Planeta',
        'fecha_publicacion' => '2015-02-03',
        'descripcion' => 'Una mujer que observa la vida de una pareja desde su tren.',
        'portada_url' => 'imagenes/libro24.jpeg',
        'resena' => 'Un thriller psicológico de ritmo trepidante y giros inesperados.',
        'categoria' => 'thriller',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788423351984'],
    [
        'titulo' => 'Tokio Blues (Norwegian Wood)',
        'precio' => 220.00,
        'stock' => 14,
        'editorial' => 'Editorial Destino',
        'fecha_publicacion' => '1987-09-01',
        'descripcion' => 'Una historia de amor y pérdida en el Japón de los 60.',
        'portada_url' => 'imagenes/libro25.jpeg',
        'resena' => 'Una meditación melancólica y profunda sobre el paso a la adultez.',
        'categoria' => 'ficcion',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9780743273565'],
    [
        'titulo' => 'El Código Da Vinci',
        'precio' => 199.99,
        'stock' => 22,
        'editorial' => 'Umbriel',
        'fecha_publicacion' => '2003-03-18',
        'descripcion' => 'Un simbologista se ve envuelto en una conspiración histórica.',
        'portada_url' => 'imagenes/libro26.jpeg',
        'resena' => 'Thriller de conspiración que mezcla historia, arte y religión.',
        'categoria' => 'misterio',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788420485075'],
    [
        'titulo' => 'Rayuela',
        'precio' => 245.50,
        'stock' => 5,
        'editorial' => 'Alfaguara',
        'fecha_publicacion' => '1963-06-28',
        'descripcion' => 'La anti-novela de Julio Cortázar, que puede leerse de varias formas.',
        'portada_url' => 'imagenes/libro27.jpeg',
        'resena' => 'Una obra experimental y fundamental del Boom latinoamericano.',
        'categoria' => 'experimental',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9780062315007'],
    [
        'titulo' => 'Perdida (Gone Girl)',
        'precio' => 185.00,
        'stock' => 16,
        'editorial' => 'Crown',
        'fecha_publicacion' => '2012-06-05',
        'descripcion' => 'La desaparición de una mujer el día de su aniversario.',
        'portada_url' => 'imagenes/libro28.jpeg',
        'resena' => 'Un oscuro y retorcido thriller sobre el matrimonio moderno.',
        'categoria' => 'thriller',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9788490327358'],
    [
        'titulo' => 'Homo Deus: Breve historia del mañana',
        'precio' => 300.00,
        'stock' => 6,
        'editorial' => 'Debate',
        'fecha_publicacion' => '2016-09-08',
        'descripcion' => 'Una exploración del futuro de la humanidad y la tecnología.',
        'portada_url' => 'imagenes/libro29.jpeg',
        'resena' => 'Continúa el análisis de *Sapiens*, enfocándose en el porvenir.',
        'categoria' => 'no_ficcion',
    ]
);

LibroReciente::updateOrCreate(
    ['isbn' => '9786073105732'],
    [
        'titulo' => 'México Bárbaro',
        'precio' => 140.00,
        'stock' => 13,
        'editorial' => 'Debolsillo',
        'fecha_publicacion' => '1910-01-01',
        'descripcion' => 'Un reportaje que denuncia la esclavitud y la opresión en México.',
        'portada_url' => 'imagenes/libro30.jpeg',
        'resena' => 'Periodismo de investigación que reveló la realidad porfiriana.',
        'categoria' => 'historia',
    ]
);
    }
}
