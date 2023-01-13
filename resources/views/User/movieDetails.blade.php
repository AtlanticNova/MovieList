@extends('user.layout')
@section('headline', 'Movie Details')

@section('content')
    <content>
        <div class="text-white" style="display: flex; flex-direction: column;justify-content: space-evenly;background-color:black">
            <div style="padding:100px;background-repeat: no-repeat;height: 100%; background-position: center; background-size: cover;background-color: rgb(0,0,0); background: linear-gradient(rgba(0, 0, 0, 0.438),rgba(0, 0, 0, 0.616)), url(/images/{{$movie->background}}); ">
                <div style="display: flex; flex-direction: row;justify-content: space-evenly;align: center;">
                    <img src="{{asset('images/'.$movie->imageThumbnail)}}" alt="" style="max-width: 300px; margin-right: 20px">
                    <div style="display: flex; flex-direction: column;justify-content: space-evenly;align: center">
                        <h1>{{$movie->title}}</h3>
                        <div>
                            @foreach ($movieGenre as $mg)
                                <button class="btn btn-outline-light">{{$mg->name}}</button>
                            @endforeach
                        </div>
                        <div>
                            <h5>Release Date</h5>
                            <p>{{$movie->releaseDate}}</p>
                            <h5>Storyline</h5>
                            <p>{{$movie->description}}</p>
                            <h5>Director</h5>
                            <p>{{$movie->director}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <h3>Cast</h3>
                <div style="display: flex; flex-direction: row; margin-top: 20px">
                    @foreach ($movieActor as $movieActor)
                            <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                                <img src="{{asset('images/'.$movieActor->imageURL)}}" alt="" style="max-height: 300px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$movieActor->actor_name}}</h5>
                                    <p class="card-text">{{$movieActor->characterName}}</p>
                                    <a href="/actors/{{$movieActor->actor_id}}" class="stretched-link"></a>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
            <div class="p-5">
                <h3>More</h3>
                <div style="display: flex; flex-direction: row; margin-top: 20px">
                    @foreach ($movies as $movies)
                        <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                            <img src="{{asset('images/'.$movies->imageThumbnail)}}" alt="" style="max-height: 300px">
                            <div class="card-body">
                                <h5 class="card-title">{{$movies->title}}</h5>
                                <p class="card-text">{{$movies->releaseDate}}</p>
                                <a href="/movies/{{$movies->id}}" class="stretched-link"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </content>
@endsection
