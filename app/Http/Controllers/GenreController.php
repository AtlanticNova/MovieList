<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function genreDetails($id){
        $genreName = Genre::where('id', $id)->first();
        $selectedGenre = Genre::join('movie_genres', 'movie_genres.genres_id', '=', 'genres.id')
        ->join('movies', 'movies.id', '=', 'movie_genres.movies_id')
        ->where('genres.id', $id)
        ->get (['movies.imageThumbnail', 'movies.title', 'movies.releaseDate', 'movies.id']);

        return view('user.genreDetail',[
            'genre' => $genreName,
            'selectedGenre' => $selectedGenre
        ]);
    }
}
