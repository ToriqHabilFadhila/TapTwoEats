@extends('layouts.app')
@section('title', 'All Menu')
@section('content')

<div style="min-height:100vh; padding:2.5rem 0 6rem;">
    <div style="max-width:1300px; margin:0 auto; padding:0 1.5rem;">
        <div class="anim-fade-up" style="display:flex; align-items:center; gap:8px; margin-bottom:1.5rem; font-size:0.85rem; color:#7d8fb0;">
            <a href="{{ route('home') }}" style="color:#4F7EF7; text-decoration:none; font-weight:600;">Home</a>
            <span style="color:#c5cfe8;">›</span>
            <span style="color:#18243e; font-weight:600;">All Menu</span>
        </div>
        <div class="anim-fade-up delay-1" style="margin-bottom:2rem;">
            <p style="font-size:0.78rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:#4F7EF7; margin:0 0 6px;">TapTwoEats</p>
            <h1 style="font-family:'Lora',serif; font-size:clamp(2rem,4vw,3rem); font-weight:600; color:#18243e; margin:0 0 0.5rem;">
                All <span class="text-grad-blue">Menu</span>
            </h1>
            <p style="color:#7d8fb0; font-size:0.95rem; margin:0;">Browse everything we have to offer — 100+ delicious choices</p>
        </div>
        <div class="anim-fade-up delay-2" style="display:flex; flex-wrap:wrap; gap:0.6rem; margin-bottom:2rem;">
            @foreach(['All', 'Pizza', 'Burgers', 'Noodles', 'Desserts', 'Drinks', 'Salads', 'Chicken'] as $i => $cat)
            <button onclick="setFilter(this, '{{ strtolower($cat) }}')" style="padding:10px 22px; border-radius:99px; font-family:'Bricolage Grotesque',sans-serif; font-weight:600; font-size:0.88rem; cursor:pointer; transition:all 0.2s ease; border:1.5px solid {{ $i === 0 ? '#4F7EF7' : 'rgba(79,126,247,0.18)' }}; background:{{ $i === 0 ? 'linear-gradient(135deg,#4F7EF7,#22D3EE)' : 'rgba(255,255,255,0.65)' }}; color:{{ $i === 0 ? '#fff' : '#3d4f76' }}; backdrop-filter:blur(12px);">
                {{ $cat }}
            </button>
            @endforeach
        </div>
        <div class="anim-fade-up delay-3" style="display:flex; gap:1rem; margin-bottom:2.5rem; flex-wrap:wrap;">
            <div style="flex:1; min-width:240px; position:relative;">
                <svg style="position:absolute; left:14px; top:50%; transform:translateY(-50%); width:18px; height:18px; color:#7d8fb0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" placeholder="Search dishes..." class="input-glass" style="padding-left:44px; width:100%; box-sizing:border-box;">
            </div>
            <select class="input-glass" style="width:auto; min-width:180px; cursor:pointer;">
                <option>Sort: Most Popular</option>
                <option>Sort: Price (Low–High)</option>
                <option>Sort: Price (High–Low)</option>
                <option>Sort: Newest First</option>
            </select>
        </div>
        <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(240px,1fr)); gap:1.25rem;">
            @php
            $gradients = [
                'linear-gradient(135deg,#fda4af,#fb7185)',
                'linear-gradient(135deg,#fed7aa,#fb923c)',
                'linear-gradient(135deg,#a5f3fc,#22d3ee)',
                'linear-gradient(135deg,#bbf7d0,#4ade80)',
                'linear-gradient(135deg,#ddd6fe,#a78bfa)',
                'linear-gradient(135deg,#fde68a,#fbbf24)',
                'linear-gradient(135deg,#fecaca,#f87171)',
                'linear-gradient(135deg,#bfdbfe,#60a5fa)',
                'linear-gradient(135deg,#d9f99d,#86efac)',
                'linear-gradient(135deg,#fbcfe8,#f472b6)',
                'linear-gradient(135deg,#cffafe,#67e8f9)',
                'linear-gradient(135deg,#fef9c3,#fde047)',
            ];
            $emojis  = ['🍕','🍔','🍜','🍱','🍰','🥗','🍗','🧋','🌮','🍝','🥩','🍦'];
            $names   = ['Margherita Pizza','Classic Burger','Ramen Bowl','Salmon Bento','Tiramisu','Caesar Salad','Crispy Chicken','Boba Milk Tea','Beef Tacos','Carbonara','Wagyu Steak','Vanilla Ice Cream'];
            $prices  = ['Rp 45.000','Rp 55.000','Rp 50.000','Rp 75.000','Rp 35.000','Rp 40.000','Rp 48.000','Rp 28.000','Rp 52.000','Rp 58.000','Rp 150.000','Rp 25.000'];
            $badges  = [null,'Best Seller',null,'New',null,'Healthy','Popular',null,'Hot Deal',null,'Premium','Sweet Pick'];
            $badgeColors = [null,'#f59e0b',null,'#4F7EF7',null,'#059669','#ea580c',null,'#dc2626',null,'#7c3aed','#db2777'];
            @endphp
            @for ($i = 0; $i < 12; $i++)
            <div class="glass-card anim-fade-up" style="overflow:hidden; border-radius:20px; cursor:pointer; animation-delay:{{ $i * 0.04 }}s;">
                <div style="height:155px; background:{{ $gradients[$i] }}; position:relative; overflow:hidden;">
                    <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center; font-size:3.8rem; transition:transform 0.3s;">{{ $emojis[$i] }}</div>
                    <button style="position:absolute; top:10px; right:10px; background:rgba(255,255,255,0.85); backdrop-filter:blur(10px); border:none; border-radius:99px; width:32px; height:32px; display:flex; align-items:center; justify-content:center; cursor:pointer;" onclick="toggleWish(this)">
                        <svg style="width:15px; height:15px; color:#ef4444;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                    @if($badges[$i])
                    <div style="position:absolute; bottom:10px; left:10px; background:{{ $badgeColors[$i] }}; color:white; border-radius:99px; padding:4px 10px; font-size:0.72rem; font-weight:700;">{{ $badges[$i] }}</div>
                    @endif
                    <div style="position:absolute; bottom:10px; {{ $badges[$i] ? 'right:10px' : 'left:10px' }}; background:rgba(255,255,255,0.85); backdrop-filter:blur(10px); border-radius:99px; padding:4px 10px; font-size:0.76rem; font-weight:700; color:#18243e;">⭐ 4.{{ 5 + $i % 3 }}</div>
                </div>
                <div style="padding:1rem 1.1rem 1.2rem;">
                    <h3 style="font-weight:700; font-size:0.96rem; color:#18243e; margin:0 0 0.3rem;">{{ $names[$i] }}</h3>
                    <p style="font-size:0.8rem; color:#7d8fb0; margin:0 0 0.9rem;">Freshly prepared · 20 min</p>
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="font-size:1.05rem; font-weight:800; background:linear-gradient(135deg,#4F7EF7,#22D3EE); -webkit-background-clip:text; background-clip:text; color:transparent;">{{ $prices[$i] }}</span>
                        <button class="btn-primary" style="padding:8px 16px; border-radius:10px; font-size:0.82rem;">+ Add</button>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <div style="text-align:center; margin-top:3rem;">
            <button style="padding:14px 40px; background:rgba(255,255,255,0.7); backdrop-filter:blur(16px); border:1.5px solid rgba(79,126,247,0.2); border-radius:14px; font-family:'Bricolage Grotesque',sans-serif; font-weight:700; font-size:0.95rem; color:#4F7EF7; cursor:pointer; transition:all 0.25s;" onmouseover="this.style.background='rgba(79,126,247,0.08)'" onmouseout="this.style.background='rgba(255,255,255,0.7)'">
                Load More ↓
            </button>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        function setFilter(btn, cat) {
            document.querySelectorAll('[onclick^="setFilter"]').forEach(b => {
                b.style.background  = 'rgba(255,255,255,0.65)';
                b.style.color       = '#3d4f76';
                b.style.borderColor = 'rgba(79,126,247,0.18)';
            });
            btn.style.background  = 'linear-gradient(135deg,#4F7EF7,#22D3EE)';
            btn.style.color       = '#fff';
            btn.style.borderColor = '#4F7EF7';
            // TODO: filter grid items by category
        }
        function toggleWish(btn) {
            const svg = btn.querySelector('svg');
            const isFilled = svg.getAttribute('fill') === '#ef4444';
            svg.setAttribute('fill', isFilled ? 'none' : '#ef4444');
            btn.style.background = isFilled ? 'rgba(255,255,255,0.85)' : 'rgba(254,202,202,0.9)';
        }
    </script>
@endpush
@endsection
