@extends('layouts.app')

@section('title', 'Mon panier - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Panier</b></div>
  <div class="titleRow">
    <div>
      <h1>Mon panier</h1>
      <p class="subtitle">Vérifiez vos articles avant de payer</p>
    </div>
  </div>
</section>

<section class="section">
  @php
    // Démo front
    $items = [
      (object)['id'=>1,'titre'=>'Mathématiques — 3ème','cat'=>'Scolaire','prix'=>4500,'qte'=>1],
      (object)['id'=>2,'titre'=>'Cahier premium 200 pages','cat'=>'Papeterie','prix'=>1500,'qte'=>2],
    ];
    $sousTotal = 0;
    foreach($items as $it){ $sousTotal += $it->prix * $it->qte; }
    $livraison = 0;
    $total = $sousTotal + $livraison;
  @endphp

  <div style="display:grid;grid-template-columns:1fr 380px;gap:20px;align-items:start;">
    <div style="display:grid;gap:14px;">
      @foreach($items as $it)
        <div class="card">
          <div class="body" style="display:grid;grid-template-columns:100px 1fr auto;gap:14px;align-items:center;">
            <div class="thumb" style="height:90px;border-radius:12px;display:grid;place-items:center;">Image</div>

            <div>
              <span class="tag">{{ $it->cat }}</span>
              <h3 style="margin:8px 0 4px;">{{ $it->titre }}</h3>
              <p class="muted">{{ number_format($it->prix,0,',',' ') }} FCFA</p>

              <div style="margin-top:10px;display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
                <form method="POST" action="{{ route('panier.update', $it->id) }}" style="display:flex;gap:8px;align-items:center;">
                  @csrf
                  <button class="ghost" type="submit" name="action" value="minus" style="padding:6px 12px;">−</button>
                  <span style="font-weight:950;min-width:30px;text-align:center;">{{ $it->qte }}</span>
                  <button class="ghost" type="submit" name="action" value="plus" style="padding:6px 12px;">+</button>
                </form>

                <form method="POST" action="{{ route('panier.remove', $it->id) }}">
                  @csrf
                  @method('DELETE')
                  <button class="ghost" style="color:#ef4444;border-color:#ef4444;">🗑️ Retirer</button>
                </form>
              </div>
            </div>

            <div style="text-align:right;font-weight:950;color:var(--g2);">
              {{ number_format($it->prix*$it->qte,0,',',' ') }} FCFA
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div style="position:sticky;top:80px;">
      <div class="heroCard">
        <h3 style="margin:0 0 14px;font-size:18px;">Résumé</h3>

        <div style="display:flex;justify-content:space-between;padding:8px 0;">
          <span class="muted">Sous-total</span>
          <span style="font-weight:900;">{{ number_format($sousTotal,0,',',' ') }} FCFA</span>
        </div>

        <div style="display:flex;justify-content:space-between;padding:8px 0;">
          <span class="muted">Livraison</span>
          <span style="font-weight:900;color:var(--g2);">{{ $livraison==0 ? 'Gratuite' : number_format($livraison,0,',',' ') .' FCFA' }}</span>
        </div>

        <hr style="margin:14px 0;border:none;border-top:1px solid var(--b);">

        <div style="display:flex;justify-content:space-between;padding:8px 0;">
          <span style="font-weight:950;font-size:16px;">Total</span>
          <span style="font-weight:950;font-size:20px;color:var(--g2);">{{ number_format($total,0,',',' ') }} FCFA</span>
        </div>

        <a class="btn" style="width:100%;margin-top:14px;padding:14px;text-align:center;display:inline-block;"
           href="{{ route('panier.checkout') }}">
          Passer au paiement
        </a>

        <a class="ghost" style="width:100%;margin-top:10px;text-align:center;display:inline-block;"
           href="{{ route('cataloguelivres') }}">
          ← Continuer les achats
        </a>
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
  @media (max-width:980px){
    section > div[style*="grid-template-columns:1fr 380px"]{grid-template-columns:1fr!important;}
    section > div > div[style*="position:sticky"]{position:static!important;}
  }
  @media (max-width:640px){
    .card .body[style*="grid-template-columns:100px"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
