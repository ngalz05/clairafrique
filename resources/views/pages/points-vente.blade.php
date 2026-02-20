@extends('layouts.app')

@section('title', 'Points de vente - ClairAfrique')

@section('content')

<section class="pageHead">
  <div class="crumbs">Accueil / <b>Points de vente</b></div>
  <div class="titleRow">
    <div>
      <h1>Nos points de vente</h1>
      <p class="subtitle">Retrait possible et assistance sur place</p>
    </div>
  </div>
</section>

<section class="section">

  <div class="heroCard" style="background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.95));">
    <h3 style="margin:0 0 10px;color:var(--g2);">Trouver rapidement</h3>
    <p class="muted" style="margin:0;">
      Deux points de vente à Dakar : <b>Université</b> et <b>Indépendance</b>.
    </p>
    <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:12px;">
      <a class="btn" href="{{ route('contact') }}">✉️ Contacter</a>
      <a class="ghost" href="{{ route('faq') }}">❓ FAQ</a>
    </div>
  </div>

  <div class="secHead" style="margin-top:18px;">
    <h2>Nos adresses</h2>
    <a href="{{ route('contact') }}">Besoin d’un conseil ? →</a>
  </div>

  <div class="grid3" style="grid-template-columns:repeat(2,1fr);gap:16px;margin-top:12px;">

    {{-- Université --}}
    <article class="card">
      <div class="thumb" style="height:180px;">Carte / Photo</div>
      <div class="body">
        <span class="tag">Université</span>
        <h3 style="margin:10px 0 6px;">ClairAfrique Université</h3>
        <p class="muted">Avenue de l’Université, Dakar</p>

        <div style="margin:12px 0;">
          <p class="muted" style="margin:0;"><b>📞</b> (+221) 33 864 69 40</p>
          <p class="muted" style="margin:6px 0 0;"><b>✉️</b> clairafuniv@clairafrique.com</p>
          <p class="muted" style="margin:6px 0 0;"><b>🕒</b> Lun – Sam : 09h00 – 19h00</p>
        </div>

        <div class="row">
          <span class="muted">Retrait possible</span>
          <a class="btnMini" href="{{ route('contact') }}">Écrire</a>
        </div>
      </div>
    </article>

    {{-- Indépendance --}}
    <article class="card">
      <div class="thumb" style="height:180px;">Carte / Photo</div>
      <div class="body">
        <span class="tag">Indépendance</span>
        <h3 style="margin:10px 0 6px;">ClairAfrique Indépendance</h3>
        <p class="muted">Boulevard de l’Indépendance, Dakar</p>

        <div style="margin:12px 0;">
          <p class="muted" style="margin:0;"><b>📞</b> (+221) 33 822 21 69</p>
          <p class="muted" style="margin:6px 0 0;"><b>✉️</b> clairafinde@clairafrique.com</p>
          <p class="muted" style="margin:6px 0 0;"><b>🕒</b> Lun – Sam : 09h00 – 18h30</p>
        </div>

        <div class="row">
          <span class="muted">Retrait possible</span>
          <a class="btnMini" href="{{ route('contact') }}">Écrire</a>
        </div>
      </div>
    </article>

  </div>

  {{-- Mini section “infos pratiques” --}}
  <div class="grid3" style="margin-top:18px;grid-template-columns:repeat(3,1fr);gap:16px;">
    <div class="card">
      <div class="body">
        <span class="tag">Conseil</span>
        <h3 style="margin:10px 0 6px;">Réservation</h3>
        <p class="muted" style="margin:0;">Appelez ou écrivez pour vérifier la disponibilité avant de venir.</p>
      </div>
    </div>
    <div class="card">
      <div class="body">
        <span class="tag">Commande</span>
        <h3 style="margin:10px 0 6px;">Retrait rapide</h3>
        <p class="muted" style="margin:0;">Commandez en ligne et retirez en magasin selon disponibilité.</p>
      </div>
    </div>
    <div class="card">
      <div class="body">
        <span class="tag">Support</span>
        <h3 style="margin:10px 0 6px;">Aide</h3>
        <p class="muted" style="margin:0;">Notre équipe est disponible aux horaires d’ouverture.</p>
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
    .grid3[style*="grid-template-columns:repeat(2"]{grid-template-columns:1fr!important;}
    .grid3[style*="grid-template-columns:repeat(3"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
