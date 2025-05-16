<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Sebuah kisah perjalanan kembali ke akar',
            'price' => 30000,
            'stock' => 22,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ]);

        Book::create([
            'title' => 'Hujan di Ujung Senja',
            'description' => 'Romansa yang tumbuh di tengah badai kehidupan',
            'price' => 35000,
            'stock' => 15,
            'cover_photo' => 'hujan.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ]);

        Book::create([
            'title' => 'Negeri Awan',
            'description' => 'Petualangan magis di dunia yang tersembunyi di atas langit',
            'price' => 42000,
            'stock' => 10,
            'cover_photo' => 'negeri-awan.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ]);

        Book::create([
            'title' => 'Bayangan Malam',
            'description' => 'Teror yang datang saat cahaya terakhir padam',
            'price' => 39000,
            'stock' => 18,
            'cover_photo' => 'bayangan.jpg',
            'genre_id' => 4,
            'author_id' => 4,
        ]);

        Book::create([
            'title' => 'Tawa di Tengah Luka',
            'description' => 'Kumpulan kisah lucu yang lahir dari tragedi hidup sehari-hari',
            'price' => 28000,
            'stock' => 25,
            'cover_photo' => 'tawa.jpg',
            'genre_id' => 5,
            'author_id' => 5,
        ]);
    }
}
