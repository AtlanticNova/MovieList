@extends('user.layout')
@section('headline', 'Movies')

@section('content')
    <content>
        <div style="background-color:black;padding:40px;min-height: 100vh">
            <div style="padding-left: 70px; padding-right:70px">
                <h1 class="text-white">Movies</h1>
            </div>
            <div class="justify-content-between pt-3" style="padding-left:65px">
                @foreach ($genre as $genre)
                    <a href="/genre/{{$genre->id}}"><button type="button active" class="btn btn-dark">{{$genre->name}}</button></a>
                @endforeach
            </div>
            <div style="display: flex; flex-direction: row; justify-content: center;align-items: center;padding-left: 30px;">
                <div class="row row-cols-1 row-cols-md-4 g-1" style="display: flex; flex-direction: row; margin-top: 20px; padding-bottom: 20px">
                    @guest
                        @foreach ($movies as $movies)
                            <div class="card bg-dark text-white mb-2" style="width: 15rem;margin-left: 20px;">
                                <img src="{{ asset('images/' . $movies->imageThumbnail) }}" alt="" style="max-height: 300px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movies->title }}</h5>
                                    <p class="card-text">{{ $movies->releaseDate }}</p>
                                    <a href="/movies/{{ $movies->id }}" class="stretched-link"></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @foreach ($movies as $movie)
                            <div class="card bg-dark text-white" style="width: 15rem;margin-left: 40px;">
                                <img src="{{ asset('images/' . $movie->imageThumbnail) }}" alt="" style="max-height: 300px">
                                <div class="card-body">
                                    <p class="card-text" style="transform: rotate(0);">
                                    <h5 class="card-title">{{ $movie->title }}</h5>
                                    <p class="card-text">{{ $movie->releaseDate }}</p>
                                    <a href="/movies/{{ $movie->id }}" class=" text-white stretched-link"></a>
                                    <a href="/watchlists/{{ $movie->id }}" class="btn btn-primary stretched-link"
                                        style="position: relative;">Add to Watchlist</a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
            @endguest
        </div>
    </content>
@endsection
