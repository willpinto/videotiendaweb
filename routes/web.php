<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clients', ClientController::class)->middleware('auth');

Route::resource('genres', GenreController::class)->middleware('auth');

Route::resource('movies', MovieController::class)->middleware('auth');

Route::resource('receipts', ReceiptController::class)->middleware('auth');

Route::resource('copies', CopyController::class)->middleware('auth');

Route::resource('rentals', RentalController::class)->middleware('auth');
