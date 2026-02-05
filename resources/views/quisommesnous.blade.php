@extends('layouts.app')

@section('title', 'Qui sommes-nous - ClairAfrique')

@section('content')

{{-- En-tête de page --}}
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Qui sommes-nous</b></div>
  <div class="titleRow">
    <div>
      <h1>Qui sommes-nous</h1>
      <p class="subtitle">45 ans au service de la culture et de l'éducation au Sénégal</p>
    </div>
  </div>
</section>

{{-- Contenu principal --}}
<section class="section">

  {{-- Histoire --}}
  <div class="about" style="margin-bottom:24px;">
    <div class="box">
      <h3>Notre histoire</h3>
      <p class="muted">
        Fondée en 1980, ClairAfrique est née de la passion pour les livres et l'éducation.
        Depuis plus de quatre décennies, nous accompagnons les lecteurs, élèves, parents et
        professionnels avec une sélection de qualité et un service proche du public.
      </p>
      <p class="muted" style="margin-top:12px;">
        De notre première librairie à Dakar, nous avons développé deux points de vente,
        toujours guidés par les mêmes valeurs : accessibilité, qualité et proximité.
      </p>
    </div>

    <div class="box">
      <div style="height:280px;border-radius:18px;background:linear-gradient(135deg,rgba(31,122,77,.16),rgba(31,122,77,.02));display:grid;place-items:center;color:var(--g2);font-weight:950;border:1px dashed rgba(20,92,57,.35);">
        Photo / Image historique
      </div>
    </div>
  </div>

  {{-- Nos valeurs --}}
  <div style="margin-bottom:24px;">
    <h2 style="margin:0 0 16px;font-size:24px;">Nos valeurs</h2>
    <div class="grid3">

      <div class="card">
        <div class="body" style="text-align:center;padding:24px;">
          <div style="font-size:42px;margin-bottom:12px;">📚</div>
          <h3 style="margin:0 0 8px;color:var(--g2);">Excellence</h3>
          <p class="muted">
            Une sélection rigoureuse de livres et fournitures de qualité pour répondre
            aux besoins de tous nos clients.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="body" style="text-align:center;padding:24px;">
          <div style="font-size:42px;margin-bottom:12px;">🤝</div>
          <h3 style="margin:0 0 8px;color:var(--g2);">Proximité</h3>
          <p class="muted">
            Un service personnalisé et des conseils avisés dans nos points de vente
            et sur notre plateforme en ligne.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="body" style="text-align:center;padding:24px;">
          <div style="font-size:42px;margin-bottom:12px;">🌍</div>
          <h3 style="margin:0 0 8px;color:var(--g2);">Culture africaine</h3>
          <p class="muted">
            Une attention particulière portée aux auteurs et ouvrages africains pour
            promouvoir notre patrimoine littéraire.
          </p>
        </div>
      </div>

    </div>
  </div>

  {{-- Notre offre --}}
  <div class="nextEvent" style="margin-bottom:24px;">
    <div>
      <h3>Notre offre</h3>
      <p class="muted" style="margin:12px 0;">
        ClairAfrique, c'est bien plus qu'une simple librairie. Nous proposons :
      </p>

      <ul class="check">
        <li><strong>Librairie complète :</strong> livres scolaires, romans, littérature africaine,
          ouvrages techniques, jeunesse...</li>
        <li><strong>Papeterie diversifiée :</strong> fournitures scolaires, matériel de bureau,
          sacs et accessoires</li>
        <li><strong>Événements culturels :</strong> dédicaces, conférences, ateliers d'écriture,
          clubs de lecture</li>
        <li><strong>Services :</strong> commande en ligne, retrait en magasin, livraison à domicile,
          packs rentrée scolaire</li>
      </ul>
    </div>

    <div class="nextBox">
      <div style="font-size:64px;margin-bottom:16px;">45</div>
      <div style="font-weight:950;font-size:18px;color:var(--g2);">Ans d'expérience</div>
      <p class="muted" style="margin:12px 0 0;">Au service de l'éducation et de la culture</p>
    </div>
  </div>

  {{-- Nos points de vente (2 seulement) --}}
  <div style="margin-bottom:24px;">
    <h2 style="margin:0 0 16px;font-size:24px;">Nos points de vente</h2>

    <div class="grid3" style="grid-template-columns:repeat(2,1fr);">

      <div class="card">
        <div class="body">
          <span class="tag">Siège social</span>
          <h3 style="margin:10px 0 6px;">ClairAfrique Dakar</h3>
          <p class="muted">Avenue Pasteur, Dakar Centre</p>
          <p class="muted" style="margin-top:8px;font-weight:900;color:var(--g2);">
            Lun – Sam : 09h00 – 19h00
          </p>
          <button class="btnMini" style="margin-top:12px;width:100%;"
            onclick="location.href='{{ route('points-vente') }}'">
            Voir l'adresse
          </button>
        </div>
      </div>

      <div class="card">
        <div class="body">
          <span class="tag">Point de vente</span>
          <h3 style="margin:10px 0 6px;">ClairAfrique Rufisque</h3>
          <p class="muted">Centre-ville, Rufisque</p>
          <p class="muted" style="margin-top:8px;font-weight:900;color:var(--g2);">
            Lun – Sam : 09h00 – 18h00
          </p>
          <button class="btnMini" style="margin-top:12px;width:100%;"
            onclick="location.href='{{ route('points-vente') }}'">
            Voir l'adresse
          </button>
        </div>
      </div>

    </div>
  </div>

  {{-- Call to action --}}
  <div class="heroCard" style="text-align:center;padding:40px;background:linear-gradient(135deg,rgba(31,122,77,.14),rgba(31,122,77,.02));">
    <h2 style="margin:0 0 12px;font-size:26px;">Rejoignez la communauté ClairAfrique</h2>
    <p class="muted" style="margin:0 0 24px;font-size:16px;">
      Découvrez nos événements, profitez de nos offres exclusives et partagez votre passion pour la lecture
    </p>

    <div class="heroBtns" style="justify-content:center;">
      <button class="btn" onclick="location.href='{{ route('cataloguelivres') }}'">
        📚 Explorer notre catalogue
      </button>
      <button class="ghost" onclick="location.href='{{ route('evenements') }}'">
        📅 Voir nos événements
      </button>
      <button class="ghost" onclick="location.href='{{ route('contact') }}'">
        ✉️ Nous contacter
      </button>
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
</style>
@endpush
