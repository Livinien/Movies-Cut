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
            'story' => 'required',
            'details' => 'required',
            'trailer' => 'required'
        ]);

        if($request->hasFile('poster')) {
            $formFields['poster'] = $request->file('poster')->store('posters', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Movie::create($formFields);

        return redirect('/')->with('message', 'Movie created successfully !');
    }



    // SHOW EDIT FORM //
    public function edit(Movie $movie) {
        return view('movies.edit', ['movie' => $movie]);
    }




    // UPDATE MOVIE DATA //

    public function update(Request $request, Movie $movie) {

        // Make sure logged in user in owner //
        if($movie->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'year' => 'required',
            'duration' => 'required',
            'studio' => 'required',
            'story' => 'required',
            'details' => 'required',
            'trailer' => 'required'
            
        ]);

        if($request->hasFile('poster')) {
            $formFields['poster'] = $request->file('poster')->store('posters', 'public');
        }

        $movie->update($formFields);

        return back()->with('message', 'Movie updated Successfully !');
    }


    

    // DELETE MOVIE  //

    public function destroy(Movie $movie) {

        // Make sure logged in user in owner //
        if($movie->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $movie->delete();

        return redirect('/')->with('message', 'Movie deleted successfully');
    }



    // MANAGE MOVIES //

    public function manage() {
        return view('movies.manage', ['movies' => auth()->user()->movies()->get()]);
    }

}
