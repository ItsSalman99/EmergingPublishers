<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/our-pricing', [HomeController::class, 'pricing'])->name('pricing');

Route::get('/book-publishing', [ServiceController::class, 'bookPublishing'])->name('book-publishing');
Route::get('/book-editing', [ServiceController::class, 'bookEditing'])->name('book-editing');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
