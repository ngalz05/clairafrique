@extends('layouts.app')

@section('title', 'Qui sommes-nous - ClairAfrique')

@section('content')

<section class="pageHead">
    <div class="crumbs">Accueil / <b>Qui sommes-nous</b></div>
    <div class="titleRow">
        <div>
            <h1>Qui sommes-nous</h1>
            <p class="subtitle">45 ans au service de la culture et de l'éducation</p>
        </div>
    </div>
</section>

<section class="section">

    <div class="about" style="margin-bottom:40px;">
        <div class="box">
            <h3>Notre histoire</h3>
            <p class="muted">
                Fondée en 1980, ClairAfrique accompagne les lecteurs,
                élèves, parents et professionnels à travers une offre
                complète de librairie et papeterie.
            </p>
            <p class="muted">
                Aujourd’hui, nous disposons de deux points de vente :
                Université et Indépendance.
            </p>
        </div>

        <div class="box">
            <div style="height:260px;border-radius:18px;background:linear-gradient(135deg,rgba(31,122,77,.15),rgba(255,255,255,.95));display:grid;place-items:center;font-weight:900;color:var(--g2);">
                Image / Visuel historique
            </div>
        </div>
    </div>

    <div style="margin-bottom:40px;">
        <h2>Nos valeurs</h2>
        <div class="grid3">
            <div class="card">
                <div class="body" style="text-align:center;">
                    <div style="font-size:40px;">📚</div>
                    <h3>Excellence</h3>
                    <p class="muted">Une sélection rigoureuse de qualité.</p>
                </div>
            </div>

            <div class="card">
                <div class="body" style="text-align:center;">
                    <div style="font-size:40px;">🤝</div>
                    <h3>Proximité</h3>
                    <p class="muted">Un service proche de nos clients.</p>
                </div>
            </div>

            <div class="card">
                <div class="body" style="text-align:center;">
                    <div style="font-size:40px;">🌍</div>
                    <h3>Culture africaine</h3>
                    <p class="muted">Valorisation des auteurs africains.</p>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
