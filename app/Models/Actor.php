<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function actors(){
        return $this->belongsToMany(MovieCharacters::class, 'movie_characters');
    }

    public function movies(){
        return $this->belongsToMany(MovieCharacters::class, 'movie_characters');
    }
}
