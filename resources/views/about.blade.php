@extends('layouts.app')
@section('title', 'About Us')
@section('content')

<style>
    .about-stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-bottom: 2.5rem;
    }

    .about-values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .about-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.9);
        border-radius: 99px;
        padding: 8px 20px;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 16px rgba(79, 126, 247, 0.1);
    }

    .about-story-card {
        padding: 2.5rem;
        margin-bottom: 1.5rem;
        border-radius: 24px;
    }

    .about-cta-card {
        padding: 2.5rem;
        border-radius: 24px;
    }

    @media (max-width: 768px) {
        .about-wrapper {
            padding: 3.5rem 0 5rem !important;
        }
        .about-stats-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 0.75rem;
        }
        .about-stat-num {
            font-size: 1.6rem !important;
        }
        .about-stat-icon {
            width: 42px !important;
            height: 42px !important;
            margin-bottom: 0.75rem !important;
        }
        .about-story-card,
        .about-cta-card {
            padding: 1.75rem !important;
        }
        .about-blob-right,
        .about-blob-left {
            display: none;
        }
    }

    @media (max-width: 540px) {
        .about-stats-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 0.5rem;
        }
        .about-stat-card {
            padding: 1.25rem 0.5rem !important;
        }
        .about-stat-num {
            font-size: 1.3rem !important;
        }
        .about-stat-label {
            font-size: 0.72rem !important;
        }
        .about-stat-icon {
            width: 36px !important;
            height: 36px !important;
            border-radius: 10px !important;
        }
        .about-values-grid {
            grid-template-columns: 1fr 1fr;
        }
        .about-story-card,
        .about-cta-card {
            padding: 1.25rem !important;
            border-radius: 18px !important;
        }
        .about-badge {
            padding: 6px 14px;
        }
        .about-badge span {
            font-size: 0.7rem !important;
        }
    }

    @media (max-width: 380px) {
        .about-values-grid {
            grid-template-columns: 1fr;
        }
        .about-stats-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="about-wrapper" style="min-height:100vh; padding:5rem 0 7rem; position:relative;">
    <div class="about-blob-right" style="position:fixed; top:15%; right:-80px; width:360px; height:360px; background:radial-gradient(circle,rgba(251,146,60,0.15) 0%,transparent 70%); border-radius:50%; pointer-events:none; z-index:0;"></div>
    <div class="about-blob-left" style="position:fixed; bottom:20%; left:-100px; width:400px; height:400px; background:radial-gradient(circle,rgba(79,126,247,0.12) 0%,transparent 70%); border-radius:50%; pointer-events:none; z-index:0;"></div>
    <div style="max-width:900px; margin:0 auto; padding:0 1.5rem; position:relative; z-index:1;">
        <div class="anim-fade-up" style="text-align:center; margin-bottom:4rem;">
            <div class="about-badge">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4F7EF7" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="display:block; flex-shrink:0; transform:translateY(-0.5px);">
                    <path d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                </svg>
                <span style="font-size:0.78rem; font-weight:700; color:#4F7EF7; letter-spacing:0.06em; text-transform:uppercase; line-height:1;">
                    Est. 2024 · Malang, Indonesia
                </span>
            </div>
            <h1 style="font-family:'Lora',serif; font-size:clamp(2rem,6vw,4rem); font-weight:600; color:#18243e; margin:0 0 1.2rem; letter-spacing:-0.02em;">
                About <span class="text-grad-blue">TapTwo</span><span class="text-grad-warm">Eats</span>
            </h1>
            <p style="font-size:1.05rem; color:#7d8fb0; max-width:500px; margin:0 auto; line-height:1.75;">
                Your trusted food delivery partner, connecting passionate restaurants with hungry customers.
            </p>
        </div>
        <div class="anim-fade-up delay-1 about-stats-grid">
            @foreach ([
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />',
                    'num' => '1000+',
                    'label' => 'Restaurants',
                    'bg' => 'rgba(79,126,247,0.1)',
                    'color' => '#4F7EF7',
                ],
                [
                    'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/>',
                    'num' => '50K+',
                    'label' => 'Happy Customers',
                    'bg' => 'rgba(34,211,238,0.1)',
                    'color' => '#0891b2',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />',
                    'num' => '100K+',
                    'label' => 'Deliveries',
                    'bg' => 'rgba(251,146,60,0.1)',
                    'color' => '#ea580c',
                ],
            ] as $item)
                <div class="glass-card about-stat-card" style="padding:2rem 1rem; text-align:center;">
                    <div class="about-stat-icon" style="width:52px; height:52px; background:{{ $item['bg'] }}; border-radius:16px; display:flex; align-items:center; justify-content:center; margin:0 auto 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="{{ $item['color'] }}" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="display:block;">
                            {!! $item['icon'] !!}
                        </svg>
                    </div>
                    <div class="about-stat-num" style="font-size:2.2rem; font-weight:800; color:{{ $item['color'] }}; line-height:1; margin-bottom:0.4rem;">
                        {{ $item['num'] }}
                    </div>
                    <div class="about-stat-label" style="font-size:0.85rem; font-weight:600; color:#7d8fb0;">
                        {{ $item['label'] }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="anim-fade-up delay-2 glass-card about-story-card">
            <h2 style="font-weight:700; font-size:1.3rem; color:#18243e; margin:0 0 1.2rem; display:flex; align-items:center; gap:10px;">
                <span style="width:36px; height:36px; background:linear-gradient(135deg,#4F7EF7,#22D3EE); border-radius:10px; display:inline-flex; align-items:center; justify-content:center; flex-shrink:0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="display:block;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                </span>
                Our Story
            </h2>
            <p style="color:#4a5a7a; line-height:1.8; font-size:0.98rem; margin:0 0 1rem;">
                TapTwoEats was founded in 2024 with a simple mission: to connect food lovers with their favorite
                restaurants through a seamless digital experience. We believe great food should be accessible to
                everyone, everywhere.
            </p>
            <p style="color:#4a5a7a; line-height:1.8; font-size:0.98rem; margin:0;">
                Today, we partner with thousands of restaurants and serve millions of happy customers every month,
                delivering not just food, but moments of joy right to your doorstep.
            </p>
        </div>
        <div class="anim-fade-up delay-3 about-values-grid">
            @foreach ([
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />',
                    'title' => 'Lightning Fast',
                    'desc' => 'Average delivery under 30 minutes, guaranteed.',
                    'bg' => 'rgba(250,204,21,0.1)',
                    'color' => '#facc15',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />',
                    'title' => 'Safe & Secure',
                    'desc' => 'Your data and payments are always protected.',
                    'bg' => 'rgba(34,197,94,0.1)',
                    'color' => '#22c55e',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />',
                    'title' => 'Quality First',
                    'desc' => 'Only verified restaurants with top-rated menus.',
                    'bg' => 'rgba(79,126,247,0.1)',
                    'color' => '#4F7EF7',
                ],
                [
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />',
                    'title' => 'Community',
                    'desc' => 'Supporting local restaurants and drivers every day.',
                    'bg' => 'rgba(251,146,60,0.1)',
                    'color' => '#fb923c',
                ],
            ] as $item)
                <div class="glass-card" style="padding:1.75rem 1.4rem; border-radius:20px;">
                    <div style="width:46px; height:46px; background:{{ $item['bg'] }}; border-radius:14px; display:flex; align-items:center; justify-content:center; margin-bottom:1rem; flex-shrink:0;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="{{ $item['color'] }}" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="display:block;">
                            {!! $item['icon'] !!}
                        </svg>
                    </div>
                    <h3 style="font-weight:700; font-size:0.98rem; color:#18243e; margin:0 0 0.5rem;">
                        {{ $item['title'] }}
                    </h3>
                    <p style="font-size:0.84rem; color:#7d8fb0; line-height:1.6; margin:0;">
                        {{ $item['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
        <div class="anim-fade-up delay-4 glass-card about-cta-card" style="text-align:center; background:linear-gradient(135deg,rgba(79,126,247,0.08),rgba(34,211,238,0.06));">
            <div style="width:56px; height:56px; margin:0 auto 1rem; background:linear-gradient(135deg,#4F7EF7,#22D3EE); border-radius:16px; display:flex; align-items:center; justify-content:center;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="display:block;">
                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                    <path d="M7 2v20" />
                    <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                </svg>
            </div>
            <h3 style="font-family:'Lora',serif; font-size:1.5rem; font-weight:600; color:#18243e; margin:0 0 0.8rem;">
                Ready to Order?
            </h3>
            <p style="color:#7d8fb0; font-size:0.95rem; margin:0 0 1.5rem; line-height:1.7;">
                Join thousands of happy customers and order your favorite food today!
            </p>
            <a href="{{ route('menu.all') }}" class="btn-primary" style="text-decoration:none; display:inline-flex; align-items:center; gap:8px;">
                Browse Menu
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="display:block;">
                    <path d="M5 12h14" />
                    <path d="M13 5l6 7-6 7" />
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection
