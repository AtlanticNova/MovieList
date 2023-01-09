<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WatchlistController extends Controller
{
    public function viewWatchlist(Request $request, $id){
        $search = $request->search;
        if($search!=""){
            $watchlist = DB::table('watchlists')
                        ->select('movies.*','watchlists.status','watchlists.id AS w_id')
                        ->join('movies', 'movies.id', '=','watchlists.movies_id')
                        ->where('users_id',$id)
                        ->where('title','LIKE',"%{$search}%")
                        ->paginate(5);
        }
        else{
            $watchlist = DB::table('watchlists')
                        ->select('movies.*','watchlists.status','watchlists.id AS w_id')
                        ->join('movies', 'movies.id', '=','watchlists.movies_id')
                        ->where('users_id',$id)
                        ->paginate(5);
        }
        return view('watchlist',[
            'watchlist' => $watchlist
        ]);
    }

    public function addToWatchList($id){
        if(Watchlist::where('movies_id', $id)->where('users_id', Auth::user()->id)->exists()){
            return redirect()->back()->with('message', 'Already in Watchlist');
        }
        DB::table('watchlists')->insert([
            [
                'movies_id'=>$id,
                'users_id'=> Auth::user()->id,
                'status' =>'Planning'
            ]
        ]);
        return redirect()->back();
    }

    public function updateStatus(Request $request,$id){
        // $search = Watchlist::where('')
        $status = $request->status;
        if($status != 'Remove'){
            DB::table('watchlist')
                ->where('users_id', Auth::user()->id)
                ->where('id', $id)
                ->update(['status', $status]);
        } else{
            DB::table('watchlist')
            ->where('users_id', Auth::user()->id)
            ->where('id', $id)
            ->delete();
        }

        return redirect()->back();
    }
}
