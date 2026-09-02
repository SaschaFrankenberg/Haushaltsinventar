<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

Route::controller(HomeController::class)->as('home.')->group(function () {

    // Öffentliche Seiten
    Route::get('/', 'home')->name('index');                 // URL:     /                   -> home.index
    Route::get('/about', 'about')->name('about');           // URL:     /about              -> home.about
});

Route::controller(ItemController::class)->prefix('items')->as('items.')->group(function () {
    // Alle Items
    Route::get('/', 'index')->name('index');                // GET      /items              -> items.index

    // Formular: Neues Item anlegen
    Route::get('/create', 'create')->name('create');        // GET      /items/create       -> items.create

    // Neues Item speichern
    Route::post('/', 'store')->name('store');               // POST     /items              -> items.store

    // Einzelnes Item anzeigen
    Route::get('/{item}', 'show')->name('show');            // GET      /items/{item}       -> items.show

    // Formular: Item bearbeiten
    Route::get('/{item}/edit', 'edit')->name('edit');       // GET      /items/{id}/edit    -> items.edit

    // Item aktualisieren
    Route::put('/{item}', 'update')->name('update');        // PUT      /items{id}          -> items.update

    // Item löschen
    Route::delete('/{item}', 'destroy')->name('destroy');   // DELETE   /items/{id}         -> items.destroy
});
