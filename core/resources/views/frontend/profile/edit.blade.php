@extends('frontend.app')

@section('content')

@if (session('success'))
<div class="eduhire-alert alert alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-circle-check" style="margin-right: 8px;"></i>
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<main class="main-wrapper">

    <!-- Floating Particles -->
    <div class="particles-container">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container py-5">
        <div class="profile-card">

            <!-- Corner Decorations -->
            <div class="corner-decoration top-left"></div>
            <div class="corner-decoration top-right"></div>
            <div class="corner-decoration bottom-left"></div>
            <div class="corner-decoration bottom-right"></div>

            <!-- Watermark -->
            <div class="watermark">EDUHIRE</div>

            <!-- ===== CARD HEADER ===== -->
            <div class="profile-card-header">
                <div class="brand-badge">
                    <div class="dot"></div>
                    <span>EduHire Platform</span>
                </div>

                <div class="header-icon-wrapper">
                    <i class="fa-solid fa-user-pen"></i>
                </div>

                <h3>Teacher <span>Profile</span></h3>
                <p><i class="fa-solid fa-info-circle" style="margin-right: 4px; color: var(--cyan); opacity: 0.6;"></i> Update your teacher profile information to get the best job matches</p>

                <div class="profile-stats">
                    <div class="stat-item">
                        <i class="fa-solid fa-shield-check"></i>
                        <span>Verified Profile</span>
                    </div>
                    <div class="stat-item">
                        <i class="fa-solid fa-eye"></i>
                        <span>Visible to Schools</span>
                    </div>
                    <div class="stat-item">
                        <i class="fa-solid fa-bolt"></i>
                        <span>Quick Apply</span>
                    </div>
                </div>
            </div>

            <!-- ===== CARD BODY ===== -->
            <div class="profile-card-body">

                <!-- Progress Dots -->
                <div class="form-progress">
                    <div class="progress-dot active" title="Personal"></div>
                    <div class="progress-dot active" title="Contact"></div>
                    <div class="progress-dot active" title="Education"></div>
                    <div class="progress-dot active" title="Teaching"></div>
                </div>

                <form action="/profile/update" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- =============== SECTION 1: PERSONAL INFORMATION =============== -->
                    <div class="scroll-animate" data-section="1">
                        <div class="section-header">
                            <div class="section-icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <h5>Personal Information</h5>
                            <div class="section-number">1</div>
                        </div>

                        <div class="form-grid form-grid-2">
                            <div class="form-group">
                                <label class="eduhire-label">Full Name</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="name"
                                           value="{{ $profile->name ?? '' }}" required
                                           placeholder="Enter your full name">
                                    <i class="fa-solid fa-signature input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Father's Name</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="father_name"
                                           value="{{ $profile->father_name ?? '' }}"
                                           placeholder="Enter father's name">
                                    <i class="fa-solid fa-user-tie input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Mother's Name</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="mother_name"
                                           value="{{ $profile->mother_name ?? '' }}"
                                           placeholder="Enter mother's name">
                                    <i class="fa-solid fa-user input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Date of Birth</label>
                                <div class="input-wrapper">
                                    <input type="date" class="eduhire-input" name="dob"
                                           value="{{ $profile->dob ?? '' }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Gender</label>
                                <select class="eduhire-select" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="Male" {{ ($profile->gender ?? '') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ ($profile->gender ?? '') == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Profile Photo</label>
                                <input type="file" class="eduhire-input" name="image">
                                <span class="helper-text">
                                    <i class="fa-solid fa-circle-info"></i>
                                    JPG, PNG (Max 2MB)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="glow-line"></div>

                    <!-- =============== SECTION 2: CONTACT INFORMATION =============== -->
                    <div class="scroll-animate" data-section="2">
                        <div class="section-header">
                            <div class="section-icon">
                                <i class="fa-solid fa-address-book"></i>
                            </div>
                            <h5>Contact Information</h5>
                            <div class="section-number">2</div>
                        </div>

                        <div class="form-grid form-grid-2">
                            <div class="form-group">
                                <label class="eduhire-label">Mobile Number</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="number"
                                           value="{{ $profile->number ?? '' }}"
                                           placeholder="01XXXXXXXXX">
                                    <i class="fa-solid fa-phone input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Email Address</label>
                                <div class="input-wrapper">
                                    <input type="email" class="eduhire-input" name="email"
                                           value="{{ $profile->email ?? '' }}"
                                           placeholder="example@email.com">
                                    <i class="fa-solid fa-envelope input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Division</label>
                                <select class="eduhire-select" name="division">
                                    <option value="">Select Division</option>
                                    @foreach(['Dhaka','Chattogram','Khulna','Rajshahi','Barishal','Sylhet','Rangpur','Mymensingh'] as $division)
                                    <option value="{{ $division }}"
                                            {{ ($profile->division ?? '') == $division ? 'selected' : '' }}>
                                        {{ $division }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">District</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="district"
                                           value="{{ $profile->district ?? '' }}"
                                           placeholder="Enter your district">
                                    <i class="fa-solid fa-map-pin input-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-grid form-grid-1" style="margin-top: 20px;">
                            <div class="form-group">
                                <label class="eduhire-label">Current Address</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="current_address"
                                           value="{{ $profile->current_address ?? '' }}"
                                           placeholder="Enter your current address">
                                    <i class="fa-solid fa-location-dot input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Permanent Address</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="permanent_address"
                                           value="{{ $profile->permanent_address ?? '' }}"
                                           placeholder="Enter your permanent address">
                                    <i class="fa-solid fa-house input-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="glow-line"></div>

                    <!-- =============== SECTION 3: EDUCATIONAL QUALIFICATION =============== -->
                    <div class="scroll-animate" data-section="3">
                        <div class="section-header">
                            <div class="section-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <h5>Educational Qualification</h5>
                            <div class="section-number">3</div>
                        </div>

                        <div class="form-grid form-grid-3">
                            <div class="form-group">
                                <label class="eduhire-label">SSC Board</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="ssc_board"
                                           value="{{ $profile->ssc_board ?? '' }}"
                                           placeholder="e.g. Dhaka Board">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">SSC Result / GPA</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="ssc_result"
                                           value="{{ $profile->ssc_result ?? '' }}"
                                           placeholder="e.g. 5.00">
                                    <i class="fa-solid fa-star input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">SSC Passing Year</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="ssc_year"
                                           value="{{ $profile->ssc_year ?? '' }}"
                                           placeholder="e.g. 2015">
                                    <i class="fa-solid fa-calendar input-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-grid form-grid-3" style="margin-top: 20px;">
                            <div class="form-group">
                                <label class="eduhire-label">HSC Result / GPA</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="hsc_result"
                                           value="{{ $profile->hsc_result ?? '' }}"
                                           placeholder="e.g. 5.00">
                                    <i class="fa-solid fa-star input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Bachelor Degree</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="bachelor_degree"
                                           value="{{ $profile->bachelor_degree ?? '' }}"
                                           placeholder="e.g. B.Sc in CSE">
                                    <i class="fa-solid fa-award input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Master Degree</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="master_degree"
                                           value="{{ $profile->master_degree ?? '' }}"
                                           placeholder="e.g. M.Sc in CSE">
                                    <i class="fa-solid fa-award input-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-grid form-grid-2" style="margin-top: 20px;">
                            <div class="form-group">
                                <label class="eduhire-label">Subject / Major</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="subject_major"
                                           value="{{ $profile->subject_major ?? '' }}"
                                           placeholder="e.g. Computer Science">
                                    <i class="fa-solid fa-book input-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="glow-line"></div>

                    <!-- =============== SECTION 4: TEACHING INFORMATION =============== -->
                    <div class="scroll-animate" data-section="4">
                        <div class="section-header">
                            <div class="section-icon">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <h5>Teaching Information</h5>
                            <div class="section-number">4</div>
                        </div>

                        <div class="form-grid form-grid-2">
                            <div class="form-group">
                                <label class="eduhire-label">Preferred Class</label>
                                @php
                                    $selectedClasses = is_array($profile->preferred_class) ? $profile->preferred_class : json_decode($profile->preferred_class ?? '[]', true);
                                @endphp
                                <select class="eduhire-select" name="preferred_class[]" multiple>
                                    @foreach ($preferred_classes as $preferred_class)
                                    <option value="{{ $preferred_class->id }}"
                                            {{ in_array($preferred_class->id, $selectedClasses) ? 'selected' : '' }}>
                                        {{ $preferred_class->preferred_class_name }}
                                    </option>
                                    @endforeach
                                </select>
                                <span class="helper-text">
                                    <i class="fa-solid fa-circle-info"></i>
                                    Hold Ctrl (Windows) or Cmd (Mac) to select multiple classes
                                </span>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Preferred Subject</label>
                                @php
                                    $selectedSubjects = is_array($profile->preferred_subject) ? $profile->preferred_subject : json_decode($profile->preferred_subject ?? '[]', true);
                                @endphp
                                <select class="eduhire-select" name="preferred_subject[]" multiple>
                                    @foreach ($preferred_subjects as $preferred_subject)
                                    <option value="{{ $preferred_subject->id }}"
                                            {{ in_array($preferred_subject->id, $selectedSubjects) ? 'selected' : '' }}>
                                        {{ $preferred_subject->preferred_subject_name }}
                                    </option>
                                    @endforeach
                                </select>
                                <span class="helper-text">
                                    <i class="fa-solid fa-circle-info"></i>
                                    Hold Ctrl (Windows) or Cmd (Mac) to select multiple subjects
                                </span>
                            </div>
                        </div>

                        <div class="form-grid form-grid-3" style="margin-top: 20px;">
                            <div class="form-group">
                                <label class="eduhire-label">Teaching Experience (Years)</label>
                                <div class="input-wrapper">
                                    <input type="number" class="eduhire-input" name="experience"
                                           value="{{ $profile->experience ?? '' }}"
                                           placeholder="e.g. 5">
                                    <i class="fa-solid fa-briefcase input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Previous Institution</label>
                                <div class="input-wrapper">
                                    <input type="text" class="eduhire-input" name="previous_school"
                                           value="{{ $profile->previous_school ?? '' }}"
                                           placeholder="Enter institution name">
                                    <i class="fa-solid fa-building-columns input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="eduhire-label">Expected Salary (BDT)</label>
                                <div class="input-wrapper">
                                    <input type="number" class="eduhire-input" name="salary"
                                           value="{{ $profile->salary ?? '' }}"
                                           placeholder="Enter amount">
                                    <i class="fa-solid fa-bangladeshi-taka-sign input-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ===== SUBMIT BUTTON ===== -->
                    <div class="submit-section">
                        <div class="section-divider" style="margin-bottom: 30px;"></div>
                        <button type="submit" class="btn-submit">
                            <i class="fa-solid fa-floppy-disk"></i>
                            <span>Update Profile</span>
                        </button>
                        <p style="color: var(--text-muted); font-size: 12px; margin-top: 16px;">
                            <i class="fa-solid fa-lock" style="color: rgba(0,255,255,0.4); margin-right: 4px;"></i>
                            Your data is securely stored and encrypted
                        </p>
                    </div>

                </form>

            </div>

        </div>
    </div>
</main>

<script>
    // ===== SCROLL ANIMATION =====
    document.addEventListener('DOMContentLoaded', function () {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    // Add stagger to children
                    const children = entry.target.querySelectorAll('.form-group');
                    children.forEach((child, index) => {
                        child.style.animationDelay = `${index * 0.08}s`;
                    });
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.scroll-animate').forEach(el => {
            observer.observe(el);
        });

        // ===== INPUT FOCUS ANIMATION =====
        document.querySelectorAll('.eduhire-input, .eduhire-select').forEach(input => {
            input.addEventListener('focus', function () {
                this.closest('.form-group')?.classList.add('focused');
            });
            input.addEventListener('blur', function () {
                this.closest('.form-group')?.classList.remove('focused');
            });
        });

        // ===== BUTTON RIPPLE EFFECT =====
        document.querySelector('.btn-submit')?.addEventListener('click', function (e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255,255,255,0.3);
                border-radius: 50%;
                transform: scale(0);
                animation: rippleEffect 0.6s linear;
                pointer-events: none;
                z-index: 0;
            `;

            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });

        // ===== PROGRESS DOTS ACTIVE STATE =====
        const sections = document.querySelectorAll('.scroll-animate');
        const progressDots = document.querySelectorAll('.progress-dot');

        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const sectionIndex = parseInt(entry.target.getAttribute('data-section')) - 1;
                    progressDots.forEach((dot, index) => {
                        if (index <= sectionIndex) {
                            dot.classList.add('active');
                        }
                    });
                }
            });
        }, { threshold: 0.5 });

        sections.forEach(section => sectionObserver.observe(section));

        // ===== PARALLAX PARTICLES =====
        document.addEventListener('mousemove', function (e) {
            const particles = document.querySelectorAll('.particle');
            const x = (e.clientX / window.innerWidth - 0.5) * 20;
            const y = (e.clientY / window.innerHeight - 0.5) * 20;

            particles.forEach((particle, index) => {
                const speed = (index + 1) * 0.3;
                particle.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
            });
        });

        // ===== SECTION HEADER CLICK SCROLL =====
        document.querySelectorAll('.progress-dot').forEach((dot, index) => {
            dot.addEventListener('click', () => {
                const targetSection = document.querySelector(`[data-section="${index + 1}"]`);
                if (targetSection) {
                    targetSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        });
    });
</script>

<style>
    /* ===== ROOT VARIABLES ===== */
    :root {
        --dark-navy: #0D1B2A;
        --dark-navy-light: #1B2D45;
        --dark-navy-mid: #142236;
        --cyan: #00FFFF;
        --cyan-glow: rgba(0, 255, 255, 0.3);
        --cyan-dim: rgba(0, 255, 255, 0.1);
        --cyan-hover: #00E5E5;
        --white: #FFFFFF;
        --text-light: #B0C4DE;
        --text-muted: #7A8FA6;
        --border-color: rgba(0, 255, 255, 0.15);
        --card-bg: rgba(13, 27, 42, 0.95);
        --input-bg: #0F2132;
        --input-border: rgba(0, 255, 255, 0.2);
        --success-green: #00FF88;
    }

    /* ===== KEYFRAME ANIMATIONS ===== */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-40px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(40px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInScale {
        from {
            opacity: 0;
            transform: scale(0.9) translateY(20px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    @keyframes glowPulse {
        0%, 100% {
            box-shadow: 0 0 5px var(--cyan-glow), 0 0 10px rgba(0, 255, 255, 0.1);
        }
        50% {
            box-shadow: 0 0 20px var(--cyan-glow), 0 0 40px rgba(0, 255, 255, 0.15);
        }
    }

    @keyframes borderGlow {
        0%, 100% {
            border-color: rgba(0, 255, 255, 0.2);
        }
        50% {
            border-color: rgba(0, 255, 255, 0.5);
        }
    }

    @keyframes textGlow {
        0%, 100% {
            text-shadow: 0 0 5px rgba(0, 255, 255, 0.3);
        }
        50% {
            text-shadow: 0 0 20px rgba(0, 255, 255, 0.6), 0 0 40px rgba(0, 255, 255, 0.3);
        }
    }

    @keyframes iconFloat {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-5px);
        }
    }

    @keyframes shimmer {
        0% {
            background-position: -200% center;
        }
        100% {
            background-position: 200% center;
        }
    }

    @keyframes rippleEffect {
        0% {
            transform: scale(0);
            opacity: 0.6;
        }
        100% {
            transform: scale(4);
            opacity: 0;
        }
    }

    @keyframes rotateGlow {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes particleFloat {
        0%, 100% {
            transform: translateY(0) translateX(0) scale(1);
            opacity: 0.6;
        }
        25% {
            transform: translateY(-20px) translateX(10px) scale(1.2);
            opacity: 1;
        }
        50% {
            transform: translateY(-10px) translateX(-5px) scale(0.8);
            opacity: 0.4;
        }
        75% {
            transform: translateY(-30px) translateX(15px) scale(1.1);
            opacity: 0.8;
        }
    }

    @keyframes typeWriter {
        from {
            width: 0;
        }
        to {
            width: 100%;
        }
    }

    @keyframes blink {
        50% {
            border-color: transparent;
        }
    }

    @keyframes successSlide {
        0% {
            opacity: 0;
            transform: translateX(-100%);
        }
        10% {
            opacity: 1;
            transform: translateX(0);
        }
        90% {
            opacity: 1;
            transform: translateX(0);
        }
        100% {
            opacity: 0;
            transform: translateX(100%);
        }
    }

    @keyframes dashDraw {
        to {
            stroke-dashoffset: 0;
        }
    }

    @keyframes sectionReveal {
        from {
            opacity: 0;
            transform: translateY(30px);
            clip-path: inset(100% 0 0 0);
        }
        to {
            opacity: 1;
            transform: translateY(0);
            clip-path: inset(0 0 0 0);
        }
    }

    @keyframes backgroundPan {
        0% {
            background-position: 0% 0%;
        }
        50% {
            background-position: 100% 100%;
        }
        100% {
            background-position: 0% 0%;
        }
    }

    /* ===== MAIN WRAPPER ===== */
    .main-wrapper {
        background: var(--dark-navy);
        min-height: 100vh;
        position: relative;
        overflow: hidden;
    }

    .main-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(ellipse at 20% 20%, rgba(0, 255, 255, 0.05) 0%, transparent 50%),
            radial-gradient(ellipse at 80% 80%, rgba(0, 255, 255, 0.03) 0%, transparent 50%),
            radial-gradient(ellipse at 50% 50%, rgba(0, 255, 255, 0.02) 0%, transparent 70%);
        pointer-events: none;
        animation: backgroundPan 15s ease-in-out infinite;
        background-size: 200% 200%;
    }

    /* ===== FLOATING PARTICLES ===== */
    .particles-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        overflow: hidden;
        z-index: 0;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: var(--cyan);
        border-radius: 50%;
        opacity: 0;
        animation: particleFloat 6s ease-in-out infinite;
    }

    .particle:nth-child(1) { left: 10%; top: 20%; animation-delay: 0s; animation-duration: 7s; }
    .particle:nth-child(2) { left: 20%; top: 40%; animation-delay: 1s; animation-duration: 5s; }
    .particle:nth-child(3) { left: 30%; top: 60%; animation-delay: 2s; animation-duration: 8s; }
    .particle:nth-child(4) { left: 50%; top: 30%; animation-delay: 0.5s; animation-duration: 6s; }
    .particle:nth-child(5) { left: 60%; top: 70%; animation-delay: 1.5s; animation-duration: 7s; }
    .particle:nth-child(6) { left: 70%; top: 15%; animation-delay: 3s; animation-duration: 5.5s; }
    .particle:nth-child(7) { left: 80%; top: 50%; animation-delay: 2.5s; animation-duration: 6.5s; }
    .particle:nth-child(8) { left: 90%; top: 80%; animation-delay: 0.8s; animation-duration: 8s; }
    .particle:nth-child(9) { left: 15%; top: 85%; animation-delay: 1.2s; animation-duration: 7.5s; }
    .particle:nth-child(10) { left: 45%; top: 10%; animation-delay: 3.5s; animation-duration: 5s; }
    .particle:nth-child(11) { left: 75%; top: 35%; animation-delay: 2.2s; animation-duration: 6s; }
    .particle:nth-child(12) { left: 35%; top: 90%; animation-delay: 4s; animation-duration: 7s; }

    /* ===== ALERT STYLING ===== */
    .eduhire-alert {
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.15), rgba(0, 255, 255, 0.1));
        border: 1px solid rgba(0, 255, 136, 0.4);
        border-left: 4px solid var(--success-green);
        color: var(--success-green);
        border-radius: 12px;
        padding: 16px 24px;
        margin: 20px;
        animation: fadeInDown 0.6s ease-out;
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
    }

    .eduhire-alert::before {
        content: '✓';
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 24px;
        opacity: 0.3;
    }

    .eduhire-alert .btn-close {
        filter: invert(1);
        opacity: 0.7;
    }

    .eduhire-alert .btn-close:hover {
        opacity: 1;
    }

    /* ===== PROFILE CARD ===== */
    .profile-card {
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 24px;
        overflow: hidden;
        box-shadow:
            0 20px 60px rgba(0, 0, 0, 0.5),
            0 0 40px rgba(0, 255, 255, 0.05);
        animation: slideInScale 0.8s ease-out;
        position: relative;
        z-index: 1;
    }

    .profile-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg,
            transparent 30%,
            rgba(0, 255, 255, 0.1) 50%,
            transparent 70%);
        border-radius: 25px;
        z-index: -1;
        animation: shimmer 4s ease-in-out infinite;
        background-size: 200% 100%;
    }

    /* ===== CARD HEADER ===== */
    .profile-card-header {
        background: linear-gradient(135deg, var(--dark-navy-light), var(--dark-navy-mid));
        padding: 40px 40px 30px;
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid var(--border-color);
    }

    .profile-card-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg,
            transparent,
            var(--cyan),
            transparent);
        animation: shimmer 3s ease-in-out infinite;
        background-size: 200% 100%;
    }

    .profile-card-header::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0, 255, 255, 0.03) 0%, transparent 70%);
        animation: iconFloat 6s ease-in-out infinite;
    }

    .header-icon-wrapper {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.15), rgba(0, 255, 255, 0.05));
        border: 2px solid rgba(0, 255, 255, 0.3);
        border-radius: 16px;
        margin-bottom: 16px;
        animation: glowPulse 3s ease-in-out infinite, iconFloat 4s ease-in-out infinite;
    }

    .header-icon-wrapper i {
        font-size: 24px;
        color: var(--cyan);
    }

    .profile-card-header h3 {
        color: var(--white);
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 8px;
        animation: fadeInLeft 0.8s ease-out 0.2s both;
    }

    .profile-card-header h3 span {
        color: var(--cyan);
        position: relative;
    }

    .profile-card-header h3 span::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background: var(--cyan);
        transform: scaleX(0);
        transform-origin: left;
        animation: expandLine 1s ease-out 1s forwards;
    }

    @keyframes expandLine {
        to {
            transform: scaleX(1);
        }
    }

    .profile-card-header p {
        color: var(--text-muted);
        font-size: 14px;
        margin: 0;
        animation: fadeInLeft 0.8s ease-out 0.4s both;
    }

    /* ===== CARD BODY ===== */
    .profile-card-body {
        padding: 40px;
        background: var(--dark-navy);
    }

    /* ===== SECTION HEADERS ===== */
    .section-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-top: 40px;
        margin-bottom: 28px;
        padding-bottom: 16px;
        border-bottom: 1px solid var(--border-color);
        position: relative;
        animation: fadeInUp 0.6s ease-out both;
    }

    .section-header:first-of-type {
        margin-top: 0;
    }

    .section-header::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 60px;
        height: 2px;
        background: var(--cyan);
        border-radius: 1px;
        transition: width 0.5s ease;
    }

    .section-header:hover::after {
        width: 120px;
    }

    .section-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.12), rgba(0, 255, 255, 0.04));
        border: 1px solid rgba(0, 255, 255, 0.25);
        border-radius: 12px;
        color: var(--cyan);
        font-size: 18px;
        transition: all 0.4s ease;
        animation: iconFloat 5s ease-in-out infinite;
    }

    .section-header:hover .section-icon {
        transform: scale(1.1) rotate(5deg);
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.2), rgba(0, 255, 255, 0.08));
        box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
    }

    .section-header h5 {
        color: var(--cyan);
        font-size: 18px;
        font-weight: 600;
        margin: 0;
        letter-spacing: 0.5px;
        transition: text-shadow 0.3s ease;
    }

    .section-header:hover h5 {
        text-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
    }

    .section-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        background: rgba(0, 255, 255, 0.1);
        border: 1px solid rgba(0, 255, 255, 0.3);
        border-radius: 50%;
        color: var(--cyan);
        font-size: 12px;
        font-weight: 700;
        margin-left: auto;
    }

    /* ===== FORM FIELDS ===== */
    .form-group {
        margin-bottom: 0;
        animation: fadeInUp 0.5s ease-out both;
    }

    .form-group:nth-child(1) { animation-delay: 0.1s; }
    .form-group:nth-child(2) { animation-delay: 0.15s; }
    .form-group:nth-child(3) { animation-delay: 0.2s; }
    .form-group:nth-child(4) { animation-delay: 0.25s; }
    .form-group:nth-child(5) { animation-delay: 0.3s; }
    .form-group:nth-child(6) { animation-delay: 0.35s; }

    .eduhire-label {
        display: block;
        color: var(--text-light);
        font-size: 13px;
        font-weight: 500;
        margin-bottom: 8px;
        letter-spacing: 0.3px;
        transition: color 0.3s ease;
        position: relative;
        padding-left: 12px;
    }

    .eduhire-label::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 4px;
        height: 4px;
        background: var(--cyan);
        border-radius: 50%;
        opacity: 0.5;
        transition: all 0.3s ease;
    }

    .form-group:hover .eduhire-label {
        color: var(--cyan);
    }

    .form-group:hover .eduhire-label::before {
        opacity: 1;
        box-shadow: 0 0 8px var(--cyan-glow);
    }

    .eduhire-input,
    .eduhire-select {
        width: 100%;
        padding: 12px 16px;
        background: var(--input-bg);
        border: 1px solid var(--input-border);
        border-radius: 12px;
        color: var(--white);
        font-size: 14px;
        transition: all 0.4s ease;
        outline: none;
        -webkit-appearance: none;
    }

    .eduhire-input::placeholder {
        color: var(--text-muted);
        opacity: 0.6;
    }

    .eduhire-input:focus,
    .eduhire-select:focus {
        border-color: var(--cyan);
        background: rgba(15, 33, 50, 0.9);
        box-shadow:
            0 0 0 3px rgba(0, 255, 255, 0.1),
            0 0 20px rgba(0, 255, 255, 0.1);
        transform: translateY(-1px);
    }

    .eduhire-input:hover,
    .eduhire-select:hover {
        border-color: rgba(0, 255, 255, 0.4);
        background: rgba(15, 33, 50, 0.8);
    }

    .eduhire-select {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%2300FFFF' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10l-5 5z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 16px center;
        padding-right: 40px;
        cursor: pointer;
    }

    .eduhire-select option {
        background: var(--dark-navy);
        color: var(--white);
        padding: 8px;
    }

    .eduhire-select[multiple] {
        background-image: none;
        padding-right: 16px;
        min-height: 120px;
    }

    .eduhire-select[multiple] option {
        padding: 8px 12px;
        border-radius: 6px;
        margin-bottom: 2px;
        transition: all 0.2s ease;
    }

    .eduhire-select[multiple] option:checked {
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.3), rgba(0, 255, 255, 0.1));
        color: var(--cyan);
    }

    .eduhire-select[multiple] option:hover {
        background: rgba(0, 255, 255, 0.1);
    }

    /* File Input */
    .file-upload-wrapper {
        position: relative;
    }

    .eduhire-input[type="file"] {
        padding: 10px 16px;
        cursor: pointer;
    }

    .eduhire-input[type="file"]::-webkit-file-upload-button {
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.2), rgba(0, 255, 255, 0.1));
        border: 1px solid rgba(0, 255, 255, 0.3);
        color: var(--cyan);
        padding: 8px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.3s ease;
        margin-right: 12px;
    }

    .eduhire-input[type="file"]::-webkit-file-upload-button:hover {
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.3), rgba(0, 255, 255, 0.15));
        box-shadow: 0 0 15px rgba(0, 255, 255, 0.2);
    }

    /* Helper Text */
    .helper-text {
        display: block;
        font-size: 11px;
        color: var(--text-muted);
        margin-top: 6px;
        padding-left: 12px;
        opacity: 0.8;
    }

    .helper-text i {
        color: var(--cyan);
        margin-right: 4px;
        font-size: 10px;
    }

    /* ===== ROW ANIMATION STAGGER ===== */
    .animated-row {
        animation: fadeInUp 0.6s ease-out both;
    }

    .animated-row:nth-child(1) { animation-delay: 0.1s; }
    .animated-row:nth-child(2) { animation-delay: 0.2s; }
    .animated-row:nth-child(3) { animation-delay: 0.3s; }
    .animated-row:nth-child(4) { animation-delay: 0.4s; }

    /* ===== SUBMIT BUTTON ===== */
    .submit-section {
        margin-top: 50px;
        text-align: center;
        animation: fadeInUp 0.8s ease-out 0.5s both;
    }

    .btn-submit {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 16px 48px;
        background: linear-gradient(135deg, var(--cyan), #00CED1);
        color: var(--dark-navy);
        border: none;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 700;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        text-transform: uppercase;
    }

    .btn-submit::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s ease, height 0.6s ease;
    }

    .btn-submit:hover::before {
        width: 300px;
        height: 300px;
    }

    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow:
            0 10px 30px rgba(0, 255, 255, 0.3),
            0 0 60px rgba(0, 255, 255, 0.15);
    }

    .btn-submit:active {
        transform: translateY(-1px);
        box-shadow:
            0 5px 15px rgba(0, 255, 255, 0.2),
            0 0 30px rgba(0, 255, 255, 0.1);
    }

    .btn-submit i {
        font-size: 18px;
        transition: transform 0.3s ease;
    }

    .btn-submit:hover i {
        transform: scale(1.2) rotate(10deg);
    }

    .btn-submit span {
        position: relative;
        z-index: 1;
    }

    .btn-submit i {
        position: relative;
        z-index: 1;
    }

    /* ===== DECORATIVE LINE ===== */
    .section-divider {
        height: 1px;
        background: linear-gradient(90deg,
            transparent,
            rgba(0, 255, 255, 0.2),
            transparent);
        margin: 10px 0;
        border: none;
    }

    /* ===== PROGRESS INDICATOR ===== */
    .form-progress {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-bottom: 30px;
        animation: fadeInDown 0.6s ease-out 0.3s both;
    }

    .progress-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(0, 255, 255, 0.15);
        border: 1px solid rgba(0, 255, 255, 0.3);
        transition: all 0.4s ease;
        cursor: pointer;
    }

    .progress-dot.active {
        background: var(--cyan);
        box-shadow: 0 0 10px var(--cyan-glow);
        transform: scale(1.3);
    }

    .progress-dot:hover {
        background: rgba(0, 255, 255, 0.4);
        transform: scale(1.2);
    }

    /* ===== STATS BAR ===== */
    .profile-stats {
        display: flex;
        gap: 24px;
        padding: 20px 0;
        margin-top: 16px;
        animation: fadeInUp 0.8s ease-out 0.6s both;
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 18px;
        background: rgba(0, 255, 255, 0.05);
        border: 1px solid rgba(0, 255, 255, 0.15);
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .stat-item:hover {
        background: rgba(0, 255, 255, 0.1);
        border-color: rgba(0, 255, 255, 0.3);
        transform: translateY(-2px);
    }

    .stat-item i {
        color: var(--cyan);
        font-size: 16px;
    }

    .stat-item span {
        color: var(--text-light);
        font-size: 13px;
    }

    /* ===== SCROLL ANIMATIONS ===== */
    .scroll-animate {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-out;
    }

    .scroll-animate.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* ===== TOOLTIP STYLES ===== */
    .input-wrapper {
        position: relative;
    }

    .input-wrapper .input-icon {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: rgba(0, 255, 255, 0.3);
        font-size: 14px;
        transition: all 0.3s ease;
        pointer-events: none;
    }

    .input-wrapper:focus-within .input-icon {
        color: var(--cyan);
    }

    /* ===== WATERMARK ===== */
    .watermark {
        position: absolute;
        bottom: 20px;
        right: 40px;
        font-size: 80px;
        font-weight: 900;
        color: rgba(0, 255, 255, 0.02);
        letter-spacing: 5px;
        pointer-events: none;
        user-select: none;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
        .profile-card-header {
            padding: 30px 24px 24px;
        }

        .profile-card-header h3 {
            font-size: 22px;
        }

        .profile-card-body {
            padding: 24px;
        }

        .btn-submit {
            padding: 14px 36px;
            font-size: 14px;
        }

        .profile-stats {
            flex-wrap: wrap;
            gap: 12px;
        }

        .stat-item {
            flex: 1;
            min-width: calc(50% - 6px);
            justify-content: center;
        }

        .header-icon-wrapper {
            width: 48px;
            height: 48px;
        }

        .watermark {
            font-size: 40px;
        }
    }

    @media (max-width: 576px) {
        .profile-card {
            border-radius: 16px;
            margin: 0 -12px;
        }

        .profile-card-header {
            padding: 24px 20px 20px;
        }

        .profile-card-body {
            padding: 20px;
        }

        .section-header {
            gap: 10px;
        }

        .section-icon {
            width: 36px;
            height: 36px;
            font-size: 14px;
        }

        .section-header h5 {
            font-size: 15px;
        }

        .stat-item {
            min-width: 100%;
        }
    }

    /* ===== CUSTOM SCROLLBAR ===== */
    .profile-card-body::-webkit-scrollbar {
        width: 6px;
    }

    .profile-card-body::-webkit-scrollbar-track {
        background: var(--dark-navy);
    }

    .profile-card-body::-webkit-scrollbar-thumb {
        background: rgba(0, 255, 255, 0.2);
        border-radius: 3px;
    }

    .profile-card-body::-webkit-scrollbar-thumb:hover {
        background: rgba(0, 255, 255, 0.4);
    }

    /* ===== BRAND BADGE ===== */
    .brand-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 14px;
        background: rgba(0, 255, 255, 0.08);
        border: 1px solid rgba(0, 255, 255, 0.2);
        border-radius: 20px;
        margin-bottom: 16px;
        animation: fadeInDown 0.6s ease-out;
    }

    .brand-badge .dot {
        width: 6px;
        height: 6px;
        background: var(--cyan);
        border-radius: 50%;
        animation: glowPulse 2s ease-in-out infinite;
    }

    .brand-badge span {
        color: var(--cyan);
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    /* ===== CORNER DECORATIONS ===== */
    .corner-decoration {
        position: absolute;
        width: 60px;
        height: 60px;
        pointer-events: none;
    }

    .corner-decoration.top-left {
        top: 0;
        left: 0;
        border-top: 2px solid rgba(0, 255, 255, 0.3);
        border-left: 2px solid rgba(0, 255, 255, 0.3);
        border-radius: 24px 0 0 0;
    }

    .corner-decoration.top-right {
        top: 0;
        right: 0;
        border-top: 2px solid rgba(0, 255, 255, 0.3);
        border-right: 2px solid rgba(0, 255, 255, 0.3);
        border-radius: 0 24px 0 0;
    }

    .corner-decoration.bottom-left {
        bottom: 0;
        left: 0;
        border-bottom: 2px solid rgba(0, 255, 255, 0.15);
        border-left: 2px solid rgba(0, 255, 255, 0.15);
        border-radius: 0 0 0 24px;
    }

    .corner-decoration.bottom-right {
        bottom: 0;
        right: 0;
        border-bottom: 2px solid rgba(0, 255, 255, 0.15);
        border-right: 2px solid rgba(0, 255, 255, 0.15);
        border-radius: 0 0 24px 0;
    }

    /* ===== GLOW LINE ANIMATION ===== */
    .glow-line {
        width: 100%;
        height: 1px;
        position: relative;
        overflow: hidden;
        margin: 30px 0;
    }

    .glow-line::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
            transparent,
            var(--cyan),
            transparent);
        animation: shimmer 3s ease-in-out infinite;
    }

    /* ===== GRID GAP OVERRIDE ===== */
    .form-grid {
        display: grid;
        gap: 20px;
    }

    .form-grid-2 {
        grid-template-columns: repeat(2, 1fr);
    }

    .form-grid-3 {
        grid-template-columns: repeat(3, 1fr);
    }

    .form-grid-1 {
        grid-template-columns: 1fr;
    }

    @media (max-width: 768px) {
        .form-grid-2,
        .form-grid-3 {
            grid-template-columns: 1fr;
        }
    }

    @media (min-width: 769px) and (max-width: 991px) {
        .form-grid-3 {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

@endsection