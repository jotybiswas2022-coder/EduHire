@extends('frontend.app')

@section('content')

@php
$totalTeachers = $approvedTeachers->count();
@endphp

<section class="eduhire-teachers-section">

    <!-- ===== Animated Background Particles ===== -->
    <div class="eh-particles-bg">
        <div class="eh-particle ep1"></div>
        <div class="eh-particle ep2"></div>
        <div class="eh-particle ep3"></div>
        <div class="eh-particle ep4"></div>
        <div class="eh-particle ep5"></div>
        <div class="eh-particle ep6"></div>
        <div class="eh-particle ep7"></div>
        <div class="eh-particle ep8"></div>
        <div class="eh-particle ep9"></div>
        <div class="eh-particle ep10"></div>
        <div class="eh-particle ep11"></div>
        <div class="eh-particle ep12"></div>
        <div class="eh-particle ep13"></div>
        <div class="eh-particle ep14"></div>
        <div class="eh-particle ep15"></div>
        <div class="eh-particle ep16"></div>
        <div class="eh-particle ep17"></div>
        <div class="eh-particle ep18"></div>
        <div class="eh-particle ep19"></div>
        <div class="eh-particle ep20"></div>
    </div>

    <!-- ===== Mesh Gradient Orbs ===== -->
    <div class="eh-orb eh-orb-1"></div>
    <div class="eh-orb eh-orb-2"></div>
    <div class="eh-orb eh-orb-3"></div>

    <!-- ===== Scan Lines Overlay ===== -->
    <div class="eh-scanlines"></div>

    <!-- ===== Hero Header ===== -->
    <div class="eh-hero-header">
        <div class="container">
            <div class="eh-hero-content">

                <!-- Brand Badge -->
                <div class="eh-brand-badge eh-animate-down">
                    <span class="eh-badge-pulse"></span>
                    <span class="eh-badge-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                            <path d="M6 12v5c0 2 4 3 6 3s6-1 6-3v-5"/>
                        </svg>
                    </span>
                    <span class="eh-badge-text">EduHire</span>
                    <span class="eh-badge-dot"></span>
                    <span class="eh-badge-status">Recruitment Portal</span>
                </div>

                <!-- Hero Title -->
                <h1 class="eh-hero-title eh-animate-up">
                    <span class="eh-title-sub">Find Expert Teachers for</span>
                    <span class="eh-title-main">
                        <span class="eh-title-highlight">{{ $class->preferred_class_name }}</span>
                        <span class="eh-title-cursor"></span>
                    </span>
                </h1>

                <!-- Hero Description -->
                <p class="eh-hero-desc eh-animate-up eh-delay-1">
                    Discover qualified and experienced educators ready to make a difference.
                    Browse through our verified teacher profiles below.
                </p>

                <!-- Hero Stats -->
                <div class="eh-hero-stats eh-animate-up eh-delay-2">
                    <div class="eh-stat-card">
                        <div class="eh-stat-icon-wrap">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <div class="eh-stat-number eh-counter" data-target="{{ $totalTeachers }}">0</div>
                        <div class="eh-stat-label">Available Teachers</div>
                    </div>
                    <div class="eh-stat-divider"></div>
                    <div class="eh-stat-card">
                        <div class="eh-stat-icon-wrap">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                <polyline points="22 4 12 14.01 9 11.01"/>
                            </svg>
                        </div>
                        <div class="eh-stat-number">100%</div>
                        <div class="eh-stat-label">Verified Profiles</div>
                    </div>
                    <div class="eh-stat-divider"></div>
                    <div class="eh-stat-card">
                        <div class="eh-stat-icon-wrap">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div class="eh-stat-number">24/7</div>
                        <div class="eh-stat-label">Support Available</div>
                    </div>
                </div>

                <!-- Scroll Indicator -->
                <div class="eh-scroll-indicator eh-animate-up eh-delay-3">
                    <div class="eh-scroll-mouse">
                        <div class="eh-scroll-wheel"></div>
                    </div>
                    <span>Scroll to explore</span>
                </div>

            </div>
        </div>

        <!-- Hero Wave -->
        <div class="eh-hero-wave">
            <svg viewBox="0 0 1440 140" preserveAspectRatio="none">
                <path d="M0,80 C240,140 480,20 720,80 C960,140 1200,20 1440,80 L1440,140 L0,140 Z" fill="#0D1B2A" opacity="0.5"/>
                <path d="M0,100 C360,140 720,40 1080,100 C1260,130 1380,90 1440,100 L1440,140 L0,140 Z" fill="#0D1B2A"/>
            </svg>
        </div>
    </div>

    <!-- ===== Main Content ===== -->
    <div class="eh-main-content">
        <div class="container">

            <!-- Search Section -->
            <div class="eh-search-section eh-animate-up eh-delay-3">
                <div class="eh-search-box">
                    <div class="eh-search-icon-wrap">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2.5" stroke-linecap="round">
                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                    </div>
                    <input type="text" id="teacherSearch" class="eh-search-input" placeholder="Search by name, class, subject, or location..." autocomplete="off">
                    <div class="eh-search-live-dot">
                        <span class="eh-live-ring"></span>
                        <span class="eh-live-core"></span>
                    </div>
                </div>
                <div class="eh-search-filters">
                    <span class="eh-filter-label">Quick filters:</span>
                    <button class="eh-filter-tag" data-search="Math">
                        <span>📐</span> Math
                    </button>
                    <button class="eh-filter-tag" data-search="Science">
                        <span>🔬</span> Science
                    </button>
                    <button class="eh-filter-tag" data-search="English">
                        <span>📝</span> English
                    </button>
                    <button class="eh-filter-tag" data-search="Bangla">
                        <span>📖</span> Bangla
                    </button>
                    <button class="eh-filter-tag eh-filter-clear" data-search="">
                        ✕ Clear
                    </button>
                </div>
            </div>

            <!-- Results Bar -->
            <div class="eh-results-bar eh-animate-up eh-delay-4">
                <div class="eh-results-left">
                    <span class="eh-results-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"/>
                            <rect x="14" y="3" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/>
                            <rect x="3" y="14" width="7" height="7"/>
                        </svg>
                    </span>
                    <span class="eh-results-count-num" id="resultsCount">{{ $totalTeachers }}</span>
                    <span class="eh-results-text">Teachers Found</span>
                </div>
                <div class="eh-results-right">
                    <span class="eh-sort-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <polyline points="19 12 12 19 5 12"/>
                        </svg>
                        Sorted by Experience
                    </span>
                </div>
            </div>

            <!-- Teacher Cards Grid -->
            <div class="row g-4" id="teachersContainer">

                @php $cardIndex = 0; @endphp

                @forelse($approvedTeachers as $teacher)
                    @php $cardIndex++; @endphp

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 eh-teacher-card-item" data-index="{{ $cardIndex }}">

                        <div class="eh-teacher-card">
                            <!-- Card Glow -->
                            <div class="eh-card-glow"></div>

                            <!-- Top Accent Bar -->
                            <div class="eh-card-accent">
                                <div class="eh-accent-shimmer"></div>
                            </div>

                            <!-- Experience Badge -->
                            <div class="eh-exp-badge">
                                <div class="eh-exp-ring"></div>
                                <span class="eh-exp-num">{{ $teacher->experience ?? '0' }}</span>
                                <span class="eh-exp-unit">YRS</span>
                            </div>

                            <!-- Rank Badge for top 3 -->
                            @if($cardIndex <= 3)
                            <div class="eh-rank-badge eh-rank-{{ $cardIndex }}">
                                @if($cardIndex === 1)
                                    🥇
                                @elseif($cardIndex === 2)
                                    🥈
                                @else
                                    🥉
                                @endif
                            </div>
                            @endif

                            <div class="eh-card-body">
                                <!-- Teacher Avatar -->
                                <div class="eh-avatar-wrapper">
                                    <div class="eh-avatar-ring eh-ring-outer"></div>
                                    <div class="eh-avatar-ring eh-ring-inner"></div>
                                    <div class="eh-avatar-glow-ring"></div>
                                    <img src="{{ config('app.storage_url') }}{{ $teacher->image }}"
                                         class="eh-avatar-img"
                                         alt="{{ $teacher->name }}"
                                         loading="lazy"
                                         onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2290%22 height=%2290%22><rect fill=%22%231B2838%22 width=%2290%22 height=%2290%22 rx=%2245%22/><text x=%2245%22 y=%2255%22 text-anchor=%22middle%22 fill=%22%2300FFFF%22 font-size=%2230%22 font-weight=%22bold%22>{{ strtoupper(substr($teacher->name, 0, 1)) }}</text></svg>'">
                                </div>

                                <!-- Teacher Name -->
                                <h5 class="eh-teacher-name">{{ $teacher->name }}</h5>

                                <!-- Quick Info -->
                                <div class="eh-quick-info">
                                    <div class="eh-info-row">
                                        <div class="eh-info-icon-box">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2">
                                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                            </svg>
                                        </div>
                                        <div class="eh-info-text">
                                            <span class="eh-info-label">Preferred Class</span>
                                            <span class="eh-info-val teacher-classes">
                                                {{ !empty($teacher->preferred_class_names) ? implode(', ', $teacher->preferred_class_names) : 'N/A' }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="eh-info-row">
                                        <div class="eh-info-icon-box">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2">
                                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                            </svg>
                                        </div>
                                        <div class="eh-info-text">
                                            <span class="eh-info-label">Preferred Subject</span>
                                            <span class="eh-info-val teacher-subjects">
                                                {{ !empty($teacher->preferred_subject_names) ? implode(', ', $teacher->preferred_subject_names) : 'N/A' }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="eh-info-row">
                                        <div class="eh-info-icon-box">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2">
                                                <circle cx="12" cy="12" r="10"/>
                                                <polyline points="12 6 12 12 16 14"/>
                                            </svg>
                                        </div>
                                        <div class="eh-info-text">
                                            <span class="eh-info-label">Experience</span>
                                            <span class="eh-info-val eh-cyan-text">{{ $teacher->experience ?? '0' }} Years</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hidden Search Fields -->
                                <p class="teacher-contact" style="display:none;">
                                    {{ $teacher->email ?? '' }} {{ $teacher->number ?? '' }} {{ $teacher->division ?? '' }} {{ $teacher->district ?? '' }} {{ $teacher->current_address ?? '' }}
                                </p>

                                <!-- CTA Button -->
                                <a href="{{ route('teacher.details', [$class->id, $teacher->id]) }}" class="eh-cta-btn">
                                    <span>View Details</span>
                                    <span class="eh-cta-arrow">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                                            <line x1="5" y1="12" x2="19" y2="12"/>
                                            <polyline points="12 5 19 12 12 19"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>

                @empty
                    <div class="col-12">
                        <div class="eh-empty-state">
                            <div class="eh-empty-icon">
                                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="0.8" opacity="0.4">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                                <div class="eh-empty-pulse"></div>
                            </div>
                            <h4 class="eh-empty-title">No Approved Teachers Found</h4>
                            <p class="eh-empty-desc">There are currently no approved teachers available for this class. Please check back later or try a different class.</p>
                        </div>
                    </div>
                @endforelse

            </div>

            <!-- No Results Message -->
            <div class="eh-no-results" id="noResults" style="display:none;">
                <div class="eh-no-results-icon">🔍</div>
                <h5>No matching teachers found</h5>
                <p>Try adjusting your search terms</p>
            </div>

        </div>
    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Counter animation
    document.querySelectorAll('.eh-counter').forEach(function(counter) {
        var target = parseInt(counter.getAttribute('data-target')) || 0;
        var step = Math.ceil(target / 40);
        var current = 0;
        var timer = setInterval(function() {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            counter.textContent = current;
        }, 40);
    });

    // Search functionality
    var searchInput = document.getElementById('teacherSearch');
    var cards = document.querySelectorAll('.eh-teacher-card-item');
    var noResults = document.getElementById('noResults');
    var resultsCount = document.getElementById('resultsCount');

    function doSearch(query) {
        var q = query.toLowerCase().trim();
        var visible = 0;
        cards.forEach(function(card) {
            var text = card.textContent.toLowerCase();
            if (!q || text.indexOf(q) !== -1) {
                card.style.display = '';
                visible++;
            } else {
                card.style.display = 'none';
            }
        });
        resultsCount.textContent = visible;
        noResults.style.display = visible === 0 && q ? '' : 'none';
    }

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            doSearch(this.value);
        });
    }

    document.querySelectorAll('.eh-filter-tag').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var val = this.getAttribute('data-search') || '';
            if (searchInput) {
                searchInput.value = val;
                doSearch(val);
            }
        });
    });
});
</script>

