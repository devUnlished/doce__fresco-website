<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuiceController;

// Canonical Portuguese Page Routes (Active links)
Route::get('/', [JuiceController::class, 'index'])->name('home');
Route::get('/sobre', [JuiceController::class, 'index'])->name('about');
Route::get('/sumos', [JuiceController::class, 'index'])->name('juices');
Route::get('/origem', [JuiceController::class, 'index'])->name('origin');
Route::get('/contacto', [JuiceController::class, 'index'])->name('contact');

// English Aliases / Redirects
Route::redirect('/about', '/sobre');
Route::redirect('/juices', '/sumos');
Route::redirect('/flavors', '/sumos');
Route::redirect('/origin', '/origem');
Route::redirect('/contact', '/contacto');
