<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relación de uno a muchos inversa (Posts <- User)
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Relación de uno a muchos inversa (Posts <- Categoria)
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    // Relación uno a uno polimórfica (Post -> Image)
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    // Relación uno a muchos polimórfica (Post -> Comments)
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    
    // Relación muchos a muchos polimórfica (Posts -> Tags)
    public function posts(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

}