<style>
/* ===== ROOT VARIABLES ===== */
:root {
    --eh-dark: #0D1B2A;
    --eh-dark-light: #1B2D45;
    --eh-dark-card: #132238;
    --eh-cyan: #00FFFF;
    --eh-cyan-dim: rgba(0, 255, 255, 0.15);
    --eh-cyan-glow: rgba(0, 255, 255, 0.3);
    --eh-white: #E0F7FA;
    --eh-gray: #8899AA;
    --eh-border: rgba(0, 255, 255, 0.1);
}

/* ===== RESET & BASE ===== */
.eduhire-teachers-section {
    background: var(--eh-dark);
    min-height: 100vh;
    position: relative;
    overflow: hidden;
    font-family: 'Segoe UI', 'Inter', -apple-system, sans-serif;
    color: var(--eh-white);
}

.eduhire-teachers-section *,
.eduhire-teachers-section *::before,
.eduhire-teachers-section *::after {
    box-sizing: border-box;
}

/* ===== PARTICLES ===== */
.eh-particles-bg {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none;
    z-index: 0;
}

.eh-particle {
    position: absolute;
    width: 3px; height: 3px;
    background: var(--eh-cyan);
    border-radius: 50%;
    opacity: 0;
    animation: ehFloat 12s infinite ease-in-out;
}

