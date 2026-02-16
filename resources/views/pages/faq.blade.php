@extends('layouts.app')

@section('title', 'FAQ - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / <b>FAQ</b></div>
  <div class="titleRow">
    <div>
      <h1>Questions fréquentes</h1>
      <p class="subtitle">Tout ce qu’il faut savoir avant de commander</p>
    </div>
  </div>
</section>

<section class="section">

  <div class="heroCard" style="background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.95));">
    <h2 style="margin:0 0 14px;color:var(--g2);">Aide rapide</h2>
    <p class="muted" style="margin:0;">
      Si vous ne trouvez pas votre réponse, contactez-nous via la page Contact.
    </p>

    <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:12px;">
      <a class="btn" href="{{ route('contact') }}">✉️ Contact</a>
      <a class="ghost" href="{{ route('points-vente') }}">📍 Points de vente</a>
      <a class="ghost" href="{{ route('cataloguelivres') }}">📚 Catalogue livres</a>
    </div>
  </div>

  <div class="grid3" style="margin-top:18px;grid-template-columns:1fr 1fr;gap:16px;">
    {{-- Bloc 1 --}}
    <div class="card">
      <div class="body">
        <span class="tag">Commandes</span>
        <details class="faqItem">
          <summary>Dois-je être connecté pour naviguer sur le site ?</summary>
          <p class="muted">Non. La connexion est demandée uniquement au moment de finaliser la commande.</p>
        </details>
        <details class="faqItem">
          <summary>Comment passer une commande ?</summary>
          <p class="muted">Choisissez vos produits, ajoutez au panier, puis passez au paiement.</p>
        </details>
        <details class="faqItem">
          <summary>Quels moyens de paiement sont disponibles ?</summary>
          <p class="muted">Paiement en ligne (à brancher plus tard) ou selon les modalités indiquées au checkout.</p>
        </details>
      </div>
    </div>

    {{-- Bloc 2 --}}
    <div class="card">
      <div class="body">
        <span class="tag">Livraison & Retrait</span>
        <details class="faqItem">
          <summary>Livrez-vous à domicile ?</summary>
          <p class="muted">Oui, selon votre zone. Le détail sera affiché au moment de la commande.</p>
        </details>
        <details class="faqItem">
          <summary>Puis-je retirer en magasin ?</summary>
          <p class="muted">Oui. Vous pouvez retirer votre commande dans nos points de vente.</p>
        </details>
        <details class="faqItem">
          <summary>Quels sont les horaires des points de vente ?</summary>
          <p class="muted">Les horaires sont affichés sur chaque fiche point de vente.</p>
        </details>
      </div>
    </div>

    {{-- Bloc 3 --}}
    <div class="card">
      <div class="body">
        <span class="tag">Produits</span>
        <details class="faqItem">
          <summary>Comment savoir si un produit est en stock ?</summary>
          <p class="muted">La disponibilité apparaît sur la fiche produit (En stock / Indisponible).</p>
        </details>
        <details class="faqItem">
          <summary>Puis-je réserver un livre ?</summary>
          <p class="muted">Oui. Contactez directement le point de vente Université ou Indépendance.</p>
        </details>
        <details class="faqItem">
          <summary>Proposez-vous des packs scolaires ?</summary>
          <p class="muted">Oui. Consultez la page Packs scolaires pour voir les packs par niveau.</p>
        </details>
      </div>
    </div>

    {{-- Bloc 4 --}}
    <div class="card">
      <div class="body">
        <span class="tag">Compte & Support</span>
        <details class="faqItem">
          <summary>J’ai oublié mon mot de passe, comment faire ?</summary>
          <p class="muted">Utilisez la page “Mot de passe oublié” pour recevoir un lien de réinitialisation.</p>
        </details>
        <details class="faqItem">
          <summary>Quel est le délai de réponse aux messages ?</summary>
          <p class="muted">Généralement 24 à 48 heures ouvrées.</p>
        </details>
        <details class="faqItem">
          <summary>Où puis-je vous contacter rapidement ?</summary>
          <p class="muted">Via la page Contact ou les coordonnées des points de vente.</p>
        </details>
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

  .faqItem{
    border:1px solid rgba(17,24,39,.08);
    border-radius:14px;
    padding:12px;
    margin-top:12px;
    background:#fff;
  }
  .faqItem summary{
    cursor:pointer;
    font-weight:950;
    color:var(--g2);
    list-style:none;
  }
  .faqItem summary::-webkit-details-marker{display:none;}
  .faqItem p{margin:10px 0 0;line-height:1.7;}

  @media (max-width:980px){
    .grid3[style*="grid-template-columns:1fr 1fr"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
