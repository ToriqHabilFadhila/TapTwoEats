@extends('layouts.app')
@section('title', 'Our Restaurants')
@section('content')

<style>
    .resto-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 1.25rem;
    }

    .resto-stat-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-bottom: 2.5rem;
    }

    .resto-filter-bar {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .resto-card {
        border-radius: 20px;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .resto-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(79, 126, 247, 0.15);
    }

    .resto-pill-bar {
        display: flex;
        flex-wrap: wrap;
        gap: 0.6rem;
        margin-bottom: 2rem;
    }

    @media (max-width: 768px) {
        .resto-stat-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 0.65rem;
        }
        .resto-stat-num {
            font-size: 1.5rem !important;
        }
        .resto-stat-icon {
            width: 38px !important;
            height: 38px !important;
        }
        .resto-stat-card {
            padding: 1.1rem 0.5rem !important;
        }
        .resto-filter-bar {
            flex-direction: column;
        }
        .resto-filter-bar>* {
            width: 100%;
            box-sizing: border-box;
        }
        .resto-blob {
            display: none;
        }
        .resto-wrapper {
            padding: 3rem 0 5rem !important;
        }
    }

    @media (max-width: 520px) {
        .resto-grid {
            grid-template-columns: 1fr;
        }
        .resto-stat-num {
            font-size: 1.2rem !important;
        }
        .resto-stat-label {
            font-size: 0.7rem !important;
        }
    }
</style>

