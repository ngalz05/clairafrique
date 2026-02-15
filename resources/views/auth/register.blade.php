@extends('layouts.app')

@section('title', 'Créer un compte - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Créer un compte</b></div>
  <div class="titleRow">
    <div>
      <h1>Créer un compte</h1>
      <p class="subtitle">Inscrivez-vous pour commander plus facilement</p>
    </div>
  </div>
</section>

<section class="section">
  <div style="max-width:980px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:24px;align-items:start;">

    {{-- Formulaire --}}
    <div class="heroCard">
      <h3 style="margin:0 0 16px;">Inscription</h3>

      <form method="POST" action="#">
        @csrf

        <div class="field">
          <label>Nom complet *</label>
          <input type="text" name="name" required placeholder="Nom et prénom" autocomplete="name">
        </div>

        <div class="field">
          <label>Email *</label>
          <input type="email" name="email" required placeholder="exemple@email.com" autocomplete="email">
        </div>

        <div class="field">
          <label>Téléphone</label>
          <input type="tel" name="phone" placeholder="+221 XX XXX XX XX" autocomplete="tel">
        </div>

        <div class="field">
          <label>Mot de passe *</label>
          <input type="password" name="password" required placeholder="••••••••" autocomplete="new-password">
        </div>

        <div class="field">
          <label>Confirmer le mot de passe *</label>
          <input type="password" name="password_confirmation" required placeholder="••••••••" autocomplete="new-password">
        </div>

        <label style="display:flex;align-items:flex-start;gap:10px;margin-top:12px;font-size:13px;color:var(--mut);font-weight:900;line-height:1.5;">
          <input type="checkbox" required style="width:16px;height:16px;margin-top:2px;">
          J’accepte les <a href="{{ route('cgv') }}" style="color:var(--g2);font-weight:950;">conditions</a> et la
          <a href="{{ route('privacy') }}" style="color:var(--g2);font-weight:950;">politique de confidentialité</a>.
        </label>

        <button type="submit" class="btn" style="width:100%;margin-top:16px;padding:14px;">
          Créer mon compte
        </button>

        <p class="muted" style="margin:14px 0 0;text-align:center;">
          Déjà un compte ?
          <a href="{{ route('login') }}" style="font-weight:950;color:var(--g2);">Se connecter</a>
        </p>
      </form>
    </div>

    {{-- Bloc infos --}}
    <div>
      <div class="card" style="margin-bottom:16px;">
        <div class="body">
          <h3 style="margin:0 0 10px;color:var(--g2);">Avantages</h3>
          <ul class="check">
            <li>Checkout plus rapide</li>
            <li>Suivi des commandes</li>
            <li>Historique d’achats</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="body">
          <h3 style="margin:0 0 10px;color:var(--g2);">Sécurité</h3>
          <p class="muted" style="margin:0;">
            Vos informations sont utilisées uniquement pour gérer vos commandes et votre compte.
          </p>
        </div>
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

  .field{display:flex;flex-direction:column;gap:6px;margin-top:14px}
  .field label{font-size:13px;color:var(--mut);font-weight:900}
  .field input{
    border:1px solid rgba(17,24,39,.10);
    border-radius:14px;
    padding:12px;
    outline:none;
    background:#fff;
    font-size:14px;
  }
  .field input:focus{
    border-color:rgba(31,122,77,.35);
    box-shadow:0 0 0 4px rgba(31,122,77,.10);
  }

  @media (max-width:980px){
    section > div[style*="grid-template-columns:1fr 1fr"]{grid-template-columns:1fr!important;}
  }
</style>
@endpush
