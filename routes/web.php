<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/show-relationships', [UserController::class, 'showRelationships']);
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');

Route::get('/', function () {
    return view('welcome');
});