.ep1  { left: 5%;  top: 10%; animation-delay: 0s;   animation-duration: 14s; }
.ep2  { left: 15%; top: 25%; animation-delay: 1.2s; animation-duration: 11s; }
.ep3  { left: 25%; top: 50%; animation-delay: 2.4s; animation-duration: 13s; }
.ep4  { left: 35%; top: 15%; animation-delay: 0.8s; animation-duration: 10s; }
.ep5  { left: 45%; top: 70%; animation-delay: 3.2s; animation-duration: 15s; }
.ep6  { left: 55%; top: 35%; animation-delay: 1.6s; animation-duration: 12s; }
.ep7  { left: 65%; top: 80%; animation-delay: 4s;   animation-duration: 11s; }
.ep8  { left: 75%; top: 20%; animation-delay: 2s;   animation-duration: 14s; }
.ep9  { left: 85%; top: 60%; animation-delay: 0.4s; animation-duration: 13s; }
.ep10 { left: 90%; top: 40%; animation-delay: 3.6s; animation-duration: 10s; }
.ep11 { left: 10%; top: 85%; animation-delay: 5s;   animation-duration: 12s; }
.ep12 { left: 30%; top: 90%; animation-delay: 1s;   animation-duration: 15s; }
.ep13 { left: 50%; top: 5%;  animation-delay: 2.8s; animation-duration: 11s; }
.ep14 { left: 70%; top: 45%; animation-delay: 4.4s; animation-duration: 14s; }
.ep15 { left: 20%; top: 65%; animation-delay: 0.6s; animation-duration: 13s; }
.ep16 { left: 40%; top: 30%; animation-delay: 3.8s; animation-duration: 10s; }
.ep17 { left: 60%; top: 55%; animation-delay: 1.4s; animation-duration: 12s; }
.ep18 { left: 80%; top: 75%; animation-delay: 2.2s; animation-duration: 15s; }
.ep19 { left: 95%; top: 10%; animation-delay: 4.8s; animation-duration: 11s; }
.ep20 { left: 48%; top: 95%; animation-delay: 0.2s; animation-duration: 14s; }

