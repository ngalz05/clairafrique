@extends('layouts.app')

@section('title', 'Événements - ClairAfrique')

@section('content')

<section class="pageHead">
    <div class="crumbs">Accueil / <b>Événements</b></div>
    <div class="titleRow">
        <div>
            <h1>Nos événements</h1>
            <p class="subtitle">Rencontres, dédicaces et animations culturelles</p>
        </div>
    </div>
</section>

<section class="section">

    <div class="grid3">

        <div class="card">
            <div class="thumb">Visuel</div>
            <div class="body">
                <span class="tag">Dédicace</span>
                <h3>Rencontre avec un auteur</h3>
                <p class="muted">Samedi 15h • Université</p>
            </div>
        </div>

        <div class="card">
            <div class="thumb">Visuel</div>
            <div class="body">
                <span class="tag">Conférence</span>
                <h3>Table ronde littéraire</h3>
                <p class="muted">Vendredi 18h • Indépendance</p>
            </div>
        </div>

        <div class="card">
            <div class="thumb">Visuel</div>
            <div class="body">
                <span class="tag">Promotion</span>
                <h3>Semaine du livre scolaire</h3>
                <p class="muted">Toute la semaine</p>
            </div>
        </div>

    </div>

</section>

@endsection
