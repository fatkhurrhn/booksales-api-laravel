<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Tere Liye',
            'photo' => 'https://idwriters.com/wp-content/uploads/2018/06/tl01.png',
            'bio' => 'Penulis produktif asal Indonesia yang terkenal dengan karya-karya bertema kehidupan dan filosofi sederhana.'
        ]);

        Author::create([
            'name' => 'Dewi Lestari',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Dewi_Lestari.jpg/440px-Dewi_Lestari.jpg',
            'bio' => 'Penulis dan musisi yang dikenal lewat novel-novel spiritual dan futuristik seperti Supernova.'
        ]);

        Author::create([
            'name' => 'Andrea Hirata',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Andrea_Hirata.jpg/440px-Andrea_Hirata.jpg',
            'bio' => 'Penulis novel populer "Laskar Pelangi", terinspirasi dari kisah hidupnya di Belitung.'
        ]);

        Author::create([
            'name' => 'Leila S. Chudori',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Leila_S._Chudori.jpg/440px-Leila_S._Chudori.jpg',
            'bio' => 'Jurnalis dan penulis fiksi sejarah yang sering mengangkat tema politik dan identitas.'
        ]);

        Author::create([
            'name' => 'Pidi Baiq',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Pidi_Baiq.jpg/440px-Pidi_Baiq.jpg',
            'bio' => 'Penulis nyentrik dan musisi yang dikenal lewat kisah cinta remaja dan humor absurd dalam "Dilan".'
        ]);

        Author::create([
            'name' => 'Sapardi Djoko Damono',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Sapardi_Djoko_Damono_2015.jpg/440px-Sapardi_Djoko_Damono_2015.jpg',
            'bio' => 'Penyair legendaris Indonesia dengan puisi-puisi yang lembut, penuh makna dan cinta.'
        ]);
    }
}
