@extends('layouts.app')

@section('title', $produit->titre ?? 'Détail produit')

@push('styles')
<style>
/* ===== Styles spécifiques page détail ===== */
.product{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:16px;
  padding:10px 0 18px;
}
.box{
  border:1px solid rgba(17,24,39,.08);
  border-radius:22px;
  background:#fff;
  box-shadow:0 10px 22px rgba(0,0,0,.07);
  padding:14px;
}
.heroImg{
  height:360px;
  border-radius:20px;
  border:1px dashed rgba(20,92,57,.35);
  display:grid;
  place-items:center;
  background:#f5faf7;
}
.thumbs{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:10px;
  margin-top:12px;
}
.t{
  height:70px;
  border-radius:16px;
  border:1px solid rgba(17,24,39,.10);
  display:grid;
  place-items:center;
  font-weight:900;
}
.tag{
  display:inline-block;
  padding:6px 10px;
  border-radius:999px;
  background:#EAF5EF;
  color:#145C39;
  font-size:12px;
  font-weight:900;
}
.price{
  font-size:22px;
  font-weight:950;
  color:#145C39;
}
.actions{
  display:flex;
  gap:10px;
  flex-wrap:wrap;
  margin-top:12px;
}
.btn{
  background:#1F7A4D;
  color:#fff;
  border:none;
  padding:12px 16px;
  border-radius:14px;
  font-weight:950;
}
.ghost{
  background:#fff;
  border:1px solid rgba(17,24,39,.12);
  padding:12px 16px;
  border-radius:14px;
  font-weight:950;
}
.specs{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:10px;
  margin-top:14px;
}
.spec{
  border:1px solid rgba(17,24,39,.08);
  border-radius:18px;
  padding:12px;
}
.desc{
  margin-top:14px;
}
@media(max-width:900px){
  .product{grid-template-columns:1fr}
}
</style>
@endpush

@section('content')

{{-- Fil d’Ariane --}}
<section class="head">
  <div class="crumbs">
    Accueil /
    Librairie /
    {{ $produit->categorie->nom ?? 'Catégorie' }} /
    <b>Détail</b>
  </div>
</section>

{{-- Produit --}}
<section class="product">

  {{-- Galerie --}}
  <div class="box">
    <div class="heroImg">
      @if($produit->image)
        <img src="{{ asset('storage/'.$produit->image) }}"
             alt="{{ $produit->titre }}"
             style="max-height:100%;max-width:100%;border-radius:18px">
      @else
        Image produit
      @endif
    </div>

    <div class="thumbs">
      @foreach($produit->images ?? [] as $img)
        <div class="t">
          <img src="{{ asset('storage/'.$img) }}" style="max-width:100%">
        </div>
      @endforeach
    </div>
  </div>

  {{-- Infos --}}
  <div class="box">
    <span class="tag">{{ $produit->categorie->nom ?? 'Livre' }}</span>

    <h1>{{ $produit->titre }}</h1>

    <p class="muted">
      Auteur : {{ $produit->auteur ?? '—' }} •
      Éditeur : {{ $produit->editeur ?? '—' }} •
      Année : {{ $produit->annee ?? '—' }}
    </p>

    <div class="priceRow">
      <div class="price">
        {{ number_format($produit->prix, 0, ',', ' ') }} FCFA
      </div>
      <div class="stock">
        {{ $produit->stock > 0 ? 'En stock' : 'Indisponible' }}
      </div>
    </div>

    {{-- Actions --}}
    <form method="POST" action="{{ route('panier.add', $produit->id) }}" class="actions">
      @csrf
      <input type="number" name="quantite" value="1" min="1"
             style="width:80px;padding:10px;border-radius:12px;border:1px solid #e5e7eb">
      <button class="btn">Ajouter au panier</button>
      <a href="{{ route('points-vente') }}" class="ghost">Points de vente</a>
    </form>

    {{-- Spécifications --}}
    <div class="specs">
      <div class="spec"><b>Format</b><span>{{ $produit->format }}</span></div>
      <div class="spec"><b>Pages</b><span>{{ $produit->pages }}</span></div>
      <div class="spec"><b>Langue</b><span>{{ $produit->langue }}</span></div>
      <div class="spec"><b>Disponibilité</b><span>Retrait en magasin</span></div>
    </div>

    {{-- Description --}}
    <div class="desc">
      <h2>Description</h2>
      <p>{{ $produit->description }}</p>
    </div>
  </div>

</section>

{{-- Produits similaires --}}
<section class="section">
  <div class="secHead">
    <h2>Produits similaires</h2>
    <a href="{{ route('cataloguelivres') }}">Voir le catalogue →</a>
  </div>

  <div class="cards">
    @foreach($similaires as $item)
      <article class="card">
        <div class="img">Couverture</div>
        <div class="body">
          <span class="tag">{{ $item->categorie->nom }}</span>
          <h3>{{ $item->titre }}</h3>
          <p class="muted">{{ number_format($item->prix,0,',',' ') }} FCFA</p>
          <div class="row">
            <span class="muted">Disponible</span>
            <a href="{{ route('produits.show', $item->id) }}" class="mini">Voir</a>
          </div>
        </div>
      </article>
    @endforeach
  </div>
</section>

@endsection
