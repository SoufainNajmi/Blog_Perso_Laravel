<?php

use Illuminate\Support\Facades\Route;

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
Route::get("articles/create", [App\Http\Controllers\ArticleController::class, 'create'])->name('articles.create');
Route::post("articles", [App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
Route::get("articles", [App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::view('home', 'home')->name('home');
//Route::view('accueille', '')->name('');
