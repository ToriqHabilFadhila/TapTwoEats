<style>
    .tte-footer {
        position: relative;
        margin-top: auto;
        overflow: hidden;
    }

    .tte-footer-wave {
        width: 100%;
        height: 60px;
        background: transparent;
        position: relative;
        overflow: hidden;
    }

    .tte-footer-wave::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: -5%;
        width: 110%;
        height: 80px;
        background: rgba(255, 255, 255, 0.55);
        backdrop-filter: blur(4px);
        border-radius: 50% 50% 0 0 / 30px 30px 0 0;
        border-top: 1px solid rgba(255, 255, 255, 0.88);
    }

    .tte-footer-body {
        background: rgba(255, 255, 255, 0.55);
        backdrop-filter: blur(28px) saturate(180%);
        -webkit-backdrop-filter: blur(28px) saturate(180%);
        border-top: 1px solid rgba(255, 255, 255, 0.88);
    }

    .tte-footer-main {
        max-width: 1300px;
        margin: 0 auto;
        padding: 3.5rem 1.5rem 2rem;
    }

    .tte-footer-grid {
        display: grid;
        grid-template-columns: 1.5fr 1fr 1fr 1fr;
        gap: 3rem;
        margin-bottom: 3rem;
    }

    @media (max-width: 1024px) {
        .tte-footer-grid {
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
    }

    @media (max-width: 600px) {
        .tte-footer-grid {
            grid-template-columns: 1fr;
            gap: 1.8rem;
        }
    }

    .tte-footer-brand {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .tte-footer-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        width: fit-content;
    }

    .tte-footer-logo-icon {
        width: 60px;
        height: 60px;
        background: transparent;
        border-radius: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
        padding: 3px;
    }

    .tte-footer-logo:hover .tte-footer-logo-icon {
        transform: rotate(-6deg) scale(1.06);
    }

    .tte-footer-logo-text {
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 1.2rem;
        font-weight: 800;
        line-height: 1;
        letter-spacing: -0.01em;
    }

    .tte-footer-desc {
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 0.88rem;
        color: #7d8fb0;
        line-height: 1.75;
        max-width: 280px;
    }

    .tte-footer-col-title {
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 0.78rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #4F7EF7;
        margin: 0 0 1rem;
    }

    .tte-footer-links {
        display: flex;
        flex-direction: column;
        gap: 4px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .tte-footer-links a {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 6px 10px;
        border-radius: 9px;
        font-family: 'Bricolage Grotesque', 'Segoe UI', sans-serif;
        font-size: 0.88rem;
        font-weight: 500;
        color: #4a5a7a;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .tte-footer-links a:hover {
        background: rgba(79, 126, 247, 0.07);
        color: #4F7EF7;
        padding-left: 14px;
    }

    .tte-footer-links a svg {
        flex-shrink: 0;
        color: #c5d0f5;
        transition: color 0.2s, transform 0.2s;
    }

    .tte-footer-links a:hover svg {
        color: #4F7EF7;
        transform: translateX(2px);
    }

    .tte-social-row {
        display: flex;
        flex-wrap: nowrap;
        gap: 7px;
        margin-top: 0.3rem;
    }

    .tte-social-btn {
        width: 38px;
        height: 38px;
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        border: 1.5px solid rgba(79, 126, 247, 0.18);
        border-radius: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.25s ease;
        color: #7d8fb0;
    }

    .tte-social-btn[title="Instagram"]:hover {
        background: linear-gradient(135deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
        border-color: transparent;
        color: #fff;
        transform: translateY(-3px) scale(1.08);
        box-shadow: 0 6px 18px rgba(220, 39, 67, 0.35);
    }

    .tte-social-btn[title="Facebook"]:hover {
        background: #1877F2;
        border-color: transparent;
        color: #fff;
        transform: translateY(-3px) scale(1.08);
        box-shadow: 0 6px 18px rgba(24, 119, 242, 0.35);
    }

    .tte-social-btn[title="Twitter / X"]:hover {
        background: #000;
        border-color: transparent;
        color: #fff;
        transform: translateY(-3px) scale(1.08);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    }

    .tte-social-btn[title="TikTok"]:hover {
        background: #010101;
        border-color: transparent;
        color: #fff;
        transform: translateY(-3px) scale(1.08);
        box-shadow: 0 6px 18px rgba(1, 1, 1, 0.3);
    }

    .tte-social-btn[title="WhatsApp"]:hover {
        background: #25D366;
        border-color: transparent;
        color: #fff;
        transform: translateY(-3px) scale(1.08);
        box-shadow: 0 6px 18px rgba(37, 211, 102, 0.35);
    }

    .tte-footer-divider {
        height: 1px;
        background: linear-gradient(to right, transparent, rgba(79, 126, 247, 0.15), transparent);
        margin: 0 0 1.8rem;
    }

    .tte-footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        padding-bottom: 0.5rem;
    }

    .tte-footer-copy {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.82rem;
        color: #9aa5c0;
    }

    .tte-footer-copy strong {
        color: #4F7EF7;
        font-weight: 700;
    }

    .tte-footer-bottom-links {
        display: flex;
        gap: 0;
        flex-wrap: wrap;
    }

    .tte-footer-bottom-links a {
        font-family: 'Bricolage Grotesque', sans-serif;
        font-size: 0.82rem;
        font-weight: 500;
        color: #9aa5c0;
        text-decoration: none;
        padding: 4px 12px;
        border-radius: 8px;
        transition: all 0.2s;
    }

    .tte-footer-bottom-links a:hover {
        background: rgba(79, 126, 247, 0.07);
        color: #4F7EF7;
    }

    .tte-footer-bottom-links a+a {
        border-left: 1px solid rgba(79, 126, 247, 0.12);
    }

    .tte-payment-row {
        display: flex;
        gap: 5px;
        align-items: center;
        flex-wrap: wrap;
    }

    .tte-pay-label {
        font-size: 0.70rem;
        font-weight: 700;
        color: #9aa5c0;
        font-family: 'Bricolage Grotesque', sans-serif;
        letter-spacing: .04em;
        text-transform: uppercase;
        margin-right: 2px;
    }

    .tte-payment-badge {
        padding: 3px 8px;
        background: rgba(255, 255, 255, 0.7);
        border: 1px solid rgba(79, 126, 247, 0.15);
        border-radius: 6px;
        display: flex;
        align-items: center;
    }

    .tte-payment-badge img {
        display: block;
        height: 16px;
        width: auto;
        object-fit: contain;
    }

    .tte-payment-badge[title="BCA"] {
        background: #005BAC;
        border-color: #005BAC;
    }

    .tte-footer-orb {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        z-index: 0;
    }

    .tte-footer-inner-wrap {
        position: relative;
        z-index: 1;
    }
</style>

<footer class="tte-footer">
    <div class="tte-footer-wave"></div>
    <div class="tte-footer-body"></div>
    <div class="tte-footer-orb" style="width:300px; height:300px; background:radial-gradient(circle,rgba(79,126,247,0.08) 0%,transparent 70%); top:-80px; left:-60px;"></div>
    <div class="tte-footer-orb" style="width:250px; height:250px; background:radial-gradient(circle,rgba(251,146,60,0.07) 0%,transparent 70%); bottom:-40px; right:5%;"></div>
    <div class="tte-footer-orb" style="width:200px; height:200px; background:radial-gradient(circle,rgba(34,211,238,0.08) 0%,transparent 70%); top:30%; right:30%;"></div>
    <div class="tte-footer-main tte-footer-inner-wrap">
        <div class="tte-footer-grid">
            <div class="tte-footer-brand">
                <a href="{{ route('home') }}" class="tte-footer-logo">
                    <div class="tte-footer-logo-icon">
                        <img src="{{ asset('images/TapTwoEats.png') }}" alt="TapTwoEats Logo" width="60" height="60" style="object-fit:contain;">
                    </div>
                    <span class="tte-footer-logo-text">
                        <span style="background:linear-gradient(135deg,#1e3a8a,#4F7EF7); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;">Tap</span><span style="background:linear-gradient(135deg,#22d3ee,#0891b2); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;">Two</span><span style="background:linear-gradient(135deg,#1e3a8a,#4F7EF7); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;">Eats</span>
                    </span>
                </a>
                <p class="tte-footer-desc">
                    Delivering joy, one meal at a time. Order from hundreds of restaurants in Malang and get it
                    delivered hot & fresh to your door.
                </p>
                <div>
                    <p style="font-family:'Bricolage Grotesque',sans-serif; font-size:0.74rem; font-weight:700; letter-spacing:.06em; text-transform:uppercase; color:#9aa5c0; margin:0 0 8px;">
                        Follow Us
                    </p>
                    <div class="tte-social-row">
                        <a href="#" class="tte-social-btn" title="Instagram">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <circle cx="12" cy="12" r="4" />
                                <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                            </svg>
                        </a>
                        <a href="#" class="tte-social-btn" title="Facebook">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </a>
                        <a href="#" class="tte-social-btn" title="Twitter / X">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="#" class="tte-social-btn" title="TikTok">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.18 8.18 0 0 0 4.78 1.52V6.75a4.85 4.85 0 0 1-1.01-.06z" />
                            </svg>
                        </a>
                        <a href="#" class="tte-social-btn" title="WhatsApp">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <p class="tte-footer-col-title">Explore</p>
                <ul class="tte-footer-links">
                    @foreach ([['Home', route('home')], ['All Menu', route('menu.all')], ['Popular Dishes', route('menu.popular')], ['New Arrivals', route('menu.new')], ['Special Deals', route('menu.deals')], ['Restaurants', route('restaurants')]] as [$label, $url])
                        <li>
                            <a href="{{ $url }}">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <p class="tte-footer-col-title">Company</p>
                <ul class="tte-footer-links">
                    @foreach ([['About Us', route('about')], ['Contact Us', route('contact')], ['Careers 🔥', '#'], ['Blog', '#'], ['Press Kit', '#'], ['Partner with Us', '#']] as [$label, $url])
                        <li>
                            <a href="{{ $url }}">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <p class="tte-footer-col-title">Help & Legal</p>
                <ul class="tte-footer-links">
                    @foreach ([['FAQ', '#'], ['Privacy Policy', '#'], ['Terms of Service', '#'], ['Refund Policy', '#']] as [$label, $url])
                        <li>
                            <a href="{{ $url }}">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div style="display:flex; gap:1px; margin-bottom:2.5rem; background:rgba(79,126,247,0.1); border-radius:16px; overflow:hidden;">
                <div style="flex:1; background:rgba(255,255,255,0.55); backdrop-filter:blur(12px); padding:1.1rem 1.2rem; text-align:center;">
                    <div style="font-size:1.5rem; font-weight:800; background:linear-gradient(135deg,#4F7EF7,#22D3EE); -webkit-background-clip:text; background-clip:text; color:transparent; line-height:1;">
                        1,000+
                    </div>
                    <div style="font-size:0.76rem; font-weight:600; color:#9aa5c0; margin-top:3px; font-family:'Bricolage Grotesque',sans-serif;">
                        Restaurants
                    </div>
                </div>
                <div style="flex:1; background:rgba(255,255,255,0.55); backdrop-filter:blur(12px); padding:1.1rem 1.2rem; text-align:center;">
                    <div style="font-size:1.5rem; font-weight:800; background:linear-gradient(135deg,#22D3EE,#0891b2); -webkit-background-clip:text; background-clip:text; color:transparent; line-height:1;">
                        50K+
                    </div>
                    <div style="font-size:0.76rem; font-weight:600; color:#9aa5c0; margin-top:3px; font-family:'Bricolage Grotesque',sans-serif;">
                        Happy Customers
                    </div>
                </div>
                <div style="flex:1; background:rgba(255,255,255,0.55); backdrop-filter:blur(12px); padding:1.1rem 1.2rem; text-align:center;">
                    <div style="font-size:1.5rem; font-weight:800; background:linear-gradient(135deg,#fb923c,#f97316); -webkit-background-clip:text; background-clip:text; color:transparent; line-height:1;">
                        100K+
                    </div>
                    <div style="font-size:0.76rem; font-weight:600; color:#9aa5c0; margin-top:3px; font-family:'Bricolage Grotesque',sans-serif;">
                        Deliveries Done
                    </div>
                </div>
                <div style="flex:1;background:rgba(255,255,255,0.55);backdrop-filter:blur(12px);padding:1.1rem 1.2rem;text-align:center;">
                    <div style="font-size:1.5rem; font-weight:800; background:linear-gradient(135deg,#a78bfa,#7c3aed); -webkit-background-clip:text; background-clip:text; color:transparent; line-height:1;">
                        4.9 ⭐
                    </div>
                    <div style="font-size:0.76rem; font-weight:600; color:#9aa5c0; margin-top:3px; font-family:'Bricolage Grotesque',sans-serif;">
                        Average Rating
                    </div>
                </div>
            </div>
            <div class="tte-footer-divider"></div>
            <div class="tte-footer-bottom">
                <p class="tte-footer-copy">
                    © {{ date('Y') }} <strong>TapTwoEats</strong>. Made with in Malang, Indonesia.
                </p>
                <div class="tte-payment-row">
                    <span class="tte-pay-label">Pay with:</span>
                    @foreach ([['Visa', 'VISA.png'], ['Mastercard', 'MasterCard.png'], ['BCA', 'BCA.svg', 'background:#005BAC; border-color:#005BAC;'], ['GoPay', 'GOPAY.png'], ['OVO', 'OVO.png'], ['DANA', 'DANA.png']] as [$name, $file])
                        <span class="tte-payment-badge" title="{{ $name }}">
                            <img src="{{ asset('images/payments/' . $file) }}" height="16" alt="{{ $name }}">
                        </span>
                    @endforeach
                </div>
                <div class="tte-footer-bottom-links">
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                    <a href="#">Cookies</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>
