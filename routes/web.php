<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/about', [HomeController::class, 'about'])->name('about');

