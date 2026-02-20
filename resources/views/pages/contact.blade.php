@extends('layouts.app')

@section('title', 'Contact - ClairAfrique')

@section('content')

{{-- En-tête --}}
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Contact</b></div>
  <div class="titleRow">
    <div>
      <h1>Contactez-nous</h1>
      <p class="subtitle">Nous sommes à votre écoute pour toute information</p>
    </div>
  </div>
</section>

<section class="section">

  {{-- Formulaire + Coordonnées --}}
  <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-bottom:32px;">

    {{-- Formulaire --}}
    <div class="heroCard">
      <h3>Envoyez-nous un message</h3>

      <form>
        <div class="field">
          <label>Nom complet *</label>
          <input type="text" required placeholder="Nom et prénom">
        </div>

        <div class="field">
          <label>Email *</label>
          <input type="email" required placeholder="exemple@email.com">
        </div>

        <div class="field">
          <label>Téléphone</label>
          <input type="tel" placeholder="+221 XX XXX XX XX">
        </div>

        <div class="field">
          <label>Sujet *</label>
          <select required>
            <option value="">Choisir un sujet</option>
            <option>Université</option>
            <option>Indépendance</option>
            <option>Commande / Livraison</option>
            <option>Autre</option>
          </select>
        </div>

        <div class="field">
          <label>Message *</label>
          <textarea required placeholder="Votre message..."></textarea>
        </div>

        <button class="btn" style="width:100%">Envoyer</button>
      </form>
    </div>

    {{-- Coordonnées + Réseaux --}}
    <div>

      {{-- Coordonnées --}}
      <div class="card" style="margin-bottom:16px;">
        <div class="body">
          <h3>Nos coordonnées</h3>

          <p><b>📍 Adresse</b><br>Avenue Pasteur, Dakar</p>
          <p><b>📞 Téléphone</b><br>33 822 21 69</p>
          <p><b>✉️ Email</b><br>contact@clairafrique.com</p>
          <p><b>🕒 Horaires</b><br>Lundi – Samedi : 09h – 19h</p>
        </div>
      </div>

      {{-- Réseaux --}}
      <div class="card">
        <div class="body">
          <h3>Suivez-nous</h3>
          <div style="display:flex;gap:10px;flex-wrap:wrap;">
            <a 
              class="ghost" 
              href="https://www.instagram.com/librairieclaireafrique?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" 
              target="_blank" 
              rel="noopener">
              📸 Instagram
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

  {{-- Points de vente --}}
  <div style="margin-bottom:32px;">
    <h2>Nos points de vente</h2>

    <div class="grid3" style="grid-template-columns:repeat(2,1fr);">

      <div class="card">
        <div class="body">
          <span class="tag">Université</span>
          <h3>ClairAfrique Université</h3>
          <p class="muted">Avenue de l’Université, Dakar</p>
          <p class="muted">📞 33 864 69 40</p>
          <p class="muted">✉️ clairafuniv@clairafrique.com</p>
          <p class="muted">🕒 Lun – Sam : 09h – 19h</p>
          <button class="btnMini" style="width:100%" onclick="location.href='{{ route('points-vente') }}'">
            Voir sur la carte
          </button>
        </div>
      </div>

      <div class="card">
        <div class="body">
          <span class="tag">Indépendance</span>
          <h3>ClairAfrique Indépendance</h3>
          <p class="muted">Boulevard de l’Indépendance, Dakar</p>
          <p class="muted">📞 33 822 21 69</p>
          <p class="muted">✉️ clairafinde@clairafrique.com</p>
          <p class="muted">🕒 Lun – Sam : 09h – 18h30</p>
          <button class="btnMini" style="width:100%" onclick="location.href='{{ route('points-vente') }}'">
            Voir sur la carte
          </button>
        </div>
      </div>

    </div>
  </div>

  {{-- FAQ --}}
  <section class="heroCard faqBox">
    <h2>Questions fréquentes</h2>

    <details>
      <summary>Comment contacter un point de vente précis ?</summary>
      <p>Choisissez le point de vente dans le formulaire ou utilisez les coordonnées affichées.</p>
    </details>

    <details>
      <summary>Quels sont les horaires d’ouverture ?</summary>
      <p>Les deux points de vente sont ouverts du lundi au samedi.</p>
    </details>

    <details>
      <summary>Puis-je réserver un livre ?</summary>
      <p>Oui, par téléphone ou par email avant de vous déplacer.</p>
    </details>

    <details>
      <summary>Quel est le délai de réponse ?</summary>
      <p>Nous répondons sous 24 à 48 heures ouvrées.</p>
    </details>

    <details>
      <summary>La livraison est-elle disponible ?</summary>
      <p>Oui, livraison à domicile ou retrait en magasin.</p>
    </details>
  </section>

</section>

@endsection

@push('styles')
<style>
.pageHead{padding:18px 0}
.crumbs{font-size:13px;color:var(--mut)}
.titleRow h1{margin:0;font-size:30px}
.subtitle{color:var(--mut)}

.field{display:flex;flex-direction:column;gap:6px;margin-bottom:14px}
.field input,.field select,.field textarea{
  border:1px solid rgba(0,0,0,.1);
  border-radius:14px;
  padding:12px;
}

.faqBox details{
  margin-top:12px;
  padding:12px;
  border-radius:12px;
  background:#fff;
  cursor:pointer;
}
.faqBox summary{
  font-weight:900;
}
.faqBox p{
  margin-top:8px;
  color:var(--mut);
}

@media(max-width:980px){
  section > div[style*="grid-template-columns"]{
    grid-template-columns:1fr!important;
  }
  .grid3{
    grid-template-columns:1fr!important;
  }
}
</style>
@endpush
