@extends('layouts.app')

@section('title', 'Checkout - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / Panier / <b>Checkout</b></div>
  <div class="titleRow">
    <div>
      <h1>Paiement</h1>
      <p class="subtitle">Finalisez votre commande</p>
    </div>
  </div>
</section>

<section class="section">
  <div style="display:grid;grid-template-columns:1fr 380px;gap:20px;align-items:start;">

    <div class="heroCard">
      <h3 style="margin:0 0 12px;">Informations</h3>

      <form method="POST" action="{{ route('panier.checkout.store') }}">
        @csrf

        <div class="field">
          <label>Nom complet *</label>
          <input type="text" name="nom" required>
        </div>

        <div class="field">
          <label>Téléphone *</label>
          <input type="tel" name="telephone" required placeholder="+221 ...">
        </div>

        <div class="field">
          <label>Email</label>
          <input type="email" name="email">
        </div>

        <div class="field">
          <label>Mode de livraison *</label>
          <select name="livraison" required>
            <option value="">Choisir</option>
            <option>Retrait en point de vente</option>
            <option>Livraison à domicile</option>
          </select>
        </div>

        <div class="field">
          <label>Point de vente (si retrait)</label>
          <select name="point_vente">
            <option value="">Choisir</option>
            <option>Université</option>
            <option>Indépendance</option>
          </select>
        </div>

        <div class="field">
          <label>Adresse (si livraison)</label>
          <input type="text" name="adresse" placeholder="Quartier, rue, repère...">
        </div>

        <button class="btn" style="width:100%;margin-top:10px;padding:14px;">
          Confirmer la commande
        </button>
      </form>

      <p class="muted" style="margin:12px 0 0;line-height:1.6;">
        🔒 Checkout protégé : l’accès est réservé aux utilisateurs connectés.
      </p>
    </div>

    <div style="position:sticky;top:80px;">
      <div class="card">
        <div class="body">
          <h3 style="margin:0 0 10px;color:var(--g2);">Résumé</h3>
          <p class="muted" style="margin:0;">Le total sera calculé depuis le panier côté backend.</p>
          <a class="ghost" style="margin-top:12px;display:inline-block;" href="{{ route('panier.index') }}">← Retour panier</a>
        </div>
      </div>
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

  .field{display:flex;flex-direction:column;gap:6px;margin-top:14px}
  .field label{font-size:13px;color:var(--mut);font-weight:900}
  .field input,.field select{
    border:1px solid rgba(17,24,39,.10);
    border-radius:14px;
    padding:12px;
    outline:none;
    background:#fff;
    font-size:14px;
  }
  .field input:focus,.field select:focus{
    border-color:rgba(31,122,77,.35);
    box-shadow:0 0 0 4px rgba(31,122,77,.10);
  }

  @media (max-width:980px){
    section > div[style*="grid-template-columns:1fr 380px"]{grid-template-columns:1fr!important;}
    section > div > div[style*="position:sticky"]{position:static!important;}
  }
</style>
@endpush
