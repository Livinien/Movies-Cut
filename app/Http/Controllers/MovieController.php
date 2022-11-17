<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    // SHOW ALL MOVIES //
    public function index() {
        return view('movies.index', [
            'movies' => Movie::all()
        ]);
    }

    
    // SHOW SINGLE MOVIE //
    public function show(Movie $movie) {
        return view('movies.show', [
            'movie' => $movie
        ]);
    }
}
