<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function movieGenres(){
        return $this->belongsToMany(Genre::class, 'movie_genres');
    }

    public function actors(){
        return $this->belongsToMany(Actor::class, 'movie_characters');
    }

    public function watchlist(){
        return $this->belongsTo(Watchlist::class, 'watchlists');
    }
}
