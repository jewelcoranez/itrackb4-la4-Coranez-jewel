<?php

namespace App\Http\Controllers;

class MovieController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Avengers: Endgame', 'genre' => 'Action', 'rating' => 9.9],
            ['title' => 'Interstellar', 'genre' => 'Sci-Fi', 'rating' => 8.8],
            ['title' => 'The Dark Knight', 'genre' => 'Action', 'rating' => 9.6],
            ['title' => 'Spider-Man: No Way Home', 'genre' => 'Action', 'rating' => 8.9],
            ['title' => 'Coco', 'genre' => 'Animation', 'rating' => 8.7],
        ];

        return view('movies.index', ['movies' => $movies]);
    }
}