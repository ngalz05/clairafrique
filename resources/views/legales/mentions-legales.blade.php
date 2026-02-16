@extends('layouts.app')

@section('title', 'Mentions légales - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / Légal / <b>Mentions légales</b></div>
  <div class="titleRow">
    <div>
      <h1>Mentions légales</h1>
      <p class="subtitle">Informations légales et éditeur du site</p>
    </div>
  </div>
</section>

<section class="section">

  <div class="grid3" style="grid-template-columns:1fr 1fr;gap:16px;">
    <div class="card">
      <div class="body">
        <span class="tag">Éditeur</span>
        <h3 style="margin:10px 0 6px;">ClairAfrique</h3>
        <p class="muted" style="margin:0;line-height:1.7;">
          Librairie & Papeterie<br>
          Dakar, Sénégal<br>
          (Compléter ici : forme juridique / NINEA / RCCM si besoin)
        </p>
      </div>
    </div>

    <div class="card">
      <div class="body">
        <span class="tag">Contact</span>
        <h3 style="margin:10px 0 6px;">Nous joindre</h3>
        <p class="muted" style="margin:0;line-height:1.7;">
          Page Contact : <b>Contactez-nous</b><br>
          Email général : <b>contact@clairafrique.com</b>
        </p>
        <div class="row" style="margin-top:12px;">
          <span class="muted">Accès</span>
          <a class="btnMini" href="{{ route('contact') }}">Ouvrir</a>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="body">
        <span class="tag">Hébergement</span>
        <h3 style="margin:10px 0 6px;">Serveur / Hébergeur</h3>
        <p class="muted" style="margin:0;line-height:1.7;">
          (À compléter : nom de l’hébergeur, adresse, contact)
        </p>
      </div>
    </div>

    <div class="card">
      <div class="body">
        <span class="tag">Propriété</span>
        <h3 style="margin:10px 0 6px;">Droits</h3>
        <p class="muted" style="margin:0;line-height:1.7;">
          Les contenus du site sont protégés. Toute reproduction sans autorisation est interdite.
        </p>
      </div>
    </div>
  </div>

  <div class="heroCard" style="margin-top:16px;">
    <h3 style="margin:0 0 8px;">Liens utiles</h3>
    <div style="display:flex;gap:10px;flex-wrap:wrap;">
      <a class="ghost" href="{{ route('politique-confidentialite') }}">Politique de confidentialité</a>
      <a class="ghost" href="{{ route('conditions-utilisation') }}">Conditions d’utilisation</a>
      <a class="ghost" href="{{ route('faq') }}">FAQ</a>
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
  @media(max-width:980px){
    .grid3[style*="grid-template-columns:1fr 1fr"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
