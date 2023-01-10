<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegister(){
        return view('user.auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'min:5', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'min:5'],
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        Auth::attempt($credentials);

        return redirect('/');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
