<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg shadow-sm py-2 dark-navbar">
    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center fw-bold fs-5 text-light" href="/">
            <div class="brand-icon-wrapper">
                <i class="bi bi-book-half brand-icon"></i>
            </div>
            <span class="brand-text">EduHire</span>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler border-0 custom-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTopNav"
                aria-controls="navbarTopNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="toggler-bar"></div>
            <div class="toggler-bar"></div>
            <div class="toggler-bar"></div>
        </button>

        <!-- Top Nav Links -->
        <div class="collapse navbar-collapse" id="navbarTopNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link top-nav-link {{ request()->is('profile') ? 'active-link' : '' }}" href="{{ url('/profile') }}">
                        <i class="bi bi-person-plus"></i>  Be a Teacher
                        <span class="nav-link-glow"></span>
                    </a>
                </li>

                @auth
                    @if(auth()->user()->is_admin == 1)
                        <li class="nav-item">
                            <a class="nav-link top-nav-link {{ request()->is('admin') ? 'active-link' : '' }}" href="/admin">
                                <i class="bi bi-speedometer2 me-1"></i> Admin Panel
                                <span class="nav-link-glow"></span>
                            </a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline w-100">
                            @csrf
                            <button type="submit" class="btn-logout w-100 text-start">
                                <i class="bi bi-box-arrow-right me-1"></i> Logout
                                <span class="btn-logout-shine"></span>
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link top-nav-link {{ request()->is('login') ? 'active-link' : '' }}" href="/login">
                            <i class="bi bi-person-circle me-1"></i> Login
                            <span class="nav-link-glow"></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link signup-btn text-center" href="/register">
                            <i class="bi bi-person-plus me-1"></i> Signup
                            <span class="signup-btn-shine"></span>
                        </a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<!-- ===== CSS ===== -->
<style>
/* ===== KEYFRAME ANIMATIONS ===== */

