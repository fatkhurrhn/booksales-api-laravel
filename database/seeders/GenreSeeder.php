<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'action',
            'description' => 'genre yang menekankan pada adegan aksi, pertempuran dan kecepatan'
        ]);

        Genre::create([
            'name' => 'romance',
            'description' => 'genre yang menekankan pada hubungan romantis dan adegan cinta'
        ]);

        Genre::create([
            'name' => 'fantasy',
            'description' => 'genre yang mengekplorasi imajinasi dunia yang tak nyata'
        ]);

        Genre::create([
            'name' => 'horror',
            'description' => 'genre yang bertujuan membangkitkan rasa takut dan ketegangan'
        ]);

        Genre::create([
            'name' => 'comedy',
            'description' => 'genre yang berfokus pada elemen humor dan hiburan ringan'
        ]);
    }
}
