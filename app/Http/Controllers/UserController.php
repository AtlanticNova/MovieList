<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function viewProfile(){
        return view('profile');
    }

    public function updateProfile(Request $request, $id){
        $this->validate($request, [
            'username' => 'required|string|max:255|min:5|unique:users',
            'email' => 'required|string|max:255|min:5',
            'DOB' => 'required',
            'phone' => 'required|numeric'
        ]);

        $update = DB::table('users')->where('id','=',$id)
            ->update([
                'username' =>$request->username,
                'email' =>$request->email,
                'DOB' =>$request->DOB,
                'phone' =>$request->phone
        ]);

        return redirect('/profile')->with([
            'success' => 'Post has been updated successfully'
        ]);;
    }

    public function store(Request $request, $id){
        $this->validate($request, [
            'imageURL' => 'required|image|mimes:jpg'
        ]);

        $update = DB::table('users')->where('id', '=', $id)
        ->update([
            'imageURL' => $request->imageURL->getClientOriginalName(),
        ]);

        $path = 'images';
        $image = $request->imageURL->getClientOriginalName();
        $request->imageURL->move(public_path($path), $image);

        return redirect('/profile')->with([
            'success' => 'Photo has been updated successfully'
        ]);
    }
}
