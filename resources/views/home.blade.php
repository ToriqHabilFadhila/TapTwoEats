@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div>
    <section style="padding: 5rem 0 4rem; position: relative; overflow: hidden;">
        <div style="position:absolute; top:-80px; left:-80px; width:420px; height:420px; background:radial-gradient(circle,rgba(79,126,247,0.15) 0%,transparent 70%); border-radius:50%; pointer-events:none;"></div>
        <div style="position:absolute; top:60px; right:-100px; width:350px; height:350px; background:radial-gradient(circle,rgba(251,146,60,0.12) 0%,transparent 70%); border-radius:50%; pointer-events:none;"></div>
        <div style="position:absolute; bottom:-40px; left:40%; width:300px; height:300px; background:radial-gradient(circle,rgba(34,211,238,0.12) 0%,transparent 70%); border-radius:50%; pointer-events:none;"></div>
        <div style="max-width:1200px; margin:0 auto; padding:0 1.5rem;">
            <div style="text-align:center; position:relative; z-index:1;">
                <div class="anim-fade-up" style="display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,0.7); backdrop-filter:blur(16px); border:1px solid rgba(255,255,255,0.9); border-radius:99px; padding:8px 20px; margin-bottom:2rem; box-shadow:0 4px 16px rgba(79,126,247,0.12);">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width:16px; height:16px; display:block; color:#4F7EF7; flex-shrink:0;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>
                    <span style="font-size:0.82rem; font-weight:700; color:#4F7EF7; letter-spacing:0.06em; text-transform:uppercase; line-height:1;">
                        Free delivery for new users
                    </span>
                </div>
                <h1 class="anim-fade-up delay-1" style="font-family:'Lora',serif; font-size:clamp(2.8rem,7vw,5.5rem); font-weight:600; line-height:1.1; margin:0 0 1.5rem; letter-spacing:-0.02em;">
                    <span class="text-grad-blue">Order</span>
                    <span style="color:#18243e;"> Your </span>
                    <br>
                    <span class="text-grad-warm">Favorite</span>
                    <span style="color:#18243e;"> Food</span>
                </h1>
                <p class="anim-fade-up delay-2" style="font-size:1.15rem; color:#4a5a7a; max-width:520px; margin:0 auto 2.5rem; line-height:1.7;">
                    Delicious meals delivered to your doorstep in minutes.<br>
                    Fast, fresh, and always on time!
                </p>
                <div class="anim-fade-up delay-3" style="max-width:580px; margin:0 auto; position:relative;">
                    <div style="background:rgba(255,255,255,0.72); backdrop-filter:blur(24px); border:1.5px solid rgba(255,255,255,0.95); border-radius:99px; padding:8px 8px 8px 24px; display:flex; align-items:center; gap:12px; box-shadow:0 8px 40px rgba(79,126,247,0.14),inset 0 1px 0 rgba(255,255,255,0.9);">
                        <svg style="width:20px; height:20px; color:#7d8fb0; flex-shrink:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" placeholder="Search restaurants or dishes..." style="flex:1; background:transparent; border:none; outline:none; font-family:'Bricolage Grotesque',sans-serif; font-size:0.98rem; color:#18243e;">
                        <button class="btn-primary" style="border-radius:99px; padding:12px 28px; white-space:nowrap;">
                            Search
                        </button>
                    </div>
                </div>
                <div class="anim-fade-up delay-4" style="display:flex; justify-content:center; gap:3rem; margin-top:3rem; flex-wrap:wrap;">
                    @foreach ([
                        ['num' => '1K+', 'label' => 'Restaurants', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />'],
                        ['num' => '50K+', 'label' => 'Customers', 'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/>'],
                        ['num' => '100K+', 'label' => 'Deliveries', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />'],
                    ] as $item)
                        <div style="display:flex; flex-direction:column; align-items:center; gap:6px; text-align:center;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="w-8 h-8 text-blue-500 shrink-0" style="display:block; width:32px; height:32px;">
                                {!! $item['icon'] !!}
                            </svg>
                            <div>
                                <div style="font-size:1.6rem; font-weight:800; color:#18243e; line-height:1.1;">{{ $item['num'] }}</div>
                                <div style="font-size:0.82rem; color:#7d8fb0; font-weight:500;">{{ $item['label'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- POPULAR CATEGORIES --}}
    <section style="padding:3rem 0;">
        <div style="max-width:1200px; margin:0 auto; padding:0 1.5rem;">
            <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:1.8rem;">
                <div>
                    <p style="font-size:0.8rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:#4F7EF7; margin:0 0 4px;">Browse</p>
                    <h2 style="font-family:'Lora',serif; font-size:2rem; font-weight:600; color:#18243e; margin:0;">Popular Categories</h2>
                </div>
            </div>
            <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(160px,1fr)); gap:1rem;">
                @foreach ([
                    ['🍕', 'Pizza'], ['🍔', 'Burgers'], ['🍜', 'Noodles'], ['🍱', 'Sushi'],
                    ['🍰', 'Desserts'], ['🥗', 'Salads'], ['🍗', 'Chicken'], ['🧋', 'Drinks']
                ] as [$emoji, $name])
                    <a href="{{ route('menu.all') }}" style="text-decoration:none;">
                        <div class="glass-card" style="padding:1.5rem 1rem; text-align:center; cursor:pointer; border-radius:20px;">
                            <div class="anim-float" style="font-size:2.6rem; margin-bottom:0.6rem; display:block;">{{ $emoji }}</div>
                            <div style="font-size:0.9rem; font-weight:700; color:#18243e;">{{ $name }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- POPULAR RESTAURANTS --}}
    <section style="padding:3rem 0 6rem;">
        <div style="max-width:1200px; margin:0 auto; padding:0 1.5rem;">
            <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:1.8rem;">
                <div>
                    <p style="font-size:0.8rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:#4F7EF7; margin:0 0 4px;">Explore</p>
                    <h2 style="font-family:'Lora',serif; font-size:2rem; font-weight:600; color:#18243e; margin:0;">Popular Restaurants</h2>
                </div>
                <a href="{{ route('menu.all') }}" style="display:inline-flex; align-items:center; gap:6px; font-weight:700; font-size:0.9rem; color:#4F7EF7; text-decoration:none; padding:10px 20px; background:rgba(79,126,247,0.08); border-radius:99px; transition:all 0.2s ease;">
                    View All
                    <svg style="width:16px; height:16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(280px,1fr)); gap:1.25rem;">
                @php
                    $gradients = [
                        'linear-gradient(135deg,#f0abfc,#818cf8)', 'linear-gradient(135deg,#fda4af,#fb923c)',
                        'linear-gradient(135deg,#6ee7b7,#22d3ee)', 'linear-gradient(135deg,#fde68a,#fb923c)',
                        'linear-gradient(135deg,#a5f3fc,#818cf8)', 'linear-gradient(135deg,#bbf7d0,#6ee7b7)'
                    ];
                    $cuisines = [
                        'Italian · Pizza · Pasta', 'American · Burgers · Fries', 'Asian · Noodles · Ramen',
                        'Fusion · BBQ · Grilled', 'Japanese · Sushi · Rolls', 'Mediterranean · Healthy'
                    ];
                @endphp
                @for ($i = 0; $i < 6; $i++)
                    <div class="glass-card" style="overflow:hidden; border-radius:20px; cursor:pointer;">
                        <div style="height:160px; background:{{ $gradients[$i] }}; position:relative; overflow:hidden;">
                            <div style="position:absolute; inset:0; background:rgba(0,0,0,0.04);"></div>
                            <div style="position:absolute; top:12px; left:12px; background:rgba(255,255,255,0.85); backdrop-filter:blur(10px); border-radius:99px; padding:5px 12px; font-size:0.76rem; font-weight:700; color:#18243e; display:flex; align-items:center; gap:6px;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor" style="width:14px; height:14px;">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span>{{ 20 + $i * 3 }}–{{ 30 + $i * 3 }} min</span>
                            </div>
                            @if ($i === 0 || $i === 2)
                                <div style="position:absolute; top:12px; right:12px; background:rgba(79,126,247,0.9); backdrop-filter:blur(10px); border-radius:99px; padding:5px 12px; font-size:0.72rem; font-weight:700; color:white; letter-spacing:0.04em; text-transform:uppercase;">
                                    Featured
                                </div>
                            @endif
                        </div>
                        <div style="padding:1.1rem 1.25rem;">
                            <div style="display:flex; justify-content:space-between; align-items:start; margin-bottom:0.4rem;">
                                <h3 style="font-weight:700; font-size:1.05rem; color:#18243e; margin:0;">Restaurant {{ $i + 1 }}</h3>
                                <div style="display:flex; align-items:center; gap:6px; background:rgba(251,191,36,0.12); border-radius:999px; padding:4px 10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" style="width:14px; height:14px; color:#f59e0b;">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                    </svg>
                                    <span style="font-size:0.82rem; font-weight:700; color:#b45309; line-height:1;">4.{{ 5 + ($i % 3) }}</span>
                                </div>
                            </div>
                            <p style="font-size:0.82rem; color:#7d8fb0; margin:0 0 0.8rem;">{{ $cuisines[$i] }}</p>
                            <div style="display:flex; justify-content:space-between; align-items:center;">
                                <span style="font-size:0.82rem; color:#4a5a7a; font-weight:500;">Min. Rp 25.000</span>
                                <a href="#" style="font-size:0.82rem; font-weight:700; color:#4F7EF7; text-decoration:none; padding:6px 14px; background:rgba(79,126,247,0.1); border-radius:999px; display:inline-flex; align-items:center; gap:6px;">
                                    Order
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <path d="M5 12h14M13 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    {{-- HOW IT WORKS --}}
    <section style="padding:4rem 0 6rem; position:relative;">
        <div style="position:absolute; inset:0; background:rgba(255,255,255,0.4); backdrop-filter:blur(8px); border-top:1px solid rgba(255,255,255,0.8); border-bottom:1px solid rgba(255,255,255,0.8);"></div>
        <div style="max-width:1200px; margin:0 auto; padding:0 1.5rem; position:relative; z-index:1;">
            <div style="text-align:center; margin-bottom:3rem;">
                <p style="font-size:0.8rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:#4F7EF7; margin:0 0 6px;">Simple & Fast</p>
                <h2 style="font-family:'Lora',serif; font-size:2.2rem; font-weight:600; color:#18243e; margin:0;">How It Works</h2>
            </div>
            <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:1.5rem;">
                @foreach ([
                    ['step' => '01', 'title' => 'Find a Restaurant', 'desc' => 'Browse hundreds of restaurants near you', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />'],
                    ['step' => '02', 'title' => 'Choose Your Meal', 'desc' => 'Pick from thousands of delicious dishes', 'icon' => '<path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>'],
                    ['step' => '03', 'title' => 'Easy Checkout', 'desc' => 'Pay securely in seconds', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />'],
                    ['step' => '04', 'title' => 'Fast Delivery', 'desc' => 'Get it delivered hot to your door', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />'],
                ] as $item)
                    <div style="display:flex; gap:16px; align-items:center;">
                        <div style="width:42px; height:42px; border-radius:12px; background:rgba(79,126,247,0.12); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" style="width:20px; height:20px; color:#4F7EF7; display:block;">
                                {!! $item['icon'] !!}
                            </svg>
                        </div>
                        <div>
                            <div style="font-size:0.75rem; font-weight:700; color:#4F7EF7;">STEP {{ $item['step'] }}</div>
                            <div style="font-size:1.1rem; font-weight:800; color:#18243e;">{{ $item['title'] }}</div>
                            <div style="font-size:0.9rem; color:#7d8fb0;">{{ $item['desc'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
