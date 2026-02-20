@extends('layouts.app')

@section('title', 'Créer un compte - ClairAfrique')

@section('content')

<section class="authPage">

    <div class="authBox">

        <h1>Créer un compte</h1>
        <p class="subtitle">Inscrivez-vous pour commander plus rapidement</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Nom --}}
            <div class="inputGroup">
                <label for="name">Nom complet</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    placeholder="Nom et prénom"
                    value="{{ old('name') }}"
                    required
                    autocomplete="name"
                >
            </div>

            {{-- Email --}}
            <div class="inputGroup">
                <label for="email">Email</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    placeholder="nom@email.com"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                >
            </div>

            {{-- Téléphone --}}
            <div class="inputGroup">
                <label for="phone">Téléphone</label>
                <input
                    id="phone"
                    type="tel"
                    name="phone"
                    placeholder="+221 XX XXX XX XX"
                    value="{{ old('phone') }}"
                    autocomplete="tel"
                >
            </div>

            {{-- Mot de passe --}}
            <div class="inputGroup">
                <label for="password">Mot de passe</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    required
                    autocomplete="new-password"
                >
            </div>

            {{-- Confirmation --}}
            <div class="inputGroup">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    placeholder="••••••••"
                    required
                    autocomplete="new-password"
                >
            </div>

            {{-- Conditions --}}
            <label class="terms">
                <input type="checkbox" required>
                <span>
                    J’accepte les
                    <a href="{{ route('conditions-utilisation') }}">conditions d’utilisation</a>
                    et la
                    <a href="{{ route('politique-confidentialite') }}">politique de confidentialité</a>
                </span>
            </label>

            {{-- Bouton --}}
            <button type="submit" class="loginBtn">
                Créer mon compte
            </button>

            {{-- Lien login --}}
            <div class="register">
                Déjà un compte ?
                <a href="{{ route('login') }}">Se connecter</a>
            </div>

        </form>

    </div>

</section>

@endsection


@push('styles')
<style>

/* PAGE */
.authPage{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:40px 20px;
    background:
        radial-gradient(circle at top, #e8f5ee 0%, transparent 40%),
        #f9fafb;
}

/* BOX */
.authBox{
    width:100%;
    max-width:460px;
    background:#fff;
    border-radius:26px;
    padding:36px 34px;
    border:1px solid rgba(0,0,0,.05);
    box-shadow:
        0 40px 80px rgba(0,0,0,.08),
        0 10px 20px rgba(0,0,0,.05);
    animation: fadeUp .6s ease;
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(20px);
    }
    to{
        opacity:1;
        transform:none;
    }
}

.authBox h1{
    margin:0;
    font-size:30px;
    letter-spacing:-.5px;
    color:#111827;
}

.subtitle{
    margin:8px 0 24px;
    color:#6b7280;
    font-size:14px;
}

/* INPUTS */
.inputGroup{
    display:flex;
    flex-direction:column;
    gap:6px;
    margin-top:18px;
}

.inputGroup label{
    font-size:12px;
    font-weight:800;
    color:#374151;
    text-transform:uppercase;
    letter-spacing:.04em;
}

.inputGroup input{
    border:1px solid #e5e7eb;
    border-radius:16px;
    padding:14px 16px;
    font-size:14px;
    background:#fafafa;
    transition:.25s;
}

.inputGroup input::placeholder{
    color:#9ca3af;
}

.inputGroup input:focus{
    background:#fff;
    border-color:#1f7a4d;
    box-shadow:0 0 0 5px rgba(31,122,77,.15);
    outline:none;
}

/* TERMS */
.terms{
    display:flex;
    gap:10px;
    margin-top:18px;
    font-size:13px;
    line-height:1.5;
    color:#4b5563;
}

.terms input{
    accent-color:#1f7a4d;
    transform:translateY(2px);
}

.terms a{
    color:#1f7a4d;
    font-weight:700;
    text-decoration:none;
}

.terms a:hover{
    text-decoration:underline;
}

/* BUTTON */
.loginBtn{
    width:100%;
    margin-top:24px;
    background:linear-gradient(135deg,#1f7a4d,#17633f);
    color:#fff;
    border:none;
    padding:16px;
    border-radius:18px;
    font-weight:900;
    letter-spacing:.3px;
    cursor:pointer;
    transition:.25s;
}

.loginBtn:hover{
    transform:translateY(-2px);
    box-shadow:0 14px 30px rgba(31,122,77,.35);
}

.loginBtn:active{
    transform:none;
}

/* LOGIN LINK */
.register{
    text-align:center;
    margin-top:22px;
    font-size:14px;
    color:#6b7280;
}

.register a{
    color:#1f7a4d;
    font-weight:800;
    text-decoration:none;
}

.register a:hover{
    text-decoration:underline;
}

</style>
@endpush
