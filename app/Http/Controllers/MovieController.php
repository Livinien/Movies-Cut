<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    // SHOW ALL MOVIES //
    public function index() {
        return view('movies', [
            'movies' => Movie::all()
        ]);
    }



    // SHOW SINGLE MOVIE //
    public function show(Movie $movie) {
        return view('movie', [
            'movie' => $movie
        ]);
    }
}
