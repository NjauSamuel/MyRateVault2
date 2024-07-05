<?php

namespace App\Http\Controllers;

use App\Models\UserMovie;
use Illuminate\Http\Request;

class UserMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('index', ['movies' => UserMovie::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserMovie $userMovie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserMovie $userMovie)
    {
        //
    }
}
