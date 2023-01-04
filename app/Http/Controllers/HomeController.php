<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hero = Movie::join('movie_genres', 'movie_genres.movies_id', '=', 'movies.id')
                ->join('genres', 'genres.id', '=', 'movie_genres.genres_id')
                ->get(['movies.releaseDate','genres.name', 'movies.title', 'movies.description', 'movies.background'])->random(3);
        $genre = Genre::all();
        $movies = Movie::all();
        return view('home',[
            'hero' => $hero,
            'genre' => $genre,
            'movies' => $movies
        ]);
    }
}
