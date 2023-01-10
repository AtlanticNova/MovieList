<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin(){
        return view('user.auth.login');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    protected function redirectTo(){
        if (Auth::user()->role == 'admin'){
            return redirect('/admin/dashboard');
        } else {
            return redirect('/');
        }
    }

    public function login(Request $request){
        $request->validate([
            'email'=> 'required|string',
            'password' => 'required|min:6|alpha_num'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $valid = Auth::attempt($credentials, $request->remember);

        if(!$valid) {
            return redirect()->back()->withErrors("Wrong combination of Email and Password");
        }

        if($request->remember) {
            Cookie::queue('email', $request->email, 120);
            Cookie::queue('pass', $request->password, 120);
        }
        else {
            Cookie::queue(Cookie::forget("email"));
            Cookie::queue(Cookie::forget("pass"));
        }

        return $this->redirectTo();
    }
}
