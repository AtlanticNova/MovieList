@extends('layout')
@section('headline', 'Profile')

@section('content')
    <content>
        <div style="max-height: 100vh;background-color:black" class="text-white">
            <div>
                <h2>My Profile</h2>
                <img src="{{asset('/'.Auth::user()->imageURL)}}" class="rounded-circle" alt="..." style="height: 100px; width: 100px">
                <h5>{{Auth::user()->username}}</h5>
                <h5>{{Auth::user()->email}}</h5>
            </div>
            <div>
                <h2>Update Profile</h2>
                <form style="color: white; margin-top: 50px" method="POST" action="{{url('/register')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control bg-dark text-white" id="username" name="username" placeholder="Enter your username" style="border: none;">
                        @error('username')
                            <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control bg-dark text-white" id="email" name="email" placeholder="Enter your email" style="border: none;">
                        @error('email')
                            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control bg-dark text-white" id="password" name="password" placeholder="Enter your password" style="border: none;">
                        @error('password')
                            <small id="passwordHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control bg-dark text-white" id="password" name="password_confirmation" placeholder="Enter your confirm password" style="border: none;">
                      </div>
                    <button type="submit" class="btn btn-md btn-block mt-4" style="background-color:red; width:100%;">Register &#10140;</button>
                </form>
            </div>
            </div>
        </div>
    </content>
@endsection
