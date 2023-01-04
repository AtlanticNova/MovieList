<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function genres(){
        return $this->belongsToMany(MovieGenre::class, 'movie_genres');
    }

    public function actors(){
        return $this->belongsToMany(MovieCharacter::class, 'movie_characters');
    }
}
