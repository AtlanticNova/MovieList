@extends('admin.layout')
@section('headline', 'Movie Details')

@section('content')
    <content>
        <div class="text-white" style="display: flex; flex-direction: column;justify-content: space-evenly;background-color:black">
            @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <a><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                    </div>
            @endif
            <div style="padding:100px;background-repeat: no-repeat;height: 100%; background-position: center; background-size: cover;background-color: rgb(0,0,0); background: linear-gradient(rgba(0, 0, 0, 0.438),rgba(0, 0, 0, 0.616)), url(/images/{{$movie->background}}); ">
                <div style="display: flex; flex-direction: row;justify-content: space-evenly;align: center;">
                    <img src="{{asset('images/'.$movie->imageThumbnail)}}" alt="" style="max-width: 300px; margin-right: 20px">
                    <div style="display: flex; flex-direction: column;justify-content: space-evenly;align: center">
                        <div style="display: flex; flex-direction: row;justify-content: space-between;align: center;">
                            <h1>{{$movie->title}}</h3>
                            <div>
                                <a href="/admin/edit/{{$movie->id}}">
                                    <button type="button" class="btn btn-outline-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </button>
                                </a>
                                <a href="/admin/remove/{{$movie->id}}">
                                    <button type="button" class="btn btn-outline-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
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
                                    <a href="/admin/actors/{{$movieActor->actor_id}}" class="stretched-link"></a>
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
                                <a href="/admin/movies/{{$movies->id}}" class="stretched-link"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </content>
@endsection