@keyframes ehFloat {
    0%, 100% { opacity: 0; transform: translateY(0) scale(1); }
    25% { opacity: 0.6; }
    50% { opacity: 0.3; transform: translateY(-60px) scale(1.5); }
    75% { opacity: 0.5; }
}

/* ===== GRADIENT ORBS ===== */
.eh-orb {
    position: fixed;
    border-radius: 50%;
    filter: blur(100px);
    pointer-events: none;
    z-index: 0;
}

.eh-orb-1 {
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(0, 255, 255, 0.08), transparent 70%);
    top: -150px; right: -100px;
    animation: ehOrbMove1 20s infinite ease-in-out;
}

.eh-orb-2 {
    width: 400px; height: 400px;
    background: radial-gradient(circle, rgba(0, 255, 255, 0.06), transparent 70%);
    bottom: -100px; left: -100px;
    animation: ehOrbMove2 25s infinite ease-in-out;
}

.eh-orb-3 {
    width: 300px; height: 300px;
    background: radial-gradient(circle, rgba(0, 200, 255, 0.05), transparent 70%);
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    animation: ehOrbMove3 18s infinite ease-in-out;
}

@keyframes ehOrbMove1 {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(-80px, 60px); }
}
@keyframes ehOrbMove2 {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(60px, -80px); }
}
@keyframes ehOrbMove3 {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50% { transform: translate(-50%, -50%) scale(1.3); }
}

