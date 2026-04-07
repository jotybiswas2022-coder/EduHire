@extends('frontend.app')

@section('content')

<!-- ==========================
     Classes Section
=========================== -->
<section class="classes-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <div class="section-badge">
                <span class="badge-icon"><i class="bi bi-mortarboard-fill"></i></span>
                <span class="badge-text">EXPLORE CLASSES</span>
            </div>
            <h2 class="section-title">Find Teachers for Your Class</h2>
            <p class="section-desc">Click on a card below to find teachers for your desired class</p>
            <div class="title-underline">
                <span class="line"></span>
                <span class="diamond"><i class="bi bi-diamond-fill"></i></span>
                <span class="line"></span>
            </div>
        </div>

        <!-- Floating Particles -->
        <div class="particles-container">
            <div class="particle p1"></div>
            <div class="particle p2"></div>
            <div class="particle p3"></div>
            <div class="particle p4"></div>
            <div class="particle p5"></div>
            <div class="particle p6"></div>
            <div class="particle p7"></div>
            <div class="particle p8"></div>
            <div class="particle p9"></div>
            <div class="particle p10"></div>
        </div>

        <div class="row">
            @foreach($preferred_classes as $index => $class)
            <div class="col-lg-4 col-md-6 mb-4 card-animate" style="animation-delay: {{ $index * 0.1 }}s;">
                <a href="{{ route('teacher.list', ['class_id' => $class->id]) }}" class="card class-card text-decoration-none h-100">
                    <div class="card-glow"></div>
                    <div class="card-border-anim"></div>
                    <div class="card-body text-center py-5 position-relative">
                        <div class="icon-wrapper">
                            <div class="icon-ring"></div>
                            <div class="icon-ring ring-2"></div>
                            <i class="bi bi-book-half"></i>
                        </div>
                        <h5 class="card-title">{{ $class->preferred_class_name }}</h5>
                        <p class="card-text">Find teachers for this class</p>
                        <div class="card-arrow">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </div>
                        <div class="card-shine"></div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================
     Stats Counter Section
=========================== -->
<section class="stats-section py-5">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
                <div class="stat-number" data-target="500">0</div>
                <div class="stat-label">Qualified Teachers</div>
                <div class="stat-bar"><span></span></div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                <div class="stat-number" data-target="50">0</div>
                <div class="stat-label">Subjects Covered</div>
                <div class="stat-bar"><span></span></div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="bi bi-emoji-smile-fill"></i></div>
                <div class="stat-number" data-target="1200">0</div>
                <div class="stat-label">Happy Students</div>
                <div class="stat-bar"><span></span></div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="bi bi-star-fill"></i></div>
                <div class="stat-number" data-target="98">0</div>
                <div class="stat-label">Success Rate %</div>
                <div class="stat-bar"><span></span></div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================
     Contact Section
=========================== -->
<section class="contact-section py-5" id="contact">
    <div class="container">
        <div class="section-header text-center mb-5">
            <div class="section-badge">
                <span class="badge-icon"><i class="bi bi-envelope-fill"></i></span>
                <span class="badge-text">CONTACT US</span>
            </div>
            <h2 class="section-title">Get in Touch</h2>
            <p class="section-desc">If you have any questions or need to add a new Preferred subject or Class, let us know</p>
            <div class="title-underline">
                <span class="line"></span>
                <span class="diamond"><i class="bi bi-diamond-fill"></i></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="contact-grid row justify-content-center">
            <!-- Info Cards -->
            <div class="col-lg-4 col-md-5 mb-4">
                <div class="contact-info-stack">
                    <div class="info-card">
                        <div class="info-icon-wrap">
                            <i class="bi bi-geo-alt-fill"></i>
                            <div class="info-pulse"></div>
                        </div>
                        <div class="info-content">
                            <h6>Our Location</h6>
                            <p>Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon-wrap">
                            <i class="bi bi-telephone-fill"></i>
                            <div class="info-pulse"></div>
                        </div>
                        <div class="info-content">
                            <h6>Phone Number</h6>
                            <p>{{ $account->phone }}</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon-wrap">
                            <i class="bi bi-envelope-at-fill"></i>
                            <div class="info-pulse"></div>
                        </div>
                        <div class="info-content">
                            <h6>Email Address</h6>
                            <p>{{ $account->email }}</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon-wrap">
                            <i class="bi bi-clock-fill"></i>
                            <div class="info-pulse"></div>
                        </div>
                        <div class="info-content">
                            <h6>Working Hours</h6>
                            <p>Sat - Thu: 9AM - 6PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="col-lg-7 col-md-7 mb-4">
                <div class="contact-form-wrapper">
                    <div class="form-header">
                        <h4><i class="bi bi-chat-dots-fill"></i> Send us a Message</h4>
                        <p>We'll get back to you within 24 hours</p>
                    </div>
                    <form id="contactForm" action="{{ url('/contactus') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating-group">
                                    <input type="text" name="name" class="form-input" placeholder=" " required id="nameInput">
                                    <label for="nameInput"><i class="bi bi-person-fill"></i> Your Name</label>
                                    <div class="input-highlight"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating-group">
                                    <input type="email" name="email" class="form-input" placeholder=" " required id="emailInput">
                                    <label for="emailInput"><i class="bi bi-envelope-fill"></i> Your Email</label>
                                    <div class="input-highlight"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating-group">
                            <textarea name="message" class="form-input textarea" rows="5" placeholder=" " required id="messageInput"></textarea>
                            <label for="messageInput"><i class="bi bi-chat-left-text-fill"></i> Message</label>
                            <div class="input-highlight"></div>
                        </div>

                        <button type="submit" class="btn-submit" id="contactSubmitBtn">
                            <span class="btn-text"><i class="bi bi-send-fill"></i> Send Message</span>
                            <span class="btn-loading"><i class="bi bi-arrow-repeat spin-icon"></i> Sending...</span>
                            <div class="btn-ripple"></div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// ===== Counter Animation =====
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 80;

    const observerOptions = {
        threshold: 0.5
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute('data-target');
                const increment = target / speed;

                const updateCount = () => {
                    const count = +counter.innerText;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = target + '+';
                    }
                };
                updateCount();

                // Animate stat bars
                const bar = counter.parentElement.querySelector('.stat-bar span');
                if (bar) bar.style.width = '100%';

                observer.unobserve(counter);
            }
        });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));

    // ===== Form Submit Loading =====
    const form = document.getElementById('contactForm');
    const btn = document.getElementById('contactSubmitBtn');

    if (form && btn) {
        form.addEventListener('submit', function() {
            btn.classList.add('loading');
            btn.disabled = true;
        });
    }
});
</script>

