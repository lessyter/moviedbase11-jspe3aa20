<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\UserController; // Add UserController import

Route::post('/register', [UserController::class, 'register']); // New registration route
Route::post('/login', [UserController::class, 'login']); // New login route

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/movies', [MovieController::class, 'index']);
    Route::get('/movies/{id}', [MovieController::class, 'show']);
    Route::get('/directors/{id}', [DirectorController::class, 'show']);
    Route::get('/actors/{id}', [ActorController::class, 'show']);
    Route::get('/movies/genres', [MovieController::class, 'moviesWithGenres']);
    Route::get('/movies/ratings', [MovieController::class, 'moviesWithRatings']);
});
