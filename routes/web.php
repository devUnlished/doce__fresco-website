<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuiceController;

Route::get('/', [JuiceController::class, 'index'])->name('home');
Route::post('/inquire', [JuiceController::class, 'submitInquiry'])->name('inquire.submit');
