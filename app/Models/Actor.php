<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    public $timestamp = false;
    public function actors(){
        return $this->belongsToMany(MovieCharacters::class, 'movie_characters');
    }
=======
    public $timestamps = false;
>>>>>>> Stashed changes
}
