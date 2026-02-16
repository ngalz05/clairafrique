@extends('layouts.app')

@section('title', 'Recherche - ClairAfrique')

@section('content')

<section class="pageHead">
  <div class="crumbs">Accueil / <b>Recherche</b></div>
  <div class="titleRow">
    <div>
      <h1>Rechercher un produit</h1>
      <p class="subtitle">Livres et papeterie</p>
    </div>
  </div>
</section>

<section class="section">

  {{-- Barre de recherche --}}
  <div class="heroCard">
    <h3 style="margin:0 0 12px;">Recherche</h3>

    <form method="GET" action="{{ route('recherche') }}" style="display:flex;gap:10px;flex-wrap:wrap;">
      <input
        type="text"
        name="q"
        value="{{ request('q') }}"
        placeholder="Ex: maths 3ème, cahier, roman..."
        style="flex:1;min-width:240px;border:1px solid rgba(17,24,39,.10);border-radius:14px;padding:12px;outline:none;background:#fff;font-size:14px;"
      >
      <button class="btn" type="submit">🔎 Rechercher</button>
      <a class="ghost" href="{{ route('recherche') }}">Réinitialiser</a>
    </form>

    <p class="muted" style="margin:12px 0 0;">
      Astuce : utilisez des mots-clés (auteur, titre, catégorie).
    </p>
  </div>

  @php
    // Démo front (sans DB)
    $q = trim((string)request('q',''));
    $resultats = [
      (object)['id'=>1,'titre'=>'Mathématiques — 3ème','categorie'=>'Scolaire','prix'=>4500,'dispo'=>true],
      (object)['id'=>2,'titre'=>'Cahier premium 200 pages','categorie'=>'Papeterie','prix'=>1500,'dispo'=>true],
      (object)['id'=>3,'titre'=>"L'Aventure Ambiguë",'categorie'=>'Romans','prix'=>3500,'dispo'=>false],
    ];
  @endphp

  <div class="secHead" style="margin-top:18px;">
    <h2>Résultats {{ $q ? 'pour : "'.$q.'"' : '' }}</h2>
    <a href="{{ route('cataloguelivres') }}">Voir le catalogue →</a>
  </div>

  <div class="grid3" style="margin-top:12px;">
    @foreach($resultats as $p)
      <article class="card">
        <div class="thumb">Image</div>
        <div class="body">
          <span class="tag">{{ $p->categorie }}</span>
          <h3>{{ $p->titre }}</h3>
          <p class="muted">{{ number_format($p->prix,0,',',' ') }} FCFA</p>
          <div class="row">
            <span class="muted">{{ $p->dispo ? 'Disponible' : 'Indisponible' }}</span>
            <a class="btnMini" href="{{ route('produits.show', $p->id) }}">Voir</a>
          </div>
        </div>
      </article>
    @endforeach
  </div>

  <div class="heroCard" style="margin-top:18px;background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.95));">
    <h3 style="margin:0 0 8px;color:var(--g2);">Vous ne trouvez pas ?</h3>
    <p class="muted" style="margin:0;">Écrivez-nous ou appelez un point de vente pour vérifier la disponibilité.</p>
    <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:12px;">
      <a class="btn" href="{{ route('contact') }}">✉️ Contact</a>
      <a class="ghost" href="{{ route('points-vente') }}">📍 Points de vente</a>
    </div>
  </div>

</section>

@endsection

@push('styles')
<style>
  .pageHead{padding:18px 0 6px}
  .crumbs{color:var(--mut);font-size:13px}
  .titleRow{display:flex;align-items:end;justify-content:space-between;gap:12px;margin-top:8px}
  h1{margin:0;font-size:30px;letter-spacing:-.4px}
  .subtitle{margin:6px 0 0;color:var(--mut);line-height:1.6}
</style>
@endpush