/* ===== SCANLINES ===== */
.eh-scanlines {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none;
    z-index: 1;
    background: repeating-linear-gradient(
        0deg,
        transparent,
        transparent 2px,
        rgba(0, 255, 255, 0.008) 2px,
        rgba(0, 255, 255, 0.008) 4px
    );
}

/* ===== HERO HEADER ===== */
.eh-hero-header {
    position: relative;
    z-index: 2;
    padding: 100px 0 120px;
    text-align: center;
    background: linear-gradient(180deg, rgba(0, 255, 255, 0.03) 0%, transparent 100%);
}

.eh-hero-content {
    max-width: 800px;
    margin: 0 auto;
}

/* Brand Badge */
.eh-brand-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(0, 255, 255, 0.06);
    border: 1px solid var(--eh-border);
    border-radius: 50px;
    padding: 8px 20px;
    margin-bottom: 30px;
    position: relative;
    backdrop-filter: blur(10px);
}

.eh-badge-pulse {
    position: absolute;
    left: 16px;
    width: 8px; height: 8px;
    background: var(--eh-cyan);
    border-radius: 50%;
    animation: ehPulse 2s infinite;
}

@keyframes ehPulse {
    0%, 100% { box-shadow: 0 0 0 0 rgba(0, 255, 255, 0.5); }
    50% { box-shadow: 0 0 0 8px rgba(0, 255, 255, 0); }
}

.eh-badge-icon {
    margin-left: 14px;
    display: flex;
    align-items: center;
}

.eh-badge-text {
    font-weight: 700;
    font-size: 15px;
    color: var(--eh-cyan);
    letter-spacing: 1px;
}

.eh-badge-dot {
    width: 4px; height: 4px;
    background: var(--eh-gray);
    border-radius: 50%;
}

.eh-badge-status {
    font-size: 12px;
    color: var(--eh-gray);
    letter-spacing: 0.5px;
}

/* Hero Title */
.eh-hero-title {
    margin-bottom: 20px;
}

