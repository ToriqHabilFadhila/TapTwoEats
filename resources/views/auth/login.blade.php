@extends('layouts.app')
@section('title', 'Login')
@section('content')

<style>
    .auth-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 1.5rem;
        position: relative;
    }

    .auth-blob {
        position: fixed;
        border-radius: 50%;
        pointer-events: none;
        z-index: 0;
        animation: blobFloat 8s ease-in-out infinite;
    }
    .auth-blob-2 { animation-delay: -4s; animation-duration: 10s; }
    .auth-blob-3 { animation-delay: -2s; animation-duration: 12s; }

    @keyframes blobFloat {
        0%, 100% { transform: translateY(0) scale(1); }
        50% { transform: translateY(-24px) scale(1.04); }
    }

    .auth-card {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 460px;
        background: rgba(255,255,255,0.72);
        backdrop-filter: blur(32px) saturate(180%);
        -webkit-backdrop-filter: blur(32px) saturate(180%);
        border: 1px solid rgba(255,255,255,0.92);
        border-radius: 28px;
        padding: 2.8rem 2.8rem 2.5rem;
        box-shadow: 0 20px 60px rgba(79,126,247,0.12), 0 4px 16px rgba(0,0,0,0.06);
        animation: cardIn 0.55s cubic-bezier(0.22,1,0.36,1) both;
    }

    @keyframes cardIn {
        from { opacity: 0; transform: translateY(32px) scale(0.97); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    .auth-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 0.5rem;
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
    }

    .auth-logo-text {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 1.3rem;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .auth-heading {
        font-family: 'Lora', serif;
        font-size: 1.75rem;
        font-weight: 600;
        color: #18243e;
        text-align: center;
        margin: 1.5rem 0 0.4rem;
        letter-spacing: -0.02em;
    }

    .auth-subheading {
        text-align: center;
        font-size: 0.9rem;
        color: #7d8fb0;
        margin: 0 0 2rem;
        line-height: 1.6;
    }

    .auth-form {
        display: flex;
        flex-direction: column;
        gap: 1.1rem;
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

    .auth-input-wrap {
        position: relative;
    }

    .auth-input-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #b0bcd4;
        pointer-events: none;
        transition: color 0.2s;
    }

    .auth-input {
        width: 100%;
        box-sizing: border-box;
        padding: 13px 14px 13px 44px;
        background: rgba(255,255,255,0.65);
        border: 1.5px solid rgba(79,126,247,0.18);
        border-radius: 13px;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.92rem;
        color: #18243e;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
    }

    .auth-input::placeholder { color: #b0bcd4; }

    .auth-input:focus {
        border-color: #4F7EF7;
        background: rgba(255,255,255,0.9);
        box-shadow: 0 0 0 3px rgba(79,126,247,0.12);
    }

    .auth-input:focus + .auth-input-icon,
    .auth-input-wrap:focus-within .auth-input-icon {
        color: #4F7EF7;
    }

    .auth-pw-toggle {
        position: absolute;
        right: 13px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        color: #b0bcd4;
        padding: 4px;
        border-radius: 6px;
        transition: color 0.2s;
        display: flex;
        align-items: center;
    }

    .auth-pw-toggle:hover { color: #4F7EF7; }

    .auth-forgot {
        display: flex;
        justify-content: flex-end;
        margin-top: -4px;
    }

    .auth-forgot a {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.8rem;
        font-weight: 600;
        color: #4F7EF7;
        text-decoration: none;
        transition: opacity 0.2s;
    }

    .auth-forgot a:hover { opacity: 0.75; }

    .auth-remember {
        display: flex;
        align-items: center;
        gap: 9px;
        cursor: pointer;
    }

    .auth-remember input[type="checkbox"] {
        width: 17px;
        height: 17px;
        accent-color: #4F7EF7;
        cursor: pointer;
        border-radius: 5px;
    }

    .auth-remember span {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.85rem;
        color: #4a5a7a;
        font-weight: 500;
    }

    .auth-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, #4F7EF7, #22D3EE);
        border: none;
        border-radius: 14px;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        color: white;
        cursor: pointer;
        transition: all 0.25s ease;
        box-shadow: 0 4px 20px rgba(79,126,247,0.3);
        margin-top: 0.3rem;
        letter-spacing: 0.01em;
    }

    .auth-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(79,126,247,0.4);
    }

    .auth-btn:active { transform: translateY(0); }

    .auth-divider {
        display: flex;
        align-items: center;
        gap: 12px;
        margin: 0.3rem 0;
    }

    .auth-divider::before,
    .auth-divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: rgba(79,126,247,0.14);
    }

    .auth-divider span {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.78rem;
        font-weight: 600;
        color: #b0bcd4;
        white-space: nowrap;
    }

    .auth-social-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .auth-social-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 11px 16px;
        background: rgba(255,255,255,0.7);
        border: 1.5px solid rgba(79,126,247,0.15);
        border-radius: 12px;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.85rem;
        font-weight: 600;
        color: #4a5a7a;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s;
    }

    .auth-social-btn:hover {
        background: rgba(255,255,255,0.95);
        border-color: rgba(79,126,247,0.3);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.07);
    }

    .auth-footer-link {
        text-align: center;
        margin-top: 1.4rem;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.88rem;
        color: #7d8fb0;
    }

    .auth-footer-link a {
        color: #4F7EF7;
        font-weight: 700;
        text-decoration: none;
    }

    .auth-footer-link a:hover { text-decoration: underline; }

    .auth-error {
        background: rgba(254,202,202,0.6);
        border: 1px solid rgba(239,68,68,0.2);
        border-radius: 10px;
        padding: 10px 14px;
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.83rem;
        color: #dc2626;
        font-weight: 500;
    }

    @media (max-width: 500px) {
        .auth-card {
            padding: 2rem 1.5rem 1.8rem;
            border-radius: 22px;
        }
        .auth-heading { font-size: 1.5rem; }
        .auth-social-row { grid-template-columns: 1fr; }
    }
