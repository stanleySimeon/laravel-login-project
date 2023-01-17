<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'index'])->name('users.index');
Route::post('/register', [UserController::class, 'store'])->name('users.store');
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'userLogin'])->name('users.userLogin');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::post('/destroy', [UserController::class, 'destroy'])->name('users.destroy');
