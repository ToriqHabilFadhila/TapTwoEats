{{-- resources/views/cart.blade.php --}}
@extends('layouts.app')
@section('title', 'Shopping Cart')
@section('content')

<div style="min-height:100vh;padding:2.5rem 0 6rem;position:relative;">
    {{-- Blobs --}}
    <div style="position:fixed;top:5%;right:-60px;width:380px;height:380px;background:radial-gradient(circle,rgba(34,211,238,0.12) 0%,transparent 70%);border-radius:50%;pointer-events:none;z-index:0;"></div>
    <div style="position:fixed;bottom:15%;left:-80px;width:320px;height:320px;background:radial-gradient(circle,rgba(167,139,250,0.12) 0%,transparent 70%);border-radius:50%;pointer-events:none;z-index:0;"></div>
    <div style="max-width:1100px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">
        {{-- Header --}}
        <div class="anim-fade-up" style="margin-bottom:2.5rem;">
            <p style="font-size:0.78rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#4F7EF7;margin:0 0 6px;">Review & Pay</p>
            <h1 style="font-family:'Lora',serif;font-size:clamp(2rem,4vw,3rem);font-weight:600;color:#18243e;margin:0;">Shopping <span class="text-grad-blue">Cart</span></h1>
        </div>
        <div style="display:grid;grid-template-columns:1fr 360px;gap:1.5rem;align-items:start;">
            {{-- ── Cart Items ── --}}
            <div class="anim-fade-up delay-1" style="display:flex;flex-direction:column;gap:1rem;">
                @php
                $items = [
                    ['🍕', 'Margherita Pizza', 'Bella Italia Restaurant', 'Rp 45.000', 'linear-gradient(135deg,#fda4af,#fb7185)'],
                    ['🍔', 'Classic Smash Burger', 'Burger Bros', 'Rp 55.000', 'linear-gradient(135deg,#fed7aa,#fb923c)'],
                    ['🍜', 'Tonkotsu Ramen', 'Ramen House', 'Rp 65.000', 'linear-gradient(135deg,#a5f3fc,#22d3ee)'],
                ];
                @endphp
                @foreach($items as $idx => $item)
                <div class="glass-card" style="padding:1.25rem;display:flex;align-items:center;gap:1.1rem;border-radius:20px;">
                    {{-- Image --}}
                    <div style="width:80px;height:80px;background:{{ $item[4] }};border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:2.2rem;flex-shrink:0;">{{ $item[0] }}</div>
                    {{-- Info --}}
                    <div style="flex:1;min-width:0;">
                        <h3 style="font-weight:700;font-size:1rem;color:#18243e;margin:0 0 3px;">{{ $item[1] }}</h3>
                        <p style="font-size:0.82rem;color:#7d8fb0;margin:0 0 8px;">{{ $item[2] }}</p>
                        <span style="font-size:1rem;font-weight:800;background:linear-gradient(135deg,#4F7EF7,#22D3EE);-webkit-background-clip:text;background-clip:text;color:transparent;">{{ $item[3] }}</span>
                    </div>
                    {{-- Qty Controls --}}
                    <div style="display:flex;align-items:center;gap:10px;">
                        <button onclick="adjustQty(this, -1)" style="width:34px;height:34px;background:rgba(255,255,255,0.8);border:1.5px solid rgba(79,126,247,0.2);border-radius:10px;font-size:1.1rem;font-weight:700;color:#18243e;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.2s;">−</button>
                        <span class="qty-val" style="font-weight:800;font-size:1rem;color:#18243e;min-width:20px;text-align:center;">1</span>
                        <button onclick="adjustQty(this, 1)" style="width:34px;height:34px;background:linear-gradient(135deg,#4F7EF7,#22D3EE);border:none;border-radius:10px;font-size:1.1rem;font-weight:700;color:white;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.2s;">+</button>
                    </div>
                    {{-- Remove --}}
                    <button onclick="this.closest('.glass-card').style.opacity='0';setTimeout(()=>this.closest('.glass-card').remove(),300)" style="width:34px;height:34px;background:rgba(254,202,202,0.6);border:1.5px solid rgba(239,68,68,0.2);border-radius:10px;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all 0.2s;flex-shrink:0;">
                        <svg style="width:16px;height:16px;color:#ef4444;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                    </button>
                </div>
                @endforeach

                {{-- Promo Code --}}
                <div class="glass-card" style="padding:1.25rem;border-radius:20px;">
                    <p style="font-size:0.82rem;font-weight:700;color:#7d8fb0;margin:0 0 10px;letter-spacing:0.04em;text-transform:uppercase;">🎁 Promo Code</p>
                    <div style="display:flex;gap:8px;">
                        <input type="text" class="input-glass" placeholder="Enter promo code..." style="flex:1;">
                        <button class="btn-primary" style="border-radius:12px;white-space:nowrap;padding:12px 20px;">Apply</button>
                    </div>
                </div>
            </div>

            {{-- ── Order Summary ── --}}
            <div class="anim-fade-up delay-2" style="position:sticky;top:100px;">
                <div class="glass-strong" style="border-radius:24px;overflow:hidden;">
                    {{-- Header bar --}}
                    <div style="background:linear-gradient(135deg,#4F7EF7,#22D3EE);padding:1.25rem 1.75rem;">
                        <h2 style="font-weight:700;font-size:1.1rem;color:white;margin:0;">Order Summary</h2>
                    </div>

                    <div style="padding:1.5rem 1.75rem;">
                        {{-- Line items --}}
                        <div style="display:flex;flex-direction:column;gap:0.75rem;margin-bottom:1.25rem;">
                            <div style="display:flex;justify-content:space-between;font-size:0.9rem;color:#4a5a7a;">
                                <span>Margherita Pizza × 1</span>
                                <span style="font-weight:600;">Rp 45.000</span>
                            </div>
                            <div style="display:flex;justify-content:space-between;font-size:0.9rem;color:#4a5a7a;">
                                <span>Classic Burger × 1</span>
                                <span style="font-weight:600;">Rp 55.000</span>
                            </div>
                            <div style="display:flex;justify-content:space-between;font-size:0.9rem;color:#4a5a7a;">
                                <span>Tonkotsu Ramen × 1</span>
                                <span style="font-weight:600;">Rp 65.000</span>
                            </div>
                        </div>

                        {{-- Divider --}}
                        <div style="height:1px;background:rgba(79,126,247,0.12);margin-bottom:1rem;"></div>

                        {{-- Subtotals --}}
                        <div style="display:flex;flex-direction:column;gap:0.7rem;margin-bottom:1rem;">
                            <div style="display:flex;justify-content:space-between;font-size:0.9rem;color:#4a5a7a;">
                                <span>Subtotal</span>
                                <span style="font-weight:600;color:#18243e;">Rp 165.000</span>
                            </div>
                            <div style="display:flex;justify-content:space-between;font-size:0.9rem;color:#4a5a7a;">
                                <span>Delivery Fee</span>
                                <span style="font-weight:600;color:#18243e;">Rp 10.000</span>
                            </div>
                            <div style="display:flex;justify-content:space-between;font-size:0.9rem;color:#059669;">
                                <span>Promo NEWUSER</span>
                                <span style="font-weight:600;">− Rp 15.000</span>
                            </div>
                        </div>

                        {{-- Divider --}}
                        <div style="height:1px;background:rgba(79,126,247,0.12);margin-bottom:1.2rem;"></div>

                        {{-- Total --}}
                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1.5rem;">
                            <span style="font-weight:800;font-size:1.05rem;color:#18243e;">Total</span>
                            <span style="font-weight:800;font-size:1.35rem;background:linear-gradient(135deg,#4F7EF7,#22D3EE);-webkit-background-clip:text;background-clip:text;color:transparent;">Rp 160.000</span>
                        </div>

                        {{-- Checkout --}}
                        <button class="btn-primary" style="width:100%;border-radius:14px;padding:15px;font-size:1rem;">
                            Proceed to Checkout 🛒
                        </button>

                        {{-- Security note --}}
                        <div style="display:flex;align-items:center;justify-content:center;gap:6px;margin-top:1rem;color:#7d8fb0;font-size:0.78rem;">
                            <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            <span>Secured with 256-bit encryption</span>
                        </div>
                    </div>
                </div>

                {{-- Continue shopping --}}
                <a href="{{ route('menu.all') }}" style="display:flex;align-items:center;justify-content:center;gap:6px;margin-top:1rem;font-size:0.88rem;font-weight:600;color:#4F7EF7;text-decoration:none;">
                    ← Continue Shopping
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function adjustQty(btn, delta) {
    const container = btn.parentElement;
    const span = container.querySelector('.qty-val');
    let val = parseInt(span.textContent) + delta;
    if (val < 1) val = 1;
    span.textContent = val;
}
</script>
@endpush

@endsection
