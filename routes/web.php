<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/whoami', function () {
    return 'Jewel Coranez | 2023-80129 | Block 4C | ITRACKB4 Laravel 12';
});
Route::get('/movies', [MovieController::class, 'index']);