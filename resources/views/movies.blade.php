@extends('layout')
@section('headline', 'Movies')

@section('content')
    <content>
        <div style="padding:51.5px; background-color:black; height: 100vh">
            <div class="justify-content-between pt-3">
                @foreach ($genre as $genre)
                    <a href="/genre/{{$genre->id}}"><button type="button active" class="btn btn-dark">{{$genre->name}}</button></a>
                @endforeach
            </div>
            <div style="display: flex; flex-direction: row; margin-top: 20px">
            @guest
                @foreach ( $movies as $movies)
                    <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                        <img src="{{asset('/'.$movies->imageThumbnail)}}" alt="" style="max-height: 300px">
                        <div class="card-body">
                            <h5 class="card-title">{{$movies->title}}</h5>
                            <p class="card-text">{{$movies->releaseDate}}</p>
                            <a href="/movies/{{$movies->id}}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
                @else
                    @foreach ( $movies as $movies)
                        <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                            <img src="{{asset('/'.$movies->imageThumbnail)}}" alt="" style="max-height: 300px">
                            <div class="card-body">
                                <h5 class="card-title">{{$movies->title}}</h5>
                                <p class="card-text">{{$movies->releaseDate}}</p>
                                <a href="#" class="btn btn-primary">Add to Watchlist</a>
                                <a href="/movies/{{$movies->id}}" class="stretched-link"></a>
                            </div>
                        </div>
                    @endforeach
            @endguest
            </div>
        </div>
    </content>
@endsection