</style>

<div class="auth-wrapper">
    <div class="auth-blob" style="width:400px; height:400px; background:radial-gradient(circle,rgba(79,126,247,0.15) 0%,transparent 70%); top:-80px; left:-120px;"></div>
    <div class="auth-blob auth-blob-2" style="width:350px; height:350px; background:radial-gradient(circle,rgba(34,211,238,0.12) 0%,transparent 70%); bottom:-60px; right:-100px;"></div>
    <div class="auth-blob auth-blob-3" style="width:250px; height:250px; background:radial-gradient(circle,rgba(251,146,60,0.1) 0%,transparent 70%); top:40%; right:5%;"></div>
    <div class="auth-card">
        <a href="{{ route('home') }}" class="auth-logo">
            <div class="auth-logo-icon">
                <img src="{{ asset('images/TapTwoEats.png') }}" alt="TapTwoEats">
            </div>
            <span class="auth-logo-text">
                <span style="background:linear-gradient(135deg,#1e3a8a,#4F7EF7); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;">Tap</span><span style="background:linear-gradient(135deg,#22d3ee,#0891b2); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;">Two</span><span style="background:linear-gradient(135deg,#1e3a8a,#4F7EF7); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;">Eats</span>
            </span>
        </a>
        <h1 class="auth-heading">Welcome Back 👋</h1>
        <p class="auth-subheading">Sign in to your account and start ordering</p>
        @if ($errors->any())
        <div class="auth-error" style="margin-bottom:1rem;">
            {{ $errors->first() }}
        </div>
        @endif
        @if (session('status'))
        <div style="background:rgba(187,247,208,0.6); border:1px solid rgba(34,197,94,0.2); border-radius:10px; padding:10px 14px; font-family:'Bricolage Grotesque',sans-serif; font-size:0.83rem; color:#15803d; font-weight:500; margin-bottom:1rem;">
            {{ session('status') }}
        </div>
        @endif
        <form class="auth-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="auth-field">
                <label class="auth-label" for="email">Email Address</label>
                <div class="auth-input-wrap">
                    <svg class="auth-input-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25H4.5a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5H4.5a2.25 2.25 0 00-2.25 2.25m19.5 0l-9.75 6.75L2.25 6.75"/>
                    </svg>
                    <input id="email" name="email" type="email" class="auth-input"
                        placeholder="john@example.com"
                        value="{{ old('email') }}" autocomplete="email" required>
                </div>
            </div>
            <div class="auth-field">
                <label class="auth-label" for="password">Password</label>
                <div class="auth-input-wrap">
                    <svg class="auth-input-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                    </svg>
                    <input id="password" name="password" type="password" class="auth-input"
                        placeholder="Enter your password"
                        autocomplete="current-password" required
                        style="padding-right:44px;">
                    <button type="button" class="auth-pw-toggle" onclick="togglePassword('password', this)" aria-label="Toggle password">
                        <svg id="eye-login" width="17" height="17" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center;">
                <label class="auth-remember">
                    <input type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>
                @if (Route::has('password.request'))
                <div class="auth-forgot">
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                </div>
                @endif
            </div>
            <button type="submit" class="auth-btn">Sign In →</button>
        </form>
        <div class="auth-divider" style="margin-top:1.4rem;">
            <span>or continue with</span>
        </div>
        <div class="auth-social-row" style="margin-top:0.8rem;">
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
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                </svg>
                Facebook
            </a>
        </div>
        <p class="auth-footer-link">
            Don't have an account? <a href="{{ route('register') }}">Create one →</a>
        </p>
    </div>
</div>
@push('scripts')
    <script>
    function togglePassword(id, btn) {
        const input = document.getElementById(id);
        const isText = input.type === 'text';
        input.type = isText ? 'password' : 'text';
        btn.style.color = isText ? '#b0bcd4' : '#4F7EF7';
    }
    </script>
@endpush
@endsection