<style>
/* ===== ROOT VARIABLES ===== */
:root {
    --dark-navy: #0D1B2A;
    --navy-light: #1B2D45;
    --navy-mid: #142236;
    --cyan: #00FFFF;
    --cyan-dim: rgba(0, 255, 255, 0.15);
    --cyan-glow: rgba(0, 255, 255, 0.3);
    --text-primary: #E0E6ED;
    --text-secondary: #8899AA;
    --white: #FFFFFF;
}

/* ===== GLOBAL SECTION STYLES ===== */
.classes-section,
.stats-section,
.contact-section {
    background-color: var(--dark-navy);
    position: relative;
    overflow: hidden;
}

/* ===== SECTION HEADER ===== */
.section-header {
    position: relative;
    z-index: 2;
}

.section-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--cyan-dim);
    border: 1px solid rgba(0, 255, 255, 0.2);
    border-radius: 50px;
    padding: 6px 20px;
    margin-bottom: 16px;
}

.badge-icon {
    color: var(--cyan);
    font-size: 14px;
}

.badge-text {
    color: var(--cyan);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
}

.section-title {
    color: var(--white);
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 10px;
}

.section-desc {
    color: var(--text-secondary);
    font-size: 1rem;
    max-width: 550px;
    margin: 0 auto 20px;
    line-height: 1.6;
}

.title-underline {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.title-underline .line {
    display: block;
    width: 60px;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--cyan));
    border-radius: 2px;
}

.title-underline .line:last-child {
    background: linear-gradient(90deg, var(--cyan), transparent);
}

.title-underline .diamond {
    color: var(--cyan);
    font-size: 8px;
    animation: rotateDiamond 4s linear infinite;
}

@keyframes rotateDiamond {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* ===== PARTICLES ===== */
.particles-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: var(--cyan);
    border-radius: 50%;
    opacity: 0.3;
    animation: floatParticle 8s ease-in-out infinite;
}

.p1 { top: 10%; left: 5%; animation-delay: 0s; animation-duration: 7s; }
.p2 { top: 20%; left: 90%; animation-delay: 1s; animation-duration: 9s; }
.p3 { top: 60%; left: 15%; animation-delay: 2s; animation-duration: 6s; }
.p4 { top: 80%; left: 80%; animation-delay: 0.5s; animation-duration: 8s; }
.p5 { top: 40%; left: 50%; animation-delay: 3s; animation-duration: 10s; }
.p6 { top: 15%; left: 70%; animation-delay: 1.5s; animation-duration: 7.5s; }
.p7 { top: 70%; left: 30%; animation-delay: 2.5s; animation-duration: 6.5s; }
.p8 { top: 50%; left: 95%; animation-delay: 0.8s; animation-duration: 9.5s; }
.p9 { top: 90%; left: 45%; animation-delay: 3.5s; animation-duration: 8.5s; }
.p10 { top: 35%; left: 10%; animation-delay: 1.2s; animation-duration: 7.2s; }

