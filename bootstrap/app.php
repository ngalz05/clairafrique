<?php

use App\Http\Middleware\EnsureUserCanCheckout;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // ✅ Alias de middleware (Laravel 11)
        $middleware->alias([
            'checkout' => EnsureUserCanCheckout::class,
        ]);

        // (optionnel) si vous voulez forcer le cookie/chiffrement/session par défaut,
        // laissez Laravel gérer — pas besoin d’ajouter quoi que ce soit ici pour l’instant.
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
