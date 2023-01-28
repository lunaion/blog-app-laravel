<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Relación uno a muchos inversa (Comments <- User)
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Relación polimórfica
    public function commentable(){
        return $this->morphTo();
    }
}
