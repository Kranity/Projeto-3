<?php

use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\MoviesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('filmes', [MoviesController::class, 'movies'])->name('filmes');
Route::get('filme', [MoviesController::class, 'movie'])->name('filme');
Route::post('postFilme', [MoviesController::class, 'postMovie'])->name('filme');

Route::get('favoritos', [FavoritesController::class, 'favorites'])->name('favoritos');
Route::post('addFavoritos', [FavoritesController::class, 'addFavorites'])->name('addFavoritos');
Route::post('removeFavoritos', [FavoritesController::class, 'removeFavorites'])->name('removeFavoritos');
