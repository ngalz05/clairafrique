@extends('layouts.app')

@section('title', 'Contact - ClairAfrique')

@section('content')

{{-- En-tête de page --}}
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Contacts</b></div>
  <div class="titleRow">
    <div>
      <h1>Contactez-nous</h1>
      <p class="subtitle">Nous sommes là pour répondre à toutes vos questions</p>
    </div>
  </div>
</section>

{{-- Contenu principal --}}
<section class="section">

  <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-bottom:24px;">

    {{-- Formulaire de contact --}}
    <div class="heroCard">
      <h3 style="margin:0 0 16px;font-size:20px;">Envoyez-nous un message</h3>

      <form>
        <div class="field">
          <label>Nom complet *</label>
          <input type="text" placeholder="Votre nom et prénom" required />
        </div>

        <div class="field">
          <label>Email *</label>
          <input type="email" placeholder="votre@email.com" required />
        </div>

        <div class="field">
          <label>Téléphone</label>
          <input type="tel" placeholder="+221 XX XXX XX XX" />
        </div>

        <div class="field">
          <label>Sujet *</label>
          <select required>
            <option value="">Choisissez un sujet</option>
            <option>Question sur un produit</option>
            <option>Commande / Livraison</option>
            <option>Université</option>
            <option>Indépendance</option>
            <option>Autre</option>
          </select>
        </div>

        <div class="field">
          <label>Message *</label>
          <textarea
            placeholder="Écrivez votre message ici..."
            required
            style="border:1px solid rgba(17,24,39,.10);border-radius:14px;padding:12px;outline:none;background:#fff;font-size:14px;font-family:inherit;min-height:140px;resize:vertical;"
          ></textarea>
        </div>

        <button type="submit" class="btn" style="width:100%;margin-top:8px;">
          Envoyer le message
        </button>
      </form>
    </div>

    {{-- Coordonnées générales --}}
    <div>
      <div class="card">
        <div class="body">
          <h3 style="margin:0 0 16px;color:var(--g2);">Contact général</h3>

          <p class="muted">
            Pour toute question générale, vous pouvez aussi nous écrire à :
          </p>

          <p style="margin-top:12px;font-weight:900;">
            ✉️ contact@clairafrique.com
          </p>
        </div>
      </div>
    </div>

  </div>

  {{-- Points de vente --}}
  <div style="margin-bottom:24px;">
    <h2 style="margin:0 0 16px;font-size:24px;">Nos points de vente</h2>

    <div class="grid3" style="grid-template-columns:repeat(2,1fr);">

      {{-- Point de vente Université --}}
      <div class="card">
        <div class="body">
          <span class="tag">Université</span>
          <h3 style="margin:10px 0 6px;">ClairAfrique Université</h3>
          <p class="muted">Avenue de l’Université, Dakar</p>

          <div style="margin:16px 0;">
            <p class="muted" style="margin:0;font-size:13px;">
              <strong>📞</strong> (+221) 33 864 69 40
            </p>
            <p class="muted" style="margin:4px 0 0;font-size:13px;">
              <strong>✉️</strong> clairafuniv@clairafrique.com / assistantedg@clairafrique.com
            </p>
            <p class="muted" style="margin:4px 0 0;font-size:13px;">
              <strong>🕒</strong> Lun - Sam : 09h00 - 19h00
            </p>
          </div>

          <button class="btnMini" style="width:100%;" onclick="location.href='{{ route('points-vente') }}'">
            Voir sur la carte
          </button>
        </div>
      </div>

      {{-- Point de vente Indépendance --}}
      <div class="card">
        <div class="body">
          <span class="tag">Indépendance</span>
          <h3 style="margin:10px 0 6px;">ClairAfrique Indépendance</h3>
          <p class="muted">Boulevard de l’Indépendance, Dakar</p>

          <div style="margin:16px 0;">
            <p class="muted" style="margin:0;font-size:13px;">
              <strong>📞</strong> (+221) 33 822 21 69 / 
            </p>
            <p class="muted" style="margin:4px 0 0;font-size:13px;">
              <strong>✉️</strong> clairafinde@clairafrique.com / commercial@clairafrique.com
            </p>
            <p class="muted" style="margin:4px 0 0;font-size:13px;">
              <strong>🕒</strong> Lun - Sam : 09h00 - 18h30
            </p>
          </div>

          <button class="btnMini" style="width:100%;" onclick="location.href='{{ route('points-vente') }}'">
            Voir sur la carte
          </button>
        </div>
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

  .field{display:flex;flex-direction:column;gap:6px;margin-top:14px}
  .field label{font-size:13px;color:var(--mut);font-weight:900}
  .field input,.field select{
    border:1px solid rgba(17,24,39,.10);
    border-radius:14px;
    padding:12px;
    outline:none;
    background:#fff;
    font-size:14px;
  }
  .field input:focus,.field select:focus{
    border-color:rgba(31,122,77,.35);
    box-shadow:0 0 0 4px rgba(31,122,77,.10);
  }

  @media (max-width:980px){
    section > div[style*="grid-template-columns:1fr 1fr"] {
      grid-template-columns: 1fr !important;
    }
    .grid3{
      grid-template-columns:1fr !important;
    }
  }
</style>
@endpush
