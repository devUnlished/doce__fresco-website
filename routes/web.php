<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuiceController;

// Canonical Portuguese Page Routes
Route::get('/', [JuiceController::class, 'index'])->name('home');
Route::get('/sobre', [JuiceController::class, 'about'])->name('about');
Route::get('/sumos', [JuiceController::class, 'juices'])->name('juices');
Route::get('/origem', [JuiceController::class, 'origin'])->name('origin');
Route::get('/contacto', [JuiceController::class, 'contact'])->name('contact');

// English Aliases / Redirects
Route::redirect('/about', '/sobre');
Route::redirect('/juices', '/sumos');
Route::redirect('/flavors', '/sumos');
Route::redirect('/origin', '/origem');
Route::redirect('/contact', '/contacto');

// Inquiries / Contact Form Submission
Route::post('/inquire', [JuiceController::class, 'submitInquiry'])->name('inquire.submit');
