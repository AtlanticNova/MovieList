<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function viewActors(){
        $actorsData = Actor::join('movie_characters', 'movie_characters.actors_id', '=', 'actors.id')
        ->join('movies', 'movies.id', '=', 'movie_characters.movies_id')
        ->get(['actors.imageURL', 'actors.name', 'movies.title']);
        $actorsData = Actor::all();
        return view('actors',[
            'actorsData' => $actorsData
        ]);
    }

    public function viewDetailActor($id){
        $actorsData = Actor::join('movie_characters', 'movie_characters.actors_id', '=', 'actors.id')
        ->join('movies', 'movies.id', '=', 'movie_characters.movies_id')
        ->get(['movies.title', 'actors.*', 'movies.imageThumbnail']);

        return view( 'actorDetail', [
            'actorData' => $actorsData
        ]);
    }
}

