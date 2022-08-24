<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('articles.index');
// });

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles', [ArticleController::class, 'create'])->name('articles.create');
Route::get('/articles/show/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
