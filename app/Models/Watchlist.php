<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;
    public $timestamp=false;

    public function Users(){
        return $this->belongsToMany(User::class, 'users');
    }

    public function Movies(){
        return $this->belongsToMany(Movie::class, 'movies');
    }
}
