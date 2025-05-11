<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
        'name' => 'Tere Liye',
        'photo' => 'https://idwriters.com/wp-content/uploads/2018/06/tl01.png',
        'bio' => 'Penulis produktif asal Indonesia yang terkenal dengan karya-karya bertema kehidupan dan filosofi sederhana.'
        ],
        [
            'name' => 'Andrea Hirata',
            'photo' => 'https://miro.medium.com/v2/resize:fit:549/1*BDuQvDNkg1UXJq17zl_Wfg.jpeg',
            'bio' => 'Penulis novel "Laskar Pelangi" yang mengangkat kisah inspiratif dari Belitung.'
        ],
        [
            'name' => 'Dee Lestari',
            'photo' => 'https://cdn.rri.co.id/berita/Bandar_Lampung/o/1728783364343-IMG_9639/watfr1u4500mu8e.jpeg',
            'bio' => 'Musisi sekaligus penulis Indonesia yang dikenal lewat seri "Supernova" dan "Perahu Kertas".'
        ],
        [
            'name' => 'Habiburrahman El Shirazy',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3MV-2t3Y0sScCxroscubWoy_smOWb_kC4fw&s',
            'bio' => 'Penulis novel religi seperti "Ayat-Ayat Cinta" yang sukses di pasar lokal dan internasional.'
        ],
        [
            'name' => 'Pidi Baiq',
            'photo' => 'https://file.indonesianfilmcenter.com/uploads/2019-07/d7b740543176e5f77df4bf9ac2e3072f.jpeg',
            'bio' => 'Penulis, seniman, dan musisi nyentrik yang dikenal lewat novel "Dilan" dan gaya humornya.'
        ],
    ];

    public function getAuthors() {
        return $this->authors;
    }
}
