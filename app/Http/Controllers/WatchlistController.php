<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WatchlistController extends Controller
{
    public function viewWatchlist(Request $request, $user_id){
        $search = $request->search;
        if($search!=""){
            $watchlist = DB::table('watchlists')
                        ->select('movies.*','watchlists.status_id','watchlists.id AS w_id')
                        ->join('movies', 'movies.id', '=','watchlists.movies_id')
                        ->join('status', 'status.id', '=', 'watchlists.status_id')
                        ->where('users_id',$user_id)
                        ->where('title','LIKE',"%{$search}%")
                        ->paginate(5);
        }
        else{
            $watchlist = DB::table('watchlists')
                        ->select('movies.*','watchlists.status_id','watchlists.id AS w_id', 'status.status')
                        ->join('movies', 'movies.id', '=','watchlists.movies_id')
                        ->join('status', 'status.id', '=', 'watchlists.status_id')
                        ->where('users_id', $user_id)
                        ->paginate(5);
        }

        $sort = $request->sorting;

        if($sort != 'all'){
            $watchlist = DB::table('watchlists')
                        ->select('movies.*','watchlists.status_id','watchlists.id AS w_id', 'status.status')
                        ->join('movies', 'movies.id', '=','watchlists.movies_id')
                        ->join('status', 'status.id', '=', 'watchlists.status_id')
                        ->where('status.id', $sort)
                        ->paginate(5);
        }
        $watchlist = DB::table('watchlists')
                    ->select('movies.*','watchlists.status_id','watchlists.id AS w_id', 'status.status')
                    ->join('movies', 'movies.id', '=','watchlists.movies_id')
                    ->join('status', 'status.id', '=', 'watchlists.status_id')
                    ->where('users_id', $user_id)
                    ->paginate(5);

        return view('user.watchlist',[
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
                'status_id' =>'1'
            ]
        ]);
        return redirect()->back();
    }

    public function updateStatus(Request $request, $id){
        $status = $request->status;
        if($status != 'Remove'){
            DB::table('watchlists')
            ->where('users_id', Auth::user()->id)
            ->where('id', $id)
            ->update(['status_id'=>$request->status]);
        } else {
            DB::table('watchlists')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->back();
    }
}
