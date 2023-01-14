<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieCharacters;
use App\Models\MovieGenres;
use App\Models\Watchlist;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    // View Dashboard
    public function viewDashboard(Request $request){
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
        $watchlist = Watchlist::all();

        $search = $request->search;
        if($search != ""){
            $movies = Movie::where('title','LIKE',"%{$search}%")->paginate(7);
        }else{
            $movies = DB::table('movies')->paginate(7);
        }

        $sort = $request->sorting;

        if($sort == 'latest'){
            $movies = DB::table('movies')->orderByDesc('releaseDate')->paginate(7);
        }else if($sort == 'asc'){
            $movies = DB::table('movies')->orderBy('title', 'asc')->paginate(7);
        }else if($sort == 'desc'){
            $movies = DB::table('movies')->orderByDesc('title')->paginate(7);
        }else{
            $movies = DB::table('movies')->paginate(7);
        }
        return view('admin.dashboard',[
            'hero' => $hero,
            'genre' => $genre,
            'popular' => $popular,
            'movies' => $movies,
            'watchlist'=>$watchlist
        ]);
    }

    // Show Actors
    public function viewActors(Request $request){
        $actors = Actor::join('movie_characters', 'movie_characters.actors_id', '=', 'actors.id')
        ->join('movies', 'movies.id', '=', 'movie_characters.movies_id')
        ->get(['actors.imageURL', 'actors.name','movies.title AS title','actors.id']);
        $search = $request->search;
        if($search != ""){
            $actorsData = Actor::where('name','LIKE',"%{$search}%")->paginate(7);
        }else{
            $actorsData = Actor::all();
        }
        return view('admin.actors',[
            'actorsData' => $actorsData,
            'actors'=>$actors
        ]);
    }

    // Show Actors Details
    public function viewDetailActor($id){
        $actorsData = Actor::where('id',$id)->first();
        $movie = Actor::join('movie_characters', 'movie_characters.actors_id', '=', 'actors.id')
        ->join('movies', 'movies.id', '=', 'movie_characters.movies_id')
        ->where('actors.id',$id)
        ->get(['movies.imageThumbnail', 'movies.title', 'movies.id']);

        return view( 'admin.actorsDetail', [
            'actorData' => $actorsData,
            'movie' => $movie
        ]);
    }

    // Show Movies
    public function viewMovies(){
        $movies = Movie::all();
        $genre = Genre::all();

        return view('admin.movies',[
            'movies' => $movies,
            'genre' => $genre
        ]);
    }

    // Show Movies Details
    public function movieDetails($id){
        $movie = Movie::where('id', $id)->first();
        $movieActor = Movie::join('movie_characters', 'movie_characters.movies_id', '=', 'movies.id')
                ->join('actors', 'actors.id', '=','movie_characters.actors_id')
                ->where('movies.id',$id)
                ->get(['movies.*','actors.name AS actor_name', 'movie_characters.characterName', 'actors.imageURL','actors.id AS actor_id']);
        $movieGenre = Movie::join('movie_genres', 'movie_genres.movies_id','=','movies.id')
                ->join('genres', 'genres.id','=','movie_genres.genres_id')
                ->where('movies.id',$id)
                ->get(['genres.name']);
        $movies = Movie::all()->random(5);

        return view('admin.movieDetail',[
            'movie'=>$movie,
            'movieActor' => $movieActor,
            'movies' => $movies,
            'movieGenre' => $movieGenre
        ]);
    }

    public function showAddMovie(){
        $actors = Actor::all();
        $genres = Genre::all();
        return view('admin.addMovie',[
            'actors' => $actors,
            'genres' => $genres
        ]);
    }

    public function deleteMovie($id){
        DB::table('movie_genres')
            ->where('movies_id', $id)
            ->delete();
        DB::table('movie_characters')
            ->where('movies_id', $id)
            ->delete();

        DB::table('movies')
            ->where('id', $id)
            ->delete();
        return redirect('/admin/dashboard')->with('success', 'Successfully Deleted!');
    }

    public function showEditMovie($id){
        $movie = Movie::where('id',$id)->first();
        $genre = Genre::join('movie_genres','movie_genres.genres_id','=','genres.id')
                ->where('movies_id',$id)
                ->get(['genres.*']);
        $genres = Genre::all();
        $actors = Actor::join('movie_characters','movie_characters.actors_id','=','actors.id')
                ->where('movies_id',$id)
                ->get(['actors.*','movie_characters.characterName']);
        $allActor = Actor::all();
        return view('admin.editMovie',[
            'actors' => $actors,
            'genres' => $genres,
            'movie' => $movie,
            'genre' => $genre,
            'allActor' => $allActor
        ]);
    }



    public function addMovie(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|min:2|max:50',
            'description' => 'required|min:8',
            'inputGenre.*.genre' => 'required',
            'input.*.actor' => 'required',
            'input.*.character' => 'required',
            'director' =>'required|min:3',
            'releaseDate' => 'required',
            'ImageURL' =>'required|image',
            'BackgroundURL' => 'required|image'
        ]);

        DB::table('movies')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'director'=>$request->director,
            'releaseDate'=>$request->releaseDate,
            'imageThumbnail'=>$request->ImageURL->getClientOriginalName(),
            'background'=>$request->BackgroundURL->getClientOriginalName(),
        ]);

        $path = 'images';
        $imageThumbnail = $request->ImageURL->getClientOriginalName();
        $request->ImageURL->move(public_path($path), $imageThumbnail);

        $background = $request->BackgroundURL->getClientOriginalName();
        $request->BackgroundURL->move(public_path($path), $background);

        $id = DB::getPdo()->lastInsertId();

        $actor = $request->input('input.*.actor');
        $character = $request->input('input.*.character');

        foreach ($request->input as $key => $value) {
            MovieCharacters::create([
                'movies_id'=>$id,
                'actors_id'=>$actor[$key],
                'characterName'=>$character[$key]
            ]);
        }

        $genre = $request->input('inputGenre.*.genre');
        foreach($request->inputGenre as $key=>$value){
            DB::table('movie_genres')->insert([
                'movies_id'=>$id,
                'genres_id'=>$genre[$key]
            ]);
        }

        return redirect()->back()->with('success', 'Successfully Added!');
    }

    public function editMovie(Request $request, $id){
        $request->validate([
            'title' => 'required|min:2|max:50',
            'description' => 'required|min:8',
            'inputGenre.*.genre' => 'required',
            'input.*.actor' => 'required',
            'input.*.character' => 'required',
            'director' =>'required|min:3',
            'releaseDate' => 'required',
            'ImageURL' =>'required|image',
            'BackgroundURL' => 'required|image'
        ]);

        DB::table('movies')
        ->where('id','=',$id)
        ->update([
            'title' => $request->title,
            'description' => $request->description,
            'director'=>$request->director,
            'releaseDate'=>$request->releaseDate,
            'imageThumbnail'=>$request->ImageURL->getClientOriginalName(),
            'background'=>$request->BackgroundURL->getClientOriginalName(),
        ]);

        $path = 'images';
        $imageThumbnail = $request->ImageURL->getClientOriginalName();
        $request->ImageURL->move(public_path($path), $imageThumbnail);

        $background = $request->BackgroundURL->getClientOriginalName();
        $request->BackgroundURL->move(public_path($path), $background);

        $mc =  MovieCharacters::select('id')
                ->where('movies_id',$id)
                ->get();
        $mcArray = $mc->toArray();
        $actor = $request->input('input.*.actor');
        $character = $request->input('input.*.character');


        foreach ($request->input as $key => $value) {
            DB::table('movie_characters')->where('id',$mcArray[$key])
            ->update([
                'movies_id'=>$id,
                'actors_id'=>$actor[$key],
                'characterName'=>$character[$key]
            ]);
        }

        $index =  MovieGenres::select('id')
                    ->where('movies_id',$id)
                    ->get();
        $arrayIndex = $index->toArray();

        $genre = $request->input('inputGenre.*.genre');
        foreach($request->inputGenre as $key=>$value){
            DB::table('movie_genres')->where('id',$arrayIndex[$key])
            ->update([
                'movies_id'=>$id,
                'genres_id'=>$genre[$key]
            ]);
        }

        return redirect()->back()->with('success', 'Successfully Updated!');
    }

    public function showAddActor(){
        return view('admin.addActor');
    }

    public function deleteActor($id){
        DB::table('movie_characters')->where('actors_id',$id)->delete();
        DB::table('actors')->where('id',$id)->delete();

        return redirect('admin/actors')->with('success', 'Successfully Deleted!');
    }

    public function addActor(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'gender'=>'required',
            'biography'=>'required|min:10',
            'dob'=>'required',
            'pob'=>'required',
            'imageURL'=>'required|image',
            'popularity'=>'required|numeric'
        ]);

        Actor::create([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'biography'=>$request->biography,
            'DOB'=>$request->dob,
            'POB'=>$request->pob,
            'imageURL'=>$request->imageURL->getClientOriginalName(),
            'popularity'=>$request->popularity
        ]);

        $path = 'images';
        $imageURL = $request->imageURL->getClientOriginalName();
        $request->imageURL->move(public_path($path), $imageURL);

        return redirect()->back()->with('success', 'Successfully Added!');
    }

    public function showEditActor($id){
        $actor = Actor::where('id',$id)->first();

        return view('admin.editActor',[
            'actor'=>$actor
        ]);
    }

    public function editActor(Request $request, $id){
        $request->validate([
            'name'=>'required|min:3',
            'biography'=>'required|min:10',
            'dob'=>'required',
            'pob'=>'required',
            'imageURL'=>'image',
            'popularity'=>'required'
        ]);

        DB::table('actors')->where('id','=',$id)
        ->update([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'biography'=>$request->biography,
            'DOB'=>$request->dob,
            'POB'=>$request->pob,
            'imageURL'=>$request->imageURL->getClientOriginalName(),
            'popularity'=>$request->popularity
        ]);

        $path = 'images';
        $imageURL = $request->imageURL->getClientOriginalName();
        $request->imageURL->move(public_path($path), $imageURL);

        return redirect()->back()->with('success', 'Successfully Updated!');
    }
}
