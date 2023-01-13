@extends('user.layout')
@section('headline', 'Movies')

@section('content')
    <content>
        <div style="background-color:black;">
            <div style="padding-left: 20px; padding-top: 20px; ">
                <h1 class="text-white">Movies</h1>
                <div class="justify-content-between pt-3">
                    @foreach ($genre as $genre)
                        <a href="/genre/{{ $genre->id }}"><button type="button active"
                                class="btn btn-dark">{{ $genre->name }}</button></a>
                    @endforeach
                </div>
            </div>
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
                        <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                            <img src="{{ asset('images/' . $movie->imageThumbnail) }}" alt="" style="max-height: 300px">
                            <div class="card-body">
                                <p class="card-text" style="transform: rotate(0);">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <p class="card-text">{{ $movie->releaseDate }}</p>
                                <a href="/movies/{{ $movie->id }}" class=" text-white stretched-link"></a>
                                <a href="/watchlists/{{ $movie->id }}" class="btn btn-primary stretched-link"
                                    style="position: relative;">Add to Watchlist</a>
                                </p>
                                {{-- <p>
                                    @if ($movies->users_id != null && $movies->users_id == Auth::user()->id)
                                        <a href="/watchlists/{{$movie->id}}" class="btn btn-primary stretched-link" style="position: relative;">Already in Watchlist</a>
                                        @else
                                    @endif
                                </p> --}}
                            </div>
                        </div>
                    @endforeach
                @endguest
            </div>
        </div>
    </content>
@endsection
