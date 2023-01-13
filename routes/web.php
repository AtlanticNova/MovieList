<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
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

//LOGIN USER
Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

// REGISTER USER
Route::get('/register', [RegisterController::class, 'showRegister']);
Route::post('/register', [RegisterController::class, 'register']);

//GENRE
Route::get('/genre/{id}', [GenreController::class, 'genreDetails']);

//ACTOR
Route::get('/actors', [ActorController::class, 'viewActors']);
Route::get('/actors/{id}', [ActorController::class, 'viewDetailActor']);

//MOVIES
Route::get('/movies', [MovieController::class, 'viewMovies']);
Route::get('/movies/{id}', [MovieController::class, 'movieDetails']);

//PROFILE
Route::get('/profile', [UserController::class, 'viewProfile']);
Route::post('/profile/{id}', [UserController::class, 'updateProfile']);
Route::post('/profile/upload/{id}', [UserController::class, 'uploadPhoto']);
Route::get('/profile/delete/{id}', [UserController::class, 'deletePhoto']);

//WATCHLIST
Route::get('/movie/{id}', [WatchlistController::class, 'addToWatchList']);
Route::get('/watchlists/{id}', [WatchlistController::class, 'addToWatchList']);
Route::get('/watchlists/update/{id}', [WatchlistController::class, 'updateStatus']);
Route::get('/watchlist/{id}', [WatchlistController::class, 'viewWatchlist']);

//ADMIN
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/dashboard', [AdminAuthController::class, 'viewDashboard'])->name('adminDashboard');
        //ACTORS PAGE
        Route::get('/actors',[AdminAuthController::class, 'viewActors']);
        Route::get('/actors/{id}', [AdminAuthController::class, 'viewDetailActor']);
        // MOVIES PAGE
        Route::get('/movies', [AdminAuthController::class, 'viewMovies']);
        Route::get('/movies/{id}', [AdminAuthController::class, 'movieDetails']);
        // ADD MOVIE
        Route::get('/addMovie', [AdminAuthController::class, 'showAddMovie']);
        Route::post('/movies/addMovie', [AdminAuthController::class, 'addMovie']);
        // REMOVE MOVIE
        Route::get('/remove/{id}', [AdminAuthController::class, 'deleteMovie']);
        // EDIT MOVIE
        Route::get('/edit/{id}', [AdminAuthController::class, 'showEditMovie']);
        Route::post('/movies/edit/{id}', [AdminAuthController::class, 'editMovie']);
        // ADD ACTOR
        Route::get('/actor/add', [AdminAuthController::class, 'showAddActor']);
        Route::post('/actors/addActors', [AdminAuthController::class, 'addActor']);
        // EDIT ACTOR DETAIL
        Route::get('/actor/edit/{id}', [AdminAuthController::class, 'showEditActor']);
        Route::post('/actors/edit/{id}', [AdminAuthController::class, 'editActor']);
        // DELETE ACTOR
        Route::get('/actor/remove/{id}', [AdminAuthController::class, 'deleteActor']);
    });
});
