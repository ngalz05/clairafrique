@extends('layouts.app')

@section('title', 'Points de vente - ClairAfrique')

@section('content')

<section class="pageHead">
  <div class="crumbs">Accueil / <b>Points de vente</b></div>
  <div class="titleRow">
    <div>
      <h1>Nos points de vente</h1>
      <p class="subtitle">Retrait possible et assistance sur place</p>
    </div>
  </div>
</section>

<section class="section">

  {{-- HERO --}}
  <div class="pvHero heroCard">
    <div>
      <h3 class="pvHeroTitle">Trouver rapidement</h3>
      <p class="muted pvHeroText">
        Deux points de vente à Dakar : <b>Université</b> et <b>Indépendance</b>.
      </p>
    </div>
    <div class="pvHeroBtns">
      <a class="btn" href="{{ route('contact') }}">✉️ Contacter</a>
      <a class="ghost" href="{{ route('faq') }}">❓ FAQ</a>
    </div>
  </div>


  {{-- ADRESSES (NOUVELLE DISPOSITION) --}}
  <div class="secHead pvHead">
    <h2>Nos adresses</h2>
    <a href="{{ route('contact') }}">Besoin d’un conseil ? →</a>
  </div>

  <div class="pvStores">

    {{-- Université --}}
    <article class="pvStore card">
      <div class="pvStoreInfo body">
        <div class="pvStoreTop">
          <span class="tag">Université</span>
          <h3 class="pvStoreTitle">ClairAfrique Université</h3>
          <p class="muted">Avenue de l’Université, Dakar</p>
        </div>

        <div class="pvStoreMeta">
          <div class="pvMetaItem"><b>📞</b> (+221) 33 864 69 40</div>
          <div class="pvMetaItem"><b>✉️</b> clairafuniv@clairafrique.com</div>
          <div class="pvMetaItem"><b>🕒</b> Lun – Sam : 09h00 – 19h00</div>
          <div class="pvMetaItem muted">✅ Retrait possible</div>
        </div>

        <div class="pvStoreBtns">
          <a class="btnMini" href="{{ route('contact') }}">Écrire</a>
          <a class="ghost" target="_blank" rel="noopener"
             href="https://www.google.com/maps?q=Avenue%20de%20l%E2%80%99Universit%C3%A9,%20Dakar">
            Itinéraire
          </a>
        </div>
      </div>

      <div class="pvStoreMap">
        <iframe
          src="https://www.google.com/maps?q=Avenue%20de%20l%E2%80%99Universit%C3%A9,%20Dakar&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen></iframe>
      </div>
    </article>

    {{-- Indépendance --}}
    <article class="pvStore card">
      <div class="pvStoreInfo body">
        <div class="pvStoreTop">
          <span class="tag">Indépendance</span>
          <h3 class="pvStoreTitle">ClairAfrique Indépendance</h3>
          <p class="muted">Boulevard de l’Indépendance, Dakar</p>
        </div>

        <div class="pvStoreMeta">
          <div class="pvMetaItem"><b>📞</b> (+221) 33 822 21 69</div>
          <div class="pvMetaItem"><b>✉️</b> clairafinde@clairafrique.com</div>
          <div class="pvMetaItem"><b>🕒</b> Lun – Sam : 09h00 – 18h30</div>
          <div class="pvMetaItem muted">✅ Retrait possible</div>
        </div>

        <div class="pvStoreBtns">
          <a class="btnMini" href="{{ route('contact') }}">Écrire</a>
          <a class="ghost" target="_blank" rel="noopener"
             href="https://www.google.com/maps?q=Boulevard%20de%20l%E2%80%99Ind%C3%A9pendance,%20Dakar">
            Itinéraire
          </a>
        </div>
      </div>

      <div class="pvStoreMap">
        <iframe
          src="https://www.google.com/maps?q=Boulevard%20de%20l%E2%80%99Ind%C3%A9pendance,%20Dakar&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen></iframe>
      </div>
    </article>

  </div>

  {{-- INFOS --}}
  <div class="pvInfosGrid">
    <div class="card">
      <div class="body">
        <span class="tag">Commande</span>
        <h3 style="margin:10px 0 6px;">Commande en ligne</h3>
        <p class="muted" style="margin:0;">Commandez en ligne et retirez en magasin selon disponibilité.</p>
      </div>
    </div>

    <div class="card">
      <div class="body">
        <span class="tag">Support</span>
        <h3 style="margin:10px 0 6px;">Aide</h3>
        <p class="muted" style="margin:0;">Notre équipe est disponible aux horaires d’ouverture.</p>
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
  .pvHead{margin-top:18px}

  /* HERO */
  .pvHero{
    display:flex;align-items:center;justify-content:space-between;gap:14px;
    background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.95));
  }
  .pvHeroTitle{margin:0 0 8px;color:var(--g2)}
  .pvHeroText{margin:0}
  .pvHeroBtns{display:flex;gap:10px;flex-wrap:wrap}

  /* MAP TOP (optionnel) */
  .pvMapTopBlock{
    margin-top:14px;
    background:#fff;
    border:1px solid rgba(17,24,39,.08);
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 10px 22px rgba(0,0,0,.06);
  }
  .pvMapHead{
    display:flex;align-items:center;justify-content:space-between;gap:12px;
    padding:12px 14px;
    border-bottom:1px solid rgba(17,24,39,.06);
    background:linear-gradient(135deg,rgba(31,122,77,.08),rgba(255,255,255,.98));
  }
  .pvH2{margin:0;font-size:18px;color:var(--g2);font-weight:950}
  .pvMapLink{font-weight:900;color:var(--g2);font-size:13px}
  .pvMapWrap{height:320px}
  .pvMapWrap iframe{width:100%;height:100%;border:0;display:block}

  /* STORES (nouvelle disposition) */
  .pvStores{
    margin-top:12px;
    display:grid;
    gap:16px;
  }
  .pvStore{
    display:grid;
    grid-template-columns: 1.15fr .85fr;
    overflow:hidden;
  }
  .pvStoreTitle{margin:10px 0 6px}
  .pvStoreMeta{
    margin-top:12px;
    display:grid;
    gap:8px;
  }
  .pvMetaItem{font-size:14px;color:#111827}
  .pvStoreBtns{
    margin-top:14px;
    display:flex;
    gap:10px;
    flex-wrap:wrap;
  }
  .pvStoreMap{
    border-left:1px solid rgba(17,24,39,.06);
    background:#fff;
  }
  .pvStoreMap iframe{
    width:100%;
    height:100%;
    min-height:260px;
    border:0;
    display:block;
  }

  /* INFOS GRID */
  .pvInfosGrid{
    margin-top:18px;
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:16px;
  }

  @media(max-width:980px){
    .pvHero{flex-direction:column;align-items:flex-start}
    .pvInfosGrid{grid-template-columns:1fr}
    .pvStore{grid-template-columns:1fr}
    .pvStoreMap{border-left:0;border-top:1px solid rgba(17,24,39,.06)}
    .pvStoreMap iframe{min-height:240px}
  }
</style>
@endpush