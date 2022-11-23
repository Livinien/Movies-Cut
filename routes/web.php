<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;



// Common Resources Routes :

// index - Show all movies
// show - Show single movie
// create - Show form to create new movie
// store - Store all movie
// edit - Show form to edit movies
// update - Update movie
// delete - Delete movie



// MOVIES //

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


// DELETE MOVIE //
Route::delete('/movie/{movie}', [MovieController::class, 'destroy']);


// SINGLE MOVIE //
Route::get('/movie/{movie}', [MovieController::class, 'show']);




// SIGN UP AND LOGIN ON WEBSITE MOVIES CUT //

// SHOW SIGN UP / CREATE FORM //
Route::get('/signup', [UserController::class, 'create']);

// CREATE NEW USER //
Route::post('/users', [UserController::class, 'store']);