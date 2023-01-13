<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name','gender','biography','DOB','POB','imageURL','popularity'];

    public function movies(){
        return $this->belongsToMany(Movie::class, 'movie_characters');
    }
}
