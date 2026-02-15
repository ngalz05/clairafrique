@extends('layouts.app')

@section('title', 'Mes commandes - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / Compte / <b>Mes commandes</b></div>
  <div class="titleRow">
    <div>
      <h1>Mes commandes</h1>
      <p class="subtitle">Retrouvez l’historique et le statut de vos achats</p>
    </div>
  </div>
</section>

<section class="section">
  @php
    // Mode démo: mets à true si tu veux afficher "aucune commande"
    $aucuneCommande = false;

    // Données fake pour l’affichage (front uniquement)
    $commandes = [
      ['id'=>10021,'date'=>'14/02/2026','statut'=>'En préparation','total'=>'11 000','articles'=>4],
      ['id'=>10012,'date'=>'02/02/2026','statut'=>'Livrée','total'=>'7 500','articles'=>1],
      ['id'=>10005,'date'=>'18/01/2026','statut'=>'Annulée','total'=>'3 000','articles'=>2],
    ];
    $badgeColor = [
      'En préparation' => 'background:rgba(245,158,11,.12);color:#92400e;border:1px solid rgba(245,158,11,.25);',
      'Livrée' => 'background:rgba(34,197,94,.12);color:#166534;border:1px solid rgba(34,197,94,.25);',
      'Annulée' => 'background:rgba(239,68,68,.12);color:#991b1b;border:1px solid rgba(239,68,68,.25);',
    ];
  @endphp

  @if($aucuneCommande)
    <div class="heroCard" style="text-align:center;padding:40px;">
      <div style="font-size:48px;margin-bottom:16px;">📦</div>
      <h3>Aucune commande pour le moment</h3>
      <p class="muted">Parcourez le catalogue et ajoutez des articles à votre panier.</p>
      <div class="heroBtns" style="margin-top:18px;justify-content:center;">
        <a class="btn" href="{{ route('cataloguelivres') }}">Explorer la librairie</a>
        <a class="ghost" href="{{ route('catalogue.papeterie') }}">Voir la papeterie</a>
      </div>
    </div>
  @else
    <div class="secHead">
      <h2>Historique</h2>
      <a href="{{ route('contact') }}">Besoin d’aide ? →</a>
    </div>

    <div style="display:grid;gap:14px;margin-top:12px;">
      @foreach($commandes as $c)
        <div class="card">
          <div class="body" style="display:grid;grid-template-columns:1fr auto;gap:12px;align-items:center;">
            <div>
              <div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap;">
                <div style="font-weight:950;font-size:16px;">Commande #{{ $c['id'] }}</div>
                <span class="tag" style="{{ $badgeColor[$c['statut']] ?? '' }}">{{ $c['statut'] }}</span>
              </div>
              <p class="muted" style="margin:6px 0 0;">
                Date : {{ $c['date'] }} • Articles : {{ $c['articles'] }} • Total : <b>{{ $c['total'] }} FCFA</b>
              </p>
            </div>

            <div style="display:flex;gap:10px;flex-wrap:wrap;justify-content:flex-end;">
              <a class="ghost" href="{{ route('panier') }}">Recommander</a>
              <a class="btnMini" href="{{ route('commandes.show', $c['id']) }}">Détails</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="heroCard" style="margin-top:20px;background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.95));">
      <h3 style="margin:0 0 8px;color:var(--g2);">Infos utiles</h3>
      <p class="muted" style="margin:0;">
        La connexion sera demandée au moment du paiement. Les statuts et l’historique seront rendus dynamiques côté backend.
      </p>
      <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:12px;">
        <a class="ghost" href="{{ route('faq') }}">FAQ</a>
        <a class="ghost" href="{{ route('points-vente') }}">Points de vente</a>
      </div>
    </div>
  @endif
</section>
@endsection

@push('styles')
<style>
  .pageHead{padding:18px 0 6px}
  .crumbs{color:var(--mut);font-size:13px}
  .titleRow{display:flex;align-items:end;justify-content:space-between;gap:12px;margin-top:8px}
  h1{margin:0;font-size:30px;letter-spacing:-.4px}
  .subtitle{margin:6px 0 0;color:var(--mut);line-height:1.6}

  @media (max-width:640px){
    .card .body[style*="grid-template-columns:1fr auto"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
