<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function(){
    return view('home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/actors', [Controller::class, 'viewActors']);
Route::get('/movies', [Controller::class, 'viewMovies']);
