@extends('layouts.app')

@section('title', 'Mon Panier - ClairAfrique')

@section('content')

<section class="section">
  <h1 style="margin-bottom:20px;">Mon Panier</h1>

  {{-- Pour tester : mettre à true pour voir panier vide, false pour voir avec articles --}}
  @php $panierVide = false; @endphp

  @if($panierVide)
    {{-- Panier vide --}}
    <div class="heroCard" style="text-align:center;padding:40px;">
      <div style="font-size:48px;margin-bottom:16px;">🛒</div>
      <h3>Votre panier est vide</h3>
      <p class="muted">Découvrez nos produits et ajoutez-les à votre panier</p>
      <div class="heroBtns" style="margin-top:20px;justify-content:center;">
        <button class="btn" onclick="location.href='{{ route('catalogue.livres') }}'">
          Explorer la librairie
        </button>
        <button class="ghost" onclick="location.href='{{ route('catalogue.papeterie') }}'">
          Voir la papeterie
        </button>
      </div>
    </div>
  @else
    {{-- Panier avec articles --}}
    <div style="display:grid;grid-template-columns:1fr 400px;gap:20px;align-items:start;">
      
      {{-- Liste des articles --}}
      <div style="display:grid;gap:14px;">
        
        {{-- Article 1 --}}
        <div class="card" style="display:grid;grid-template-columns:120px 1fr auto;gap:16px;padding:16px;align-items:center;">
          <div class="thumb" style="height:120px;border-radius:12px;">Image</div>
          <div>
            <span class="tag">Scolaire</span>
            <h3 style="margin:8px 0 4px;">Mathématiques 3ème</h3>
            <p class="muted">4 500 FCFA</p>
            <div style="margin-top:12px;display:flex;gap:8px;align-items:center;">
              <button class="ghost" style="padding:6px 12px;font-size:16px;">−</button>
              <span style="font-weight:900;min-width:30px;text-align:center;">1</span>
              <button class="ghost" style="padding:6px 12px;font-size:16px;">+</button>
            </div>
          </div>
          <div style="text-align:right;">
            <p style="font-weight:950;font-size:18px;margin:0;">4 500 FCFA</p>
            <button class="ghost" style="margin-top:12px;color:#ef4444;border-color:#ef4444;">
              🗑️ Retirer
            </button>
          </div>
        </div>

        {{-- Article 2 --}}
        <div class="card" style="display:grid;grid-template-columns:120px 1fr auto;gap:16px;padding:16px;align-items:center;">
          <div class="thumb" style="height:120px;border-radius:12px;">Image</div>
          <div>
            <span class="tag">Papeterie</span>
            <h3 style="margin:8px 0 4px;">Cahier premium 200 pages</h3>
            <p class="muted">1 500 FCFA</p>
            <div style="margin-top:12px;display:flex;gap:8px;align-items:center;">
              <button class="ghost" style="padding:6px 12px;font-size:16px;">−</button>
              <span style="font-weight:900;min-width:30px;text-align:center;">2</span>
              <button class="ghost" style="padding:6px 12px;font-size:16px;">+</button>
            </div>
          </div>
          <div style="text-align:right;">
            <p style="font-weight:950;font-size:18px;margin:0;">3 000 FCFA</p>
            <button class="ghost" style="margin-top:12px;color:#ef4444;border-color:#ef4444;">
              🗑️ Retirer
            </button>
          </div>
        </div>

        {{-- Article 3 --}}
        <div class="card" style="display:grid;grid-template-columns:120px 1fr auto;gap:16px;padding:16px;align-items:center;">
          <div class="thumb" style="height:120px;border-radius:12px;">Image</div>
          <div>
            <span class="tag">Romans</span>
            <h3 style="margin:8px 0 4px;">L'Aventure Ambiguë</h3>
            <p class="muted">3 500 FCFA</p>
            <div style="margin-top:12px;display:flex;gap:8px;align-items:center;">
              <button class="ghost" style="padding:6px 12px;font-size:16px;">−</button>
              <span style="font-weight:900;min-width:30px;text-align:center;">1</span>
              <button class="ghost" style="padding:6px 12px;font-size:16px;">+</button>
            </div>
          </div>
          <div style="text-align:right;">
            <p style="font-weight:950;font-size:18px;margin:0;">3 500 FCFA</p>
            <button class="ghost" style="margin-top:12px;color:#ef4444;border-color:#ef4444;">
              🗑️ Retirer
            </button>
          </div>
        </div>

      </div>

      {{-- Résumé de la commande (sticky) --}}
      <div style="position:sticky;top:80px;">
        <div class="heroCard">
          <h3 style="margin:0 0 16px;font-size:18px;">Résumé de la commande</h3>
          
          <div style="display:flex;justify-content:space-between;margin:10px 0;padding:8px 0;">
            <span class="muted">Sous-total (4 articles)</span>
            <span style="font-weight:900;">11 000 FCFA</span>
          </div>
          
          <div style="display:flex;justify-content:space-between;margin:10px 0;padding:8px 0;">
            <span class="muted">Livraison</span>
            <span style="font-weight:900;color:var(--g2);">Gratuite</span>
          </div>
          
          <hr style="margin:16px 0;border:none;border-top:1px solid var(--b);">
          
          <div style="display:flex;justify-content:space-between;margin:10px 0;padding:8px 0;">
            <span style="font-weight:950;font-size:18px;">Total</span>
            <span style="font-weight:950;font-size:22px;color:var(--g2);">11 000 FCFA</span>
          </div>
          
          <button class="btn" style="width:100%;margin-top:16px;padding:14px;">
            Passer la commande
          </button>
          
          <div style="background:var(--gl);border:1px solid rgba(20,92,57,.16);border-radius:12px;padding:12px;margin-top:16px;">
            <p class="muted" style="text-align:center;margin:0;font-size:13px;line-height:1.6;">
              ℹ️ <strong>Connexion requise</strong><br>
              Vous devez être connecté pour finaliser votre commande
            </p>
          </div>
        </div>

        {{-- Bouton continuer les achats --}}
        <button class="ghost" style="width:100%;margin-top:12px;" onclick="location.href='{{ route('catalogue.livres') }}'">
          ← Continuer mes achats
        </button>
      </div>
    </div>
  @endif
</section>

{{-- CSS responsive pour le panier --}}
@push('styles')
<style>
  @media (max-width:980px){
    section > div[style*="grid-template-columns:1fr 400px"] {
      grid-template-columns: 1fr !important;
    }
    section > div > div[style*="position:sticky"] {
      position: static !important;
    }
  }
  @media (max-width:640px){
    .card[style*="grid-template-columns:120px"] {
      grid-template-columns: 1fr !important;
    }
    .card[style*="grid-template-columns:120px"] > div:last-child {
      text-align: left !important;
    }
  }
</style>
@endpush

@endsection