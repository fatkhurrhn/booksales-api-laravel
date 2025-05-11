<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
        'name' => 'Tere Liye',
        'photo' => 'https://example.com/photos/tere-liye.jpg',
        'bio' => 'Penulis produktif asal Indonesia yang terkenal dengan karya-karya bertema kehidupan dan filosofi sederhana.'
        ],
        [
            'name' => 'Andrea Hirata',
            'photo' => 'https://example.com/photos/andrea-hirata.jpg',
            'bio' => 'Penulis novel "Laskar Pelangi" yang mengangkat kisah inspiratif dari Belitung.'
        ],
        [
            'name' => 'Dee Lestari',
            'photo' => 'https://example.com/photos/dee-lestari.jpg',
            'bio' => 'Musisi sekaligus penulis Indonesia yang dikenal lewat seri "Supernova" dan "Perahu Kertas".'
        ],
        [
            'name' => 'Habiburrahman El Shirazy',
            'photo' => 'https://example.com/photos/habiburrahman.jpg',
            'bio' => 'Penulis novel religi seperti "Ayat-Ayat Cinta" yang sukses di pasar lokal dan internasional.'
        ],
        [
            'name' => 'Pidi Baiq',
            'photo' => 'https://example.com/photos/pidi-baiq.jpg',
            'bio' => 'Penulis, seniman, dan musisi nyentrik yang dikenal lewat novel "Dilan" dan gaya humornya.'
        ],
    ];

    public function getAuthors() {
        return $this->authors;
    }
}
