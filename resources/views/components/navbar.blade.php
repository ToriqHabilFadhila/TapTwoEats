<style>
    .tte-nav {
        position: sticky;
        top: 0;
        z-index: 200;
        background: rgba(255, 255, 255, 0.72);
        backdrop-filter: blur(28px) saturate(200%);
        -webkit-backdrop-filter: blur(28px) saturate(200%);
        border-bottom: 1px solid rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 24px rgba(79, 126, 247, 0.08);
    }

    .tte-nav-inner {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 66px;
        gap: 1.5rem;
    }

    .tte-logo {
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        flex-shrink: 0;
    }

    .tte-logo-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #4F7EF7, #22D3EE);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        box-shadow: 0 4px 14px rgba(79, 126, 247, 0.3);
        transition: transform 0.3s ease;
    }

    .tte-logo:hover .tte-logo-icon {
        transform: rotate(-6deg) scale(1.08);
    }

    .tte-logo-text {
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 1.15rem;
        font-weight: 800;
        line-height: 1;
        letter-spacing: -0.01em;
    }

    .tte-logo-tap,
    .tte-logo-eats {
        background: linear-gradient(135deg, #1e3a8a, #4F7EF7);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .tte-logo-two {
        background: linear-gradient(135deg, #22d3ee, #0891b2);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .tte-nav-links {
        display: flex;
        align-items: center;
        gap: 0.2rem;
        flex: 1;
        justify-content: center;
    }

    .tte-nav-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 14px;
        border-radius: 10px;
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 0.88rem;
        font-weight: 600;
        color: #3d4f76;
        text-decoration: none;
        transition: all 0.2s ease;
        white-space: nowrap;
    }

    .tte-nav-link:hover {
        background: rgba(79, 126, 247, 0.08);
        color: #4F7EF7;
    }

    .tte-nav-link.active {
        background: rgba(79, 126, 247, 0.1);
        color: #4F7EF7;
    }

    .tte-nav-link svg {
        width: 15px;
        height: 15px;
        opacity: 0.75;
        flex-shrink: 0;
    }

    .tte-dropdown {
        position: relative;
    }

    .tte-dropdown-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 14px;
        border-radius: 10px;
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 0.88rem;
        font-weight: 600;
        color: #3d4f76;
        background: transparent;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
        white-space: nowrap;
    }

    .tte-dropdown-btn:hover,
    .tte-dropdown-btn.active {
        background: rgba(79, 126, 247, 0.08);
        color: #4F7EF7;
    }

    .tte-dropdown-btn svg {
        width: 15px;
        height: 15px;
        opacity: 0.75;
        flex-shrink: 0;
    }

    .tte-dropdown-chevron {
        width: 12px !important;
        height: 12px !important;
        transition: transform 0.25s ease;
        opacity: 0.6 !important;
    }

    .tte-dropdown:hover .tte-dropdown-chevron {
        transform: rotate(180deg);
    }

    .tte-dropdown-menu {
        position: absolute;
        top: calc(100% + 10px);
        left: 0;
        min-width: 200px;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(24px) saturate(180%);
        -webkit-backdrop-filter: blur(24px) saturate(180%);
        border: 1px solid rgba(255, 255, 255, 0.95);
        border-radius: 16px;
        box-shadow: 0 12px 40px rgba(79, 126, 247, 0.15);
        padding: 8px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(8px);
        transition: all 0.25s cubic-bezier(0.23, 1, 0.32, 1);
        z-index: 300;
    }

    .tte-dropdown:hover .tte-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .tte-dropdown-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 9px 14px;
        border-radius: 10px;
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 0.86rem;
        font-weight: 600;
        color: #3d4f76;
        text-decoration: none;
        transition: all 0.18s ease;
    }

    .tte-dropdown-item:hover {
        background: rgba(79, 126, 247, 0.08);
        color: #4F7EF7;
    }

    .tte-dropdown-item .item-emoji {
        font-size: 1rem;
        width: 26px;
        height: 26px;
        background: rgba(79, 126, 247, 0.08);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .tte-nav-right {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-shrink: 0;
    }

    .tte-search-wrap {
        position: relative;
    }

    .tte-search-input {
        background: rgba(239, 243, 255, 0.8);
        border: 1.5px solid rgba(79, 126, 247, 0.15);
        border-radius: 99px;
        padding: 8px 14px 8px 36px;
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 0.84rem;
        color: #18243e;
        width: 155px;
        outline: none;
        transition: all 0.3s ease;
    }

    .tte-search-input::placeholder {
        color: #9aa5c0;
    }

    .tte-search-input:focus {
        width: 200px;
        background: rgba(255, 255, 255, 0.9);
        border-color: #4F7EF7;
        box-shadow: 0 0 0 3px rgba(79, 126, 247, 0.1);
    }

    .tte-search-icon {
        position: absolute;
        left: 11px;
        top: 50%;
        transform: translateY(-50%);
        width: 15px;
        height: 15px;
        color: #9aa5c0;
        pointer-events: none;
    }

    .tte-cart-btn {
        position: relative;
        width: 40px;
        height: 40px;
        background: rgba(79, 126, 247, 0.08);
        border: 1.5px solid rgba(79, 126, 247, 0.18);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.25s ease;
        text-decoration: none;
        color: #4F7EF7;
    }

    .tte-cart-btn:hover {
        background: rgba(79, 126, 247, 0.14);
        border-color: #4F7EF7;
    }

    .tte-cart-btn svg {
        width: 18px;
        height: 18px;
        transition: transform 0.25s ease;
    }

    .tte-cart-btn:hover svg {
        transform: scale(1.06);
    }

    .tte-cart-badge {
        position: absolute;
        top: -6px;
        right: -6px;
        background: linear-gradient(135deg, #ef4444, #f87171);
        color: white;
        border-radius: 99px;
        width: 18px;
        height: 18px;
        font-size: 0.65rem;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid rgba(255, 255, 255, 0.9);
        font-family: 'Bricolage Grotesque', sans-serif;
    }

    .tte-cart-badge {
        line-height: 1;
    }

    .tte-cart-badge span {
        transform: translateY(0.5px);
        display: block;
    }

    .tte-login-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 9px 20px;
        background: linear-gradient(135deg, #4F7EF7, #22D3EE);
        color: white;
        border: none;
        border-radius: 12px;
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-weight: 700;
        font-size: 0.86rem;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.25s ease;
        box-shadow: 0 4px 14px rgba(79, 126, 247, 0.3);
        white-space: nowrap;
    }

    .tte-login-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(79, 126, 247, 0.45);
    }

    .tte-hamburger {
        display: none;
        width: 40px;
        height: 40px;
        align-items: center;
        justify-content: center;
        background: rgba(79, 126, 247, 0.08);
        border: 1.5px solid rgba(79, 126, 247, 0.18);
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.2s;
        flex-shrink: 0;
    }

    .tte-hamburger:hover {
        background: rgba(79, 126, 247, 0.14);
    }

    .tte-hamburger svg {
        width: 20px;
        height: 20px;
        color: #4F7EF7;
    }

    .tte-mobile-menu {
        display: none;
        background: rgba(255, 255, 255, 0.88);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border-top: 1px solid rgba(255, 255, 255, 0.9);
        padding: 1rem 1.5rem 1.5rem;
    }

    .tte-mobile-menu.open {
        display: block;
    }

    .tte-mobile-link {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 11px 14px;
        border-radius: 12px;
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 0.92rem;
        font-weight: 600;
        color: #3d4f76;
        text-decoration: none;
        transition: all 0.2s ease;
        margin-bottom: 4px;
    }

    .tte-mobile-link:hover,
    .tte-mobile-link.active {
        background: rgba(79, 126, 247, 0.08);
        color: #4F7EF7;
    }

    .tte-mobile-link svg {
        width: 17px;
        height: 17px;
        flex-shrink: 0;
        opacity: 0.7;
    }

    .tte-mobile-divider {
        height: 1px;
        background: rgba(79, 126, 247, 0.1);
        margin: 8px 0;
    }

    .tte-mobile-actions {
        display: flex;
        gap: 8px;
        margin-top: 12px;
    }

    @media (max-width: 900px) {
        .tte-nav-links {
            display: none;
        }
        .tte-search-wrap {
            display: none;
        }
        .tte-hamburger {
            display: flex;
        }
    }

    @media (max-width: 600px) {
        .tte-nav-right .tte-login-btn {
            display: none;
        }
    }
</style>

<nav class="tte-nav">
    <div class="tte-nav-inner">
        <a href="{{ route('home') }}" class="tte-logo">
            <img src="{{ asset('images/TapTwoEats.png') }}" alt="TapTwoEats Logo" width="60" height="60" style="object-fit:contain;">
            <span class="tte-logo-text">
                <span class="tte-logo-tap">Tap</span><span class="tte-logo-two">Two</span><span class="tte-logo-eats">Eats</span>
            </span>
        </a>
        <nav class="tte-nav-links">
            <a href="{{ route('home') }}" class="tte-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Home
            </a>
            <a href="{{ route('restaurants') }}" class="tte-nav-link {{ request()->routeIs('restaurants') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                </svg>
                Restaurants
            </a>
            <a href="{{ route('menu.all') }}" class="tte-nav-link {{ request()->routeIs('menu.all') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>
                </svg>
                Menu
            </a>
            <a href="{{ route('about') }}" class="tte-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                About
            </a>
            <a href="{{ route('contact') }}" class="tte-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Contact
            </a>
        </nav>
        <div class="tte-nav-right">
            <div class="tte-search-wrap">
                <svg class="tte-search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search food..." class="tte-search-input">
            </div>
            <a href="{{ route('cart') }}" class="tte-cart-btn">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="tte-cart-badge" id="cart-badge">3</span>
            </a>
            <a href="{{ route('login') }}" class="tte-login-btn">
                <svg style="width:14px; height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Login
            </a>
            <button class="tte-hamburger" id="tte-hamburger-btn" aria-label="Toggle menu">
                <svg id="tte-hamburger-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
    <div class="tte-mobile-menu" id="tte-mobile-menu">
        <a href="{{ route('home') }}" class="tte-mobile-link {{ request()->routeIs('home') ? 'active' : '' }}">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Home
        </a>
        <a href="{{ route('restaurants') }}" class="tte-mobile-link {{ request()->routeIs('restaurants') ? 'active' : '' }}">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            Restaurants
        </a>
        <a href="{{ route('menu.all') }}" class="tte-nav-link {{ request()->routeIs('menu.all') ? 'active' : '' }}">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>
            </svg>
            Menu
        </a>
        <a href="{{ route('about') }}" class="tte-mobile-link {{ request()->routeIs('about') ? 'active' : '' }}">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            About
        </a>
        <a href="{{ route('contact') }}" class="tte-mobile-link {{ request()->routeIs('contact') ? 'active' : '' }}">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            Contact
        </a>
        <div class="tte-mobile-divider"></div>
        <div style="position:relative; margin-bottom:10px;">
            <svg style="position:absolute; left:12px; top:50%; transform:translateY(-50%); width:15px; height:15px; color:#9aa5c0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search food..." style="width:100%;background:rgba(239,243,255,0.8);border:1.5px solid rgba(79,126,247,0.15);border-radius:12px;padding:10px 14px 10px 36px;font-family:'Bricolage Grotesque',sans-serif;font-size:0.88rem;color:#18243e;outline:none;">
        </div>
        <div class="tte-mobile-actions">
            <a href="{{ route('cart') }}" style="flex:1; display:flex; align-items:center; justify-content:center; gap:8px; padding:11px; background:rgba(79,126,247,0.08); border:1.5px solid rgba(79,126,247,0.18); border-radius:12px; font-weight:700; font-size:0.88rem; color:#4F7EF7; text-decoration:none;">
                <svg style="width:16px; height:16px; display:block;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4 M7 13L5.4 5 M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17 m0 0a2 2 0 100 4 2 2 0 000-4 zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span style="display:inline-flex; align-items:center; gap:6px;">
                    Cart
                    <span style="background:linear-gradient(135deg,#ef4444,#f87171); color:white; border-radius:999px; min-width:18px; height:18px; padding:0 6px; display:inline-flex; align-items:center; justify-content:center; font-size:0.72rem; font-weight:800; line-height:1;">
                        <span style="transform:translateY(0.5px); display:block;">
                            3
                        </span>
                    </span>
                </span>
            </a>
            <a href="#" style="flex:1; display:flex; align-items:center; justify-content:center; gap:6px; padding:11px; line-height:1; background:linear-gradient(135deg,#4F7EF7,#22D3EE); border-radius:12px; font-weight:700; font-size:0.88rem; color:white; text-decoration:none; box-shadow:0 4px 14px rgba(79,126,247,0.3);">
                <svg style="width:14px; height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Login
            </a>
        </div>
    </div>
</nav>
<script>
    (function() {
        const btn = document.getElementById('tte-hamburger-btn');
        const menu = document.getElementById('tte-mobile-menu');
        const icon = document.getElementById('tte-hamburger-icon');
        if (!btn) return;
        btn.addEventListener('click', function() {
            const isOpen = menu.classList.toggle('open');
            icon.querySelector('path').setAttribute('d',
                isOpen ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'
            );
            btn.style.background = isOpen ? 'rgba(79,126,247,0.14)' : '';
        });
    })();
</script>
