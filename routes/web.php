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
Route::get('/movie/create', [MovieController::class, 'create'])->middleware('auth');


// STORE MOVIE DATA //
Route::post('/movie', [MovieController::class, 'store'])->middleware('auth');


// SHOW EDIT FORM //
Route::get('/movie/{movie}/edit',[MovieController::class, 'edit'])->middleware('auth');


// UPDATE MOVIE //
Route::put('/movie/{movie}', [MovieController::class, 'update'])->middleware('auth');


// DELETE MOVIE //
Route::delete('/movie/{movie}', [MovieController::class, 'destroy'])->middleware('auth');


// PAGE MANAGE MOVIES //
Route::get('/movie/manage', [MovieController::class, 'manage'])->middleware('auth');;


// SINGLE MOVIE //
Route::get('/movie/{movie}', [MovieController::class, 'show']);





// SIGN UP AND LOGIN ON WEBSITE MOVIES CUT //

// SHOW SIGN UP / CREATE FORM //
Route::get('/signup', [UserController::class, 'create'])->middleware('guest');


// CREATE NEW USER //
Route::post('/users', [UserController::class, 'store']);


// LOG USER OUT //
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// SHOW LOGIN FORM //
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


// LOG IN USER //
Route::post('/users/authenticate', [UserController::class, 'authenticate']);