@extends('layouts.app')

@section('title', 'ClairAfrique — Accueil')

@section('content')

<!-- HERO -->
<section class="heroWrap">
  <div class="hero">
    <div>
      <span class="badge">📚 Librairie & Papeterie • Dakar</span>
      <h1>Bienvenue chez ClairAfrique</h1>
      <p>
        Découvrez nos livres, nos fournitures de papeterie, et nos événements culturels.
        Parcourez librement le site : la connexion est demandée uniquement au moment de payer.
      </p>

      <div class="heroBtns">
        <button class="btn" onclick="location.href='{{ route('cataloguelivres') }}'">Explorer la librairie</button>
        <button class="ghost" onclick="location.href='{{ route('catalogue.papeterie') }}'">Voir la papeterie</button>
        <button class="ghost" onclick="location.href='{{ route('evenements') }}'">Calendrier des événements</button>
      </div>
    </div>

    <div class="heroCard">
      <div class="heroImg">Visuel / Bannière</div>
      <div class="miniRow">
        <span class="miniPill">Nouveautés</span>
        <span class="miniPill">Best-sellers</span>
        <span class="miniPill">Rentrée scolaire</span>
        <span class="miniPill">Événements</span>
      </div>
      <p class="muted">
        Astuce : mettez ici une phrase courte marketing (ex: "Retrait en magasin rapide").
      </p>
    </div>
  </div>
</section>

<!-- ARTICLES / MISES EN AVANT -->
<section class="section">
  <div class="secHead">
    <h2>À la une</h2>
    <a href="{{ route('cataloguelivres') }}">Voir les nouveautés →</a>
  </div>

  <div class="grid3">
    <article class="card">
      <div class="thumb">Article / Image</div>
      <div class="body">
        <span class="tag">Nouveauté</span>
        <h3>Les nouveaux arrivages</h3>
        <p class="muted">Une sélection fraîche de livres et collections.</p>
        <div class="row">
          <span class="muted">Cette semaine</span>
          <button class="btnMini" onclick="location.href='{{ route('cataloguelivres') }}'">Voir</button>
        </div>
      </div>
    </article>

    <article class="card">
      <div class="thumb">Article / Image</div>
      <div class="body">
        <span class="tag">Papeterie</span>
        <h3>Pack rentrée scolaire</h3>
        <p class="muted">Tout ce qu'il faut : cahiers, stylos, sacs…</p>
        <div class="row">
          <span class="muted">Offre</span>
          <button class="btnMini" onclick="location.href='{{ route('catalogue.papeterie') }}'">Voir</button>
        </div>
      </div>
    </article>

    <article class="card">
      <div class="thumb">Article / Image</div>
      <div class="body">
        <span class="tag">Culture</span>
        <h3>Nos coups de cœur</h3>
        <p class="muted">Des titres incontournables recommandés.</p>
        <div class="row">
          <span class="muted">Sélection</span>
          <button class="btnMini" onclick="location.href='{{ route('cataloguelivres') }}'">Voir</button>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- PROCHAIN EVENEMENT (widget accueil) -->
<section class="section">
  <div class="nextEvent">
    <div>
      <h3>Prochain événement</h3>
      <p class="big">Rencontre d'auteurs — Lecture & échanges</p>
      <p class="meta">Samedi • 15:00 • Point de vente Dakar</p>
      <p class="meta">Consultez le calendrier pour voir tous les événements (sans connexion).</p>

      <div class="heroBtns" style="margin-top:12px">
        <button class="btn" onclick="location.href='{{ route('evenements') }}'">Voir le calendrier</button>
        <button class="ghost" onclick="location.href='{{ route('points-vente') }}'">Voir les points de vente</button>
      </div>
    </div>
    <div class="nextBox">Mini calendrier / visuel</div>
  </div>
</section>

<!-- LIBRAIRIE (extraits catalogue) -->
<section class="section">
  <div class="secHead">
    <h2>Librairie — Sélection</h2>
    <a href="{{ route('cataloguelivres') }}">Tout le catalogue →</a>
  </div>

  <div class="grid3">
    <article class="card">
      <div class="thumb">Couverture</div>
      <div class="body">
        <span class="tag">Africain</span>
        <h3>Les classiques africains</h3>
        <p class="muted">7 500 FCFA</p>
        <div class="row">
          <span class="muted">Disponible</span>
          <button class="btnMini" onclick="location.href='#'">Voir</button>
        </div>
      </div>
    </article>
    <article class="card">
      <div class="thumb">Couverture</div>
      <div class="body">
        <span class="tag">Romans</span>
        <h3>Roman contemporain</h3>
        <p class="muted">6 000 FCFA</p>
        <div class="row">
          <span class="muted">Disponible</span>
          <button class="btnMini" onclick="location.href='#'">Voir</button>
        </div>
      </div>
    </article>
    <article class="card">
      <div class="thumb">Couverture</div>
      <div class="body">
        <span class="tag">Scolaire</span>
        <h3>Mathématiques — 3ème</h3>
        <p class="muted">4 500 FCFA</p>
        <div class="row">
          <span class="muted">Disponible</span>
          <button class="btnMini" onclick="location.href='#'">Voir</button>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- PAPETERIE (extraits catalogue) -->
