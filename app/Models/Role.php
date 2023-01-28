<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Relación muchos a muchos (Roles -> Users)
    public function roles(){
        return $this->belongsToMany(User::class);
    }

    // Relación muchos a muchos (Roles -> Permisos)
    public function permisos(){
        return $this->belongsToMany(Permiso::class);
    }
}
