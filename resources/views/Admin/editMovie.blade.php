@extends('admin.layout')
@section('headline', 'Edit Movie')

@section('content')
    <content>
        <div class="container-fluid" style="background-color:black; padding:57.5px">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <a><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>
            @endif
            <div class="container">
                <h4 style="color:white;">Edit Movie</h1>
                <form style="color: white; margin-top: 50px" method="POST" action="/admin/movies/edit/{{$movie->id}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control bg-dark text-white" id="title" name="title" style="border: none;" value="{{$movie->title}}">
                        @error('title')
                            <small id="titleHelp" class="form-text text-danger" >{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control bg-dark text-white" id="description" rows="3"  style="border: none;" name="description" value="{{$movie->description}}">{{$movie->description}}</textarea>
                        @error('description')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3 wrapper2">
                        <label for="genre">Genre</label>
                        @foreach ($genre as $genre)
                            <select class="form-select bg-dark text-white mb-3" id="autoSizingSelect" style="border: none;" name="inputGenre[][genre]">
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                                @foreach ($genres as $g)
                                    <option value="{{$g->id}}">{{$g->name}}</option>
                                @endforeach
                            </select>
                            @error('inputGenre[0][genre]')
                                <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        @endforeach
                    </div>
                    <h5 style="padding-top: 20px">Actors</h5>
                    <div style="padding-left: 20px">
                        <div class="form-group mt-3 wrapper">
                            @foreach ($actors as $a)
                                <div class="row">
                                    <div class="col">
                                        <label for="actor">Actor</label>
                                        <select class="form-select bg-dark text-white mb-3" id="autoSizingSelect" style="border: none;" name="input[0][actor]">
                                            <option value="{{$a->id}}">{{$a->name}}</option>
                                            @foreach ($allActor as $ac)
                                                <option value="{{$ac->id}}">{{$ac->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('actor')
                                            <small id="actorHelp" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="characterName">Character Name</label>
                                        <input type="text" class="form-control bg-dark text-white" aria-label="Last name" id="characterName" style="border: none;" value="{{$a->characterName}}" name="input[0][character]">
                                        @error('characterName')
                                            <small id="characterNameHelp" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-end pt-3">
                            <button type="button" name="add" id="add-btn" class="btn btn-danger justify-content-end">Add More</button>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="director">Director</label>
                        <input type="text" class="form-control bg-dark text-white" id="director" name="director" style="border: none;" value="{{$movie->director}}">
                        @error('description')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="releaseDate">Release Date</label>
                        <input type="date" class="form-control bg-dark text-white" id="releaseDate" name="releaseDate" style="border: none;" value="{{$movie->releaseDate}}">
                        @error('description')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image URL</label>
                        <input class="form-control  bg-dark text-white" type="file" id="formFile" name="ImageURL" style="border: none;" value="{{$movie->imageURL}}">
                        @error('ImageURL')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Background URL</label>
                        <input class="form-control  bg-dark text-white" type="file" id="formFile" name="BackgroundURL" style="border: none;" value="{{$movie->background}}">
                        @error('BackgroundURL')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-block mt-4" style="background-color:red; width:100%;">Edit</button>
                </form>
            </div>
        </div>
    </content>
    <script>
        $(document).ready(function() {
            var i = 0;
            var j = 0;
            $("#add-btn").click(function(){
                ++i;
                $(".wrapper").append(`
                    <div class="row">
                        <div class="col">
                            <label for="actor">Actor</label>
                            <select class="form-select bg-dark text-white mb-3" id="autoSizingSelect" style="border: none;" name="input[`+i+`][actor]">
                                <option value="{{$a->id}}">{{$a->name}}</option>
                                @foreach ($allActor as $ac)
                                    <option value="{{$ac->id}}">{{$ac->name}}</option>
                                @endforeach
                            </select>
                            @error('actor')
                                <small id="actorHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="characterName">Character Name</label>
                            <input type="text" class="form-control bg-dark text-white" aria-label="Last name" id="characterName" style="border: none;" name="input[`+i+`][character]">
                            @error('characterName')
                                <small id="characterNameHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                `);
            });
        });
    </script>
@endsection
