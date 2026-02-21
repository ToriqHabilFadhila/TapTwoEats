@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

<style>
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
    }

    @media (max-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr;
        }
        .contact-header h1 {
            font-size: 2rem !important;
        }
        .contact-form-card {
            padding: 1.75rem !important;
        }
        .contact-blob-left,
        .contact-blob-right {
            display: none;
        }
        .contact-wrapper {
            padding: 3rem 0 4rem !important;
        }
    }

    @media (max-width: 480px) {
        .contact-form-card {
            padding: 1.25rem !important;
            border-radius: 18px !important;
        }
        .contact-info-card {
            padding: 1.25rem !important;
            border-radius: 14px !important;
        }
        .social-links {
            gap: 0.5rem !important;
        }
        .social-link {
            padding: 7px 11px !important;
            font-size: 0.75rem !important;
        }
    }
</style>

<div class="contact-wrapper" style="min-height:100vh; padding:5rem 0 6rem; position:relative;">
    <div class="contact-blob-left" style="position:fixed; top:10%; left:-100px; width:380px; height:380px; background:radial-gradient(circle,rgba(167,139,250,0.2) 0%,transparent 70%); border-radius:50%; pointer-events:none; z-index:0;"></div>
    <div class="contact-blob-right" style="position:fixed; bottom:10%; right:-80px; width:320px; height:320px; background:radial-gradient(circle,rgba(34,211,238,0.15) 0%,transparent 70%); border-radius:50%; pointer-events:none; z-index:0;"></div>
    <div style="max-width:1000px; margin:0 auto; padding:0 1.5rem; position:relative; z-index:1;">
        <div class="anim-fade-up contact-header" style="text-align:center; margin-bottom:3.5rem;">
            <p style="font-size:0.8rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:#4F7EF7; margin:0 0 8px;">
                Get In Touch</p>
            <h1 style="font-family:'Lora',serif; font-size:clamp(2.2rem,5vw,3.2rem); font-weight:600; color:#18243e; margin:0 0 1rem; letter-spacing:-0.02em;">
                Contact <span class="text-grad-blue">Us</span>
            </h1>
            <p style="font-size:1rem; color:#7d8fb0; max-width:460px; margin:0 auto; line-height:1.7;">
                Have a question or feedback? We'd love to hear from you. Drop us a message and we'll get back to you
                shortly.
            </p>
        </div>
        <div class="contact-grid">
            <div class="anim-fade-up delay-1">
                <div class="glass-card contact-form-card" style="padding:2.5rem; border-radius:24px;">
                    <h2 style="font-weight:700; font-size:1.3rem; color:#18243e; margin:0 0 1.8rem; display:flex; align-items:center; gap:10px;">
                        <span style="width:36px; height:36px; background:linear-gradient(135deg,#4F7EF7,#22D3EE); border-radius:10px; display:inline-flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                        </span>
                        Send a Message
                    </h2>
                    <form style="display:flex; flex-direction:column; gap:1.1rem;">
                        <div>
                            <label class="form-label">Your Name</label>
                            <input type="text" class="input-glass" placeholder="John Doe" style="width:100%; box-sizing:border-box;">
                        </div>
                        <div>
                            <label class="form-label">Email Address</label>
                            <input type="email" class="input-glass" placeholder="john@example.com" style="width:100%; box-sizing:border-box;">
                        </div>
                        <div>
                            <label class="form-label">Subject</label>
                            <input type="text" class="input-glass" placeholder="How can we help?" style="width:100%; box-sizing:border-box;">
                        </div>
                        <div>
                            <label class="form-label">Message</label>
                            <textarea class="input-glass" rows="5" placeholder="Write your message here..." style="resize:vertical; min-height:130px; width:100%; box-sizing:border-box;"></textarea>
                        </div>
                        <button type="submit" class="btn-primary" style="width:100%; border-radius:14px; margin-top:0.3rem;">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
            <div class="anim-fade-up delay-2" style="display:flex; flex-direction:column; gap:1rem;">
                @foreach ([
                    [
                        'icon' => '<path d="M12 21s6-5.686 6-10a6 6 0 10-12 0c0 4.314 6 10 6 10z"/><circle cx="12" cy="11" r="2"/>',
                        'title' => 'Our Address',
                        'detail' => 'Jl. Contoh No. 123, Malang, Jawa Timur, Indonesia',
                        'bg' => 'rgba(79,126,247,0.1)',
                        'color' => '#4F7EF7',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25H4.5a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5H4.5a2.25 2.25 0 00-2.25 2.25m19.5 0l-9.75 6.75L2.25 6.75"/>',
                        'title' => 'Email Us',
                        'detail' => 'support@taptwoeats.com',
                        'bg' => 'rgba(34,211,238,0.1)',
                        'color' => '#0891b2',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 7.87 6.38 14.25 14.25 14.25.89 0 1.77-.08 2.62-.23a2.25 2.25 0 001.63-3.05l-.88-2.21a2.25 2.25 0 00-2.66-1.33l-2.28.57a11.04 11.04 0 01-5.26-5.26l.57-2.28A2.25 2.25 0 008.79 4.2L6.58 3.32A2.25 2.25 0 003.53 4.95c-.15.85-.23 1.73-.23 2.62z"/>',
                        'title' => 'Call Us',
                        'detail' => '+62 812-3456-7890',
                        'bg' => 'rgba(251,146,60,0.1)',
                        'color' => '#ea580c',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/><circle cx="12" cy="12" r="9"/>',
                        'title' => 'Working Hours',
                        'detail' => 'Mon–Sun, 8AM – 10PM WIB',
                        'bg' => 'rgba(167,139,250,0.1)',
                        'color' => '#7c3aed',
                    ],
                ] as $item)
                    <div class="glass-card contact-info-card" style="padding:1.5rem 1.75rem; display:flex; align-items:center; gap:1.1rem; border-radius:18px;">
                        <div style="width:50px; height:50px; min-width:50px; background:{{ $item['bg'] }}; border-radius:14px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="{{ $item['color'] }}" stroke-width="1.8" width="22" height="22" stroke-linecap="round" stroke-linejoin="round">
                                {!! $item['icon'] !!}
                            </svg>
                        </div>
                        <div style="min-width:0;">
                            <p style="font-size:0.78rem; font-weight:700; letter-spacing:0.05em; text-transform:uppercase; color:{{ $item['color'] }}; margin:0 0 3px;">
                                {{ $item['title'] }}
                            </p>
                            <p style="font-size:0.95rem; font-weight:500; color:#18243e; margin:0; word-break:break-word;">
                                {{ $item['detail'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
                <div class="glass-card contact-info-card" style="padding:1.5rem 1.75rem; border-radius:18px;">
                    <p style="font-size:0.78rem; font-weight:700; letter-spacing:0.05em; text-transform:uppercase; color:#7d8fb0; margin:0 0 1rem;">
                        Follow Us
                    </p>
                    <div class="social-links" style="display:flex; gap:0.7rem; flex-wrap:wrap;">
                        @foreach ([
                            [
                                'name' => 'Facebook',
                                'icon' => '<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>',
                            ],
                            [
                                'name' => 'Instagram',
                                'icon' => '<rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="3.5"/><circle cx="17.5" cy="6.5" r="1"/>',
                            ],
                            [
                                'name' => 'Twitter',
                                'icon' => '<path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 8.09v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>',
                            ],
                        ] as $social)
                            <a href="#" class="social-link" style="display:inline-flex; align-items:center; gap:0.45rem; padding:8px 14px; background:rgba(79,126,247,0.08); border:1px solid rgba(79,126,247,0.15); border-radius:999px; font-size:0.8rem; font-weight:600; color:#4F7EF7; text-decoration:none; transition:all 0.2s; white-space:nowrap;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    {!! $social['icon'] !!}
                                </svg>
                                {{ $social['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
