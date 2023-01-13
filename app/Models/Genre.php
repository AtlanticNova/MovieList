<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function genres(){
        return $this->belongsToMany(Movie::class, 'movie_genres');
    }
}