@keyframes floatParticle {
    0%, 100% { transform: translate(0, 0) scale(1); opacity: 0.2; }
    25% { transform: translate(20px, -30px) scale(1.5); opacity: 0.5; }
    50% { transform: translate(-15px, -60px) scale(1); opacity: 0.3; }
    75% { transform: translate(25px, -30px) scale(1.8); opacity: 0.5; }
}

/* ===== CLASS CARDS ===== */
.card-animate {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
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

.class-card {
    background: var(--navy-light);
    border: 1px solid rgba(0, 255, 255, 0.08);
    border-radius: 16px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    cursor: pointer;
}

.class-card:hover {
    transform: translateY(-8px);
    border-color: rgba(0, 255, 255, 0.3);
    box-shadow: 0 20px 60px rgba(0, 255, 255, 0.1);
}

.class-card .card-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle at center, rgba(0, 255, 255, 0.05), transparent 60%);
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
}

.class-card:hover .card-glow {
    opacity: 1;
}

.class-card .card-border-anim {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--cyan), transparent);
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.class-card:hover .card-border-anim {
    transform: scaleX(1);
}

.class-card .card-body {
    z-index: 1;
}

.class-card .icon-wrapper {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    margin-bottom: 20px;
}

.class-card .icon-wrapper i {
    font-size: 2rem;
    color: var(--cyan);
    z-index: 2;
    position: relative;
}

.class-card .icon-ring {
    position: absolute;
    width: 80px;
    height: 80px;
    border: 2px solid rgba(0, 255, 255, 0.15);
    border-radius: 50%;
    top: 0;
    left: 0;
    transition: all 0.4s ease;
}

.class-card .icon-ring.ring-2 {
    width: 60px;
    height: 60px;
    top: 10px;
    left: 10px;
    border-color: rgba(0, 255, 255, 0.25);
}

.class-card:hover .icon-ring {
    border-color: rgba(0, 255, 255, 0.4);
    transform: rotate(45deg);
}

.class-card:hover .icon-ring.ring-2 {
    transform: rotate(-45deg);
}

.class-card .card-title {
    color: var(--white);
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 8px;
}

.class-card .card-text {
    color: var(--text-secondary);
    font-size: 0.85rem;
    margin-bottom: 16px;
}

.class-card .card-arrow {
    color: var(--cyan);
    font-size: 1.4rem;
    opacity: 0;
    transform: translateX(-10px);
    transition: all 0.3s ease;
}

.class-card:hover .card-arrow {
    opacity: 1;
    transform: translateX(0);
}

.class-card .card-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0, 255, 255, 0.03), transparent);
    transition: left 0.6s ease;
    pointer-events: none;
}

.class-card:hover .card-shine {
    left: 100%;
}

/* ===== STATS SECTION ===== */
.stats-section {
    background: var(--navy-mid);
    border-top: 1px solid rgba(0, 255, 255, 0.06);
    border-bottom: 1px solid rgba(0, 255, 255, 0.06);
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

@media (max-width: 991px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 575px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
}

.stat-item {
    text-align: center;
    padding: 35px 20px;
    background: var(--dark-navy);
    border-radius: 16px;
    border: 1px solid rgba(0, 255, 255, 0.08);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.stat-item:hover {
    border-color: rgba(0, 255, 255, 0.25);
    transform: translateY(-4px);
    box-shadow: 0 15px 40px rgba(0, 255, 255, 0.08);
}

.stat-icon {
    font-size: 2rem;
    color: var(--cyan);
    margin-bottom: 12px;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--white);
    margin-bottom: 6px;
    font-variant-numeric: tabular-nums;
}

.stat-label {
    color: var(--text-secondary);
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 16px;
}

.stat-bar {
    width: 60px;
    height: 3px;
    background: rgba(0, 255, 255, 0.1);
    border-radius: 3px;
    margin: 0 auto;
    overflow: hidden;
}

.stat-bar span {
    display: block;
    width: 0%;
    height: 100%;
    background: var(--cyan);
    border-radius: 3px;
    transition: width 1.5s ease;
}

.stat-item:hover .stat-bar span {
    width: 100%;
}

/* ===== CONTACT SECTION ===== */
.contact-info-stack {
    display: flex;
    flex-direction: column;
    gap: 16px;
    height: 100%;
}

.info-card {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 20px;
    background: var(--navy-light);
    border-radius: 14px;
    border: 1px solid rgba(0, 255, 255, 0.08);
    transition: all 0.3s ease;
}

.info-card:hover {
    border-color: rgba(0, 255, 255, 0.25);
    transform: translateX(6px);
    box-shadow: 0 8px 30px rgba(0, 255, 255, 0.06);
}

.info-icon-wrap {
    position: relative;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--cyan-dim);
    border-radius: 12px;
    flex-shrink: 0;
}

