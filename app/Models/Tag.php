<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Relación muchos a muchos inversa polimórfica (Tags <- Posts)
    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    // Relación muchos a muchos inversa polimórfica (Tags <- Videos)
    public function videos(){
        return $this->morphedByMany(Video::class, 'taggable');
    }

}
