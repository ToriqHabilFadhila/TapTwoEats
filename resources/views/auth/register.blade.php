@extends('layouts.app')
@section('title', 'Register')
@section('content')

<style>
    .auth-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3rem 1.5rem;
        position: relative;
    }

    .auth-blob {
        position: fixed;
        border-radius: 50%;
        pointer-events: none;
        z-index: 0;
        animation: blobFloat 8s ease-in-out infinite;
    }
    .auth-blob:nth-child(2) { animation-delay: -4s; }
    .auth-blob:nth-child(3) { animation-delay: -6s; }

    @keyframes blobFloat {
        0%, 100% { transform: translateY(0) scale(1); }
        50%       { transform: translateY(-18px) scale(1.03); }
    }

    .auth-card {
        width: 100%;
        max-width: 500px;
        position: relative;
        z-index: 1;
    }

    .auth-panel {
        background: rgba(255,255,255,0.65);
        backdrop-filter: blur(28px) saturate(180%);
        -webkit-backdrop-filter: blur(28px) saturate(180%);
        border: 1px solid rgba(255,255,255,0.9);
        border-radius: 28px;
        padding: 2.75rem 2.5rem;
        box-shadow: 0 20px 60px rgba(79,126,247,0.12), 0 4px 20px rgba(0,0,0,0.06);
        animation: cardIn 0.5s cubic-bezier(.22,1,.36,1) both;
    }

    @keyframes cardIn {
        from { opacity:0; transform:translateY(24px) scale(0.97); }
        to   { opacity:1; transform:translateY(0) scale(1); }
    }

    .auth-logo-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 2rem;
        text-decoration: none;
    }

    .auth-logo-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .auth-logo-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
    }

    .auth-logo-text {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 1.25rem;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .auth-title {
        font-family: 'Lora', serif;
        font-size: 1.7rem;
        font-weight: 600;
        color: #18243e;
        margin: 0 0 0.35rem;
        letter-spacing: -0.02em;
        text-align: center;
    }

    .auth-subtitle {
        font-size: 0.9rem;
        color: #7d8fb0;
        text-align: center;
        margin: 0 0 1.5rem;
        line-height: 1.6;
        font-family: 'Bricolage Grotesque', sans-serif;
    }

    .auth-perks {
        display: flex;
        justify-content: center;
        gap: 1.25rem;
        flex-wrap: wrap;
        margin-bottom: 1.75rem;
    }

    .auth-perk {
        display: flex;
        align-items: center;
        gap: 5px;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.78rem;
        font-weight: 600;
        color: #7d8fb0;
    }

    .auth-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .auth-row-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.85rem;
    }

    .auth-field {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .auth-label {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.8rem;
        font-weight: 700;
        color: #4a5a7a;
        letter-spacing: 0.03em;
    }

    .auth-input-wrap { position: relative; }

    .auth-input-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #9aa5c0;
        pointer-events: none;
        display: flex;
    }

    .auth-input {
        width: 100%;
        box-sizing: border-box;
        padding: 12px 14px 12px 42px;
        background: rgba(255,255,255,0.7);
        border: 1.5px solid rgba(79,126,247,0.18);
        border-radius: 14px;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.92rem;
        color: #18243e;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
        backdrop-filter: blur(8px);
    }

    .auth-input::placeholder { color: #b0bcd8; }

    .auth-input:focus {
        border-color: #4F7EF7;
        background: rgba(255,255,255,0.9);
        box-shadow: 0 0 0 4px rgba(79,126,247,0.1);
    }

    .auth-eye {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        color: #9aa5c0;
        display: flex;
        padding: 4px;
        transition: color 0.2s;
    }
    .auth-eye:hover { color: #4F7EF7; }

    .auth-strength {
        margin-top: 6px;
        display: none;
        gap: 4px;
        align-items: center;
    }

    .auth-strength.show { display: flex; }

    .auth-strength-bar {
        height: 4px;
        flex: 1;
        background: rgba(79,126,247,0.1);
        border-radius: 2px;
        transition: background 0.3s;
    }

    .auth-strength-label {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.72rem;
        font-weight: 600;
        color: #b0bcd8;
        white-space: nowrap;
        min-width: 46px;
        text-align: right;
        transition: color 0.3s;
    }

    .auth-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, #4F7EF7, #22D3EE);
        border: none;
        border-radius: 14px;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        color: white;
        cursor: pointer;
        transition: all 0.25s;
        box-shadow: 0 4px 16px rgba(79,126,247,0.3);
        margin-top: 0.25rem;
    }
    .auth-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(79,126,247,0.4);
    }

    .auth-btn:active { transform: translateY(0); }

    .auth-divider {
        display: flex;
        align-items: center;
        gap: 12px;
        margin: 1.25rem 0 0.75rem;
    }

    .auth-divider::before,
    .auth-divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: rgba(79,126,247,0.12);
    }

    .auth-divider span {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.75rem;
        font-weight: 600;
        color: #b0bcd8;
        white-space: nowrap;
    }

    .auth-social-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.75rem;
    }

    .auth-social-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 11px 16px;
        background: rgba(255,255,255,0.75);
        border: 1.5px solid rgba(79,126,247,0.15);
        border-radius: 12px;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.84rem;
        font-weight: 600;
        color: #4a5a7a;
        text-decoration: none;
        transition: all 0.2s;
    }

    .auth-social-btn:hover {
        background: rgba(255,255,255,0.95);
        border-color: rgba(79,126,247,0.3);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(79,126,247,0.1);
    }

    .auth-terms {
        display: flex;
        align-items: flex-start;
        gap: 9px;
    }

    .auth-terms input[type="checkbox"] {
        width: 16px;
        height: 16px;
        margin-top: 2px;
        accent-color: #4F7EF7;
        cursor: pointer;
        flex-shrink: 0;
    }

    .auth-terms label {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.82rem;
        color: #7d8fb0;
        cursor: pointer;
        line-height: 1.5;
    }

    .auth-terms a {
        color: #4F7EF7;
        font-weight: 600;
        text-decoration: none;
    }

    .auth-switch {
        text-align: center;
        margin-top: 1.5rem;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.88rem;
        color: #7d8fb0;
    }

    .auth-switch a {
        color: #4F7EF7;
        font-weight: 700;
        text-decoration: none;
    }

    .auth-error {
        background: rgba(254,202,202,0.6);
        border: 1px solid rgba(239,68,68,0.2);
        border-radius: 10px;
        padding: 10px 14px;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.84rem;
        color: #dc2626;
        margin-bottom: 0.5rem;
    }

    @media (max-width: 540px) {
        .auth-panel { padding: 2rem 1.5rem; border-radius: 22px; }
        .auth-row-2 { grid-template-columns: 1fr; }
        .auth-social-row { grid-template-columns: 1fr; }
        .auth-perks { gap: 0.75rem; }
    }
