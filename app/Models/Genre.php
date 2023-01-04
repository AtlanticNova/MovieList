<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function movies(){
        return $this->belongsToMany(MovieCharacters::class, 'movie_characters');
    }

    public function genres(){
        return $this->belongsToMany(MovieCharacters::class, 'movie_genres');
    }
}
