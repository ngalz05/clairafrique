@extends('layouts.app')

@section('title', 'Packs scolaires - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Packs scolaires</b></div>
  <div class="titleRow">
    <div>
      <h1>Packs scolaires</h1>
      <p class="subtitle">Des packs par niveau pour gagner du temps</p>
    </div>
  </div>
</section>

<section class="section">

  <div class="heroCard" style="background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.95));">
    <h3 style="margin:0 0 10px;color:var(--g2);">Comment ça marche ?</h3>
    <ul class="check">
      <li>Choisissez le pack correspondant au niveau</li>
      <li>Ajoutez au panier</li>
      <li>Retrait en point de vente ou livraison (selon zone)</li>
    </ul>
    <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:12px;">
      <a class="ghost" href="{{ route('points-vente') }}">📍 Points de vente</a>
      <a class="ghost" href="{{ route('faq') }}">❓ FAQ</a>
    </div>
  </div>

  <div class="secHead" style="margin-top:18px;">
    <h2>Nos packs</h2>
    <a href="{{ route('contact') }}">Demander un pack sur mesure →</a>
  </div>

  <div class="grid3" style="margin-top:12px;">
    <article class="card">
      <div class="thumb">CP / CE1</div>
      <div class="body">
        <span class="tag">Primaire</span>
        <h3>Pack Débutants</h3>
        <p class="muted">Cahiers • Crayons • Ardoise • Stylos</p>
        <p style="font-weight:950;color:var(--g2);margin:10px 0 0;">9 500 FCFA</p>
        <div class="row" style="margin-top:12px;">
          <span class="muted">Disponible</span>
          <button class="btnMini" onclick="location.href='{{ route('panier') }}'">Ajouter</button>
        </div>
      </div>
    </article>

    <article class="card">
      <div class="thumb">CM1 / CM2</div>
      <div class="body">
        <span class="tag">Primaire</span>
        <h3>Pack Intermédiaire</h3>
        <p class="muted">Cahiers • Maths • Géométrie • Trousse</p>
        <p style="font-weight:950;color:var(--g2);margin:10px 0 0;">12 500 FCFA</p>
        <div class="row" style="margin-top:12px;">
          <span class="muted">Disponible</span>
          <button class="btnMini" onclick="location.href='{{ route('panier') }}'">Ajouter</button>
        </div>
      </div>
    </article>

    <article class="card">
      <div class="thumb">Collège</div>
      <div class="body">
        <span class="tag">Secondaire</span>
        <h3>Pack Collège</h3>
        <p class="muted">Cahiers • Copies • Stylos • Calculatrice</p>
        <p style="font-weight:950;color:var(--g2);margin:10px 0 0;">18 000 FCFA</p>
        <div class="row" style="margin-top:12px;">
          <span class="muted">Disponible</span>
          <button class="btnMini" onclick="location.href='{{ route('panier') }}'">Ajouter</button>
        </div>
      </div>
    </article>
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
