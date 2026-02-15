@extends('layouts.app')

@section('title', 'Produits - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Produits</b></div>
  <div class="titleRow">
    <div>
      <h1>Produits</h1>
      <p class="subtitle">Liste + recherche rapide</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="heroCard">
    <form method="GET" action="{{ route('produits.index') }}" style="display:flex;gap:10px;flex-wrap:wrap;">
      <input name="q" value="{{ request('q') }}" placeholder="Rechercher…" style="flex:1;min-width:240px;border:1px solid rgba(17,24,39,.10);border-radius:14px;padding:12px;outline:none;background:#fff;">
      <button class="btn" type="submit">🔎</button>
      <a class="ghost" href="{{ route('produits.index') }}">Reset</a>
    </form>
  </div>

  @php
    $all = collect([
      (object)['id'=>1,'titre'=>'Mathématiques — 3ème','categorie'=>'Scolaire','prix'=>4500,'stock'=>12],
      (object)['id'=>2,'titre'=>"L'Aventure Ambiguë",'categorie'=>'Romans','prix'=>3500,'stock'=>0],
      (object)['id'=>3,'titre'=>'Introduction au Droit','categorie'=>'Universitaire','prix'=>12000,'stock'=>5],
    ]);

    $q = trim((string)request('q',''));
    $res = $all;
    if($q!==''){
      $res = $res->filter(fn($p)=> str_contains(mb_strtolower($p->titre), mb_strtolower($q)));
    }
    $res = $res->values();
  @endphp

  <div class="grid3" style="margin-top:12px;">
    @foreach($res as $p)
      <article class="card">
        <div class="thumb">Image</div>
        <div class="body">
          <span class="tag">{{ $p->categorie }}</span>
          <h3>{{ $p->titre }}</h3>
          <p class="muted">{{ number_format($p->prix,0,',',' ') }} FCFA</p>
          <div class="row">
            <span class="muted">{{ $p->stock>0?'Disponible':'Indisponible' }}</span>
            <a class="btnMini" href="{{ route('produits.show',$p->id) }}">Voir</a>
          </div>
        </div>
      </article>
    @endforeach
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
