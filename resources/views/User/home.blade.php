@extends('user.layout')
@section('headline', 'Home')

@section('content')
    <div class="container-fluid text-white gx-0" style="background-color:black;">
            @guest
                <div id="carouselExampleIndicators" class="carousel carousel-white slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner text-white">
                        @foreach ($hero as $hero)
                            <div class="carousel-item active" style="max-height: 600px">
                                <img src="{{ asset('images/'.$hero->background)}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption text-white">
                                    <h5>{{$hero->name}} | {{$hero->releaseDate}}</h5>
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
                    <div class="row row-cols-1 row-cols-md-4 g-1" style="display: flex; flex-direction: row; margin-top: 20px">
                        @foreach ($popular as $p)
                            <div class="card bg-dark text-white mb-2" style="width: 15rem;margin-left: 20px;">
                                <img src="{{asset('images/'.$p->imageThumbnail)}}" alt="" style="max-height: 300px">
                                <div class="card-body">
                                    <p class="card-text" style="transform: rotate(0);">
                                        <h5 class="card-title">{{$p->title}}</h5>
                                        <p class="card-text">{{$p->releaseDate}}</p>
                                        <a href="/movies/{{$p->id}}" class=" text-white stretched-link"></a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <h3>Show</h3>
                        <form class="d-flex">
                            <input class="form-control me-2 bg-dark text-white" type="search" placeholder="Search" aria-label="Search" name="search" value="{{ old('search') }}">
                            <button class="btn btn-dark" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="justify-content-between pt-3">
                        @foreach ($genre as $genre)
                            <a href="/genre/{{$genre->id}}"><button type="button active" class="btn btn-dark">{{$genre->name}}</button></a>
                        @endforeach
                    </div>
                    <div class="p-3" style="display: flex; flex-direction: row;align-items: center;">
                        <div style="display:flex; flex-direction: row;justify-content: space-around;align-items: center; padding-right: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-filter-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M7 11.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <h6 class="ml-3" style="padding-left: 10px">Sort By</h6>
                        </div>
                        <div class="pl-3">
                            <form action="" method="POST">
                                @csrf
                                <select class="form-select" aria-label="Default select example" style="max-width:170px" wire:model="sorting">
                                    <option selected>Default</option>
                                    <option value="latest">Latest</option>
                                    <option value="asc">A-Z</option>
                                    <option value="desc">Z-A</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-4 g-1" style="display: flex; flex-direction: row; margin-top: 20px" style="display: flex; flex-direction: row; margin-top: 20px">
                        @foreach ($movies as $movie)
                            <div class="card bg-dark text-white mb-2" style="width: 15rem;margin-left: 20px;">
                                <img src="{{asset('images/'.$movie->imageThumbnail)}}" alt="" style="max-height: 300px">
                                <div class="card-body">
                                    <h5 class="card-title">{{$movie->title}}</h5>
                                    <p class="card-text">{{$movie->releaseDate}}</p>
                                    <a href="/movies" class="stretched-link"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination justify-content-end">
                        {{$movies->links()}}
                    </div>
                </div>
                @else
                    <div id="carouselExampleIndicators" class="carousel carousel-white slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner text-white">
                            @foreach ($hero as $hero)
                                <div class="carousel-item active" style="max-height: 600px">
                                    <img src="{{ asset('images/'.$hero->background)}}" class="d-block w-100 bg-dark-subtle" style="--bs-bg-opacity: .5;" alt="...">
                                    <div class="carousel-caption text-white bg-dark-subtle">
                                        <h5>{{$hero->name}} | {{$hero->releaseDate}}</h5>
                                        <h2>{{$hero->title}}</h2>
                                        <h5>{{$hero->description}}</h5>
                                        <button class="btn btn-light">Add To Watchlist</button>
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
                        <div class="row row-cols-1 row-cols-md-4 g-1" style="display: flex; flex-direction: row; margin-top: 20px">
                            @foreach ($popular as $p)
                                <div class="card bg-dark text-white mb-2" style="width: 15rem;margin-left: 20px;">
                                    <img src="{{asset('images/'.$p->imageThumbnail)}}" alt="" style="max-height: 300px">
                                    <div class="card-body">
                                        <p class="card-text" style="transform: rotate(0);">
                                            <h5 class="card-title">{{$p->title}}</h5>
                                            <p class="card-text">{{$p->releaseDate}}</p>
                                            <a href="/movies/{{$p->id}}" class=" text-white stretched-link"></a>
                                        </p>
                                        <p>
                                            <a href="/watchlists/{{$p->id}}" class="btn btn-primary stretched-link" style="position: relative;">Add to Watchlist</a>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between">
                            <h3>Show</h3>
                            <form class="d-flex">
                                <input class="form-control me-2 bg-dark text-white" type="search" placeholder="Search" aria-label="Search" name="search" value="{{ old('search') }}">
                                <button class="btn btn-dark" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="justify-content-between pt-3">
                            @foreach ($genre as $genre)
                                <a href="/genre/{{$genre->id}}"><button type="button active" class="btn btn-dark">{{$genre->name}}</button></a>
                            @endforeach
                        </div>
                        <div class="pt-3" style="display: flex; flex-direction: row;align-items: center;">
                            <div style="display:flex; flex-direction: row;justify-content: space-around;align-items: center; padding-right: 15px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-filter-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M7 11.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                                <h6 class="ml-3" style="padding-left: 10px">Sort By</h6>
                            </div>
                            <div class="pl-3">
                                <form action="/" method="GET" class="d-flex">
                                    @csrf
                                    <select name="sorting" class="form-select" aria-label="Default select example" style="max-width:170px;border: none;">
                                        <option value="default" selected>Default</option>
                                        <option value="latest">Latest</option>
                                        <option value="asc">A-Z</option>
                                        <option value="desc">Z-A</option>
                                    </select>
                                    <button class="btn btn-dark" type="submit">Sort</button>
                                </form>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-4 g-1" style="display: flex; flex-direction: row; margin-top: 20px">
                            @foreach ($movies as $movie)
                                <div class="card bg-dark text-white mb-2" style="width: 15rem;margin-left: 20px;">
                                    <img src="{{asset('images/'.$movie->imageThumbnail)}}" alt="" style="max-height: 300px">
                                    <div class="card-body">
                                        <p class="card-text" style="transform: rotate(0);">
                                            <h5 class="card-title">{{$movie->title}}</h5>
                                            <p class="card-text">{{$movie->releaseDate}}</p>
                                            <a href="/movies/{{$movie->id}}" class=" text-white stretched-link"></a>
                                        </p>
                                        <p>
                                            @php
                                                $flag = 0;
                                            @endphp
                                            @foreach ($watchlist as $w)
                                                @if ($w->movies_id == $movie->id)
                                                    <a href="/watchlists/{{$movie->id}}">
                                                        <button class="btn btn-success stretched-link" disabled style="position: relative;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                                            </svg>Already on Watchlist
                                                        </button>
                                                    </a>
                                                    @php
                                                        $flag=1;
                                                    @endphp
                                                    @break
                                                @endif
                                            @endforeach
                                            @if ($flag == 0)
                                                <a href="/watchlists/{{$movie->id}}">
                                                    <button class="btn btn-primary stretched-link" style="position: relative;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                                          </svg>Add to Watchlist
                                                    </button>
                                                </a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination justify-content-end">
                            {{$movies->links()}}
                        </div>
                    </div>
            @endguest
    </div>
@endsection