.info-icon-wrap i {
    color: var(--cyan);
    font-size: 1.2rem;
    z-index: 1;
    position: relative;
}

.info-pulse {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 12px;
    background: var(--cyan-dim);
    animation: infoGlow 2.5s ease-in-out infinite;
}

@keyframes infoGlow {
    0%, 100% { transform: scale(1); opacity: 0.5; }
    50% { transform: scale(1.15); opacity: 0; }
}

.info-content h6 {
    color: var(--white);
    font-size: 0.95rem;
    font-weight: 700;
    margin-bottom: 3px;
}

.info-content p {
    color: var(--text-secondary);
    font-size: 0.85rem;
    margin: 0;
}

/* ===== CONTACT FORM ===== */
.contact-form-wrapper {
    background: var(--navy-light);
    border-radius: 18px;
    border: 1px solid rgba(0, 255, 255, 0.08);
    padding: 35px 35px 30px;
    position: relative;
    overflow: hidden;
}

.contact-form-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--cyan), rgba(0, 255, 255, 0.3), var(--cyan));
}

.form-header {
    margin-bottom: 28px;
}

.form-header h4 {
    color: var(--white);
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.form-header h4 i {
    color: var(--cyan);
}

.form-header p {
    color: var(--text-secondary);
    font-size: 0.85rem;
    margin: 0;
}

/* ===== FLOATING LABEL INPUTS ===== */
.form-floating-group {
    position: relative;
    margin-bottom: 22px;
}

.form-input {
    width: 100%;
    padding: 16px 18px 8px;
    background: var(--dark-navy);
    border: 1px solid rgba(0, 255, 255, 0.1);
    border-radius: 12px;
    color: var(--white);
    font-size: 0.95rem;
    outline: none;
    transition: all 0.3s ease;
    resize: none;
}

.form-input:focus {
    border-color: var(--cyan);
    box-shadow: 0 0 0 3px rgba(0, 255, 255, 0.08);
}

.form-floating-group label {
    position: absolute;
    top: 50%;
    left: 18px;
    transform: translateY(-50%);
    color: var(--text-secondary);
    font-size: 0.9rem;
    pointer-events: none;
    transition: all 0.25s ease;
    display: flex;
    align-items: center;
    gap: 6px;
}

.form-floating-group label i {
    font-size: 0.8rem;
    color: var(--cyan);
}

.form-input:focus + label,
.form-input:not(:placeholder-shown) + label {
    top: 8px;
    transform: translateY(0);
    font-size: 0.7rem;
    color: var(--cyan);
}

.form-floating-group .textarea + label {
    top: 20px;
    transform: translateY(0);
}

.form-input.textarea:focus + label,
.form-input.textarea:not(:placeholder-shown) + label {
    top: 6px;
}

.form-input.textarea {
    padding-top: 24px;
    min-height: 130px;
}

.input-highlight {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: var(--cyan);
    border-radius: 0 0 12px 12px;
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.form-input:focus ~ .input-highlight {
    width: 100%;
}

/* ===== SUBMIT BUTTON ===== */
.btn-submit {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 14px 36px;
    background: linear-gradient(135deg, var(--cyan), #00CED1);
    color: var(--dark-navy);
    font-size: 1rem;
    font-weight: 700;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    width: 100%;
}

.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 35px rgba(0, 255, 255, 0.25);
}

.btn-submit:active {
    transform: translateY(0);
}

.btn-text {
    display: flex;
    align-items: center;
    gap: 8px;
    z-index: 1;
}

.btn-loading {
    display: none;
    align-items: center;
    gap: 8px;
    z-index: 1;
}

.btn-submit.loading .btn-text {
    display: none;
}

.btn-submit.loading .btn-loading {
    display: flex;
}

.spin-icon {
    animation: spinIcon 1s linear infinite;
}

@keyframes spinIcon {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.btn-ripple {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.5s ease;
}

.btn-submit:active .btn-ripple {
    width: 400px;
    height: 400px;
    opacity: 0;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 767px) {
    .section-title {
        font-size: 1.6rem;
    }

    .contact-form-wrapper {
        padding: 25px 20px;
    }

    .stat-number {
        font-size: 2rem;
    }
}

@media (max-width: 575px) {
    .section-title {
        font-size: 1.4rem;
    }

    .section-desc {
        font-size: 0.9rem;
    }
}

/* ===== SCROLLBAR ===== */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: var(--dark-navy);
}

::-webkit-scrollbar-thumb {
    background: rgba(0, 255, 255, 0.2);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: rgba(0, 255, 255, 0.4);
}
</style>

@endsection