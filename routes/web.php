<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');


Route::get('/', function () {
    return view('welcome');
});
