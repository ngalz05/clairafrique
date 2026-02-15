@extends('layouts.app')

@section('title', 'Politique de confidentialité - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / Légal / <b>Confidentialité</b></div>
  <div class="titleRow">
    <div>
      <h1>Politique de confidentialité</h1>
      <p class="subtitle">Comment nous collectons et utilisons vos données</p>
    </div>
  </div>
</section>

<section class="section">

  <div class="heroCard" style="background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.95));">
    <h3 style="margin:0 0 10px;color:var(--g2);">Transparence</h3>
    <p class="muted" style="margin:0;line-height:1.7;">
      Nous collectons uniquement les données nécessaires au fonctionnement du site (compte, commande, contact).
      Vous pouvez demander la modification/suppression de vos données via la page Contact.
    </p>
  </div>

  <div class="grid3" style="margin-top:16px;grid-template-columns:1fr 1fr;gap:16px;">
    <div class="card"><div class="body">
      <span class="tag">Données</span>
      <h3 style="margin:10px 0 6px;">Ce que nous collectons</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        Nom, email, téléphone, adresse (si livraison), informations de commande, messages envoyés via le formulaire.
      </p>
    </div></div>

    <div class="card"><div class="body">
      <span class="tag">Usage</span>
      <h3 style="margin:10px 0 6px;">Pourquoi</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        Traiter les commandes, répondre aux demandes, gérer le compte utilisateur, améliorer l’expérience.
      </p>
    </div></div>

    <div class="card"><div class="body">
      <span class="tag">Conservation</span>
      <h3 style="margin:10px 0 6px;">Durée</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        Conservation le temps nécessaire au service et aux obligations légales. (À préciser selon vos règles internes.)
      </p>
    </div></div>

    <div class="card"><div class="body">
      <span class="tag">Sécurité</span>
      <h3 style="margin:10px 0 6px;">Protection</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        Mesures techniques et organisationnelles pour limiter l’accès non autorisé. Checkout protégé par authentification.
      </p>
    </div></div>
  </div>

  <div class="card" style="margin-top:16px;">
    <div class="body">
      <span class="tag">Vos droits</span>
      <h3 style="margin:10px 0 6px;">Accès / rectification / suppression</h3>
      <p class="muted" style="margin:0;line-height:1.7;">
        Vous pouvez demander l’accès, la rectification ou la suppression de vos données en nous contactant.
      </p>
      <div class="row" style="margin-top:12px;">
        <span class="muted">Faire une demande</span>
        <a class="btnMini" href="{{ route('contact') }}">Contacter</a>
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
  @media(max-width:980px){
    .grid3[style*="grid-template-columns:1fr 1fr"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
