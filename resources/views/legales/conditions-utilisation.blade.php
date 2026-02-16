@extends('layouts.app')

@section('title', "Conditions d'utilisation - ClairAfrique")

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / Légal / <b>Conditions d'utilisation</b></div>
  <div class="titleRow">
    <div>
      <h1>Conditions d'utilisation</h1>
      <p class="subtitle">Règles d’accès et d’utilisation du site ClairAfrique</p>
    </div>
  </div>
</section>

<section class="section">

  <div class="heroCard" style="background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.95));">
    <h3 style="margin:0 0 10px;color:var(--g2);">Résumé</h3>
    <p class="muted" style="margin:0;line-height:1.7;">
      En naviguant sur ClairAfrique, vous acceptez ces conditions. Le site permet de consulter des produits
      (livres/papeterie) et d’effectuer des commandes selon disponibilité.
    </p>
  </div>

  <div class="grid3" style="margin-top:16px;grid-template-columns:1fr 1fr;gap:16px;">
    <div class="card"><div class="body">
      <span class="tag">1. Accès</span>
      <h3 style="margin:10px 0 6px;">Accès au site</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        Le site est accessible 24/7 sauf maintenance. ClairAfrique peut interrompre l’accès pour raisons techniques.
      </p>
    </div></div>

    <div class="card"><div class="body">
      <span class="tag">2. Compte</span>
      <h3 style="margin:10px 0 6px;">Création de compte</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        La navigation peut être libre. Un compte peut être requis pour finaliser une commande et accéder à l’historique.
      </p>
    </div></div>

    <div class="card"><div class="body">
      <span class="tag">3. Commandes</span>
      <h3 style="margin:10px 0 6px;">Disponibilité & prix</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        Les prix affichés sont indicatifs et peuvent évoluer. La disponibilité dépend du stock au moment de la validation.
      </p>
    </div></div>

    <div class="card"><div class="body">
      <span class="tag">4. Contenus</span>
      <h3 style="margin:10px 0 6px;">Propriété intellectuelle</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        Les textes, visuels, logos et contenus du site sont protégés. Toute reproduction non autorisée est interdite.
      </p>
    </div></div>

    <div class="card"><div class="body">
      <span class="tag">5. Responsabilité</span>
      <h3 style="margin:10px 0 6px;">Limitation</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        ClairAfrique ne saurait être tenue responsable des interruptions, erreurs ou dommages indirects liés à l’usage du site.
      </p>
    </div></div>

    <div class="card"><div class="body">
      <span class="tag">6. Contact</span>
      <h3 style="margin:10px 0 6px;">Support</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        Pour toute question, utilisez la page Contact ou les coordonnées des points de vente.
      </p>
      <div class="row" style="margin-top:12px;">
        <span class="muted">Besoin d’aide</span>
        <a class="btnMini" href="{{ route('contact') }}">Nous écrire</a>
      </div>
    </div></div>
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
  @media(max-width:980px){
    .grid3[style*="grid-template-columns:1fr 1fr"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
