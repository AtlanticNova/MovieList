<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCharacters extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['movies_id','actors_id','characterName'];

    public function actors(){
        return $this->belongsTo(Actor::class, 'actors');
    }

    public function movies(){
        return $this->belongsTo(Movie::class, 'movies');
    }
}
