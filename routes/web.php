<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Http\Controllers\MovieController;

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

// ALL MOVIES //
Route::get('/', [MovieController::class, 'index']);


// SHOW CREATE FORM //
Route::get('/movie/create', [MovieController::class, 'create']);


// STORE MOVIE DATA //
Route::post('/movie', [MovieController::class, 'store']);


// SHOW EDIT FORM //
Route::get('/movie/{movie}/edit',[MovieController::class, 'edit']);


// UPDATE MOVIE //
Route::put('/movie/{movie}', [MovieController::class, 'update']);


// SINGLE MOVIE //
Route::get('/movie/{movie}', [MovieController::class, 'show']);




// Common Resources Routes :

// index - Show all movies
// show - Show single movie
// create - Show form to create new movie
// store - Store all movie
// edit - Show form to edit movies
// update - Update movie
// delete - Delete movie