<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieGenres extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function movies(){
        return $this->belongsTo(Movie::class, 'movies');
    }

    public function genres(){
        return $this->belongsTo(Genre::class, 'genres');
    }
}
