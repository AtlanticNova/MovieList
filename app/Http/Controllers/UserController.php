<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use PHPUnit\Framework\Constraint\FileExists;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function viewProfile(){
        return view('user.profile');
    }

    public function updateProfile(Request $request, $id){
        $this->validate($request, [
            'username' => 'required|string|max:255|min:5',
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

    public function uploadPhoto(Request $request, $id){
        $this->validate($request, [
            'imageURL' => 'required|image|mimes:png,jpg'
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

    public function deletePhoto(Request $request, $id){
        $delete = DB::table('users')
        ->where('id', '=', $id)
        ->update(['imageURL'=>NULL]);

        return redirect('/profile')->with([
            'success' => 'Photo has been deleted'
        ]);
    }
}
