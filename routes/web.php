<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'genreDetails']);
Route::get('/actors', [Controller::class, 'viewActors']);
Route::get('/movies', [MovieController::class, 'viewMovies']);
Route::get('/movies/{id}', [MovieController::class, 'movieDetails']);
Route::get('/profile', [UserController::class, 'viewProfile']);
