<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title', 'ClairAfrique')</title>

  {{-- CSS principal --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  {{-- CSS spécifique aux pages --}}
  @stack('styles')

  <style>
    /* ================= MENU PRINCIPAL ================= */
    .main-nav{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:20px;
    }

    .nav-left,
    .nav-right{
      display:flex;
      align-items:center;
      gap:22px;
    }

    .nav-right a{
      font-weight:700;
    }
  </style>
</head>

<body>

{{-- ================= HEADER ================= --}}
<header>
  <div class="container">
    <div class="topbar">
      <div class="brand">
        <div class="logo">CA</div>
        <div>ClairAfrique</div>
      </div>

      <div class="search" role="search">
        <span style="color:var(--g2);font-weight:900;">⌕</span>
        <input type="search" placeholder="Rechercher un livre ou un article de papeterie..." />
      </div>

      <div style="display:flex;gap:10px;align-items:center;">
        {{-- Panier --}}
        <a href="{{ route('panier') }}" style="position:relative;text-decoration:none;">
          <button class="pillBtn" style="background:#fff;color:var(--g2);border:1px solid rgba(20,92,57,.16);padding:10px 14px;display:flex;align-items:center;gap:8px;">
            <span style="font-size:18px;">🛒</span>
            <span>Panier</span>
            <span style="
              background:var(--g);
              color:#fff;
              border-radius:50%;
              min-width:20px;
              height:20px;
              font-size:11px;
              display:grid;
              place-items:center;
              font-weight:950;
              padding:0 6px;
            ">3</span>
          </button>
        </a>

        {{-- Connexion --}}
        <button class="pillBtn">Connexion / Compte</button>
      </div>
    </div>
  </div>

  {{-- ================= MENU ================= --}}
  <div class="menuRow">
    <div class="container">
      <nav aria-label="Menu principal" class="main-nav">

        {{-- GAUCHE --}}
        <div class="nav-left">
          <a href="{{ route('home') }}"><b>Accueil</b></a>

          <div class="drop">
            <button type="button">Librairie <span class="caret">▾</span></button>
            <div class="panel" role="menu">
              <a href="{{ route('cataloguelivres') }}">Livres scolaires</a>
              <a href="{{ route('cataloguelivres') }}">Romans & littérature</a>
              <a href="{{ route('cataloguelivres') }}">Ouvrages africains</a>
              <a href="{{ route('cataloguelivres') }}"><strong>Voir tout</strong></a>
            </div>
          </div>

          <div class="drop">
            <button type="button">Papeterie <span class="caret">▾</span></button>
            <div class="panel" role="menu">
              <a href="{{ route('catalogue.papeterie') }}">Fournitures scolaires</a>
              <a href="{{ route('catalogue.papeterie') }}">Fournitures de bureau</a>
              <a href="{{ route('catalogue.papeterie') }}">Sacs & accessoires</a>
              <a href="{{ route('catalogue.papeterie') }}"><strong>Voir toute la papeterie</strong></a>
            </div>
          </div>

          <a href="{{ route('evenements') }}">Événements</a>
          <a href="{{ route('points-vente') }}">Points de vente</a>
        </div>

        {{-- DROITE --}}
        <div class="nav-right">
          <a href="{{ route('quisommesnous') }}">Qui sommes-nous</a>
          <a href="{{ route('contact') }}">Contact</a>
        </div>

      </nav>
    </div>
  </div>
</header>

{{-- ================= CONTENU ================= --}}
<main class="container">
  @yield('content')
</main>

{{-- ================= FOOTER ================= --}}
<footer>
  <div class="container">
    <div class="foot">
      <div>
        <div style="font-weight:950;font-size:18px">ClairAfrique</div>
        <p>Librairie • Papeterie • Événements • Points de vente</p>
      </div>

      <div>
        <div style="font-weight:900">Liens</div>
        <a href="{{ route('cataloguelivres') }}">Librairie</a>
        <a href="{{ route('catalogue.papeterie') }}">Papeterie</a>
        <a href="{{ route('evenements') }}">Événements</a>
        <a href="{{ route('points-vente') }}">Points de vente</a>
      </div>

      <div>
        <div style="font-weight:900">Contact</div>
        <a href="#">Dakar, Sénégal</a>
        <a href="#">+221 XX XXX XX XX</a>
        <a href="#">contact@clairafrique.sn</a>
      </div>
    </div>

    <div class="copy">© ClairAfrique — Tous droits réservés</div>
  </div>
</footer>

</body>
</html>
