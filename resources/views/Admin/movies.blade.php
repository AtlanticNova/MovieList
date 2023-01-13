@extends('Admin.layout')
@section('headline', 'Movie')

@section('content')
    <content>
        <div style="padding:51.5px; background-color:black;">
            <div class="justify-content-between pt-3">
                @foreach ($genre as $genre)
                    <a href="/genre/{{$genre->id}}"><button type="button active" class="btn btn-dark">{{$genre->name}}</button></a>
                @endforeach
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-1" style="display: flex; flex-direction: row; margin-top: 20px">
                @foreach ( $movies as $movies)
                    <div class="card bg-dark text-white mb-2" style="width: 15rem;margin-left: 20px;">
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
    </content>
@endsection
