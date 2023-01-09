<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

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

    public $sorting;

    public function mount(){
        $this->sorting = "default";
    }
    public function render(Request $request)
    {
        $hero = Movie::join('movie_genres', 'movie_genres.movies_id', '=', 'movies.id')
                ->join('genres', 'genres.id', '=', 'movie_genres.genres_id')
                ->get(['movies.releaseDate','genres.name', 'movies.title', 'movies.description', 'movies.background'])->random(3);
        $genre = Genre::all();
        $popular = DB::table('movies')
                    ->select('movies.title','movies.releaseDate','movies.imageThumbnail','movies.id',DB::raw('COUNT(*) AS count'))
                    ->join('watchlists', 'watchlists.movies_id','=','movies.id')
                    ->orderByDesc('count')
                    ->groupBy('movies.title','movies.releaseDate','movies.imageThumbnail', 'movies.id')
                    ->limit(7)
                    ->get();
        $search = $request->search;
        if($search != ""){
            $movies = Movie::where('title','LIKE',"%{$search}%")->paginate(7);
        }else{
            $movies = DB::table('movies')->paginate(7);
        }

        // if($this->sorting == 'latest'){
        //     $movies = DB::table('movies')->orderByDesc('releaseDate')->paginate(7);
        // }else if($this->sorting == 'asc'){
        //     $movies = DB::table('movies')->orderBy('title', 'asc')->paginate(7);
        // }else if($this->sorting == 'desc'){
        //     $movies = DB::table('movies')->orderByDesc('title')->paginate(7);
        // }else{
        //     $movies = DB::table('movies')->paginate(7);
        // }

        return view('home',[
            'hero' => $hero,
            'genre' => $genre,
            'popular' => $popular,
            'movies' => $movies
        ]);
    }
}
