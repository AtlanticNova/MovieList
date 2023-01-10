@extends('user.layout')
@section('headline', 'Genre')

@section('content')
    <content>
        <div style="padding:51.5px; background-color:black; height: 100vh">
            <div style="padding:10px; color:white">
                <h3>{{$genre->name}}</h3>
            </div>
            <div style="display: flex; flex-direction: row; margin-top: 20px">
            @guest
                @foreach ( $selectedGenre as $sg)
                    <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                        <img src="{{asset('images/'.$sg->imageThumbnail)}}" alt="" style="max-height: 300px">
                        <div class="card-body">
                            <h5 class="card-title">{{$sg->title}}</h5>
                            <p class="card-text">{{$sg->releaseDate}}</p>
                            <a href="/movies/{{$sg->id}}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
                @else
                    @foreach ( $selectedGenre as $sg)
                        <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                            <img src="{{asset('images/'.$sg->imageThumbnail)}}" alt="" style="max-height: 300px">
                            <div class="card-body">
                                <h5 class="card-title">{{$sg->title}}</h5>
                                <p class="card-text">{{$sg->releaseDate}}</p>
                                <a href="#" class="btn btn-primary">Add to Watchlist</a>
                                <a href="/movies/{{$sg->id}}" class="stretched-link"></a>
                            </div>
                        </div>
                    @endforeach
            @endguest
            </div>
        </div>
    </content>
@endsection
