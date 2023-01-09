<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatchlistController;
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
Route::get('/', [HomeController::class, 'render']);
Route::get('/genre/{id}', [GenreController::class, 'genreDetails']);
Route::get('/actors', [ActorController::class, 'viewActors']);
Route::get('/actors/{id}', [ActorController::class, 'viewDetailActor']);
Route::get('/movies', [MovieController::class, 'viewMovies']);
Route::get('/movies/{id}', [MovieController::class, 'movieDetails']);
Route::get('/profile', [UserController::class, 'viewProfile']);
Route::post('/profile/{id}', [UserController::class, 'updateProfile']);
Route::get('/watchlist/{id}', [WatchlistController::class, 'viewWatchlist']);
Route::get('/watchlists/{id}', [WatchlistController::class, 'addToWatchList']);
Route::post('/watchlists/update/{id}', [WatchlistController::class, 'updateStatus']);
Route::get('/movie/{id}', [WatchlistController::class, 'addToWatchList']);
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('Admin.dashboard');
        })->name('adminDashboard');

    });
});
