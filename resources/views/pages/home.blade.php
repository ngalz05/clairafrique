@extends('layouts.app')

@section('title', 'ClairAfrique — Accueil')

@section('content')

<!-- HERO -->
<section class="heroWrap">
  <div class="hero">
    <div>
      <span class="badge">📚 Librairie & Papeterie • Dakar</span>
      <h1>Bienvenue chez ClairAfrique</h1>
      <p>
        Découvrez nos livres, nos fournitures de papeterie, et nos événements culturels.
        Parcourez librement le site : la connexion est demandée uniquement au moment de payer.
      </p>

      <div class="heroBtns">
        <button class="btn" onclick="location.href='{{ route('cataloguelivres') }}'">Explorer la librairie</button>
        <button class="ghost" onclick="location.href='{{ route('catalogue.papeterie') }}'">Voir la papeterie</button>
        <button class="ghost" onclick="location.href='{{ route('evenements') }}'">Calendrier des événements</button>
      </div>
    </div>

    <div class="heroCard">
      <div class="heroImg">Visuel / Bannière</div>
      <div class="miniRow">
        <span class="miniPill">Nouveautés</span>
        <span class="miniPill">Best-sellers</span>
        <span class="miniPill">Rentrée scolaire</span>
        <span class="miniPill">Événements</span>
      </div>
      <p class="muted">Retrait rapide en magasin • Livraison possible</p>
    </div>
  </div>
</section>

<!-- À LA UNE -->
<section class="section">
  <div class="secHead">
    <h2>À la une</h2>
    <a href="{{ route('cataloguelivres') }}">Voir les nouveautés →</a>
  </div>

  <div class="grid3">
    <article class="card">
      <div class="thumb">Image</div>
      <div class="body">
        <span class="tag">Nouveauté</span>
        <h3>Nouveaux arrivages</h3>
        <p class="muted">Sélection fraîche de livres</p>
        <div class="row">
          <span class="muted">Cette semaine</span>
          <button class="btnMini">Voir</button>
        </div>
      </div>
    </article>

    <article class="card">
      <div class="thumb">Image</div>
      <div class="body">
        <span class="tag">Papeterie</span>
        <h3>Pack rentrée</h3>
        <p class="muted">Tout pour l’école</p>
        <div class="row">
          <span class="muted">Offre</span>
          <button class="btnMini">Voir</button>
        </div>
      </div>
    </article>

    <article class="card">
      <div class="thumb">Image</div>
      <div class="body">
        <span class="tag">Culture</span>
        <h3>Coups de cœur</h3>
        <p class="muted">Sélection recommandée</p>
        <div class="row">
          <span class="muted">Choix experts</span>
          <button class="btnMini">Voir</button>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- POINTS DE VENTE -->
<section class="section">
  <div class="secHead">
    <h2>Nos points de vente</h2>
    <a href="{{ route('points-vente') }}">Voir tout →</a>
  </div>

  <div class="points-grid">
    <article class="card">
      <div class="thumb">Rufisque</div>
      <div class="body">
        <span class="tag">Rufisque</span>
        <p class="muted">Lun–Sam 09:00–18:00</p>
        <div class="row">
          <span class="muted">Retrait possible</span>
          <button class="btnMini" onclick="location.href='{{ route('points-vente') }}'">Voir</button>
        </div>
      </div>
    </article>

    <article class="card">
      <div class="thumb">Thiès</div>
      <div class="body">
        <span class="tag">Thiès</span>
        <p class="muted">Lun–Sam 09:00–18:00</p>
        <div class="row">
          <span class="muted">Retrait possible</span>
          <button class="btnMini" onclick="location.href='{{ route('points-vente') }}'">Voir</button>
        </div>
      </div>
    </article>
  </div>
</section>

@endsection

@push('styles')
<style>
.points-grid{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:24px;
}

@media(max-width:768px){
  .points-grid{
    grid-template-columns:1fr;
  }
}
</style>
@endpush
