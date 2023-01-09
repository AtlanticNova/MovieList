@extends('layout')
@section('headline', 'Login')

@section('content')
    <content>
        <div class="container-fluid" style="background-color:black; min-width:100vh; max-width:100%;padding:70px; height:100%;">
            <div class="container justify-content-center" style="max-width:700px; height: 53.4vh; display: flex; flex-direction: column;justify-content: center; align-content: center">
                <h4 style="color:white; text-align: center">Hello, Welcome to <span style="color: red">Movie</span>List</h1>
                <form style="color: white; margin-top: 50px" method="POST" action="{{url('/login')}}">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control bg-dark text-white" id="email" name="email" placeholder="Enter your email" style="border: none;" value="{{ old('email') }}">
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
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" value="1" id="remember" name="rember">
                        <label class="form-check-label" for="remember">
                          Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-md btn-block mt-4" style="background-color:red; width:100%;">Login &#10140;</button>
                </form>
                <div class="container text-center mt-1">
                    <small style="color: white; text-align: center">Don't have an account? <a style="color: red" href="/register">Register Now!</a></small>
                </div>
            </div>
        </div>
    </content>
@endsection
