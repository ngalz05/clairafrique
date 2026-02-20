@extends('layouts.app')

@section('title', 'Connexion - ClairAfrique')

@section('content')

<section class="authPage">

    <div class="authBox">

        <div class="brand">
            <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="4"  y="8"  width="6" height="22" rx="1.5" fill="currentColor" opacity=".9"/>
                <rect x="12" y="4"  width="6" height="26" rx="1.5" fill="currentColor"/>
                <rect x="20" y="10" width="6" height="20" rx="1.5" fill="currentColor" opacity=".7"/>
                <rect x="28" y="6"  width="4" height="24" rx="1.5" fill="currentColor" opacity=".5"/>
                <rect x="4"  y="30" width="28" height="2"  rx="1"   fill="currentColor"/>
            </svg>
            <span>ClairAfrique</span>
        </div>

        <h1>Connexion</h1>
        <p class="subtitle">Accédez à votre espace lecteur</p>

        @if ($errors->any())
            <div class="alert alert-error">{{ $errors->first() }}</div>
        @endif

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="inputGroup">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email"
                       value="{{ old('email') }}"
                       placeholder="nom@email.com"
                       autocomplete="email" required>
            </div>

            <div class="inputGroup">
                <div class="label-row">
                    <label for="password">Mot de passe</label>
                    <a href="{{ route('password.request') }}" class="forgot">Mot de passe oublié ?</a>
                </div>
                <input type="password" id="password" name="password"
                       placeholder="••••••••"
                       autocomplete="current-password" required>
            </div>

            <label class="remember">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                Se souvenir de moi
            </label>

            <button type="submit" class="loginBtn">Se connecter</button>

            <div class="register">
                Pas encore de compte ?
                <a href="{{ route('register') }}">Créer un compte</a>
            </div>

        </form>

    </div>

</section>

@endsection


@push('styles')
<style>

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=DM+Sans:wght@400;500;600&display=swap');

.authPage {
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
    background: #f5f7f5;
}

.authBox {
    width: 100%;
    max-width: 420px;
    background: #fff;
    border-radius: 16px;
    padding: 40px 36px;
    border: 1px solid #e2e8e4;
    box-shadow: 0 4px 24px rgba(0,0,0,.07);
    font-family: 'DM Sans', sans-serif;
}

/* Brand */
.brand {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #1f7a4d;
    margin-bottom: 28px;
}
.brand svg {
    width: 28px;
    height: 28px;
}
.brand span {
    font-family: 'Playfair Display', serif;
    font-size: 18px;
    color: #0f3d26;
}

/* Titre */
.authBox h1 {
    font-family: 'Playfair Display', serif;
    font-size: 26px;
    color: #111827;
    margin: 0 0 4px;
}
.subtitle {
    font-size: 14px;
    color: #6b7280;
    margin-bottom: 28px;
}

/* Alertes */
.alert {
    padding: 11px 14px;
    border-radius: 8px;
    font-size: 13.5px;
    margin-bottom: 18px;
}
.alert-error   { background: #fef2f2; color: #b91c1c; border: 1px solid #fecaca; }
.alert-success { background: #f0faf5; color: #1f7a4d; border: 1px solid #a7f3d0; }

/* Inputs */
.inputGroup {
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-bottom: 16px;
}

.label-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.inputGroup label {
    font-size: 13px;
    font-weight: 600;
    color: #374151;
}

.inputGroup input {
    border: 1.5px solid #e5e7eb;
    border-radius: 10px;
    padding: 12px 14px;
    font-size: 14px;
    font-family: 'DM Sans', sans-serif;
    color: #111827;
    transition: border-color .2s, box-shadow .2s;
}
.inputGroup input:focus {
    outline: none;
    border-color: #1f7a4d;
    box-shadow: 0 0 0 3px rgba(31,122,77,.1);
}
.inputGroup input::placeholder { color: #c4c9d0; }

/* Lien oublié */
.forgot {
    font-size: 12.5px;
    color: #1f7a4d;
    font-weight: 600;
    text-decoration: none;
}
.forgot:hover { text-decoration: underline; }

/* Checkbox */
.remember {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13.5px;
    color: #4b5563;
    cursor: pointer;
    margin-bottom: 22px;
    margin-top: 4px;
}
.remember input[type="checkbox"] {
    accent-color: #1f7a4d;
    width: 15px;
    height: 15px;
}

/* Bouton */
.loginBtn {
    width: 100%;
    background: #1f7a4d;
    color: #fff;
    border: none;
    padding: 13px;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 600;
    font-family: 'DM Sans', sans-serif;
    cursor: pointer;
    transition: background .2s;
}
.loginBtn:hover { background: #17633f; }

/* Register */
.register {
    text-align: center;
    margin-top: 16px;
    font-size: 13.5px;
    color: #6b7280;
}
.register a {
    color: #1f7a4d;
    font-weight: 600;
    text-decoration: none;
    margin-left: 3px;
}
.register a:hover { text-decoration: underline; }

@media (max-width: 480px) {
    .authBox { padding: 28px 20px; }
}

</style>
@endpush