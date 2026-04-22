<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libros;
use App\Models\LibroReciente;
use App\Models\LibroPopular;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         $this->call([
        LibrosSeeder::class,

        ]);
        $this->call([
            LibroRecienteSeeder::class,
        ]);

        $this->call([
            LibrosPopularesSeeder::class,
        ]);

    }
}
