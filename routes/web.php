<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/book-detail/{id}', [BookController::class, 'showById'])->name('bookDetail');
Route::get('/category/{id}', [CategoryController::class, 'showById'])->name('category');
Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher');
Route::get('/publisher-detail/{id}', [PublisherController::class, 'showById'])->name('publisherDetail');
Route::get('/contact',  function () {
    return view('contact');
})->name('contact');