<div class="resto-wrapper" style="min-height:100vh; padding:2.5rem 0 6rem; position:relative;">
    <div class="resto-blob" style="position:fixed; top:8%; right:-80px; width:360px; height:360px; background:radial-gradient(circle,rgba(79,126,247,0.13) 0%,transparent 70%); border-radius:50%; pointer-events:none; z-index:0;"></div>
    <div class="resto-blob" style="position:fixed; bottom:10%; left:-80px; width:320px; height:320px; background:radial-gradient(circle,rgba(34,211,238,0.12) 0%,transparent 70%); border-radius:50%; pointer-events:none; z-index:0;"></div>
    <div style="max-width:1200px; margin:0 auto; padding:0 1.5rem; position:relative; z-index:1;">
        <div class="anim-fade-up" style="display:flex; align-items:center; gap:8px; margin-bottom:1.5rem; font-size:0.85rem; color:#7d8fb0;">
            <a href="{{ route('home') }}" style="color:#4F7EF7; text-decoration:none; font-weight:600;">Home</a>
            <span style="color:#c5cfe8;">›</span>
            <span style="color:#18243e; font-weight:600;">Our Restaurants</span>
        </div>
        <div class="anim-fade-up delay-1" style="margin-bottom:2rem;">
            <p style="font-size:0.78rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:#4F7EF7; margin:0 0 6px;">
                TapTwoEats
            </p>
            <h1 style="font-family:'Lora',serif; font-size:clamp(2rem,4vw,3rem); font-weight:600; color:#18243e; margin:0 0 0.5rem;">
                Our <span class="text-grad-blue">Restaurants</span>
            </h1>
            <p style="color:#7d8fb0; font-size:0.95rem; margin:0;">
                Temukan cabang TapTwoEats terdekat di kotamu — kualitas terjamin di setiap lokasi.
            </p>
        </div>
        <div class="anim-fade-up delay-2 resto-stat-grid">
            @foreach ([
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z"/>', 'num' => '12', 'label' => 'Total Cabang', 'bg' => 'rgba(79,126,247,0.1)', 'color' => '#4F7EF7'],
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>', 'num' => '5', 'label' => 'Kota', 'bg' => 'rgba(34,211,238,0.1)', 'color' => '#0891b2'],
                ['icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"/>', 'num' => '4.8', 'label' => 'Avg Rating', 'bg' => 'rgba(251,146,60,0.1)', 'color' => '#ea580c'],
            ] as $s)
                <div class="glass-card resto-stat-card" style="padding:1.5rem 1rem; text-align:center;">
                    <div class="resto-stat-icon" style="width:46px; height:46px; background:{{ $s['bg'] }}; border-radius:14px; display:flex; align-items:center; justify-content:center; margin:0 auto 0.75rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="{{ $s['color'] }}" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            {!! $s['icon'] !!}
                        </svg>
                    </div>
                    <div class="resto-stat-num" style="font-size:2rem; font-weight:800; color:{{ $s['color'] }}; line-height:1; margin-bottom:0.3rem;">
                        {{ $s['num'] }}
                    </div>
                    <div class="resto-stat-label" style="font-size:0.82rem; font-weight:600; color:#7d8fb0;">
                        {{ $s['label'] }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="anim-fade-up delay-3 resto-pill-bar">
            @foreach (['Semua Kota', 'Malang', 'Surabaya', 'Jakarta', 'Bandung', 'Yogyakarta'] as $i => $city)
                <button onclick="filterCity(this, '{{ $city }}')" style="padding:9px 20px; border-radius:99px; font-weight:600; font-size:0.86rem; cursor:pointer; transition:all 0.2s; border:1.5px solid {{ $i === 0 ? '#4F7EF7' : 'rgba(79,126,247,0.18)' }}; background:{{ $i === 0 ? 'linear-gradient(135deg,#4F7EF7,#22D3EE)' : 'rgba(255,255,255,0.65)' }}; color:{{ $i === 0 ? '#fff' : '#3d4f76' }}; backdrop-filter:blur(12px);">
                    {{ $city }}
                </button>
            @endforeach
        </div>
        <div class="anim-fade-up delay-3 resto-filter-bar">
            <div style="flex:1; min-width:220px; position:relative;">
                <svg style="position:absolute; left:14px; top:50%; transform:translateY(-50%); width:18px; height:18px; color:#7d8fb0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Cari nama atau lokasi cabang..." class="input-glass" style="padding-left:44px; width:100%; box-sizing:border-box;" oninput="searchResto(this.value)">
            </div>
            <select class="input-glass" style="min-width:180px; cursor:pointer; box-sizing:border-box;" onchange="sortResto(this.value)">
                <option value="rating">Sort: Rating Tertinggi</option>
                <option value="name">Sort: Nama A–Z</option>
                <option value="newest">Sort: Terbaru</option>
            </select>
        </div>
        @php
            $branches = [
                [
                    'name' => 'TapTwoEats Malang Kota',
                    'city' => 'Malang',
                    'address' => 'Jl. Basuki Rahmat No. 12, Klojen',
                    'hours' => '08.00 – 22.00',
                    'rating' => 4.9,
                    'reviews' => 312,
                    'status' => 'open',
                    'tag' => 'Pusat',
                    'tagColor' => '#4F7EF7',
                    'gradient' => 'linear-gradient(135deg,#dbeafe,#93c5fd)',
                    'emoji' => '🏙️',
                ],
                [
                    'name' => 'TapTwoEats Malang Soekarno',
                    'city' => 'Malang',
                    'address' => 'Jl. S. Hatta No. 5, Lowokwaru',
                    'hours' => '09.00 – 21.00',
                    'rating' => 4.7,
                    'reviews' => 198,
                    'status' => 'open',
                    'tag' => null,
                    'tagColor' => null,
                    'gradient' => 'linear-gradient(135deg,#e0f2fe,#7dd3fc)',
                    'emoji' => '🛵',
                ],
                [
                    'name' => 'TapTwoEats Surabaya Gubeng',
                    'city' => 'Surabaya',
                    'address' => 'Jl. Raya Gubeng No. 34, Gubeng',
                    'hours' => '08.00 – 23.00',
                    'rating' => 4.8,
                    'reviews' => 427,
                    'status' => 'open',
                    'tag' => 'Terlaris',
                    'tagColor' => '#f59e0b',
                    'gradient' => 'linear-gradient(135deg,#fef9c3,#fde047)',
                    'emoji' => '🌆',
                ],
                [
                    'name' => 'TapTwoEats Surabaya Darmo',
                    'city' => 'Surabaya',
                    'address' => 'Jl. Darmo No. 88, Wonokromo',
                    'hours' => '10.00 – 22.00',
                    'rating' => 4.6,
                    'reviews' => 215,
                    'status' => 'open',
                    'tag' => null,
                    'tagColor' => null,
                    'gradient' => 'linear-gradient(135deg,#fef3c7,#fb923c)',
                    'emoji' => '🍽️',
                ],
                [
                    'name' => 'TapTwoEats Jakarta Selatan',
                    'city' => 'Jakarta',
                    'address' => 'Jl. Kemang Raya No. 21, Kemang',
                    'hours' => '09.00 – 23.00',
                    'rating' => 4.9,
                    'reviews' => 601,
                    'status' => 'open',
                    'tag' => 'Favorit',
                    'tagColor' => '#dc2626',
                    'gradient' => 'linear-gradient(135deg,#fecaca,#f87171)',
                    'emoji' => '🏬',
                ],
                [
                    'name' => 'TapTwoEats Jakarta Pusat',
                    'city' => 'Jakarta',
                    'address' => 'Jl. M.H. Thamrin No. 3, Gambir',
                    'hours' => '08.00 – 22.00',
                    'rating' => 4.7,
                    'reviews' => 389,
                    'status' => 'open',
                    'tag' => null,
                    'tagColor' => null,
                    'gradient' => 'linear-gradient(135deg,#fee2e2,#fca5a5)',
                    'emoji' => '🏢',
                ],
                [
                    'name' => 'TapTwoEats Jakarta Utara',
                    'city' => 'Jakarta',
                    'address' => 'Jl. Pluit Raya No. 9, Penjaringan',
                    'hours' => '10.00 – 22.00',
                    'rating' => 4.5,
                    'reviews' => 174,
                    'status' => 'closed',
                    'tag' => 'Baru',
                    'tagColor' => '#059669',
                    'gradient' => 'linear-gradient(135deg,#dcfce7,#86efac)',
                    'emoji' => '🌊',
                ],
                [
                    'name' => 'TapTwoEats Bandung Dago',
                    'city' => 'Bandung',
                    'address' => 'Jl. Ir. H. Juanda No. 77, Coblong',
                    'hours' => '09.00 – 21.00',
                    'rating' => 4.8,
                    'reviews' => 293,
                    'status' => 'open',
                    'tag' => null,
                    'tagColor' => null,
                    'gradient' => 'linear-gradient(135deg,#d8b4fe,#a78bfa)',
                    'emoji' => '🌿',
                ],
                [
                    'name' => 'TapTwoEats Bandung Buah Batu',
                    'city' => 'Bandung',
                    'address' => 'Jl. Buah Batu No. 55, Batununggal',
                    'hours' => '08.00 – 22.00',
                    'rating' => 4.6,
                    'reviews' => 156,
                    'status' => 'open',
                    'tag' => null,
                    'tagColor' => null,
                    'gradient' => 'linear-gradient(135deg,#ede9fe,#c4b5fd)',
                    'emoji' => '🏡',
                ],
                [
                    'name' => 'TapTwoEats Yogya Malioboro',
                    'city' => 'Yogyakarta',
                    'address' => 'Jl. Malioboro No. 10, Gedongtengen',
                    'hours' => '08.00 – 23.00',
                    'rating' => 4.9,
                    'reviews' => 512,
                    'status' => 'open',
                    'tag' => 'Ikonik',
                    'tagColor' => '#7c3aed',
                    'gradient' => 'linear-gradient(135deg,#a5f3fc,#22d3ee)',
                    'emoji' => '🎎',
                ],
                [
                    'name' => 'TapTwoEats Yogya Sleman',
                    'city' => 'Yogyakarta',
                    'address' => 'Jl. Kaliurang KM 7, Sleman',
                    'hours' => '09.00 – 21.00',
                    'rating' => 4.7,
                    'reviews' => 234,
                    'status' => 'open',
                    'tag' => null,
                    'tagColor' => null,
                    'gradient' => 'linear-gradient(135deg,#cffafe,#67e8f9)',
                    'emoji' => '🌄',
                ],
                [
                    'name' => 'TapTwoEats Yogya Bantul',
                    'city' => 'Yogyakarta',
                    'address' => 'Jl. Parangtritis No. 44, Bantul',
                    'hours' => '10.00 – 21.00',
                    'rating' => 4.5,
                    'reviews' => 118,
                    'status' => 'closed',
                    'tag' => 'Baru',
                    'tagColor' => '#059669',
                    'gradient' => 'linear-gradient(135deg,#bbf7d0,#4ade80)',
                    'emoji' => '🌾',
                ],
            ];
        @endphp
        <div class="anim-fade-up delay-4 resto-grid" id="restoGrid">
            @foreach ($branches as $b)
                <div class="glass-card resto-card" data-city="{{ $b['city'] }}" data-name="{{ strtolower($b['name']) }}" data-address="{{ strtolower($b['address']) }}">
                    <div style="height:140px; background:{{ $b['gradient'] }}; position:relative; overflow:hidden;">
                        <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center; font-size:3.5rem;">
                            {{ $b['emoji'] }}
                        </div>
                        <div style="position:absolute; top:10px; left:10px; background:{{ $b['status'] === 'open' ? 'rgba(5,150,105,0.9)' : 'rgba(239,68,68,0.9)' }}; backdrop-filter:blur(8px); color:white; border-radius:99px; padding:4px 12px; font-size:0.72rem; font-weight:700; display:flex; align-items:center; gap:5px;">
                            <span style="width:6px; height:6px; border-radius:50%; background:white; display:inline-block; {{ $b['status'] === 'open' ? 'animation:pulse-dot 1.5s infinite;' : '' }}"></span>
                            {{ $b['status'] === 'open' ? 'Buka' : 'Tutup' }}
                        </div>
                        @if ($b['tag'])
                            <div style="position:absolute; top:10px; right:10px; background:{{ $b['tagColor'] }}; color:white; border-radius:99px; padding:4px 10px; font-size:0.72rem; font-weight:700;">
                                {{ $b['tag'] }}
                            </div>
                        @endif
                    </div>
                    <div style="padding:1.1rem 1.25rem 1.3rem;">
                        <h3 style="font-weight:700; font-size:0.97rem; color:#18243e; margin:0 0 4px; line-height:1.3;">
                            {{ $b['name'] }}\
                        </h3>
                        <span style="display:inline-block; background:rgba(79,126,247,0.1); color:#4F7EF7; border-radius:99px; padding:3px 10px; font-size:0.72rem; font-weight:700; margin-bottom:0.7rem;">📍
                            {{ $b['city'] }}
                        </span>
                        <p style="font-size:0.82rem; color:#7d8fb0; margin:0 0 0.6rem; line-height:1.5; display:flex; gap:6px;">
                            <svg style="width:14px; height:14px; flex-shrink:0; margin-top:1px;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            {{ $b['address'] }}
                        </p>
                        <p style="font-size:0.82rem; color:#7d8fb0; margin:0 0 1rem; display:flex; gap:6px; align-items:center;">
                            <svg style="width:14px; height:14px; flex-shrink:0;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                                <circle cx="12" cy="12" r="9" />
                            </svg>
                            {{ $b['hours'] }} WIB
                        </p>
                        <div style="display:flex; justify-content:space-between; align-items:center; gap:8px;">
                            <div style="display:flex; align-items:center; gap:5px;">
                                <span style="font-size:0.85rem;">⭐</span>
                                <span style="font-weight:800; font-size:0.92rem; color:#18243e;">{{ $b['rating'] }}</span>
                                <span style="font-size:0.78rem; color:#7d8fb0;">({{ $b['reviews'] }} ulasan)</span>
                            </div>
                            <a href="#" class="btn-primary" style="padding:8px 16px; border-radius:10px; font-size:0.8rem; text-decoration:none; white-space:nowrap;">
                                Lihat Menu →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="emptyState" style="display:none; text-align:center; padding:4rem 1rem;">
            <div style="font-size:3rem; margin-bottom:1rem;">🔍</div>
            <h3 style="font-weight:700; color:#18243e; margin:0 0 0.5rem;">Cabang tidak ditemukan</h3>
            <p style="color:#7d8fb0; font-size:0.9rem;">Coba kata kunci atau kota yang berbeda.</p>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        let activeCity = 'Semua Kota';
        let searchVal = '';
        function filterCity(btn, city) {
            activeCity = city;
            document.querySelectorAll('[onclick^="filterCity"]').forEach(b => {
                b.style.background = 'rgba(255,255,255,0.65)';
                b.style.color = '#3d4f76';
                b.style.borderColor = 'rgba(79,126,247,0.18)';
            });
            btn.style.background = 'linear-gradient(135deg,#4F7EF7,#22D3EE)';
            btn.style.color = '#fff';
            btn.style.borderColor = '#4F7EF7';
            applyFilters();
        }
        function searchResto(val) {
            searchVal = val.toLowerCase();
            applyFilters();
        }
        function sortResto(val) {
            const grid = document.getElementById('restoGrid');
            const cards = [...grid.querySelectorAll('.resto-card')];
            cards.sort((a, b) => {
                if (val === 'name') return a.dataset.name.localeCompare(b.dataset.name);
                if (val === 'rating') return parseFloat(b.dataset.rating || 0) - parseFloat(a.dataset.rating || 0);
                return 0;
            });
            cards.forEach(c => grid.appendChild(c));
        }
        function applyFilters() {
            const cards = document.querySelectorAll('.resto-card');
            let visible = 0;
            cards.forEach(card => {
                const cityMatch = activeCity === 'Semua Kota' || card.dataset.city === activeCity;
                const searchMatch = !searchVal || card.dataset.name.includes(searchVal) || card.dataset.address
                    .includes(searchVal);
                const show = cityMatch && searchMatch;
                card.style.display = show ? '' : 'none';
                if (show) visible++;
            });
            document.getElementById('emptyState').style.display = visible === 0 ? 'block' : 'none';
        }
    </script>
    <style>
        @keyframes pulse-dot {
            0%,
            100% {
                opacity: 1;
            }
            50% {
                opacity: 0.4;
            }
        }
    </style>
@endpush
@endsection
