<?php

namespace App\Http\Controllers\Api;

use App\Movie;
use Illuminate\Http\Request;

class MovieApiController
{
    public function getMovieList()
    {
        $movies = Movies::orderBy('updated_at')->get();

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
