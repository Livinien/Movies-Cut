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
            (request(['search']))->paginate(6)
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

        if($request->hasFile('poster')) {
            $formFields['poster'] = $request->file('poster')->store('posters', 'public');
        }

        Movie::create($formFields);

        return redirect('/')->with('message', 'Movie created Successfully !');
    }


    // SHOW EDIT FORM //
    public function edit(Movie $movie) {
        return view('movies.edit', ['movie' => $movie]);
    }


    // UPDATE MOVIE DATA //
    public function update(Request $request, Movie $movie) {
        $formFields = $request->validate([
            'title' => 'required',
            'year' => 'required',
            'duration' => 'required',
            'studio' => 'required',
            'story' => 'required'
        ]);

        if($request->hasFile('poster')) {
            $formFields['poster'] = $request->file('poster')->store('posters', 'public');
        }

        $movie->update($formFields);

        return back()->with('message', 'Movie updated Successfully !');
    }


}
