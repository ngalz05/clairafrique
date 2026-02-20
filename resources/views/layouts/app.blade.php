<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title', 'ClairAfrique')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')

    <style>
        /* ================= NAV ================= */
        .main-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .nav-left,
        .nav-right {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* Liens et boutons du menu : style uniforme */
        .nav-left a,
        .nav-right a,
        .drop > button {
            all: unset;
            display: inline-block;
            cursor: pointer;
            font-weight: 700;
            font-size: 14px;
            padding: 10px 14px;
            border-radius: 14px;
            color: #333;
            text-decoration: none;
            transition: background .2s, color .2s;
            white-space: nowrap;
        }

        .nav-left a:hover,
        .nav-right a:hover,
        .drop:hover > button {
            background: rgba(31, 122, 77, .10);
            color: var(--g2, #1f7a4d);
        }

        /* ================= DROPDOWN ================= */
        .drop { position: relative; }

        /* ================= MEGA MENU ================= */
        .dropdown {
            position: absolute;
            top: calc(100% + 10px);
            left: 0;
            width: 760px;
            background: #fff;
            border-radius: 18px;
            padding: 22px;
            display: none;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .12);
            z-index: 100;
        }

        .drop:hover .dropdown { display: block; }

        .dropdown-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        /* ================= CATEGORY BOX ================= */
        .cat-box {
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 14px;
            transition: .25s;
            background: #fafafa;
        }

        .cat-box:hover {
            background: #fff;
            border-color: var(--g, #1f7a4d);
            box-shadow: 0 8px 18px rgba(0, 0, 0, .08);
        }

        .cat-title {
            font-weight: 800;
            margin-bottom: 10px;
            color: var(--g2, #1f7a4d);
        }

        .cat-box a {
            display: block;
            padding: 6px 8px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            color: #333;
            text-decoration: none;
            transition: background .2s, color .2s;
        }

        .cat-box a:hover {
            background: var(--gl, #e8f5ee);
            color: var(--g2, #1f7a4d);
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

            <div class="search">
                <input type="search" placeholder="Rechercher un livre ou un article..." />
            </div>

            <div style="display:flex;gap:10px;">
                <a href="{{ route('panier') }}" class="pillBtn" style="display:flex;align-items:center;gap:6px;">
                    <img src="{{ asset('icons/panier.png') }}" alt="Panier" width="20" height="20">
                    Panier
                </a>
                <a href="{{ route('login') }}" class="pillBtn">Connexion</a>            </div>
        </div>
    </div>

    {{-- ================= MENU ================= --}}
    <div class="menuRow">
        <div class="container">
            <nav class="main-nav">

                <div class="nav-left">
                    <a href="{{ route('home') }}">Accueil</a>

                    {{-- ================= LIBRAIRIE ================= --}}
                    <div class="drop">
                        <button type="button">Librairie ▾</button>

                        <div class="dropdown">
                            <div class="dropdown-grid">

                                <div class="cat-box">
                                    <div class="cat-title">Universitaire</div>
                                    <a href="#">Sciences Juridiques &amp; Politiques</a>
                                    <a href="#">Médecine &amp; Pharmacie</a>
                                    <a href="#">Gestion Économie Finance</a>
                                    <a href="#">Sciences Techniques</a>
                                    <a href="#">Agronomie</a>
                                    <a href="#">Sciences Humaines &amp; Littéraires</a>
                                </div>

                                <div class="cat-box">
                                    <div class="cat-title">Littérature</div>
                                    <a href="#">Littérature</a>
                                    <a href="#">Jeunesse</a>
                                    <a href="#">Dictionnaire</a>
                                    <a href="#">Scolaire</a>
                                </div>

                                <div class="cat-box">
                                    <div class="cat-title">Sciences humaines</div>
                                    <a href="#">Histoire - Géographie</a>
                                    <a href="#">Développement Personnel</a>
                                    <a href="#">Vie Pratique</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- ================= PAPETERIE ================= --}}
                    <div class="drop">
                        <button type="button">Papeterie ▾</button>
                        <div class="dropdown" style="width:320px">
                            <div class="cat-box">
                                <a href="#">Fournitures scolaires</a>
                                <a href="#">Fournitures de bureau</a>
                                <a href="#">Sacs &amp; accessoires</a>
                            </div>
                        </div>
                    </div>

                    {{-- ================= RELIGIEUX ================= --}}
                    <div class="drop">
                        <button type="button">Religieux ▾</button>
                        <div class="dropdown" style="width:320px">
                            <div class="cat-box">
                                <a href="#">Chapelets</a>
                                <a href="#">Bibles &amp; Corans</a>
                                <a href="#">Livres de prières</a>
                                <a href="#">Objets de piété</a>
                                <a href="#">Images &amp; statues</a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('evenements') }}">Événements</a>
                    <a href="{{ route('points-vente') }}">Points de vente</a>
                </div>

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
                <a href="#">Librairie</a>
                <a href="#">Papeterie</a>
                <a href="#">Événements</a>
                <a href="#">Points de vente</a>
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