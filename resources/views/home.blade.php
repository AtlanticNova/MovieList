@extends('layout')
@section('headline', 'Home')

@section('content')
    <div class="container-fluid text-white gx-0" style="background-color:black;">
            @guest
                <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner text-white">
                        @foreach ($hero as $hero)
                            <div class="carousel-item active" style="max-height: 600px">
                                <img src="{{ asset('/'.$hero->background)}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption text-white">
                                    <h5> {{$hero->name}} | {{$hero->releaseDate}} </h5>
                                    <h2>{{$hero->title}}</h2>
                                    <h5>{{$hero->description}}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="p-3">
                    <h3>Popular</h3>
                </div>
                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <h3>Show</h3>
                        <form class="d-flex">
                            <input class="form-control me-2 bg-dark" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-dark" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="justify-content-between pt-3">
                        @foreach ($genre as $genre)
                            <a href="/genre/{{$genre->id}}"><button type="button active" class="btn btn-dark">{{$genre->name}}</button></a>
                        @endforeach
                    </div>
                    <div class="pt-3" style="display: flex; flex-direction: row;align-items: center;">
                        <h6 class="ml-2">Sort By</h6>
                        <button type="button" class="btn btn-dark m-2">Latest</button>
                        <button type="button" class="btn btn-dark m-2">A-Z</button>
                        <button type="button" class="btn btn-dark m-2">Z-A</button>
                    </div>
                    <div style="display: flex; flex-direction: row; margin-top: 20px">
                        @foreach ($movies as $movies)
                            <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                                <img src="{{asset('/'.$movies->imageThumbnail)}}" alt="" style="max-height: 300px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$movies->title}}</h5>
                                    <p class="card-text">{{$movies->releaseDate}}</p>
                                    <a href="/movies" class="stretched-link"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @else
                    <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner text-white">
                            @foreach ($hero as $hero)
                                <div class="carousel-item active" style="max-height: 600px">
                                    <img src="{{ asset('/'.$hero->background)}}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption text-white">
                                        <h5> {{$hero->name}} | {{$hero->releaseDate}} </h5>
                                        <h2>{{$hero->title}}</h2>
                                        <h5>{{$hero->description}}</h5>
                                        <button>Add To Watchlist</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="p-3">
                        <h3>Popular</h3>
                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between">
                            <h3>Show</h3>
                            <form class="d-flex">
                                <input class="form-control me-2 bg-dark" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-dark" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="justify-content-between pt-3">
                            @foreach ($genre as $genre)
                                <a href="/genre/{{$genre->id}}"><button type="button active" class="btn btn-dark">{{$genre->name}}</button></a>
                            @endforeach
                        </div>
                        <div class="pt-3" style="display: flex; flex-direction: row;align-items: center;">
                            <h6 class="ml-2">Sort By</h6>
                            <button type="button" class="btn btn-dark m-2">Latest</button>
                            <button type="button" class="btn btn-dark m-2">A-Z</button>
                            <button type="button" class="btn btn-dark m-2">Z-A</button>
                        </div>
                        <div style="display: flex; flex-direction: row; margin-top: 20px">
                            @foreach ($movies as $movies)
                                <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                                    <img src="{{asset('/'.$movies->imageThumbnail)}}" alt="" style="max-height: 300px">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$movies->title}}</h5>
                                        <p class="card-text">{{$movies->releaseDate}}</p>
                                        <a href="#" class="btn btn-primary">Add to Watchlist</a>
                                        <a href="/movies" class="stretched-link"></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
            @endguest
    </div>
@endsection
