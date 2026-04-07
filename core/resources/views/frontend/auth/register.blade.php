<div class="login-container">

    <!-- Animated Particles -->
    <div class="particles" id="particles">
        <span class="particle" style="left:5%; width:8px; height:10px; animation-duration:9s; animation-delay:0s; bottom:-20px;"></span>
        <span class="particle" style="left:12%; width:5px; height:7px; animation-duration:12s; animation-delay:1.5s; bottom:-20px;"></span>
        <span class="particle" style="left:22%; width:11px; height:14px; animation-duration:8s; animation-delay:3s; bottom:-20px;"></span>
        <span class="particle" style="left:35%; width:6px; height:8px; animation-duration:14s; animation-delay:.8s; bottom:-20px;"></span>
        <span class="particle" style="left:48%; width:9px; height:12px; animation-duration:10s; animation-delay:2s; bottom:-20px;"></span>
        <span class="particle" style="left:58%; width:5px; height:7px; animation-duration:11s; animation-delay:4s; bottom:-20px;"></span>
        <span class="particle" style="left:70%; width:12px; height:15px; animation-duration:7s; animation-delay:.3s; bottom:-20px;"></span>
        <span class="particle" style="left:80%; width:7px; height:9px; animation-duration:13s; animation-delay:2.7s; bottom:-20px;"></span>
        <span class="particle" style="left:90%; width:10px; height:13px; animation-duration:9s; animation-delay:1s; bottom:-20px;"></span>
        <span class="particle" style="left:96%; width:6px; height:8px; animation-duration:15s; animation-delay:3.5s; bottom:-20px;"></span>

        <span class="cross-particle" style="left:8%; animation-duration:14s; animation-delay:1s; bottom:-20px;">+</span>
        <span class="cross-particle" style="left:28%; animation-duration:11s; animation-delay:3s; bottom:-20px;">✦</span>
        <span class="cross-particle" style="left:55%; animation-duration:16s; animation-delay:.5s; bottom:-20px;">+</span>
        <span class="cross-particle" style="left:75%; animation-duration:10s; animation-delay:2s; bottom:-20px;">✦</span>
        <span class="cross-particle" style="left:92%; animation-duration:13s; animation-delay:4s; bottom:-20px;">+</span>
    </div>

    <div class="login-wrapper">

        <!-- Brand Logo -->
        <div class="brand-top mb-4 text-center">
            <div class="brand-icon mb-2">
                <svg viewBox="0 0 24 24" width="50" height="50">
                    <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z" fill="#00FFFF"/>
                    <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z" fill="#00FFFF" opacity="0.6"/>
                </svg>
            </div>
            <div class="brand-text">
                <span class="brand-name h4 d-block">EduHire</span>
                <span class="brand-sub small">Education · Careers</span>
            </div>
        </div>

        <!-- Card -->
        <div class="card login-card">

            <!-- Header -->
            <div class="card-header login-header d-flex align-items-center justify-content-between">
                <div class="header-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <line x1="19" y1="8" x2="19" y2="14"/>
                        <line x1="22" y1="11" x2="16" y2="11"/>
                    </svg>
                </div>
                <span>Create Account</span>
                <div class="blood-drops d-flex gap-1">
                    <div class="drop"></div>
                    <div class="drop"></div>
                    <div class="drop"></div>
                </div>
            </div>

            <div class="step-bar mb-3">
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>

            <!-- Form -->
            <div class="card-body login-body">
                <form method="POST" action="{{ route('register') }}" autocomplete="off">
                    @csrf

                    <!-- Name -->
                    <div class="input-group-animated mb-3">
                        <label for="name" class="login-label">Full Name</label>
                        <div class="input-wrap">
                            <svg class="field-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <input id="name" type="text"
                                class="login-input form-control @error('name') is-invalid @enderror"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Enter your full name"
                                required autofocus>
                        </div>

                        @error('name')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="input-group-animated mb-3">
                        <label for="email" class="login-label">Email Address</label>
                        <div class="input-wrap">
                            <svg class="field-icon" viewBox="0 0 24 24">
                                <rect x="2" y="4" width="20" height="16" rx="2"/>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                            <input id="email" type="email"
                                class="login-input form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="you@example.com"
                                required>
                        </div>

                        @error('email')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="input-group-animated mb-3">
                        <label for="password" class="login-label">Password</label>
                        <div class="input-wrap">
                            <svg class="field-icon" viewBox="0 0 24 24">
                                <rect x="3" y="11" width="18" height="11" rx="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            <input id="password" type="password"
                                class="login-input form-control @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="••••••••"
                                required>
                        </div>

                        @error('password')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="input-group-animated mb-3">
                        <label for="password-confirm" class="login-label">Confirm Password</label>
                        <div class="input-wrap">
                            <svg class="field-icon" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                            <input id="password-confirm"
                                type="password"
                                class="login-input form-control"
                                name="password_confirmation"
                                placeholder="••••••••"
                                required>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="input-group-animated mt-4 d-flex flex-column gap-3">

                        <button type="submit" class="login-btn">
                            <svg viewBox="0 0 24 24" width="20" height="20">
                                <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                                <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/>
                            </svg>
                            Register Now
                        </button>

                        <div class="divider"><span>or</span></div>

                        <a href="{{ route('login') }}" class="login-link">
                            <svg viewBox="0 0 24 24" width="20" height="20">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                                <polyline points="10 17 15 12 10 7"/>
                                <line x1="15" y1="12" x2="3" y2="12"/>
                            </svg>
                            Already have an account? Sign In
                        </a>

                    </div>

                </form>
            </div>

            <div class="card-footer-strip"></div>
        </div>

        <div class="page-footer mt-3 text-center">
            &copy; 2025 EduHire ·
            <a href="#">Privacy</a> ·
            <a href="#">Terms</a>
        </div>

    </div>
