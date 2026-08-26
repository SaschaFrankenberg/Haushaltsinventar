<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/items', [HomeController::class, 'items'])->name('items');
Route::get('/about', [HomeController::class, 'about'])->name('about');