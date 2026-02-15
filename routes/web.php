<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ACCUEIL
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => view('pages.home'))->name('home');

/*
|--------------------------------------------------------------------------
| PAGES (statics)
|--------------------------------------------------------------------------
*/
Route::get('/about', fn () => view('pages.about'))->name('about');
Route::get('/quisommesnous', fn () => view('pages.about'))->name('quisommesnous'); // alias

Route::get('/contact', fn () => view('pages.contact'))->name('contact');
Route::get('/evenements', fn () => view('pages.evenements'))->name('evenements');

Route::get('/faq', fn () => view('pages.faq'))->name('faq');
Route::get('/packs-scolaires', fn () => view('pages.packs-scolaires'))->name('packs-scolaires');

Route::get('/points-de-vente', fn () => view('pages.points-vente'))->name('points-vente');

/*
|--------------------------------------------------------------------------
| CATALOGUE
|--------------------------------------------------------------------------
*/
Route::get('/catalogue/livres', fn () => view('produits.cataloguelivres'))
    ->name('cataloguelivres');

Route::get('/catalogue/papeterie', fn () => view('catalogue.papeterie'))
    ->name('catalogue.papeterie');

/*
|--------------------------------------------------------------------------
| PRODUITS
|--------------------------------------------------------------------------
*/
Route::get('/produits', fn () => view('produits.index'))->name('produits.index');

/*
| IMPORTANT :
| si ta vue produits.show utilise $produit, il faut lui passer un $produit (même fake pour l’instant).
| Sinon ça peut casser.
*/
Route::get('/produits/{id}', function ($id) {
    $produit = (object)[
        'id' => $id,
        'titre' => 'Produit exemple',
        'image' => null,
        'images' => [],
        'prix' => 10000,
        'stock' => 5,
        'auteur' => '—',
        'editeur' => '—',
        'annee' => 2024,
        'format' => '—',
        'pages' => 0,
        'langue' => 'Français',
        'description' => 'Description produit.',
        'categorie' => (object)['nom' => 'Catégorie'],
    ];

    $similaires = [];

    return view('produits.show', compact('produit', 'similaires'));
})->name('produits.show');

/* Détail produit (TEST/DEMO) */
Route::get('/details-produit', function () {
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
        'categorie' => (object)['nom' => 'Universitaire'],
    ];

    $similaires = [
        (object)['id' => 2, 'titre' => 'Droit Constitutionnel', 'prix' => 15000, 'categorie' => (object)['nom' => 'Universitaire']],
        (object)['id' => 3, 'titre' => 'Introduction à l’Économie', 'prix' => 10000, 'categorie' => (object)['nom' => 'Universitaire']],
    ];

    return view('detailsproduits', compact('produit', 'similaires'));
})->name('detailsproduits');

/*
|--------------------------------------------------------------------------
| PANIER
|--------------------------------------------------------------------------
*/
Route::get('/panier', fn () => view('panier.index'))->name('panier');
Route::get('/panier/index', fn () => redirect()->route('panier'))->name('panier.index');

Route::post('/panier/add/{id}', fn ($id) => redirect()->route('panier'))->name('panier.add');
Route::post('/panier/update/{id}', fn ($id) => redirect()->route('panier'))->name('panier.update');
Route::delete('/panier/remove/{id}', fn ($id) => redirect()->route('panier'))->name('panier.remove');

/*
|--------------------------------------------------------------------------
| CHECKOUT (protégé auth + checkout middleware)
|--------------------------------------------------------------------------
| ✅ ICI c’est corrigé : auth + checkout
*/
Route::middleware(['auth', 'checkout'])->group(function () {
    Route::get('/checkout', fn () => view('panier.checkout'))->name('panier.checkout');

    // Soumission checkout (protégé + CSRF dans le form)
    Route::post('/checkout', fn () => redirect()->route('panier.confirmation'))->name('panier.checkout.store');

    Route::get('/checkout/confirmation', fn () => view('panier.confirmation'))->name('panier.confirmation');
});

/*
|--------------------------------------------------------------------------
| COMMANDES (protégé auth)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/commandes', fn () => view('commandes.index'))->name('commandes.index');
    Route::get('/commandes/{id}', fn ($id) => view('commandes.show', compact('id')))->name('commandes.show');
});

/*
|--------------------------------------------------------------------------
| AUTH (vues)
|--------------------------------------------------------------------------
*/
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/register', fn () => view('auth.register'))->name('register');
Route::get('/forgot-password', fn () => view('auth.forgot-password'))->name('password.request');

/*
|--------------------------------------------------------------------------
| LÉGALES
|--------------------------------------------------------------------------
*/
Route::get('/conditions-utilisation', fn () => view('legales.conditions-utilisation'))
    ->name('conditions-utilisation');

Route::get('/mentions-legales', fn () => view('legales.mentions-legales'))
    ->name('mentions-legales');

Route::get('/politique-confidentialite', fn () => view('legales.politique-confidentialite'))
    ->name('politique-confidentialite');