.eh-title-sub {
    display: block;
    font-size: 16px;
    font-weight: 400;
    color: var(--eh-gray);
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.eh-title-main {
    display: block;
    position: relative;
}

.eh-title-highlight {
    font-size: 42px;
    font-weight: 800;
    color: var(--eh-white);
    text-shadow: 0 0 30px rgba(0, 255, 255, 0.2);
    background: linear-gradient(135deg, #ffffff, var(--eh-cyan));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.eh-title-cursor {
    display: inline-block;
    width: 3px;
    height: 40px;
    background: var(--eh-cyan);
    margin-left: 6px;
    vertical-align: middle;
    animation: ehBlink 1s infinite;
}

@keyframes ehBlink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

/* Hero Description */
.eh-hero-desc {
    font-size: 16px;
    line-height: 1.7;
    color: var(--eh-gray);
    max-width: 600px;
    margin: 0 auto 40px;
}

/* Hero Stats */
.eh-hero-stats {
    display: inline-flex;
    align-items: center;
    gap: 30px;
    background: rgba(0, 255, 255, 0.04);
    border: 1px solid var(--eh-border);
    border-radius: 16px;
    padding: 24px 40px;
    backdrop-filter: blur(10px);
    margin-bottom: 40px;
}

.eh-stat-card {
    text-align: center;
}

.eh-stat-icon-wrap {
    display: flex;
    justify-content: center;
    margin-bottom: 8px;
}

.eh-stat-number {
    font-size: 28px;
    font-weight: 800;
    color: var(--eh-cyan);
    line-height: 1.2;
}

.eh-stat-label {
    font-size: 12px;
    color: var(--eh-gray);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-top: 4px;
}

.eh-stat-divider {
    width: 1px;
    height: 50px;
    background: var(--eh-border);
}

/* Scroll Indicator */
.eh-scroll-indicator {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    color: var(--eh-gray);
    font-size: 12px;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.eh-scroll-mouse {
    width: 24px;
    height: 38px;
    border: 2px solid rgba(0, 255, 255, 0.3);
    border-radius: 12px;
    position: relative;
}

.eh-scroll-wheel {
    width: 4px;
    height: 8px;
    background: var(--eh-cyan);
    border-radius: 2px;
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    animation: ehScrollWheel 2s infinite;
}

@keyframes ehScrollWheel {
    0% { opacity: 1; top: 8px; }
    100% { opacity: 0; top: 22px; }
}

/* Hero Wave */
.eh-hero-wave {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    line-height: 0;
}

.eh-hero-wave svg {
    width: 100%;
    height: 80px;
}

/* ===== MAIN CONTENT ===== */
.eh-main-content {
    position: relative;
    z-index: 2;
    padding: 40px 0 80px;
}

/* ===== SEARCH SECTION ===== */
.eh-search-section {
    max-width: 700px;
    margin: 0 auto 30px;
}

.eh-search-box {
    display: flex;
    align-items: center;
    background: var(--eh-dark-card);
    border: 1px solid var(--eh-border);
    border-radius: 14px;
    padding: 4px;
    position: relative;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.eh-search-box:focus-within {
    border-color: rgba(0, 255, 255, 0.4);
    box-shadow: 0 0 20px rgba(0, 255, 255, 0.08);
}

.eh-search-icon-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    flex-shrink: 0;
}

.eh-search-input {
    flex: 1;
    background: transparent;
    border: none;
    outline: none;
    color: var(--eh-white);
    font-size: 15px;
    padding: 14px 10px;
    font-family: inherit;
}

.eh-search-input::placeholder {
    color: var(--eh-gray);
    opacity: 0.7;
}

.eh-search-live-dot {
    position: relative;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.eh-live-core {
    width: 8px; height: 8px;
    background: #00e676;
    border-radius: 50%;
    position: relative;
    z-index: 1;
}

.eh-live-ring {
    position: absolute;
    width: 16px; height: 16px;
    border: 2px solid rgba(0, 230, 118, 0.3);
    border-radius: 50%;
    animation: ehLiveRing 2s infinite;
}

@keyframes ehLiveRing {
    0% { transform: scale(0.8); opacity: 1; }
    100% { transform: scale(1.8); opacity: 0; }
}

/* Search Filters */
.eh-search-filters {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
    margin-top: 14px;
    padding: 0 4px;
}

.eh-filter-label {
    font-size: 12px;
    color: var(--eh-gray);
    letter-spacing: 0.5px;
}

.eh-filter-tag {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: rgba(0, 255, 255, 0.06);
    border: 1px solid var(--eh-border);
    border-radius: 20px;
    padding: 6px 14px;
    font-size: 12px;
    color: var(--eh-gray);
    cursor: pointer;
    transition: all 0.3s;
    font-family: inherit;
}

.eh-filter-tag:hover {
    background: rgba(0, 255, 255, 0.12);
    border-color: rgba(0, 255, 255, 0.3);
    color: var(--eh-cyan);
}

.eh-filter-clear {
    color: #ff6b6b;
    border-color: rgba(255, 107, 107, 0.2);
    background: rgba(255, 107, 107, 0.06);
}

.eh-filter-clear:hover {
    background: rgba(255, 107, 107, 0.12);
    border-color: rgba(255, 107, 107, 0.3);
    color: #ff6b6b;
}

/* ===== RESULTS BAR ===== */
.eh-results-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 20px;
    background: rgba(0, 255, 255, 0.03);
    border: 1px solid var(--eh-border);
    border-radius: 12px;
    margin-bottom: 30px;
}

.eh-results-left {
    display: flex;
    align-items: center;
    gap: 10px;
}

.eh-results-icon {
    display: flex;
    align-items: center;
}

.eh-results-count-num {
    font-size: 20px;
    font-weight: 800;
    color: var(--eh-cyan);
}

.eh-results-text {
    font-size: 14px;
    color: var(--eh-gray);
}

.eh-sort-badge {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: var(--eh-gray);
    background: rgba(0, 255, 255, 0.05);
    border: 1px solid var(--eh-border);
    border-radius: 20px;
    padding: 6px 14px;
}

/* ===== TEACHER CARD ===== */
.eh-teacher-card {
    position: relative;
    background: var(--eh-dark-card);
    border: 1px solid var(--eh-border);
    border-radius: 18px;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    height: 100%;
}

.eh-teacher-card:hover {
    transform: translateY(-6px);
    border-color: rgba(0, 255, 255, 0.3);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4), 0 0 30px rgba(0, 255, 255, 0.06);
}

/* Card Glow */
.eh-card-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle at center, rgba(0, 255, 255, 0.04), transparent 60%);
    opacity: 0;
    transition: opacity 0.4s;
    pointer-events: none;
}

