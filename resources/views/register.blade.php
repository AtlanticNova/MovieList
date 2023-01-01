@extends('layout')
@section('headline', 'Register')

@section('content')
    <content>
        <div class="container-fluid" style="background-color:black; min-width:100vh; max-width:100%;margin: 0 auto;padding:98px;">
            <div class="container justify-content-center" style="max-width:700px">
                <h4 style="color:white; text-align: center">Hello, Welcome to <span style="color: red">Movie</span>List</h1>
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
                <div class="container text-center mt-1">
                    <small style="color: white; text-align: center">Already have an account? <a style="color: red" href="url{{'/login'}}">Login Now!</a></small>
                </div>
            </div>
        </div>
    </content>
@endsection
