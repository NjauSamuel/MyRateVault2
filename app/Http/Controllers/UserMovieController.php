<?php

namespace App\Http\Controllers;

use App\Models\UserMovie;
use Illuminate\Http\Request;

class UserMovieController extends Controller
{
    /**
     *Code to list all Movies in the database
     */
    public function index()
    {
        return view('index', ['movies' => UserMovie::latest()->get()]);
    }

    /**
     * Code to show a form for creating a new movie
     */
    public function create()
    {
        //
    }

    /**
     * Code to Store the new movie created above. 
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Code to show a form for editing an existing Movie
     */
    public function edit(UserMovie $userMovie)
    {
        //dd($userMovie); // Dump and die to check the content of $userMovie
        return view('edit', ['movie' => $userMovie]);
    }


    /**
     * Code to update an existing movie from the edit form above in Storage
     */
    public function update(Request $request, UserMovie $userMovie)
    {
        $request->validate([
            'rating' => 'required|numeric|min:0|max:10',
            'review' => 'required|string|max:255',
        ]);

        $userMovie->rating = $request->input('rating');
        $userMovie->review = $request->input('review');
        $userMovie->save();

        return redirect()->route('my-movies.index');
    }

    /**
     * Code to delete a Movie/Resource from storage
     */
    public function destroy(UserMovie $userMovie)
    {
        //
    }
}