.eh-teacher-card:hover .eh-card-glow {
    opacity: 1;
}

/* Card Top Accent */
.eh-card-accent {
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--eh-cyan), transparent);
    position: relative;
    overflow: hidden;
}

.eh-accent-shimmer {
    position: absolute;
    top: 0; left: -100%;
    width: 100%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.6), transparent);
    animation: ehShimmer 3s infinite;
}

@keyframes ehShimmer {
    0% { left: -100%; }
    100% { left: 200%; }
}

/* Experience Badge */
.eh-exp-badge {
    position: absolute;
    top: 18px;
    right: 18px;
    width: 52px;
    height: 52px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 3;
    background: rgba(0, 255, 255, 0.08);
    border: 1px solid rgba(0, 255, 255, 0.2);
    border-radius: 50%;
}

.eh-exp-ring {
    position: absolute;
    inset: -3px;
    border: 1px solid rgba(0, 255, 255, 0.15);
    border-radius: 50%;
    animation: ehExpRing 3s infinite;
}

@keyframes ehExpRing {
    0%, 100% { transform: scale(1); opacity: 0.5; }
    50% { transform: scale(1.1); opacity: 0.2; }
}

.eh-exp-num {
    font-size: 16px;
    font-weight: 800;
    color: var(--eh-cyan);
    line-height: 1;
}

.eh-exp-unit {
    font-size: 8px;
    color: var(--eh-gray);
    letter-spacing: 1px;
    font-weight: 600;
}

/* Rank Badge */
.eh-rank-badge {
    position: absolute;
    top: 18px;
    left: 18px;
    font-size: 22px;
    z-index: 3;
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Card Body */
.eh-card-body {
    padding: 30px 24px 24px;
    text-align: center;
}

/* Avatar */
.eh-avatar-wrapper {
    position: relative;
    width: 90px;
    height: 90px;
    margin: 0 auto 18px;
}

.eh-avatar-img {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    object-fit: cover;
    position: relative;
    z-index: 2;
    border: 3px solid var(--eh-dark-card);
}

.eh-avatar-ring {
    position: absolute;
    border-radius: 50%;
    border: 2px solid;
}

.eh-ring-outer {
    inset: -6px;
    border-color: rgba(0, 255, 255, 0.15);
    animation: ehRingSpin 8s linear infinite;
    border-style: dashed;
}

.eh-ring-inner {
    inset: -3px;
    border-color: rgba(0, 255, 255, 0.25);
    animation: ehRingSpin 6s linear infinite reverse;
    border-style: dotted;
}

.eh-avatar-glow-ring {
    position: absolute;
    inset: -8px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(0, 255, 255, 0.1), transparent 70%);
}

@keyframes ehRingSpin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Teacher Name */
.eh-teacher-name {
    font-size: 18px;
    font-weight: 700;
    color: var(--eh-white);
    margin: 0 0 18px;
    line-height: 1.3;
}

/* Quick Info */
.eh-quick-info {
    text-align: left;
    margin-bottom: 20px;
}

.eh-info-row {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid rgba(0, 255, 255, 0.05);
}

.eh-info-row:last-child {
    border-bottom: none;
}

.eh-info-icon-box {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 255, 255, 0.06);
    border-radius: 8px;
    flex-shrink: 0;
    margin-top: 2px;
}

.eh-info-text {
    display: flex;
    flex-direction: column;
    gap: 2px;
    min-width: 0;
}

.eh-info-label {
    font-size: 11px;
    color: var(--eh-gray);
    text-transform: uppercase;
    letter-spacing: 0.8px;
}

.eh-info-val {
    font-size: 13px;
    color: var(--eh-white);
    font-weight: 500;
    line-height: 1.4;
    word-break: break-word;
}

.eh-cyan-text {
    color: var(--eh-cyan) !important;
    font-weight: 700 !important;
}

/* CTA Button */
.eh-cta-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 13px 24px;
    background: transparent;
    border: 1px solid rgba(0, 255, 255, 0.3);
    border-radius: 12px;
    color: var(--eh-cyan);
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-decoration: none;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    font-family: inherit;
}

.eh-cta-btn::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0, 255, 255, 0.1), rgba(0, 255, 255, 0.03));
    opacity: 0;
    transition: opacity 0.3s;
}

.eh-cta-btn:hover {
    border-color: var(--eh-cyan);
    box-shadow: 0 0 20px rgba(0, 255, 255, 0.15);
    color: var(--eh-cyan);
    text-decoration: none;
}

