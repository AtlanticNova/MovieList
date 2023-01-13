@extends('admin.layout')
@section('headline', 'Edit Actor')

@section('content')
    <content>
        <div class="container-fluid" style="background-color:black; padding:57.5px">
            <div class="container">
                <h4 style="color:white;">Edit Actor</h1>
                <form style="color: white; margin-top: 50px" method="POST" action="/admin/actors/edit/{{$actor->id}}" enctype="multipart/form-data">
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <a><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                    </div>
                    @endif
                    @csrf
                    <div class="form-group mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control bg-dark text-white" id="name" name="name" style="border: none;" value="{{$actor->name}}">
                        @error('name')
                            <small id="nameHelp" class="form-text text-danger" >{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select bg-dark text-white select2" id="gender" style="border: none;" value="{{$actor->gender}}" name="gender">
                            <option value="{{$actor->gender}}" disabled selected>{{$actor->gender}}</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                        @error('gender')
                            <small id="genderHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form group mt-3">
                        <label for="biography" class="form-label">Biography</label>
                        <textarea class="form-control bg-dark text-white" id="biography" rows="3" style="border: none;" name="biography" value="{{$actor->biography}}">{{$actor->biography}}</textarea>
                        @error('biography')
                            <small id="bioHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control bg-dark text-white" id="dob" name="dob" style="border: none;" value="{{$actor->DOB}}">
                        @error('dob')
                            <small id="dobHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="pob">Place of Birth</label>
                        <input type="text" class="form-control bg-dark text-white" id="pob" name="pob" style="border: none;" value="{{$actor->POB}}">
                        @error('pob')
                            <small id="pobHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="formFile" class="form-label">Image URL</label>
                        <input class="form-control bg-dark text-white" type="file" id="imageURL" name="imageURL" style="border: none;" value="{{$actor->imageURL}}">
                        @error('imageURL')
                            <small id="imgHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="popularity">Popularity</label>
                        <input type="text" class="form-control bg-dark text-white" id="popularity" name="popularity" style="border: none;" value="{{$actor->popularity}}">
                        @error('popularity')
                            <small id="popularityHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-block mt-4" style="background-color:red; width:100%;">Create</button>
                </form>
            </div>
        </div>
    </content>
@endsection
