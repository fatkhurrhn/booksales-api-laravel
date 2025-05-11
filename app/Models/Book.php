<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Sebuah kisah perjalanan kembali ke akar',
            'price' => 30000,
            'stock' => 22,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ],
        [
            'title' => 'Laut Bercerita',
            'description' => 'Novel tentang kehilangan dan perjuangan',
            'price' => 42000,
            'stock' => 15,
            'cover_photo' => 'laut-bercerita.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ],
        [
            'title' => 'Bumi',
            'description' => 'Petualangan anak-anak dengan kekuatan luar biasa',
            'price' => 38000,
            'stock' => 30,
            'cover_photo' => 'bumi.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ],
        [
            'title' => 'Negeri 5 Menara',
            'description' => 'Cerita tentang mimpi dan semangat belajar',
            'price' => 45000,
            'stock' => 18,
            'cover_photo' => 'negeri5menara.jpg',
            'genre_id' => 1,
            'author_id' => 4,
        ],
        [
            'title' => 'Perahu Kertas',
            'description' => 'Cinta, seni, dan pencarian jati diri',
            'price' => 39000,
            'stock' => 25,
            'cover_photo' => 'perahukertas.jpg',
            'genre_id' => 4,
            'author_id' => 5,
        ],
    ];

    public function getBooks() {
        return $this->books;
    }
}