/* Brand icon floating pulse */
@keyframes iconFloat {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
        filter: drop-shadow(0 0 5px #00FFFF);
    }
    25% {
        transform: translateY(-3px) rotate(-5deg);
        filter: drop-shadow(0 0 15px #00FFFF);
    }
    50% {
        transform: translateY(-5px) rotate(0deg);
        filter: drop-shadow(0 0 25px #00FFFF);
    }
    75% {
        transform: translateY(-3px) rotate(5deg);
        filter: drop-shadow(0 0 15px #00FFFF);
    }
}

/* Brand text shimmer */
@keyframes textShimmer {
    0% {
        background-position: -200% center;
    }
    100% {
        background-position: 200% center;
    }
}

/* Glowing border animation */
@keyframes borderGlow {
    0%, 100% {
        box-shadow: 0 1px 0 0 rgba(0,255,255,0.3);
    }
    50% {
        box-shadow: 0 1px 0 0 rgba(0,255,255,0.8), 0 4px 15px rgba(0,255,255,0.15);
    }
}

/* Navbar bottom line sweep */
@keyframes lineSweep {
    0% {
        left: -100%;
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        left: 100%;
        opacity: 0;
    }
}

/* Signup button pulse glow */
@keyframes pulseGlow {
    0%, 100% {
        box-shadow: 0 0 5px rgba(0,255,255,0.4), 0 0 10px rgba(0,255,255,0.1);
    }
    50% {
        box-shadow: 0 0 15px rgba(0,255,255,0.6), 0 0 30px rgba(0,255,255,0.3), 0 0 45px rgba(0,255,255,0.1);
    }
}

/* Shine sweep for buttons */
@keyframes shineSweep {
    0% {
        left: -100%;
    }
    100% {
        left: 200%;
    }
}

/* Active link underline */
@keyframes underlinePulse {
    0%, 100% {
        box-shadow: 0 2px 8px rgba(0,255,255,0.5);
        opacity: 1;
    }
    50% {
        box-shadow: 0 2px 20px rgba(0,255,255,0.9);
        opacity: 0.8;
    }
}

/* Fade slide in for nav items */
@keyframes fadeSlideDown {
    0% {
        opacity: 0;
        transform: translateY(-15px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Toggler bar animation */
@keyframes togglerPulse {
    0%, 100% {
        background: #00FFFF;
        box-shadow: 0 0 3px rgba(0,255,255,0.5);
    }
    50% {
        background: #39dbdb;
        box-shadow: 0 0 8px rgba(0,255,255,0.8);
    }
}

/* Particle float */
@keyframes particleFloat {
    0%, 100% {
        transform: translateY(0) scale(1);
        opacity: 0.6;
    }
    50% {
        transform: translateY(-8px) scale(1.5);
        opacity: 1;
    }
}

/* Letter spacing breathe */
@keyframes letterBreathe {
    0%, 100% {
        letter-spacing: 1px;
    }
    50% {
        letter-spacing: 3px;
    }
}

/* ===== NAVBAR BASE ===== */
.dark-navbar {
    background: linear-gradient(135deg, #0D1B2A 0%, #0a1628 40%, #0D1B2A 100%);
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border-bottom: 1px solid rgba(0,255,255,0.15);
    animation: borderGlow 3s ease-in-out infinite;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

/* Animated bottom sweep line */
.dark-navbar::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: -100%;
    width: 60%;
    height: 1px;
    background: linear-gradient(90deg, transparent, #00FFFF, transparent);
    animation: lineSweep 4s ease-in-out infinite;
}

/* ===== BRAND ===== */
.navbar-brand {
    font-size: 1.5rem !important;
    gap: 10px;
    display: flex;
    align-items: center;
    text-decoration: none;
    position: relative;
}

.brand-icon-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.brand-icon {
    color: #00FFFF !important;
    font-size: 1.7rem;
    animation: iconFloat 3s ease-in-out infinite;
    transition: all 0.3s ease;
}

/* Small particles around the icon */
.brand-icon-wrapper::before,
.brand-icon-wrapper::after {
    content: '';
    position: absolute;
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: #00FFFF;
    animation: particleFloat 2.5s ease-in-out infinite;
}

.brand-icon-wrapper::before {
    top: -2px;
    right: -3px;
    animation-delay: 0s;
}

.brand-icon-wrapper::after {
    bottom: 0px;
    left: -2px;
    animation-delay: 1.2s;
}

.brand-text {
    background: linear-gradient(
        90deg,
        #ffffff 0%,
        #ffffff 40%,
        #00FFFF 50%,
        #ffffff 60%,
        #ffffff 100%
    );
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: textShimmer 4s linear infinite;
    font-weight: 700;
    font-size: 1.5rem;
}

.navbar-brand:hover .brand-icon {
    animation-duration: 1s;
    filter: drop-shadow(0 0 20px #00FFFF);
}

.navbar-brand:hover .brand-text {
    animation-duration: 1.5s;
}

/* ===== CUSTOM TOGGLER ===== */
.custom-toggler {
    display: flex;
    flex-direction: column;
    gap: 5px;
    padding: 8px;
    cursor: pointer;
    background: transparent !important;
    border: 1px solid rgba(0,255,255,0.3) !important;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.custom-toggler:hover {
    border-color: #00FFFF !important;
    box-shadow: 0 0 15px rgba(0,255,255,0.3);
}

.custom-toggler:focus {
    box-shadow: 0 0 15px rgba(0,255,255,0.4) !important;
}

.toggler-bar {
    width: 24px;
    height: 2px;
    background: #00FFFF;
    border-radius: 2px;
    transition: all 0.3s ease;
    animation: togglerPulse 2s ease-in-out infinite;
}

.toggler-bar:nth-child(1) { animation-delay: 0s; }
.toggler-bar:nth-child(2) { animation-delay: 0.2s; width: 18px; }
.toggler-bar:nth-child(3) { animation-delay: 0.4s; }

.custom-toggler:hover .toggler-bar {
    background: #00FFFF;
    box-shadow: 0 0 10px rgba(0,255,255,0.8);
}

.custom-toggler:hover .toggler-bar:nth-child(2) {
    width: 24px;
}

/* ===== NAV LINKS ===== */
.top-nav-link {
    color: rgba(255,255,255,0.75) !important;
    font-weight: 500;
    padding: 8px 18px !important;
    border-radius: 10px;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    font-size: 0.95rem;
    letter-spacing: 0.3px;
}

/* Underline effect on hover */
.top-nav-link::after {
    content: '';
    position: absolute;
    bottom: 2px;
    left: 50%;
    transform: translateX(-50%) scaleX(0);
    width: 60%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #00FFFF, transparent);
    border-radius: 2px;
    transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
}

.top-nav-link:hover::after {
    transform: translateX(-50%) scaleX(1);
}

.top-nav-link:hover {
    color: #00FFFF !important;
    background: rgba(0,255,255,0.08) !important;
    transform: translateY(-2px);
    text-shadow: 0 0 10px rgba(0,255,255,0.3);
}

.top-nav-link:hover i {
    filter: drop-shadow(0 0 5px #00FFFF);
}

/* Glow element inside link */
.nav-link-glow {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(0,255,255,0.1);
    transform: translate(-50%, -50%);
    transition: all 0.5s ease;
    pointer-events: none;
}

.top-nav-link:hover .nav-link-glow {
    width: 200px;
    height: 200px;
}

/* ===== ACTIVE LINK ===== */
.active-link {
    color: #00FFFF !important;
    background: rgba(0,255,255,0.1) !important;
    border-bottom: none;
    position: relative;
}

.active-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 15%;
    width: 70%;
    height: 2px;
    background: #00FFFF;
    border-radius: 2px;
    animation: underlinePulse 2s ease-in-out infinite;
}

.active-link::after {
    display: none;
}

.active-link i {
    color: #00FFFF;
    filter: drop-shadow(0 0 8px #00FFFF);
}

/* ===== SIGNUP BUTTON ===== */
.signup-btn {
    background: linear-gradient(135deg, #00FFFF 0%, #00cccc 50%, #00FFFF 100%) !important;
    background-size: 200% auto;
    color: #0D1B2A !important;
    padding: 9px 28px !important;
    border-radius: 25px !important;
    font-weight: 700 !important;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
    animation: pulseGlow 2.5s ease-in-out infinite;
    position: relative;
    overflow: hidden;
    text-shadow: none;
    border: none;
    font-size: 0.95rem;
}

.signup-btn::after {
    display: none !important;
}

/* Shine sweep on signup */
.signup-btn-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,0.4),
        transparent
    );
    transform: skewX(-20deg);
    animation: shineSweep 3s ease-in-out infinite;
    pointer-events: none;
}

.signup-btn:hover {
    transform: translateY(-3px) scale(1.05) !important;
    box-shadow: 0 8px 30px rgba(0,255,255,0.5), 0 0 40px rgba(0,255,255,0.2) !important;
    background-position: right center !important;
    color: #0D1B2A !important;
    animation: none;
}

.signup-btn:active {
    transform: translateY(0) scale(0.98) !important;
}

/* ===== LOGOUT BUTTON ===== */
.btn-logout {
    background: transparent;
    border: 1px solid rgba(0,255,255,0.25);
    color: rgba(255,255,255,0.8);
    padding: 8px 22px;
    border-radius: 10px;
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

/* Shine on logout */
.btn-logout-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(0,255,255,0.15),
        transparent
    );
    transform: skewX(-20deg);
    transition: left 0.6s ease;
    pointer-events: none;
}

.btn-logout:hover .btn-logout-shine {
    left: 200%;
}

.btn-logout:hover {
    background: rgba(0,255,255,0.08);
    border-color: #00FFFF;
    color: #00FFFF;
    transform: translateY(-2px);
    box-shadow: 0 0 15px rgba(0,255,255,0.2), inset 0 0 15px rgba(0,255,255,0.05);
}

.btn-logout:hover i {
    filter: drop-shadow(0 0 5px #00FFFF);
}

.btn-logout:active {
    transform: translateY(0);
}

/* ===== NAV ITEMS STAGGERED ENTRANCE ===== */
.navbar-nav .nav-item {
    animation: fadeSlideDown 0.6s ease forwards;
    opacity: 0;
}

.navbar-nav .nav-item:nth-child(1) { animation-delay: 0.1s; }
.navbar-nav .nav-item:nth-child(2) { animation-delay: 0.2s; }
.navbar-nav .nav-item:nth-child(3) { animation-delay: 0.3s; }
.navbar-nav .nav-item:nth-child(4) { animation-delay: 0.4s; }
.navbar-nav .nav-item:nth-child(5) { animation-delay: 0.5s; }

/* ===== SCROLLBAR GLOW (if applicable) ===== */
.dark-navbar::-webkit-scrollbar {
    height: 2px;
}

.dark-navbar::-webkit-scrollbar-thumb {
    background: #00FFFF;
    border-radius: 10px;
}

/* ===== RESPONSIVE / MOBILE ===== */
@media (max-width: 991.98px) {
    .navbar-nav {
        text-align: center;
        gap: 8px !important;
        margin-top: 15px;
        padding: 15px 0;
        border-top: 1px solid rgba(0,255,255,0.1);
    }

    .signup-btn, .btn-logout {
        width: 100%;
        text-align: center;
    }

    .navbar-brand {
        font-size: 1.25rem !important;
    }

    .brand-text {
        font-size: 1.25rem;
    }

    .brand-icon {
        font-size: 1.4rem;
    }

    .top-nav-link {
        padding: 12px 18px !important;
        border-radius: 10px;
        margin: 2px 0;
    }

    .top-nav-link:hover {
        transform: none;
        background: rgba(0,255,255,0.1) !important;
    }

    .signup-btn {
        margin-top: 5px;
        padding: 12px 28px !important;
        border-radius: 12px !important;
    }

    .btn-logout {
        padding: 12px 22px;
        text-align: center !important;
        border-radius: 10px;
    }

    .active-link::before {
        left: 25%;
        width: 50%;
    }

    /* Animate collapse open */
    .navbar-collapse.show .nav-item,
    .navbar-collapse.collapsing .nav-item {
        animation: fadeSlideDown 0.4s ease forwards;
    }
}

@media (max-width: 576px) {
    .navbar-brand {
        font-size: 1.1rem !important;
    }

    .brand-text {
        font-size: 1.1rem;
    }

    .brand-icon {
        font-size: 1.3rem;
    }

    .brand-icon-wrapper::before,
    .brand-icon-wrapper::after {
        width: 3px;
        height: 3px;
    }
}

/* ===== HOVER RIPPLE EFFECT ON NAV LINKS ===== */
.top-nav-link:active {
    transform: scale(0.97);
}

/* Icon hover rotation */
.top-nav-link:hover i {
    display: inline-block;
    animation: none;
    transition: transform 0.3s ease;
    transform: rotate(-10deg) scale(1.15);
}

.btn-logout:hover i {
    display: inline-block;
    transition: transform 0.3s ease;
    transform: translateX(3px);
}
</style>