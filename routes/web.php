<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   //return "hello world";
    return view('welcome');
});
Route::get("articles/create", [App\Http\Controllers\ArticleController::class, 'create'])->name('articles.create');
Route::post("articles", [App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
Route::get("articles", [App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
