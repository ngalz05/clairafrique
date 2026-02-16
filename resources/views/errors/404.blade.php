@extends('layouts.app')

@section('title', 'Page non trouvée - ClairAfrique')

@section('content')

<section class="section" style="min-height:70vh;display:flex;align-items:center;justify-content:center;">
    <div class="heroCard" style="text-align:center;max-width:600px;padding:50px;">

        {{-- Icône --}}
        <div style="font-size:80px;margin-bottom:20px;">📚</div>

        {{-- Code erreur --}}
        <h1 style="font-size:80px;margin:0;color:var(--g2);font-weight:950;">
            404
        </h1>

        {{-- Message principal --}}
        <h2 style="margin:10px 0 20px;font-size:24px;">
            Oups… Page introuvable
        </h2>

        <p class="muted" style="line-height:1.7;margin-bottom:30px;">
            La page que vous recherchez n’existe pas ou a été déplacée.
            Vérifiez l’adresse ou retournez à l’accueil.
        </p>

        {{-- Boutons --}}
        <div class="heroBtns" style="justify-content:center;">
            <button class="btn" onclick="location.href='{{ route('home') }}'">
                🏠 Retour à l’accueil
            </button>

            <button class="ghost" onclick="location.href='{{ route('cataloguelivres') }}'">
                📖 Voir la librairie
            </button>
        </div>

    </div>
</section>

@endsection
