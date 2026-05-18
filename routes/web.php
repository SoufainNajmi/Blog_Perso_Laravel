<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home'); // Assurez-vous que le fichier s'appelle accueil.blade.php dans resources/views/
})->name('home');


//Route::get('/home', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
