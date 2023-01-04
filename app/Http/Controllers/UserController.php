<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewProfile(){
        return view('profile');
    }
}