</style>

<div class="auth-wrapper">
    <div class="auth-blob" style="top:5%; right:-80px; width:380px; height:380px; background:radial-gradient(circle,rgba(251,146,60,0.14) 0%,transparent 70%);"></div>
    <div class="auth-blob" style="bottom:8%; left:-60px; width:320px; height:320px; background:radial-gradient(circle,rgba(79,126,247,0.15) 0%,transparent 70%);"></div>
    <div class="auth-blob" style="top:40%; right:20%; width:200px; height:200px; background:radial-gradient(circle,rgba(34,211,238,0.1) 0%,transparent 70%);"></div>
    <div class="auth-card">
        <a href="{{ route('home') }}" class="auth-logo-wrap">
            <div class="auth-logo-icon">
                <img src="{{ asset('images/TapTwoEats.png') }}" alt="TapTwoEats">
            </div>
            <span class="auth-logo-text">
                <span style="background:linear-gradient(135deg,#1e3a8a,#4F7EF7); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;">Tap</span><span style="background:linear-gradient(135deg,#22d3ee,#0891b2); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;">Two</span><span style="background:linear-gradient(135deg,#1e3a8a,#4F7EF7); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;">Eats</span>
            </span>
        </a>
        <div class="auth-panel">
            <h1 class="auth-title">Create your account 🍽️</h1>
            <p class="auth-subtitle">Join thousands of food lovers in Malang</p>
            <div class="auth-perks">
                <span class="auth-perk">
                    <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Free delivery
                </span>
                <span class="auth-perk">
                    <svg width="14" height="14" fill="none" stroke="#4F7EF7" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Exclusive deals
                </span>
                <span class="auth-perk">
                    <svg width="14" height="14" fill="none" stroke="#fb923c" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Track orders live
                </span>
            </div>
            @if ($errors->any())
            <div class="auth-error">
                @foreach ($errors->all() as $error)
                <div>• {{ $error }}</div>
                @endforeach
            </div>
            @endif
            <form class="auth-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="auth-row-2">
                    <div class="auth-field">
                        <label class="auth-label" for="first_name">First Name</label>
                        <div class="auth-input-wrap">
                            <span class="auth-input-icon">
                                <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                </svg>
                            </span>
                            <input id="first_name" name="first_name" type="text" class="auth-input" placeholder="John" value="{{ old('first_name') }}" required autofocus autocomplete="given-name">
                        </div>
                    </div>
                    <div class="auth-field">
                        <label class="auth-label" for="last_name">Last Name</label>
                        <div class="auth-input-wrap">
                            <span class="auth-input-icon">
                                <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                </svg>
                            </span>
                            <input id="last_name" name="last_name" type="text" class="auth-input" placeholder="Doe" value="{{ old('last_name') }}" required autocomplete="family-name">
                        </div>
                    </div>
                </div>
                <div class="auth-field">
                    <label class="auth-label" for="email">Email Address</label>
                    <div class="auth-input-wrap">
                        <span class="auth-input-icon">
                            <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25H4.5a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5H4.5a2.25 2.25 0 00-2.25 2.25m19.5 0l-9.75 6.75L2.25 6.75"/>
                            </svg>
                        </span>
                        <input id="email" name="email" type="email" class="auth-input" placeholder="john@example.com" value="{{ old('email') }}" required autocomplete="username">
                    </div>
                </div>
                <div class="auth-field">
                    <label class="auth-label" for="phone">Phone Number</label>
                    <div class="auth-input-wrap">
                        <span class="auth-input-icon">
                            <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 7.87 6.38 14.25 14.25 14.25.89 0 1.77-.08 2.62-.23a2.25 2.25 0 001.63-3.05l-.88-2.21a2.25 2.25 0 00-2.66-1.33l-2.28.57a11.04 11.04 0 01-5.26-5.26l.57-2.28A2.25 2.25 0 008.79 4.2L6.58 3.32A2.25 2.25 0 003.53 4.95c-.15.85-.23 1.73-.23 2.62z"/>
                            </svg>
                        </span>
                        <input id="phone" name="phone" type="tel" class="auth-input" placeholder="+62 812-3456-7890" value="{{ old('phone') }}" autocomplete="tel">
                    </div>
                </div>
                <div class="auth-field">
                    <label class="auth-label" for="password">Password</label>
                    <div class="auth-input-wrap">
                        <span class="auth-input-icon">
                            <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                            </svg>
                        </span>
                        <input id="password" name="password" type="password" class="auth-input" placeholder="Min. 8 characters" required autocomplete="new-password" style="padding-right:44px;" oninput="checkStrength(this.value)">
                        <button type="button" class="auth-eye" onclick="togglePass('password', this)">
                            <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="auth-strength" id="strength-row">
                        <div class="auth-strength-bar" id="sb1"></div>
                        <div class="auth-strength-bar" id="sb2"></div>
                        <div class="auth-strength-bar" id="sb3"></div>
                        <div class="auth-strength-bar" id="sb4"></div>
                        <span class="auth-strength-label" id="strength-label"></span>
                    </div>
                </div>
                <div class="auth-field">
                    <label class="auth-label" for="password_confirmation">Confirm Password</label>
                    <div class="auth-input-wrap">
                        <span class="auth-input-icon">
                            <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                            </svg>
                        </span>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="auth-input" placeholder="Re-enter your password" required autocomplete="new-password" style="padding-right:44px;">
                        <button type="button" class="auth-eye" onclick="togglePass('password_confirmation', this)">
                            <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="auth-terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> of TapTwoEats
                    </label>
                </div>
                <button type="submit" class="auth-btn">Create Account →</button>
            </form>
            <div class="auth-divider"><span>or sign up with</span></div>
            <div class="auth-social-row">
                <a href="#" class="auth-social-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                    </svg>
                    Google
                </a>
                <a href="#" class="auth-social-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#1877F2">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook
                </a>
            </div>
            <div class="auth-switch">
                Already have an account? <a href="{{ route('login') }}">Sign in →</a>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        function togglePass(fieldId, btn) {
            const input = document.getElementById(fieldId);
            const isPass = input.type === 'password';
            input.type = isPass ? 'text' : 'password';
            btn.style.color = isPass ? '#4F7EF7' : '#9aa5c0';
            btn.querySelector('svg').innerHTML = isPass
                ? `<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>`
                : `<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>`;
        }
        function checkStrength(val) {
            const row = document.getElementById('strength-row');
            const label = document.getElementById('strength-label');
            const bars = ['sb1','sb2','sb3','sb4'].map(id => document.getElementById(id));
            if (!val) { row.classList.remove('show'); return; }
            row.classList.add('show');
            let score = 0;
            if (val.length >= 8)           score++;
            if (/[A-Z]/.test(val))         score++;
            if (/[0-9]/.test(val))         score++;
            if (/[^A-Za-z0-9]/.test(val))  score++;
            const colors = ['#ef4444','#fb923c','#facc15','#22c55e'];
            const labels = ['Weak','Fair','Good','Strong'];
            bars.forEach((b, i) => {
                b.style.background = i < score ? colors[score - 1] : 'rgba(79,126,247,0.1)';
            });
            label.textContent = labels[score - 1] || '';
            label.style.color  = colors[score - 1] || '#b0bcd8';
        }
    </script>
@endpush
@endsection
