<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/TapTwoEats.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title', 'Food Delivery')</title>
    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Lora:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <style>═══════════════════════════════════════ */
        :root {
            --glass-bg: rgba(255, 255, 255, 0.55);
            --glass-bg-strong: rgba(255, 255, 255, 0.78);
            --glass-border: rgba(255, 255, 255, 0.85);
            --glass-shadow: 0 8px 32px rgba(79, 126, 247, 0.10);
            --glass-shadow-hover: 0 20px 60px rgba(79, 126, 247, 0.20);
            --accent-blue: #4F7EF7;
            --accent-cyan: #22D3EE;
            --accent-warm: #FB923C;
            --accent-violet: #A78BFA;
            --text-primary: #18243e;
            --text-secondary: #3d4f76;
            --text-muted: #7d8fb0;
            --bg-base: #EEF2FF;
        }

        *, *::before, *::after { box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Bricolage Grotesque', sans-serif;
            background-color: var(--bg-base);
            color: var(--text-primary);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Animated gradient background canvas */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            z-index: -2;
            background:
                radial-gradient(ellipse 90% 70% at 5% 0%, #dde8ff 0%, transparent 55%),
                radial-gradient(ellipse 60% 55% at 95% 15%, #fce7f3 0%, transparent 50%),
                radial-gradient(ellipse 75% 65% at 55% 95%, #d1fae5 0%, transparent 55%),
                radial-gradient(ellipse 55% 50% at 85% 80%, #fef9c3 0%, transparent 50%),
                radial-gradient(ellipse 40% 40% at 30% 60%, #ede9fe 0%, transparent 45%);
            background-color: #eef2ff;
        }

        /* Subtle grain overlay */
        body::after {
            content: '';
            position: fixed;
            inset: 0;
            z-index: -1;
            opacity: 0.018;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)'/%3E%3C/svg%3E");
            background-size: 200px 200px;
            pointer-events: none;
        }

        /* ── Glass Utilities ── */
        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(22px) saturate(180%);
            -webkit-backdrop-filter: blur(22px) saturate(180%);
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
        }
        .glass-strong {
            background: var(--glass-bg-strong);
            backdrop-filter: blur(30px) saturate(200%);
            -webkit-backdrop-filter: blur(30px) saturate(200%);
            border: 1px solid rgba(255,255,255,0.95);
            box-shadow: 0 4px 24px rgba(79,126,247,0.08), inset 0 1px 0 rgba(255,255,255,0.9);
        }
        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px) saturate(160%);
            -webkit-backdrop-filter: blur(20px) saturate(160%);
            border: 1px solid rgba(255,255,255,0.82);
            box-shadow: var(--glass-shadow), inset 0 1px 0 rgba(255,255,255,0.8);
            border-radius: 20px;
            transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .glass-card:hover {
            box-shadow: var(--glass-shadow-hover);
            border-color: rgba(255,255,255,0.95);
            transform: translateY(-4px);
        }

        /* ── Input ── */
        .input-glass {
            background: rgba(255,255,255,0.65);
            backdrop-filter: blur(12px);
            border: 1.5px solid rgba(79,126,247,0.18);
            border-radius: 14px;
            padding: 13px 18px;
            width: 100%;
            color: var(--text-primary);
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: 0.95rem;
            outline: none;
            transition: all 0.25s ease;
        }
        .input-glass::placeholder { color: var(--text-muted); }
        .input-glass:focus {
            border-color: var(--accent-blue);
            background: rgba(255,255,255,0.88);
            box-shadow: 0 0 0 3px rgba(79,126,247,0.12);
        }

        /* ── Buttons ── */
        .btn-primary {
            background: linear-gradient(135deg, #4F7EF7 0%, #22D3EE 100%);
            color: white;
            border: none;
            border-radius: 14px;
            padding: 13px 30px;
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.25s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: 0 4px 18px rgba(79,126,247,0.32);
            letter-spacing: 0.01em;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(79,126,247,0.48);
        }

        /* ── Gradient Text ── */
        .text-grad-blue {
            background: linear-gradient(135deg, #2952d9, #4F7EF7);
            -webkit-background-clip: text; background-clip: text; color: transparent;
        }
        .text-grad-cyan {
            background: linear-gradient(135deg, #0891b2, #22D3EE);
            -webkit-background-clip: text; background-clip: text; color: transparent;
        }
        .text-grad-warm {
            background: linear-gradient(135deg, #ea580c, #fb923c);
            -webkit-background-clip: text; background-clip: text; color: transparent;
        }

        /* ── Animations ── */
        @keyframes float { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-10px)} }
        @keyframes float-slow { 0%,100%{transform:translateY(0) rotate(0deg)} 50%{transform:translateY(-14px) rotate(3deg)} }
        @keyframes fade-in-up { from{opacity:0;transform:translateY(24px)} to{opacity:1;transform:translateY(0)} }
        @keyframes scale-in { from{opacity:0;transform:scale(0.94)} to{opacity:1;transform:scale(1)} }
        @keyframes shimmer { from{background-position:-200% 0} to{background-position:200% 0} }

        .anim-float { animation: float 4s ease-in-out infinite; }
        .anim-float-slow { animation: float-slow 7s ease-in-out infinite; }
        .anim-fade-up { animation: fade-in-up 0.65s ease both; }
        .anim-scale-in { animation: scale-in 0.55s cubic-bezier(0.23,1,0.32,1) both; }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }

        /* ── Scrollbar ── */
        ::-webkit-scrollbar { width: 7px; }
        ::-webkit-scrollbar-track { background: #eef2ff; }
        ::-webkit-scrollbar-thumb { background: #c5d0f5; border-radius: 99px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--accent-blue); }

        /* Label */
        .form-label {
            display: block;
            font-weight: 600;
            font-size: 0.88rem;
            color: var(--text-secondary);
            margin-bottom: 8px;
            letter-spacing: 0.01em;
        }
    </style>
</head>
<body>
    @include('components.navbar')
    <main class="min-h-screen">
        @yield('content')
    </main>
    @include('components.footer')
    @stack('scripts')
</body>
</html>
