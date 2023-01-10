<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function viewMovies(){
        $movies = Movie::all();
        $genre = Genre::all();

        return view('user.movies',[
            'movies' => $movies,
            'genre' => $genre
        ]);
    }

    public function movieDetails($id){
        $movie = Movie::where('id', $id)->first();
        $movieActor = Movie::join('movie_characters', 'movie_characters.movies_id', '=', 'movies.id')
                ->join('actors', 'actors.id', '=','movie_characters.actors_id')
                ->where('movies.id',$id)
                ->get(['movies.*','actors.name AS actor_name', 'movie_characters.characterName', 'actors.imageURL']);
        $movieGenre = Movie::join('movie_genres', 'movie_genres.movies_id','=','movies.id')
                ->join('genres', 'genres.id','=','movie_genres.genres_id')
                ->where('movies.id',$id)
                ->get(['genres.name']);
        $movies = Movie::all()->random(5);

        return view('user.movieDetails',[
            'movie'=>$movie,
            'movieActor' => $movieActor,
            'movies' => $movies,
            'movieGenre' => $movieGenre
        ]);
    }
}
