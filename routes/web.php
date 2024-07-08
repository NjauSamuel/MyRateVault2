<?php

use App\Http\Controllers\UserMovieController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', fn() => to_route('my-movies.index'));

Route::resource("my-movies", UserMovieController::class)
    ->only(["index","create", "store", "edit","update", "destroy"]);
