@extends('layouts.app')

@section('title', 'Contact - ClairAfrique')

@section('content')

{{-- En-tête de page --}}
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Contact</b></div>
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
            <option>Événement</option>
            <option>Partenariat</option>
            <option>Réclamation</option>
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

    {{-- Informations de contact --}}
    <div>
      {{-- Coordonnées principales --}}
      <div class="card" style="margin-bottom:16px;">
        <div class="body">
          <h3 style="margin:0 0 16px;color:var(--g2);">Nos coordonnées</h3>
          
          <div style="display:flex;gap:12px;align-items:start;margin:16px 0;">
            <div style="font-size:24px;">📍</div>
            <div>
              <p style="margin:0;font-weight:900;">Siège social</p>
              <p class="muted" style="margin:4px 0 0;">Avenue Pasteur<br>Dakar Centre, Sénégal</p>
            </div>
          </div>
          
          <div style="display:flex;gap:12px;align-items:start;margin:16px 0;">
            <div style="font-size:24px;">📞</div>
            <div>
              <p style="margin:0;font-weight:900;">Téléphone</p>
              <p class="muted" style="margin:4px 0 0;">+221 33 XXX XX XX<br>+221 77 XXX XX XX</p>
            </div>
          </div>
          
          <div style="display:flex;gap:12px;align-items:start;margin:16px 0;">
            <div style="font-size:24px;">✉️</div>
            <div>
              <p style="margin:0;font-weight:900;">Email</p>
              <p class="muted" style="margin:4px 0 0;">contact@clairafrique.sn<br>info@clairafrique.sn</p>
            </div>
          </div>
          
          <div style="display:flex;gap:12px;align-items:start;margin:16px 0;">
            <div style="font-size:24px;">🕒</div>
            <div>
              <p style="margin:0;font-weight:900;">Horaires</p>
              <p class="muted" style="margin:4px 0 0;">Lundi - Samedi : 09h00 - 19h00<br>Dimanche : Fermé</p>
            </div>
          </div>
        </div>
      </div>

      {{-- Réseaux sociaux --}}
      <div class="card">
        <div class="body">
          <h3 style="margin:0 0 16px;color:var(--g2);">Suivez-nous</h3>
          <p class="muted" style="margin:0 0 16px;">Restez informés de nos actualités et événements</p>
          
          <div style="display:flex;flex-wrap:wrap;gap:10px;">
            <button class="ghost" style="padding:10px 16px;">
              📘 Facebook
            </button>
            <button class="ghost" style="padding:10px 16px;">
              📸 Instagram
            </button>
            <button class="ghost" style="padding:10px 16px;">
              🐦 Twitter
            </button>
            <button class="ghost" style="padding:10px 16px;">
              💼 LinkedIn
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Points de vente --}}
  <div style="margin-bottom:24px;">
    <h2 style="margin:0 0 16px;font-size:24px;">Nos points de vente</h2>
    <div class="grid3">
      <div class="card">
        <div class="body">
          <span class="tag">Dakar</span>
          <h3 style="margin:10px 0 6px;">ClairAfrique Dakar</h3>
          <p class="muted">Avenue Pasteur, Dakar Centre</p>
          
          <div style="margin:16px 0;">
            <p class="muted" style="margin:0;font-size:13px;">
              <strong>📞</strong> +221 33 XXX XX XX
            </p>
            <p class="muted" style="margin:4px 0 0;font-size:13px;">
              <strong>🕒</strong> Lun-Sam : 09:00-19:00
            </p>
          </div>
          
          <button class="btnMini" style="width:100%;" onclick="location.href='{{ route('points-vente') }}'">
            Voir sur la carte
          </button>
        </div>
      </div>
      
      <div class="card">
        <div class="body">
          <span class="tag">Rufisque</span>
          <h3 style="margin:10px 0 6px;">ClairAfrique Rufisque</h3>
          <p class="muted">Centre-ville, Rufisque</p>
          
          <div style="margin:16px 0;">
            <p class="muted" style="margin:0;font-size:13px;">
              <strong>📞</strong> +221 33 XXX XX XX
            </p>
            <p class="muted" style="margin:4px 0 0;font-size:13px;">
              <strong>🕒</strong> Lun-Sam : 09:00-18:00
            </p>
          </div>
          
          <button class="btnMini" style="width:100%;" onclick="location.href='{{ route('points-vente') }}'">
            Voir sur la carte
          </button>
        </div>
      </div>
      
      <div class="card">
        <div class="body">
          <span class="tag">Thiès</span>
          <h3 style="margin:10px 0 6px;">ClairAfrique Thiès</h3>
          <p class="muted">Quartier central, Thiès</p>
          
          <div style="margin:16px 0;">
            <p class="muted" style="margin:0;font-size:13px;">
              <strong>📞</strong> +221 33 XXX XX XX
            </p>
            <p class="muted" style="margin:4px 0 0;font-size:13px;">
              <strong>🕒</strong> Lun-Sam : 09:00-18:00
            </p>
          </div>
          
          <button class="btnMini" style="width:100%;" onclick="location.href='{{ route('points-vente') }}'">
            Voir sur la carte
          </button>
        </div>
      </div>
    </div>
  </div>

  {{-- FAQ rapide --}}
  <div class="heroCard" style="background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.95));">
    <h3 style="margin:0 0 16px;color:var(--g2);">Questions fréquentes</h3>
    
    <div style="margin:16px 0;">
      <p style="margin:0;font-weight:900;">Comment passer une commande ?</p>
      <p class="muted" style="margin:4px 0 0;">Parcourez notre catalogue, ajoutez vos articles au panier et finalisez votre commande. La connexion n'est requise qu'au moment du paiement.</p>
    </div>
    
    <div style="margin:16px 0;">
      <p style="margin:0;font-weight:900;">Quels sont les modes de livraison ?</p>
      <p class="muted" style="margin:4px 0 0;">Retrait gratuit en magasin sous 2h ou livraison à domicile (gratuite dès 10 000 FCFA).</p>
    </div>
    
    <div style="margin:16px 0;">
      <p style="margin:0;font-weight:900;">Puis-je réserver un livre par téléphone ?</p>
      <p class="muted" style="margin:4px 0 0;">Oui, contactez directement le point de vente de votre choix pour réserver vos articles.</p>
    </div>
    
    <div style="margin:16px 0;">
      <p style="margin:0;font-weight:900;">Proposez-vous des packs rentrée scolaire ?</p>
      <p class="muted" style="margin:4px 0 0;">Oui, découvrez nos packs par niveau avec des réductions attractives dans notre catalogue.</p>
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
  }
</style>
@endpush
