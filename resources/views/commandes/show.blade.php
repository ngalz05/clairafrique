@extends('layouts.app')

@section('title', 'Détail commande - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / Compte / Commandes / <b>Détail</b></div>
  <div class="titleRow">
    <div>
      <h1>Détail de la commande</h1>
      <p class="subtitle">Récapitulatif des articles et informations</p>
    </div>
  </div>
</section>

<section class="section">
  @php
    // Pour tester sans backend : on récupère l'id de l'URL
    $id = $id ?? request()->route('id') ?? 10021;

    // Données fake
    $commande = [
      'id' => $id,
      'date' => '14/02/2026',
      'statut' => 'En préparation',
      'paiement' => 'Paiement à la livraison (démo)',
      'livraison' => 'Retrait en point de vente',
      'adresse' => 'Point de vente Université, Dakar',
    ];

    $items = [
      ['nom'=>'Mathématiques — 3ème','cat'=>'Scolaire','prix'=>4500,'qte'=>1],
      ['nom'=>'Cahier premium 200 pages','cat'=>'Papeterie','prix'=>1500,'qte'=>2],
      ['nom'=>"L'Aventure Ambiguë",'cat'=>'Romans','prix'=>3500,'qte'=>1],
    ];

    $sousTotal = 0;
    foreach($items as $it){ $sousTotal += ($it['prix'] * $it['qte']); }
    $livraison = 0; // démo
    $total = $sousTotal + $livraison;

    $badgeStyle = 'background:rgba(245,158,11,.12);color:#92400e;border:1px solid rgba(245,158,11,.25);';
    if($commande['statut']==='Livrée') $badgeStyle = 'background:rgba(34,197,94,.12);color:#166534;border:1px solid rgba(34,197,94,.25);';
    if($commande['statut']==='Annulée') $badgeStyle = 'background:rgba(239,68,68,.12);color:#991b1b;border:1px solid rgba(239,68,68,.25);';
  @endphp

  <div style="display:grid;grid-template-columns:1fr 380px;gap:20px;align-items:start;">

    {{-- Colonne gauche : items --}}
    <div style="display:grid;gap:14px;">
      <div class="card">
        <div class="body">
          <div style="display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap;">
            <div>
              <div style="font-weight:950;font-size:16px;">Commande #{{ $commande['id'] }}</div>
              <p class="muted" style="margin:6px 0 0;">Date : {{ $commande['date'] }}</p>
            </div>
            <span class="tag" style="{{ $badgeStyle }}">{{ $commande['statut'] }}</span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="body">
          <h3 style="margin:0 0 12px;color:var(--g2);">Articles</h3>

          <div style="display:grid;gap:12px;">
            @foreach($items as $it)
              <div style="display:grid;grid-template-columns:88px 1fr auto;gap:12px;align-items:center;padding:12px;border:1px solid rgba(17,24,39,.08);border-radius:14px;">
                <div class="thumb" style="height:72px;border-radius:12px;display:grid;place-items:center;">Image</div>
                <div>
                  <span class="tag">{{ $it['cat'] }}</span>
                  <div style="font-weight:950;margin-top:6px;">{{ $it['nom'] }}</div>
                  <p class="muted" style="margin:4px 0 0;">{{ number_format($it['prix'],0,',',' ') }} FCFA • Qté {{ $it['qte'] }}</p>
                </div>
                <div style="font-weight:950;color:var(--g2);">
                  {{ number_format($it['prix'] * $it['qte'],0,',',' ') }} FCFA
                </div>
              </div>
            @endforeach
          </div>

        </div>
      </div>

      <div style="display:flex;gap:10px;flex-wrap:wrap;">
        <a class="ghost" href="{{ route('commandes.index') }}">← Retour</a>
        <a class="ghost" href="{{ route('contact') }}">Contacter le support</a>
      </div>
    </div>

    {{-- Colonne droite : résumé --}}
    <div style="position:sticky;top:80px;">
      <div class="heroCard">
        <h3 style="margin:0 0 14px;font-size:18px;">Résumé</h3>

        <div style="display:flex;justify-content:space-between;padding:8px 0;">
          <span class="muted">Sous-total</span>
          <span style="font-weight:900;">{{ number_format($sousTotal,0,',',' ') }} FCFA</span>
        </div>

        <div style="display:flex;justify-content:space-between;padding:8px 0;">
          <span class="muted">Livraison</span>
          <span style="font-weight:900;color:var(--g2);">{{ $livraison==0 ? 'Gratuite' : number_format($livraison,0,',',' ') . ' FCFA' }}</span>
        </div>

        <hr style="margin:14px 0;border:none;border-top:1px solid var(--b);">

        <div style="display:flex;justify-content:space-between;padding:8px 0;">
          <span style="font-weight:950;font-size:16px;">Total</span>
          <span style="font-weight:950;font-size:20px;color:var(--g2);">{{ number_format($total,0,',',' ') }} FCFA</span>
        </div>

        <div style="margin-top:14px;background:var(--gl);border:1px solid rgba(20,92,57,.16);border-radius:14px;padding:12px;">
          <p class="muted" style="margin:0;line-height:1.6;">
            <b>Paiement :</b> {{ $commande['paiement'] }}<br>
            <b>Livraison :</b> {{ $commande['livraison'] }}<br>
            <b>Adresse :</b> {{ $commande['adresse'] }}
          </p>
        </div>

        <button type="button" class="btn" style="width:100%;margin-top:14px;padding:14px;">
          Télécharger facture (démo)
        </button>
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
    div[style*="grid-template-columns:88px"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