</div> 

<style>
        /* ===== Reset & Base ===== */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg-primary: #0D1B2A;
            --bg-card: #112240;
            --bg-input: #0a1628;
            --accent: #00FFFF;
            --accent-dim: rgba(0, 255, 255, 0.15);
            --accent-glow: rgba(0, 255, 255, 0.4);
            --text-primary: #e0f0ff;
            --text-secondary: #8892b0;
            --text-muted: #5a6a8a;
            --border-color: rgba(0, 255, 255, 0.12);
            --border-focus: rgba(0, 255, 255, 0.5);
            --danger: #ff6b6b;
            --radius: 12px;
            --radius-sm: 8px;
            --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, 'Helvetica Neue', Arial, sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            min-height: 100vh;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        a {
            text-decoration: none;
            color: var(--accent);
            transition: var(--transition);
        }

        a:hover {
            color: #66ffff;
        }

        /* ===== Utilities ===== */
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-3 { margin-bottom: 1rem; }
        .mb-4 { margin-bottom: 1.5rem; }
        .mt-3 { margin-top: 1rem; }
        .mt-4 { margin-top: 1.5rem; }
        .text-center { text-align: center; }
        .d-flex { display: flex; }
        .d-block { display: block; }
        .flex-column { flex-direction: column; }
        .align-items-center { align-items: center; }
        .justify-content-between { justify-content: space-between; }
        .gap-1 { gap: 0.35rem; }
        .gap-3 { gap: 1rem; }
        .small { font-size: 0.85rem; }
        .h4 { font-size: 1.5rem; font-weight: 700; }

        /* ===== Login Container ===== */
        .login-container {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            overflow: hidden;
            background:
                radial-gradient(ellipse at 20% 0%, rgba(0, 255, 255, 0.06) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 100%, rgba(0, 255, 255, 0.04) 0%, transparent 50%),
                var(--bg-primary);
        }

        /* ===== Particles ===== */
        .particles {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .particle {
            position: absolute;
            background: var(--accent);
            border-radius: 50%;
            opacity: 0;
            animation: floatUp linear infinite;
            filter: blur(1px);
        }

        .cross-particle {
            position: absolute;
            color: var(--accent);
            font-size: 18px;
            opacity: 0;
            animation: floatUp linear infinite;
            font-weight: 300;
            filter: blur(0.5px);
        }

        @keyframes floatUp {
            0% {
                transform: translateY(0) rotate(0deg) scale(0.5);
                opacity: 0;
            }
            10% {
                opacity: 0.25;
            }
            50% {
                opacity: 0.15;
            }
            90% {
                opacity: 0.08;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg) scale(1);
                opacity: 0;
            }
        }

        /* ===== Login Wrapper ===== */
        .login-wrapper {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 440px;
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== Brand Top ===== */
        .brand-top {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .brand-icon {
            width: 64px;
            height: 64px;
            background: var(--accent-dim);
            border: 2px solid rgba(0, 255, 255, 0.25);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            animation: iconPulse 3s ease-in-out infinite;
        }

        .brand-icon::before {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 20px;
            background: transparent;
            border: 1px solid rgba(0, 255, 255, 0.1);
        }

        @keyframes iconPulse {
            0%, 100% {
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.15);
            }
            50% {
                box-shadow: 0 0 35px rgba(0, 255, 255, 0.25);
            }
        }

        .brand-icon svg {
            width: 34px;
            height: 34px;
        }

        .brand-icon svg path {
            fill: var(--accent);
        }

        .brand-name {
            color: var(--text-primary);
            letter-spacing: 1px;
            margin-top: 0.25rem;
        }

        .brand-sub {
            color: var(--text-secondary);
            letter-spacing: 2px;
            text-transform: uppercase;
            font-size: 0.75rem;
        }

        /* ===== Card ===== */
        .login-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow:
                0 4px 30px rgba(0, 0, 0, 0.4),
                0 0 60px rgba(0, 255, 255, 0.03);
            backdrop-filter: blur(10px);
        }

        /* ===== Card Header ===== */
        .login-header {
            background: linear-gradient(135deg, rgba(0, 255, 255, 0.08), rgba(0, 255, 255, 0.02));
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 1.5rem;
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-icon svg {
            width: 22px;
            height: 22px;
            fill: none;
            stroke: var(--accent);
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .blood-drops {
            display: flex;
            gap: 0.35rem;
        }

        .drop {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
            opacity: 0.5;
            animation: dropPulse 2s ease-in-out infinite;
        }

        .drop:nth-child(1) { animation-delay: 0s; }
        .drop:nth-child(2) { animation-delay: 0.4s; }
        .drop:nth-child(3) { animation-delay: 0.8s; }

        @keyframes dropPulse {
            0%, 100% { opacity: 0.3; transform: scale(0.8); }
            50% { opacity: 0.8; transform: scale(1.1); }
        }

        /* ===== Step Bar ===== */
        .step-bar {
            display: flex;
            gap: 6px;
            padding: 0.75rem 1.5rem 0;
        }

        .step-bar span {
            flex: 1;
            height: 4px;
            border-radius: 4px;
            background: rgba(0, 255, 255, 0.08);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .step-bar span.active {
            background: var(--accent);
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
        }

        .step-bar span.active::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        /* ===== Card Body ===== */
        .login-body {
            padding: 1.5rem;
        }

        /* ===== Form Elements ===== */
        .input-group-animated {
            animation: slideIn 0.4s ease-out backwards;
        }

        .input-group-animated:nth-child(1) { animation-delay: 0.1s; }
        .input-group-animated:nth-child(2) { animation-delay: 0.2s; }
        .input-group-animated:nth-child(3) { animation-delay: 0.3s; }
        .input-group-animated:nth-child(4) { animation-delay: 0.4s; }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-15px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .login-label {
            display: block;
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.4rem;
        }

        .input-wrap {
            position: relative;
            display: flex;
            align-items: center;
        }

        .field-icon {
            position: absolute;
            left: 14px;
            width: 18px;
            height: 18px;
            fill: none;
            stroke: var(--text-muted);
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: var(--transition);
            z-index: 1;
            pointer-events: none;
        }

        .login-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.8rem;
            background: var(--bg-input);
            border: 1.5px solid var(--border-color);
            border-radius: var(--radius-sm);
            color: var(--text-primary);
            font-size: 0.95rem;
            transition: var(--transition);
            outline: none;
            font-family: inherit;
        }

        .login-input::placeholder {
            color: var(--text-muted);
            font-size: 0.88rem;
        }

        .login-input:focus {
            border-color: var(--border-focus);
            background: rgba(10, 22, 40, 0.9);
            box-shadow: 0 0 0 3px rgba(0, 255, 255, 0.1), 0 0 20px rgba(0, 255, 255, 0.05);
        }

        .input-wrap:focus-within .field-icon {
            stroke: var(--accent);
            filter: drop-shadow(0 0 4px rgba(0, 255, 255, 0.4));
        }

        /* ===== Validation ===== */
        .login-input.is-invalid {
            border-color: var(--danger);
        }

        .invalid-feedback {
            color: var(--danger);
            font-size: 0.8rem;
            margin-top: 0.3rem;
            display: block;
        }

        .invalid-feedback strong {
            font-weight: 500;
        }

        /* ===== Button ===== */
        .login-btn {
            width: 100%;
            padding: 0.85rem 1.5rem;
            background: linear-gradient(135deg, var(--accent), #00cccc);
            color: var(--bg-primary);
            border: none;
            border-radius: var(--radius-sm);
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            letter-spacing: 0.5px;
            font-family: inherit;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 255, 255, 0.3), 0 0 40px rgba(0, 255, 255, 0.15);
        }

        .login-btn:hover::before {
            transform: translateX(100%);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .login-btn svg {
            fill: var(--bg-primary);
            stroke: none;
        }

        /* ===== Divider ===== */
        .divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border-color), transparent);
        }

        .divider span {
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.7rem;
        }

        /* ===== Login Link ===== */
        .login-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem;
            border: 1.5px solid var(--border-color);
            border-radius: var(--radius-sm);
            color: var(--accent);
            font-size: 0.9rem;
            font-weight: 500;
            transition: var(--transition);
            background: transparent;
        }

        .login-link:hover {
            border-color: var(--accent);
            background: var(--accent-dim);
            color: #66ffff;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.08);
        }

        .login-link svg {
            fill: none;
            stroke: var(--accent);
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: var(--transition);
        }

        .login-link:hover svg {
            stroke: #66ffff;
        }

        /* ===== Footer Strip ===== */
        .card-footer-strip {
            height: 4px;
            background: linear-gradient(90deg, var(--accent), #00cccc, var(--accent));
            background-size: 200% 100%;
            animation: stripMove 3s linear infinite;
        }

        @keyframes stripMove {
            0% { background-position: 0% 50%; }
            100% { background-position: 200% 50%; }
        }

        /* ===== Page Footer ===== */
        .page-footer {
            color: var(--text-muted);
            font-size: 0.78rem;
            letter-spacing: 0.5px;
        }

        .page-footer a {
            color: var(--text-secondary);
            transition: var(--transition);
        }

        .page-footer a:hover {
            color: var(--accent);
        }

        /* ===== Responsive ===== */
        @media (max-width: 480px) {
            .login-container {
                padding: 1rem 0.75rem;
            }

            .login-body {
                padding: 1.25rem;
            }

            .login-header {
                padding: 0.85rem 1.25rem;
                font-size: 0.95rem;
            }

            .brand-icon {
                width: 56px;
                height: 56px;
            }

            .h4 {
                font-size: 1.3rem;
            }
        }
    </style>