<div class="login-container">

    <!-- Background Grid -->
    <div class="grid-bg"></div>

    <!-- Glow Orb -->
    <div class="glow-orb"></div>

    <!-- Floating Particles -->
    <div class="particles" id="particles">
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
        <span class="particle"></span>
    </div>

    <!-- CENTER WRAPPER -->
    <div class="center-wrapper">

        <div class="login-card">

            <!-- HEADER -->
            <div class="login-header text-center">

                <div class="logo-area mb-3">

                    <div class="logo-drop mb-2">
                        <svg class="logo-drop-svg" viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="dropGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#00FFFF"/>
                                    <stop offset="100%" stop-color="#008B8B"/>
                                </linearGradient>
                            </defs>

                            <path d="M50 10 C50 10, 10 55, 10 75 C10 97 28 110 50 110 C72 110 90 97 90 75 C90 55 50 10 50 10Z"
                                  fill="url(#dropGrad)"/>

                            <rect x="42" y="50" width="16" height="42" rx="4" fill="#0D1B2A" opacity="0.9"/>
                            <rect x="30" y="62" width="40" height="16" rx="4" fill="#0D1B2A" opacity="0.9"/>
                        </svg>
                    </div>

                    <div class="brand-name">EduHire</div>
                    <div class="brand-sub">Education · Careers</div>

                </div>

                <div class="header-title-wrapper d-flex align-items-center justify-content-center gap-2">

                    <span class="icon-lock">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="2">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
                        </svg>
                    </span>

                    <span class="header-title">
                        Sign In to Your Account
                    </span>

                </div>

            </div>


            <!-- BODY -->
            <div class="login-body">

                <form method="POST" action="{{ route('login') }}">
                    @csrf


                    <!-- EMAIL -->
                    <div class="form-group-custom">

                        <label for="email" class="login-label">
                            Email Address
                        </label>

                        <input id="email"
                               type="email"
                               class="login-input @error('email') is-invalid @enderror"
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="you@example.com"
                               required
                               autocomplete="off"
                               autofocus>

                        @error('email')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>


                    <!-- PASSWORD -->
                    <div class="form-group-custom">

                        <label for="password" class="login-label">
                            Password
                        </label>

                        <input id="password"
                               type="password"
                               class="login-input @error('password') is-invalid @enderror"
                               name="password"
                               placeholder="••••••••"
                               required
                               autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>


                    <!-- REMEMBER -->
                    <div class="form-check custom-check mb-4">

                        <input class="form-check-input"
                               type="checkbox"
                               name="remember"
                               id="remember"
                               {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label login-remember" for="remember">
                            Remember Me
                        </label>

                    </div>


                    <!-- BUTTON -->
                    <button type="submit" class="login-btn mb-3">
                        Sign In
                    </button>


                    <!-- FORGOT PASSWORD -->
                    @if (Route::has('password.request'))

                    <div class="text-end mb-3">

                        <a class="login-link"
                           href="{{ route('password.request') }}">

                            Forgot Your Password?

                        </a>

                    </div>

                    @endif

                </form>


                <!-- DIVIDER -->
                <div class="divider">
                    <span>or</span>
                </div>


                <!-- SIGNUP -->
                <div class="text-center mt-3">

                    <span class="signup-text me-2">
                        Don't have an account?
                    </span>

                    <a href="{{ route('register') }}" class="signup-btn">
                        Register
                    </a>

                </div>

            </div>


            <!-- INFO STRIP -->
            <div class="info-strip text-center">

                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>
                </svg>

                Your information is fully secure and encrypted.

            </div>

        </div>

    </div>

</div>


<style>
        /* ══════════════════════════════════════════
           GLOBAL & THEME
        ══════════════════════════════════════════ */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        :root {
            --navy: #0D1B2A;
            --navy-light: #1B2D45;
            --navy-mid: #162236;
            --cyan: #00FFFF;
            --cyan-dim: rgba(0, 255, 255, 0.15);
            --cyan-glow: rgba(0, 255, 255, 0.4);
            --text-primary: #E0E6ED;
            --text-secondary: #8899AA;
            --card-bg: rgba(13, 27, 42, 0.85);
            --card-border: rgba(0, 255, 255, 0.12);
            --input-bg: rgba(22, 34, 54, 0.9);
            --input-border: rgba(0, 255, 255, 0.18);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--navy);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ══════════════════════════════════════════
           LOGIN CONTAINER
        ══════════════════════════════════════════ */
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: linear-gradient(145deg, #0D1B2A 0%, #0a1421 40%, #0D1B2A 70%, #0f2035 100%);
        }

        /* ══════════════════════════════════════════
           GRID BACKGROUND
        ══════════════════════════════════════════ */
        .grid-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(0, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            z-index: 0;
            pointer-events: none;
        }

        /* ══════════════════════════════════════════
           GLOW ORB
        ══════════════════════════════════════════ */
        .glow-orb {
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translateX(-50%);
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 255, 255, 0.06) 0%, transparent 70%);
            z-index: 0;
            pointer-events: none;
            animation: orbPulse 6s ease-in-out infinite;
        }

        @keyframes orbPulse {
            0%, 100% { transform: translateX(-50%) scale(1); opacity: 0.6; }
            50% { transform: translateX(-50%) scale(1.15); opacity: 1; }
        }

        /* ══════════════════════════════════════════
           PARTICLES
        ══════════════════════════════════════════ */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background: var(--cyan);
            border-radius: 50%;
            opacity: 0;
            animation: floatParticle 8s infinite ease-in-out;
        }

        .particle:nth-child(1)  { left: 5%;  top: 90%; animation-delay: 0s;   animation-duration: 7s;  }
        .particle:nth-child(2)  { left: 15%; top: 85%; animation-delay: 0.8s; animation-duration: 9s;  }
        .particle:nth-child(3)  { left: 25%; top: 95%; animation-delay: 1.5s; animation-duration: 6s;  }
        .particle:nth-child(4)  { left: 35%; top: 88%; animation-delay: 2.2s; animation-duration: 8s;  }
        .particle:nth-child(5)  { left: 45%; top: 92%; animation-delay: 0.5s; animation-duration: 10s; }
        .particle:nth-child(6)  { left: 55%; top: 87%; animation-delay: 3s;   animation-duration: 7s;  }
        .particle:nth-child(7)  { left: 65%; top: 93%; animation-delay: 1s;   animation-duration: 9s;  }
        .particle:nth-child(8)  { left: 75%; top: 86%; animation-delay: 2s;   animation-duration: 6s;  }
        .particle:nth-child(9)  { left: 85%; top: 91%; animation-delay: 0.3s; animation-duration: 8s;  }
        .particle:nth-child(10) { left: 92%; top: 89%; animation-delay: 1.8s; animation-duration: 11s; }
        .particle:nth-child(11) { left: 10%; top: 94%; animation-delay: 2.5s; animation-duration: 7s;  }
        .particle:nth-child(12) { left: 50%; top: 96%; animation-delay: 3.5s; animation-duration: 9s;  }

        @keyframes floatParticle {
            0%   { transform: translateY(0);      opacity: 0;   }
            10%  { opacity: 0.6; }
            90%  { opacity: 0.6; }
            100% { transform: translateY(-100vh);  opacity: 0;   }
        }

        /* ══════════════════════════════════════════
           CARD
        ══════════════════════════════════════════ */
        .container {
            position: relative;
            z-index: 1;
            width: 100%;
        }

        .login-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--card-border);
            border-radius: 20px !important;
            width: 100%;
            max-width: 440px;
            overflow: hidden;
            animation: cardFadeIn 0.8s ease-out;
        }

        @keyframes cardFadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* ══════════════════════════════════════════
           HEADER
        ══════════════════════════════════════════ */
        .login-header {
            background: linear-gradient(135deg, var(--navy-light), var(--navy-mid));
            padding: 30px 30px 22px;
            border-bottom: 1px solid var(--card-border);
        }

        /* Logo */
        .logo-area {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo-drop {
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-drop-svg {
            width: 56px;
            height: 56px;
            filter: drop-shadow(0 0 12px rgba(0, 255, 255, 0.3));
        }

        /* Override SVG gradient to cyan theme */
        .logo-drop-svg stop:first-child {
            stop-color: #00FFFF !important;
        }
        .logo-drop-svg stop:last-child {
            stop-color: #008B8B !important;
        }

        .brand-name {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: 1px;
            background: linear-gradient(135deg, #00FFFF, #00CED1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .brand-sub {
            font-size: 0.72rem;
            color: var(--text-secondary);
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-top: 2px;
        }

        /* Lock icon + title */
        .icon-lock {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            background: var(--cyan-dim);
            border-radius: 8px;
            color: var(--cyan);
        }

        .icon-lock svg {
            width: 16px;
            height: 16px;
        }

        .header-title {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        /* ══════════════════════════════════════════
           BODY / FORM
        ══════════════════════════════════════════ */
        .login-body {
            padding: 28px 30px 24px;
        }

        .form-group-custom {
            margin-bottom: 18px;
        }

        .login-label {
            display: block;
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .login-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--input-border);
            border-radius: 12px;
            background: var(--input-bg);
            color: var(--text-primary);
            font-size: 0.92rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            outline: none;
        }

        .login-input::placeholder {
            color: rgba(136, 153, 170, 0.5);
        }

        .login-input:focus {
            border-color: var(--cyan);
            box-shadow: 0 0 0 3px rgba(0, 255, 255, 0.1), 0 0 20px rgba(0, 255, 255, 0.05);
            background: rgba(22, 34, 54, 1);
        }

        .login-input.is-invalid {
            border-color: #ff6b6b;
        }

        .invalid-feedback {
            color: #ff6b6b;
            font-size: 0.8rem;
            margin-top: 4px;
        }

        /* Checkbox */
        .custom-check {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .custom-check .form-check-input {
            width: 18px;
            height: 18px;
            border: 1.5px solid var(--input-border);
            background: var(--input-bg);
            border-radius: 5px;
            cursor: pointer;
            margin: 0;
            transition: all 0.2s;
        }

        .custom-check .form-check-input:checked {
            background-color: var(--cyan);
            border-color: var(--cyan);
        }

        .custom-check .form-check-input:focus {
            box-shadow: 0 0 0 3px rgba(0, 255, 255, 0.15);
        }

        .login-remember {
            font-size: 0.85rem;
            color: var(--text-secondary);
            cursor: pointer;
            user-select: none;
        }

        /* Button */
        .login-btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #00FFFF, #00CED1);
            color: #0D1B2A;
            font-size: 0.95rem;
            font-weight: 700;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 0.3px;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 255, 255, 0.3);
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:active {
            transform: translateY(0);
        }

        /* Link */
        .login-link {
            color: var(--cyan);
            font-size: 0.84rem;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
        }

        .login-link:hover {
            color: #66FFFF;
            text-decoration: underline;
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 16px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--card-border);
        }

        .divider span {
            font-size: 0.78rem;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Signup */
        .signup-text {
            font-size: 0.88rem;
            color: var(--text-secondary);
        }

        .signup-btn {
            display: inline-block;
            padding: 8px 22px;
            border: 1.5px solid var(--cyan);
            border-radius: 10px;
            color: var(--cyan);
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .signup-btn:hover {
            background: var(--cyan-dim);
            color: #66FFFF;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.1);
        }

        /* ══════════════════════════════════════════
           INFO STRIP
        ══════════════════════════════════════════ */
        .info-strip {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 14px 20px;
            font-size: 0.76rem;
            color: var(--text-secondary);
            border-top: 1px solid var(--card-border);
            background: rgba(0, 255, 255, 0.02);
        }

        .info-strip svg {
            width: 16px;
            height: 16px;
            color: var(--cyan);
            flex-shrink: 0;
        }

        /* ══════════════════════════════════════════
           RESPONSIVE
        ══════════════════════════════════════════ */
        @media (max-width: 480px) {
            .login-header {
                padding: 24px 20px 18px;
            }
            .login-body {
                padding: 22px 20px 18px;
            }
            .brand-name {
                font-size: 1.4rem;
            }
            .login-card {
                border-radius: 16px !important;
                margin: 10px;
            }
        }
    </style>