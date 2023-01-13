<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    public function viewActors(Request $request){
        $search = $request->search;
        if($search != ""){
            $actorsData = Actor::join('movie_characters', 'movie_characters.actors_id', '=', 'actors.id')
            ->join('movies', 'movies.id', '=', 'movie_characters.movies_id')
            ->get(['actors.imageURL', 'actors.name','movies.title']);

            $actorsData = Actor::where('name', 'LIKE', "%{$search}%");
        } else {
            $actorsData = Actor::join('movie_characters', 'movie_characters.actors_id', '=', 'actors.id')
            ->join('movies', 'movies.id', '=', 'movie_characters.movies_id')
            // ->groupBy('movie_characters.movies_id', 'actors.imageURL', 'actors.name', 'movies.title', 'actors.id', 'actors.gender', 'actors.biography', 'actors.DOB', 'actors.POB', 'actors.popularity', 'movie_characters.id', 'movie_characters.actors_id', 'movie_characters.characterName', 'movies.id', 'movies.description', 'movies.director', 'movies.releaseDate', 'movies.imageThumbnail', 'movies.background')
            ->get(['actors.name', 'movies.title', 'actors.imageURL', 'movies.id']);

            // ->groupBy('actors_id')
            // $actorsData = Actor::all();

        }
        return view('user.actors',[
            'actorsData' => $actorsData
        ]);
    }

    public function viewDetailActor($id){
        $actorsData = Actor::where('id',$id)->first();
        $movie = Actor::join('movie_characters', 'movie_characters.actors_id', '=', 'actors.id')
        ->join('movies', 'movies.id', '=', 'movie_characters.movies_id')
        ->where('actors.id',$id)
        ->get(['movies.imageThumbnail', 'movies.title', 'movies.id']);

        return view( 'user.actorDetail', [
            'actorData' => $actorsData,
            'movie' => $movie
        ]);
    }
}

