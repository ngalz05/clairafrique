@extends('layouts.app')

@section('title', 'Confirmation - ClairAfrique')

@section('content')
<section class="section" style="min-height:65vh;display:flex;align-items:center;justify-content:center;">
  <div class="heroCard" style="text-align:center;max-width:720px;padding:45px;">
    <div style="font-size:54px;margin-bottom:10px;">✅</div>
    <h1 style="margin:0;">Commande confirmée</h1>
    <p class="muted" style="margin:10px 0 0;line-height:1.7;">
      Merci ! Votre commande a bien été enregistrée.
      Vous pouvez suivre son statut dans “Mes commandes”.
    </p>

    <div class="heroBtns" style="justify-content:center;margin-top:18px;">
      <a class="btn" href="{{ route('commandes.index') }}">📦 Mes commandes</a>
      <a class="ghost" href="{{ route('home') }}">🏠 Retour accueil</a>
    </div>
  </div>
</section>
@endsection