.eh-cta-btn:hover::before {
    opacity: 1;
}

.eh-cta-arrow {
    transition: transform 0.3s;
}

.eh-cta-btn:hover .eh-cta-arrow {
    transform: translateX(4px);
}

/* ===== EMPTY STATE ===== */
.eh-empty-state {
    text-align: center;
    padding: 80px 30px;
}

.eh-empty-icon {
    position: relative;
    display: inline-flex;
    margin-bottom: 24px;
}

.eh-empty-pulse {
    position: absolute;
    inset: -20px;
    border: 1px solid rgba(0, 255, 255, 0.1);
    border-radius: 50%;
    animation: ehPulse 3s infinite;
}

.eh-empty-title {
    font-size: 22px;
    font-weight: 700;
    color: var(--eh-white);
    margin-bottom: 10px;
}

.eh-empty-desc {
    font-size: 15px;
    color: var(--eh-gray);
    max-width: 450px;
    margin: 0 auto;
    line-height: 1.6;
}

/* ===== NO RESULTS ===== */
.eh-no-results {
    text-align: center;
    padding: 60px 20px;
}

.eh-no-results-icon {
    font-size: 48px;
    margin-bottom: 16px;
}

.eh-no-results h5 {
    font-size: 18px;
    color: var(--eh-white);
    margin-bottom: 8px;
}

.eh-no-results p {
    color: var(--eh-gray);
    font-size: 14px;
}

/* ===== ANIMATIONS ===== */
.eh-animate-down {
    animation: ehFadeDown 0.8s ease-out forwards;
}

.eh-animate-up {
    animation: ehFadeUp 0.8s ease-out forwards;
}

.eh-delay-1 { animation-delay: 0.15s; opacity: 0; }
.eh-delay-2 { animation-delay: 0.3s; opacity: 0; }
.eh-delay-3 { animation-delay: 0.45s; opacity: 0; }
.eh-delay-4 { animation-delay: 0.6s; opacity: 0; }

@keyframes ehFadeDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes ehFadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Card Stagger Animation */
.eh-teacher-card-item {
    opacity: 0;
    animation: ehCardAppear 0.6s ease-out forwards;
}

.eh-teacher-card-item:nth-child(1) { animation-delay: 0.1s; }
.eh-teacher-card-item:nth-child(2) { animation-delay: 0.2s; }
.eh-teacher-card-item:nth-child(3) { animation-delay: 0.3s; }
.eh-teacher-card-item:nth-child(4) { animation-delay: 0.4s; }
.eh-teacher-card-item:nth-child(5) { animation-delay: 0.5s; }
.eh-teacher-card-item:nth-child(6) { animation-delay: 0.6s; }
.eh-teacher-card-item:nth-child(7) { animation-delay: 0.7s; }
.eh-teacher-card-item:nth-child(8) { animation-delay: 0.8s; }
.eh-teacher-card-item:nth-child(9) { animation-delay: 0.9s; }

@keyframes ehCardAppear {
    from { opacity: 0; transform: translateY(30px) scale(0.97); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 991px) {
    .eh-hero-header {
        padding: 70px 0 100px;
    }

    .eh-title-highlight {
        font-size: 32px;
    }

    .eh-hero-stats {
        gap: 20px;
        padding: 20px 24px;
    }

    .eh-stat-number {
        font-size: 22px;
    }
}

@media (max-width: 767px) {
    .eh-hero-header {
        padding: 50px 0 90px;
    }

    .eh-title-highlight {
        font-size: 26px;
    }

    .eh-title-cursor {
        height: 28px;
    }

    .eh-hero-stats {
        flex-direction: column;
        gap: 16px;
        padding: 20px;
    }

    .eh-stat-divider {
        width: 50px;
        height: 1px;
    }

    .eh-results-bar {
        flex-direction: column;
        gap: 12px;
        text-align: center;
    }

    .eh-search-filters {
        justify-content: center;
    }

    .eh-brand-badge {
        flex-wrap: wrap;
        justify-content: center;
    }
}

@media (max-width: 575px) {
    .eh-hero-header {
        padding: 40px 0 80px;
    }

    .eh-title-highlight {
        font-size: 22px;
    }

    .eh-hero-desc {
        font-size: 14px;
    }

    .eh-card-body {
        padding: 24px 18px 18px;
    }
}
</style>

@endsection
