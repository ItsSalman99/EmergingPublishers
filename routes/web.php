<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/our-pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/terms-conditions', [HomeController::class, 'termsconditions'])->name('our-terms');
Route::get('/our-privacy', [HomeController::class, 'privacy'])->name('privacy');

Route::get('/services', [ServiceController::class, 'services'])->name('services.index');
Route::get('/book-publishing', [ServiceController::class, 'bookPublishing'])->name('book-publishing');
Route::get('/book-editing', [ServiceController::class, 'bookEditing'])->name('book-editing');
Route::get('/book-marketing', [ServiceController::class, 'bookMarketing'])->name('book-marketing');
Route::get('/book-ghostwriting', [ServiceController::class, 'bookGhostWriting'])->name('book-ghostwriting');

Route::get('/printing-press', [HomeController::class, 'printingPress'])->name('printing-press');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('send-quote', [ContactController::class, 'store'])->name('send-quote');
