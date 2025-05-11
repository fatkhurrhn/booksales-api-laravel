<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'name' => 'Fiksi',
            'description' => 'Genre yang berisi cerita rekaan atau khayalan yang tidak sepenuhnya berdasarkan fakta.'
        ],
        [
            'name' => 'Non-Fiksi',
            'description' => 'Genre yang menyajikan informasi faktual dan nyata seperti biografi, sejarah, dan sains.'
        ],
        [
            'name' => 'Fantasi',
            'description' => 'Genre dengan unsur magis, dunia imajinatif, makhluk supernatural, dan kejadian tidak masuk akal.'
        ],
        [
            'name' => 'Romantis',
            'description' => 'Genre yang fokus pada hubungan cinta dan emosi antar tokohnya.'
        ],
        [
            'name' => 'Misteri / Thriller',
            'description' => 'Genre yang menegangkan, biasanya melibatkan kasus kriminal, teka-teki, dan penyelidikan.'
        ],
    ];
    public function getGenres()
    {
        return $this->genres;
    }
}
