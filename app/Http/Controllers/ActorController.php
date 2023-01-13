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
            $actorsData = Actor::where('name','LIKE',"%{$search}%")->paginate(7);
        }else{
            // $actorsData = Actor::join('movie_characters', 'movie_characters.actors_id', '=', 'actors.id')
            // ->join('movies', 'movies.id', '=', 'movie_characters.movies_id')
            // ->get(['actors.imageURL', 'actors.name','movies.title AS title','actors.id']);
            $actorsData = Actor::all();
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

