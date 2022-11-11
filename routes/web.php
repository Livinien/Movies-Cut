<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;

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

// All Movies //

Route::get('/', function () {
    return view('movies', [
        'heading' => 'Lastest Movies',
        'movies' => Movie::all()
    ]);
});


// Single Movie //

Route::get('/movies/{id}', function($id) {
    return view('movie', [
        'movie' => Movie::find($id)
    ]);
});