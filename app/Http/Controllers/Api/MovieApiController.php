<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MovieApiController extends Controller
{
    public function getMovieList()
    {
        $movies = Movie::orderBy('updated_at')->get();

        return response($movies, 200);
    }

    public function saveNewMovie(Request $request)
    {
        $postData = $request->all();

        $movie = Movie::create([
            'name' => $postData['name'],
            'director' => $postData['director'],
            'year' => $postData['year'],
            'language' => $postData['language'],
        ]);

        return response($movie, 201);
    }
}
