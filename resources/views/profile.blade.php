@extends('layout')
@section('headline', 'Profile')

@section('content')
    <content>
        <div style="height: 100vh; background-color:black; display:flex; flex-direction: row; align-items: center; justify-content:space-around" class="text-white d-flex align-items-center">
            <div class="flex-shrink-0" style="max-width: 300px; text-align:center">
                <h2>My Profile</h2>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="{{asset('/'.Auth::user()->imageURL)}}" class="rounded-circle mt-3 mb-3" alt="..." style="height: 130px; width: 130px">
                </button>
                <h5 class="mt-3 mb-3">{{Auth::user()->username}}</h5>
                <h5 style="color: grey">{{Auth::user()->email}}</h5>
            </div>
            <div class="flex-grow-1 ms-3" style="max-width:800px">
                <h2>Update Profile</h2>
                <form style="color: white; margin-top: 50px" method="POST" action="/profile/{{Auth::user()->id}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control bg-dark text-white" id="username" name="username" placeholder="Enter your username" style="border: none;" value={{Auth::user()->username}}>
                        @error('username')
                            <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control bg-dark text-white" id="email" name="email" placeholder="Enter your email" style="border: none;" value={{Auth::user()->email}}>
                        @error('email')
                            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="DOB">DOB</label>
                        <input type="date" class="form-control bg-dark text-white" id="DOB" name="DOB" placeholder="Enter your Date Of Birth" style="border: none;"  min="1900-01-01" max="2022-01-04" value={{Auth::user()->DOB}}>
                        @error('password')
                            <small id="passwordHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control bg-dark text-white" id="phone" name="phone" placeholder="Enter your Phone Number" style="border: none;" value={{Auth::user()->phone}}>
                    </div>
                    <button type="submit" class="btn btn-md btn-block mt-4" style="background-color:red; width:100%;">Save Update &#10140;</button>
                </form>
            </div>
            </div>
        </div>
        <div class="modal fade modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Update Image</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Image URL">
                        <div id="emailHelp" class="form-text">Please upload your image to other sources first and Use the URL</div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
        </div>
    </content>
@endsection
