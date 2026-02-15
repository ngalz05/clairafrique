@extends('layouts.app')

@section('title', 'Mot de passe oublié - ClairAfrique')

@section('content')
<section class="pageHead">
  <div class="crumbs">Accueil / <b>Mot de passe oublié</b></div>
  <div class="titleRow">
    <div>
      <h1>Réinitialiser votre mot de passe</h1>
      <p class="subtitle">Entrez votre email : nous vous enverrons un lien</p>
    </div>
  </div>
</section>

<section class="section">
  <div style="max-width:720px;margin:0 auto;">
    <div class="heroCard">
      <h3 style="margin:0 0 10px;">Recevoir le lien</h3>
      <p class="muted" style="margin:0 0 14px;">
        Si vous ne recevez rien, vérifiez vos spams ou réessayez.
      </p>

      <form method="POST" action="#">
        @csrf

        <div class="field">
          <label>Email *</label>
          <input type="email" name="email" required placeholder="exemple@email.com" autocomplete="email">
        </div>

        <button type="submit" class="btn" style="width:100%;margin-top:14px;padding:14px;">
          Envoyer le lien
        </button>

        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:14px;">
          <a class="ghost" href="{{ route('login') }}">← Retour connexion</a>
          <a class="ghost" href="{{ route('register') }}">Créer un compte</a>
        </div>
      </form>
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
</style>
@endpush
