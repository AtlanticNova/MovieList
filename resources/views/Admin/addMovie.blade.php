@extends('admin.layout')
@section('headline', 'Add Movie')

@section('content')
    <content>
        <div class="container-fluid" style="background-color:black; padding:57.5px">
            <div class="container">
                <h4 style="color:white;">Add Movie</h1>
                <form style="color: white; margin-top: 50px" method="POST" action="/admin/movies/addMovie" enctype="multipart/form-data">
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <a><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                    </div>
                    @endif
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control bg-dark text-white" id="title" name="title" style="border: none;">
                        @error('title')
                            <small id="titleHelp" class="form-text text-danger" >{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form group mt-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control bg-dark text-white" id="description" rows="3" style="border: none;" name="description"></textarea>
                        @error('description')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="wrapper2">
                        <div class="form-group mt-3 mb-3">
                            <label for="genre">Genre</label>
                            <select class="form-select bg-dark text-white select2" id="autoSizingSelect" style="border: none;" name="inputGenre[0][genre]">
                                <option value="" disabled selected>Select an option</option>
                                @foreach ($genres as $g)
                                    <option value="{{$g->id}}">{{$g->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end pt-3">
                        <button type="button" name="add" id="add-btn2" class="btn btn-danger justify-content-end">Add More</button>
                    </div>
                    <h5 style="padding-top: 20px">Actors</h5>
                    <div style="padding-left: 20px">
                        <div class="form-group mt-3 wrapper">
                            <div class="row">
                                <div class="col">
                                    <label for="actor">Actor</label>
                                    <select class="form-select bg-dark text-white" id="autoSizingSelect" style="border: none;" name="input[0][actor]">
                                        <option selected disabled><--- Open This Select Menu ---></option>
                                        @foreach ($actors as $a)
                                            <option value="{{$a->id}}">{{$a->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('actor')
                                        <small id="actorHelp" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="characterName">Character Name</label>
                                    <input type="text" class="form-control bg-dark text-white" aria-label="Last name" id="characterName" style="border: none;" name="input[0][character]">
                                    @error('characterName')
                                        <small id="characterNameHelp" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end pt-3">
                            <button type="button" name="add" id="add-btn" class="btn btn-danger justify-content-end">Add More</button>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="director">Director</label>
                        <input type="text" class="form-control bg-dark text-white" id="director" name="director" style="border: none;">
                        @error('description')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="releaseDate">Release Date</label>
                        <input type="date" class="form-control bg-dark text-white" id="releaseDate" name="releaseDate" style="border: none;">
                        @error('description')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="formFile" class="form-label">Image URL</label>
                        <input class="form-control bg-dark text-white" type="file" id="ImageURL" name="ImageURL" style="border: none;">
                        @error('description')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="formFile" class="form-label">Background URL</label>
                        <input class="form-control bg-dark text-white" type="file" id="BackgroundURL" name="BackgroundURL" style="border: none;">
                        @error('description')
                            <small id="descHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-block mt-4" style="background-color:red; width:100%;">Create</button>
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
                            <select class="form-select bg-dark text-white" id="autoSizingSelect" style="border: none;" name="input[`+i+`][actor]">
                                <option selected><--- Open This Select Menu ---></option>
                                @foreach ($actors as $a)
                                    <option value="{{$a->id}}">{{$a->name}}</option>
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

            $("#add-btn2").click(function(){
                ++j;
                $(".wrapper2").append(`
                        <select class="form-select bg-dark text-white select2 mb-3" id="autoSizingSelect" style="border: none;" name="inputGenre[`+j+`][genre]">
                            <option value="" disabled selected>Select an option</option>
                            @foreach ($genres as $g)
                                <option value="{{$g->id}}">{{$g->name}}</option>
                            @endforeach
                        </select>
                `);
            });
        });
    </script>
@endsection
