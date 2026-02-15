@extends('layouts.app')

@section('title', 'Connexion - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Connexion</b></div>
  <div class="titleRow">
    <div>
      <h1>Connexion</h1>
      <p class="subtitle">Accédez à votre compte pour finaliser vos achats</p>
    </div>
  </div>
</section>

<section class="section">
  <div style="max-width:980px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:24px;align-items:start;">

    {{-- Formulaire --}}
    <div class="heroCard">
      <h3 style="margin:0 0 16px;">Se connecter</h3>

      <form method="POST" action="#">
        @csrf

        <div class="field">
          <label>Email *</label>
          <input type="email" name="email" required placeholder="exemple@email.com" autocomplete="email">
        </div>

        <div class="field">
          <label>Mot de passe *</label>
          <input type="password" name="password" required placeholder="••••••••" autocomplete="current-password">
        </div>

        <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;margin-top:10px;">
          <label style="display:flex;align-items:center;gap:8px;font-size:13px;color:var(--mut);font-weight:900;">
            <input type="checkbox" name="remember" style="width:16px;height:16px;">
            Se souvenir de moi
          </label>

          <a class="muted" href="{{ route('password.request') }}" style="font-weight:900;color:var(--g2);">
            Mot de passe oublié ?
          </a>
        </div>

        <button type="submit" class="btn" style="width:100%;margin-top:16px;padding:14px;">
          Se connecter
        </button>

        <p class="muted" style="margin:14px 0 0;text-align:center;">
          Pas de compte ?
          <a href="{{ route('register') }}" style="font-weight:950;color:var(--g2);">Créer un compte</a>
        </p>
      </form>
    </div>

    {{-- Bloc infos --}}
    <div>
      <div class="card" style="margin-bottom:16px;">
        <div class="body">
          <h3 style="margin:0 0 10px;color:var(--g2);">Pourquoi se connecter ?</h3>
          <ul class="check">
            <li>Finaliser vos commandes</li>
            <li>Suivre vos achats</li>
            <li>Gagner du temps au checkout</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="body">
          <h3 style="margin:0 0 10px;color:var(--g2);">Besoin d’aide ?</h3>
          <p class="muted" style="margin:0;">
            Vous pouvez nous contacter via la page Contact ou appeler le point de vente.
          </p>
          <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:12px;">
            <a class="ghost" href="{{ route('contact') }}">✉️ Contact</a>
            <a class="ghost" href="{{ route('points-vente') }}">📍 Points de vente</a>
          </div>
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
