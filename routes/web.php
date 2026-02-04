<?php

use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('home');
})->name('home');

// Routes catalogue
Route::get('/catalogue/livres', function () {
    return view('cataloguelivres');
})->name('cataloguelivres');

Route::get('/catalogue/papeterie', function () {
    return view('catalogue.papeterie');
})->name('catalogue.papeterie');

// Route événements
Route::get('/evenements', function () {
    return view('evenements');
})->name('evenements');

// Route points de vente
Route::get('/points-de-vente', function () {
    return view('points-vente');
})->name('points-vente');

// Route panier
Route::get('/panier', function () {
    return view('panier');
})->name('panier');

// Route Qui sommes-nous
Route::get('/quisommesnous', function () {
    return view('quisommesnous');
})->name('quisommesnous');

// Route Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');