<section class="section">
  <div class="secHead">
    <h2>Papeterie — Best picks</h2>
    <a href="{{ route('catalogue.papeterie') }}">Voir toute la papeterie →</a>
  </div>

  <div class="grid3">
    <article class="card">
      <div class="thumb">Produit</div>
      <div class="body">
        <span class="tag">Scolaire</span>
        <h3>Cahier premium 200 pages</h3>
        <p class="muted">1 500 FCFA</p>
        <div class="row">
          <span class="muted">En stock</span>
          <button class="btnMini" onclick="location.href='#'">Voir</button>
        </div>
      </div>
    </article>
    <article class="card">
      <div class="thumb">Produit</div>
      <div class="body">
        <span class="tag">Bureau</span>
        <h3>Ramette A4 (500 feuilles)</h3>
        <p class="muted">3 500 FCFA</p>
        <div class="row">
          <span class="muted">En stock</span>
          <button class="btnMini" onclick="location.href='#'">Voir</button>
        </div>
      </div>
    </article>
    <article class="card">
      <div class="thumb">Produit</div>
      <div class="body">
        <span class="tag">Accessoires</span>
        <h3>Sac scolaire robuste</h3>
        <p class="muted">12 000 FCFA</p>
        <div class="row">
          <span class="muted">En stock</span>
          <button class="btnMini" onclick="location.href='#'">Voir</button>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- HISTOIRE / A PROPOS -->
<section class="section">
  <div class="secHead">
    <h2>Notre histoire</h2>
    <a href="#">En savoir plus →</a>
  </div>

  <div class="about">
    <div class="box">
      <h3>Une maison de confiance</h3>
      <p class="muted">
        ClairAfrique accompagne lecteurs, élèves, parents et professionnels avec une sélection de qualité
        et un service proche du public.
      </p>
      <ul class="check">
        <li>Librairie : nouveautés, classiques, ouvrages africains</li>
        <li>Papeterie : scolaire, bureau, accessoires</li>
        <li>Événements : dédicaces, conférences, promotions</li>
      </ul>
    </div>
    <div class="box">
      <h3>45 ans + événements toute l'année</h3>
      <p class="muted">
        Le site met en avant les temps forts (45 ans) mais surtout permet d'ajouter et publier
        tous les événements depuis l'administration.
      </p>
      <div class="heroBtns" style="margin-top:12px">
        <button class="btn" onclick="location.href='{{ route('evenements') }}'">Voir les événements</button>
        <button class="ghost" onclick="location.href='{{ route('points-vente') }}'">Trouver un point de vente</button>
      </div>
    </div>
  </div>
</section>

<!-- POINTS DE VENTE (mini) -->
<section class="section">
  <div class="secHead">
    <h2>Points de vente</h2>
    <a href="{{ route('points-vente') }}">Voir toutes les adresses →</a>
  </div>

  <div class="grid3">
    <article class="card">
      <div class="thumb">Dakar</div>
      <div class="body">
        <span class="tag">Dakar Centre</span>
        <p class="muted">Lun–Sam 09:00–19:00</p>
        <div class="row">
          <span class="muted">Retrait possible</span>
          <button class="btnMini" onclick="location.href='{{ route('points-vente') }}'">Voir</button>
        </div>
      </div>
    </article>
    <article class="card">
      <div class="thumb">Rufisque</div>
      <div class="body">
        <span class="tag">Rufisque</span>
        <p class="muted">Lun–Sam 09:00–18:00</p>
        <div class="row">
          <span class="muted">Retrait possible</span>
          <button class="btnMini" onclick="location.href='{{ route('points-vente') }}'">Voir</button>
        </div>
      </div>
    </article>
    <article class="card">
      <div class="thumb">Thiès</div>
      <div class="body">
        <span class="tag">Thiès</span>
        <p class="muted">Lun–Sam 09:00–18:00</p>
        <div class="row">
          <span class="muted">Retrait possible</span>
          <button class="btnMini" onclick="location.href='{{ route('points-vente') }}'">Voir</button>
        </div>
      </div>
    </article>
  </div>
</section>

@endsection