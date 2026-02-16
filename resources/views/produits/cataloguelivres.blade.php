@extends('layouts.app')

@section('title', 'Catalogue Livres - ClairAfrique')

@section('content')

{{-- En-tête de page --}}
<section class="pageHead">
  <div class="crumbs">Accueil / Librairie / <b>Catalogue Livres</b></div>
  <div class="titleRow">
    <div>
      <h1>Catalogue Livres</h1>
      <p class="subtitle">
        Navigation libre. La connexion est demandée uniquement au moment d’acheter.
      </p>
    </div>
    <div class="crumbs"><b>120</b> résultats</div>
  </div>
</section>

{{-- Contenu principal --}}
<section class="section gridCatalogue">

  {{-- Filtres --}}
  <aside class="heroCard">
    <h3 style="margin:0 0 12px;color:var(--g2);">Filtres</h3>

    <div class="field">
      <label>Rechercher</label>
      <input type="text" placeholder="Titre, auteur, mot-clé..." />
    </div>

    <div class="field">
      <label>Catégorie</label>
      <select>
        <option>Toutes</option>
        <option>Livres scolaires</option>
        <option>Romans & littérature</option>
        <option>Ouvrages africains</option>
      </select>
    </div>

    <div class="field">
      <label>Trier par</label>
      <select>
        <option>Nouveautés</option>
        <option>Meilleures ventes</option>
        <option>Prix croissant</option>
        <option>Prix décroissant</option>
      </select>
    </div>

    <div class="chipRow">
      <button class="chip active">Nouveautés</button>
      <button class="chip">Best-sellers</button>
      <button class="chip">Scolaire</button>
      <button class="chip">Africain</button>
    </div>

    <div class="field">
      <label>Prix (optionnel)</label>
      <input placeholder="ex : 2000 - 15000" />
    </div>
  </aside>

  {{-- Catalogue --}}
  <div>

    <div class="grid3">

      {{-- Livre --}}
      <div class="card">
        <div class="thumb">Couverture</div>
        <div class="body">
          <span class="tag">Ouvrage africain</span>
          <h3 style="margin:10px 0 6px;">Les classiques africains</h3>
          <p class="muted">Auteur : Nom Prénom</p>
          <p class="muted">Prix : 7 500 FCFA</p>

          <div class="row">
            <span class="muted">Disponible</span>
            <button class="btnMini">Voir</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="thumb">Couverture</div>
        <div class="body">
          <span class="tag">Romans & littérature</span>
          <h3 style="margin:10px 0 6px;">Roman contemporain</h3>
          <p class="muted">Auteur : Nom Prénom</p>
          <p class="muted">Prix : 6 000 FCFA</p>

          <div class="row">
            <span class="muted">Disponible</span>
            <button class="btnMini">Voir</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="thumb">Couverture</div>
        <div class="body">
          <span class="tag">Livres scolaires</span>
          <h3 style="margin:10px 0 6px;">Mathématiques — 3ème</h3>
          <p class="muted">Éditeur : Exemple</p>
          <p class="muted">Prix : 4 500 FCFA</p>

          <div class="row">
            <span class="muted">Disponible</span>
            <button class="btnMini">Voir</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="thumb">Couverture</div>
        <div class="body">
          <span class="tag">Livres scolaires</span>
          <h3 style="margin:10px 0 6px;">Français — 4ème</h3>
          <p class="muted">Éditeur : Exemple</p>
          <p class="muted">Prix : 4 000 FCFA</p>

          <div class="row">
            <span class="muted">Disponible</span>
            <button class="btnMini">Voir</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="thumb">Couverture</div>
        <div class="body">
          <span class="tag">Ouvrage africain</span>
          <h3 style="margin:10px 0 6px;">Culture & Histoire</h3>
          <p class="muted">Auteur : Nom Prénom</p>
          <p class="muted">Prix : 9 000 FCFA</p>

          <div class="row">
            <span class="muted">Disponible</span>
            <button class="btnMini">Voir</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="thumb">Couverture</div>
        <div class="body">
          <span class="tag">Romans & littérature</span>
          <h3 style="margin:10px 0 6px;">Nouvelle sortie</h3>
          <p class="muted">Auteur : Nom Prénom</p>
          <p class="muted">Prix : 5 500 FCFA</p>

          <div class="row">
            <span class="muted">Disponible</span>
            <button class="btnMini">Voir</button>
          </div>
        </div>
      </div>

    </div>

    {{-- Pagination --}}
    <div class="pager">
      <button class="p active">1</button>
      <button class="p">2</button>
      <button class="p">3</button>
      <button class="p">Suivant →</button>
    </div>

  </div>
</section>

@endsection

@push('styles')
<style>
  .gridCatalogue{
    display:grid;
    grid-template-columns:280px 1fr;
    gap:20px;
  }

  .field{
    display:flex;
    flex-direction:column;
    gap:6px;
    margin-top:12px;
  }

  .field label{
    font-size:13px;
    color:var(--mut);
    font-weight:900;
  }

  .field input,.field select{
    border:1px solid rgba(17,24,39,.10);
    border-radius:14px;
    padding:12px;
    outline:none;
    background:#fff;
    font-size:14px;
  }

  .chipRow{
    display:flex;
    flex-wrap:wrap;
    gap:8px;
    margin-top:12px;
  }

  .chip{
    padding:8px 12px;
    border-radius:999px;
    border:1px solid rgba(17,24,39,.10);
    background:#fff;
    font-weight:900;
    font-size:12px;
    cursor:pointer;
  }

  .chip.active{
    background:rgba(234,245,239,.8);
    color:var(--g2);
    border-color:rgba(31,122,77,.3);
  }

  .thumb{
    height:140px;
    display:grid;
    place-items:center;
    background:linear-gradient(135deg,rgba(31,122,77,.15),rgba(31,122,77,.03));
    font-weight:900;
    color:var(--g2);
  }

  @media (max-width:980px){
    .gridCatalogue{
      grid-template-columns:1fr;
    }
  }
</style>
@endpush
