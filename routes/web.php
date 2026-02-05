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
 /* Liste des produits par catégorie ou sous-catégorie */
 //Route por detail produit


Route::get('/details-produit', function () {

    // ===== Produit de test =====
    $produit = (object)[
        'id' => 1,
        'titre' => 'Introduction au Droit',
        'image' => null,
        'images' => [],
        'prix' => 12000,
        'stock' => 5,
        'auteur' => 'Jean Dupont',
        'editeur' => 'Éditions Universitaires',
        'annee' => 2023,
        'format' => 'Broché',
        'pages' => 320,
        'langue' => 'Français',
        'description' => 'Un ouvrage complet pour comprendre les bases du droit.',
        'categorie' => (object)[
            'nom' => 'Universitaire'
        ]
    ];

    // ===== Produits similaires (test) =====
    $similaires = [
        (object)[
            'id' => 2,
            'titre' => 'Droit Constitutionnel',
            'prix' => 15000,
            'categorie' => (object)['nom' => 'Universitaire']
        ],
        (object)[
            'id' => 3,
            'titre' => 'Introduction à l’Économie',
            'prix' => 10000,
            'categorie' => (object)['nom' => 'Universitaire']
        ]
    ];

    return view('detailsproduits', compact('produit', 'similaires'));
})->name('detailsproduits');

Route::post('/panier/add/{id}', function ($id) {
    return "Produit $id ajouté au panier (test)";
})->name('panier.add');
Route::get('/produits/{id}', function ($id) {
    return "Produit ID : ".$id;
})->name('produits.show');


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