<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserCanCheckout
{
    public function handle(Request $request, Closure $next): Response
    {
        // 1️⃣ Vérifie si utilisateur connecté
        if (!auth()->check()) {
            return redirect()->route('login')
                ->with('error', 'Vous devez être connecté pour accéder au paiement.');
        }

        // 2️⃣ Vérifie si panier non vide (à adapter plus tard)
        // Pour l’instant on simule
        $panierVide = false; // à connecter plus tard à session ou DB

        if ($panierVide) {
            return redirect()->route('panier')
                ->with('error', 'Votre panier est vide.');
        }

        return $next($request);
    }
}
