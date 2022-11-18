<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    // SHOW ALL MOVIES //
    public function index() {
        return view('movies.index', [
            'movies' => Movie::latest()->filter
            (request(['search']))->get()
        ]);
    }

    
    // SHOW SINGLE MOVIE //
    public function show(Movie $movie) {
        return view('movies.show', [
            'movie' => $movie
        ]);
    }


    // SHOW CREATE FORM //
    public function create() {
        return view('movies.create');
    }


    // STORE MOVIE DATA //
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'year' => 'required',
            'duration' => 'required',
            'studio' => 'required',
            'story' => 'required'
        ]);

        return redirect('/');
    }
}
