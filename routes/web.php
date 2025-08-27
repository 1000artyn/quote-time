<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/aurelius', [QuoteController::class, 'aurelius']);
Route::get('/confucius', [QuoteController::class, 'confucius']);
Route::get('/plato', [QuoteController::class, 'plato']);
Route::get('/laozi', [QuoteController::class, 'laozi']);
Route::get('/doctor', [QuoteController::class, 'doctor']);