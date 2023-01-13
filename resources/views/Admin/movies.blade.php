@extends('Admin.layout')
@section('headline', 'Movie')

@section('content')
    <content>
        <div style="background-color: black; padding:40px;min-height: 100vh">
            <div class="d-flex justify-content-between text-white" style="padding-left: 70px; padding-right:70px">
                <h1>Movie</h1>
                <div>
                    <form class="d-flex">
                        <input class="form-control me-2 bg-dark text-white" type="search" placeholder="Search" aria-label="Search" name="search" value="{{ old('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="justify-content-between pt-3" style="padding-left:65px">
                @foreach ($genre as $genre)
                    <a href="/genre/{{$genre->id}}"><button type="button active" class="btn btn-dark">{{$genre->name}}</button></a>
                @endforeach
            </div>
            <div style="display: flex; flex-direction: row; justify-content: center;align-items: center;padding-left: 30px;">
                <div class="row row-cols-1 row-cols-md-4 g-1" style="display: flex; flex-direction: row; margin-top: 20px">
                    @foreach ( $movies as $movies)
                        <div class="card bg-dark text-white mb-2" style="width: 15rem;margin-left: 40px;">
                            <img src="{{asset('images/'.$movies->imageThumbnail)}}" alt="" style="max-height: 300px">
                            <div class="card-body">
                                <h5 class="card-title">{{$movies->title}}</h5>
                                <p class="card-text">{{$movies->releaseDate}}</p>
                                <a href="/admin/movies/{{$movies->id}}" class="stretched-link"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </content>
@endsection
