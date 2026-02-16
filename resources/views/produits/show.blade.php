@extends('layouts.app')

@section('title', 'Détail produit - ClairAfrique')

@section('content')
@php
  $id = (int) request()->route('id', 1);
  $produit = (object)[
    'id'=>$id,
    'titre'=>'Produit #'.$id,
    'categorie'=>(object)['nom'=>'Universitaire'],
    'prix'=>12000,
    'stock'=>5,
    'auteur'=>'—',
    'editeur'=>'—',
    'annee'=>2024,
    'format'=>'Broché',
    'pages'=>320,
    'langue'=>'Français',
    'description'=>"Description du produit #$id (démo).",
    'image'=>null,
    'images'=>[]
  ];
@endphp

<section class="pageHead">
  <div class="crumbs">Accueil / Produits / <b>Détail</b></div>
</section>

<section class="section" style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
  <div class="card">
    <div class="body">
      <div class="thumb" style="height:320px;">Couverture</div>
    </div>
  </div>

  <div class="card">
    <div class="body">
      <span class="tag">{{ $produit->categorie->nom }}</span>
      <h1 style="margin:10px 0 6px;">{{ $produit->titre }}</h1>
      <p class="muted">Auteur : {{ $produit->auteur }} • Éditeur : {{ $produit->editeur }} • Année : {{ $produit->annee }}</p>

      <div style="display:flex;justify-content:space-between;align-items:center;margin-top:10px;">
        <div style="font-size:22px;font-weight:950;color:var(--g2);">
          {{ number_format($produit->prix,0,',',' ') }} FCFA
        </div>
        <div class="muted">{{ $produit->stock>0 ? 'En stock' : 'Indisponible' }}</div>
      </div>

      <form method="POST" action="{{ route('panier.add', $produit->id) }}" style="margin-top:12px;display:flex;gap:10px;flex-wrap:wrap;">
        @csrf
        <input type="number" name="quantite" value="1" min="1" style="width:90px;border:1px solid rgba(17,24,39,.10);border-radius:14px;padding:12px;">
        <button class="btn" type="submit">Ajouter au panier</button>
        <a class="ghost" href="{{ route('cataloguelivres') }}">← Retour catalogue</a>
      </form>

      <div style="margin-top:14px;display:grid;grid-template-columns:1fr 1fr;gap:10px;">
        <div class="card"><div class="body"><b>Format</b><div class="muted">{{ $produit->format }}</div></div></div>
        <div class="card"><div class="body"><b>Pages</b><div class="muted">{{ $produit->pages }}</div></div></div>
        <div class="card"><div class="body"><b>Langue</b><div class="muted">{{ $produit->langue }}</div></div></div>
        <div class="card"><div class="body"><b>Disponibilité</b><div class="muted">Retrait en magasin</div></div></div>
      </div>

      <div style="margin-top:14px;">
        <h3 style="margin:0 0 6px;">Description</h3>
        <p class="muted" style="margin:0;line-height:1.7;">{{ $produit->description }}</p>
      </div>
    </div>
  </div>
</section>

@endsection

@push('styles')
<style>
  .pageHead{padding:18px 0 6px}
  .crumbs{color:var(--mut);font-size:13px}
  @media(max-width:980px){
    .section[style*="grid-template-columns:1fr 1fr"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
