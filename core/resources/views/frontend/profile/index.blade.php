@extends('frontend.app')

@section('content')

<div class="eduhire-profile-wrapper">

    <!-- Background Effects -->
    <div class="bg-particles">
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
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="floating-orb floating-orb-1"></div>
    <div class="floating-orb floating-orb-2"></div>
    <div class="floating-orb floating-orb-3"></div>

    <div class="grid-overlay"></div>

    <!-- Content -->
    <div class="content-wrapper">
        <div class="container">

            <!-- Success Alert -->
            @if (session('success'))
            <div class="eduhire-alert" role="alert">
                <div style="display:flex;align-items:center;">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <!-- Page Title Section -->
            <div class="page-title-section">
                <div class="page-title-badge">
                    <i class="bi bi-shield-check"></i>
                    <span>Verified Profile</span>
                </div>
                <h1 class="page-title">
                    My <span class="highlight">EduHire</span><span class="typing-cursor"></span> Profile
                </h1>
                <p class="page-subtitle">Manage your teacher profile and keep your information up to date</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">

                    <!-- Profile Header Card -->
                    <div class="profile-header-card">
                        <div class="scan-line"></div>
                        <div class="corner-decoration top-left"></div>
                        <div class="corner-decoration top-right"></div>
                        <div class="corner-decoration bottom-left"></div>
                        <div class="corner-decoration bottom-right"></div>

                        <!-- Cover Image -->
                        <div class="profile-cover">
                            <div class="cover-pattern"></div>
                            <div class="cover-shape cover-shape-1"></div>
                            <div class="cover-shape cover-shape-2"></div>
                            <div class="cover-shape cover-shape-3"></div>
                            <div class="cover-shape cover-shape-4"></div>
                            <div class="cover-shape cover-shape-5"></div>
                        </div>

                        <!-- Profile Info -->
                        <div class="profile-info-section">
                            <div class="profile-avatar-wrapper">
                                <div class="profile-avatar">
                                    @if($profile->image)
                                        <img src="{{ config('app.storage_url') }}{{ $profile->image }}" alt="{{ $profile->name ?? 'Profile' }}">
                                    @else
                                        <div class="avatar-placeholder">
                                            {{ strtoupper(substr($profile->name ?? 'U', 0, 1)) }}
                                        </div>
                                    @endif
                                </div>
                                <div class="profile-name-area">
                                    <h2 class="profile-name">{{ $profile->name ?? 'Not set' }}</h2>
                                    <span class="profile-role">
                                        <i class="bi bi-person-workspace"></i>
                                        Teacher Profile
                                        <span class="online-dot"></span>
                                    </span>
                                </div>
                            </div>

                            <!-- Quick Stats -->
                            <div class="quick-stats-bar">
                                <div class="quick-stat-item">
                                    <div class="quick-stat-icon">
                                        <i class="bi bi-briefcase-fill"></i>
                                    </div>
                                    <div class="quick-stat-text">
                                        <span class="quick-stat-value">{{ $profile->experience ?? '0' }} Years</span>
                                        <span class="quick-stat-label">Experience</span>
                                    </div>
                                </div>
                                <div class="quick-stat-item">
                                    <div class="quick-stat-icon">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="quick-stat-text">
                                        <span class="quick-stat-value">{{ $profile->salary ?? 'N/A' }} BDT</span>
                                        <span class="quick-stat-label">Expected Salary</span>
                                    </div>
                                </div>
                                <div class="quick-stat-item">
                                    <div class="quick-stat-icon">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div class="quick-stat-text">
                                        <span class="quick-stat-value">{{ is_array($profile->district) ? implode(', ', $profile->district) : ($profile->district ?? 'N/A') }}</span>
                                        <span class="quick-stat-label">Location</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Personal Information Section -->
                    <div class="info-section-card">
                        <div class="section-header">
                            <div class="section-icon personal">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>
                            <h3 class="section-title">Personal Information</h3>
                            <span class="section-count">4 Fields</span>
                        </div>
                        <div class="section-body">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Father's Name</div>
                                        <div class="info-item-value {{ empty($profile->father_name) ? 'not-set' : '' }}">
                                            {{ $profile->father_name ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-person-heart"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Mother's Name</div>
                                        <div class="info-item-value {{ empty($profile->mother_name) ? 'not-set' : '' }}">
                                            {{ $profile->mother_name ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-calendar-event"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Date of Birth</div>
                                        <div class="info-item-value {{ empty($profile->dob) ? 'not-set' : '' }}">
                                            {{ $profile->dob ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-gender-ambiguous"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Gender</div>
                                        <div class="info-item-value {{ empty($profile->gender) ? 'not-set' : '' }}">
                                            {{ $profile->gender ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-connector"></div>

                    <!-- Contact Information Section -->
                    <div class="info-section-card">
                        <div class="section-header">
                            <div class="section-icon contact">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <h3 class="section-title">Contact Information</h3>
                            <span class="section-count">6 Fields</span>
                        </div>
                        <div class="section-body">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-phone"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Mobile Number</div>
                                        <div class="info-item-value {{ empty($profile->number) ? 'not-set' : '' }}">
                                            {{ $profile->number ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Email Address</div>
                                        <div class="info-item-value {{ empty($profile->email) ? 'not-set' : '' }}">
                                            {{ $profile->email ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-map"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Division</div>
                                        <div class="info-item-value {{ empty($profile->division) ? 'not-set' : '' }}">
                                            {{ is_array($profile->division) ? implode(', ', $profile->division) : ($profile->division ?? 'Not set') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">District</div>
                                        <div class="info-item-value {{ empty($profile->district) ? 'not-set' : '' }}">
                                            {{ is_array($profile->district) ? implode(', ', $profile->district) : ($profile->district ?? 'Not set') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-house-door"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Current Address</div>
                                        <div class="info-item-value {{ empty($profile->current_address) ? 'not-set' : '' }}">
                                            {{ $profile->current_address ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-pin-map"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Permanent Address</div>
                                        <div class="info-item-value {{ empty($profile->permanent_address) ? 'not-set' : '' }}">
                                            {{ $profile->permanent_address ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-connector"></div>

                    <!-- Education Information Section -->
                    <div class="info-section-card">
                        <div class="section-header">
                            <div class="section-icon education">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <h3 class="section-title">Education Background</h3>
                            <span class="section-count">3 Fields</span>
                        </div>
                        <div class="section-body">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Subject / Major</div>
                                        <div class="info-item-value {{ empty($profile->subject_major) ? 'not-set' : '' }}">
                                            {{ is_array($profile->subject_major) ? implode(', ', $profile->subject_major) : ($profile->subject_major ?? 'Not set') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-award"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Bachelor Degree</div>
                                        <div class="info-item-value {{ empty($profile->bachelor_degree) ? 'not-set' : '' }}">
                                            {{ $profile->bachelor_degree ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item" style="grid-column: span 2;">
                                    <div class="info-item-icon">
                                        <i class="bi bi-mortarboard"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Master Degree</div>
                                        <div class="info-item-value {{ empty($profile->master_degree) ? 'not-set' : '' }}">
                                            {{ $profile->master_degree ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-connector"></div>

                    <!-- Teaching Information Section -->
                    <div class="info-section-card">
                        <div class="section-header">
                            <div class="section-icon teaching">
                                <i class="bi bi-building"></i>
                            </div>
                            <h3 class="section-title">Teaching Information</h3>
                            <span class="section-count">6 Fields</span>
                        </div>
                        <div class="section-body">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-journal-text"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Preferred Class</div>
                                        <div class="info-item-value {{ empty($preferred_class_names) ? 'not-set' : '' }}">
                                            {{ !empty($preferred_class_names) ? implode(', ', $preferred_class_names) : 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-bookmark-star"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Preferred Subject</div>
                                        <div class="info-item-value {{ empty($preferred_subject_names) ? 'not-set' : '' }}">
                                            {{ !empty($preferred_subject_names) ? implode(', ', $preferred_subject_names) : 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-hourglass-split"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Experience</div>
                                        <div class="info-item-value">
                                            {{ $profile->experience ?? '0' }} <span style="color: var(--text-secondary); font-size:0.85rem;">Years</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-building-check"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Previous Institution</div>
                                        <div class="info-item-value {{ empty($profile->previous_school) ? 'not-set' : '' }}">
                                            {{ $profile->previous_school ?? 'Not set' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Expected Salary</div>
                                        <div class="info-item-value">
                                            @if($profile->salary)
                                                <span class="salary-amount">{{ $profile->salary }}</span>
                                                <span class="salary-currency">BDT</span>
                                            @else
                                                <span class="not-set">Not set</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-item-icon">
                                        <i class="bi bi-activity"></i>
                                    </div>
                                    <div class="info-item-content">
                                        <div class="info-item-label">Status</div>
                                        <div class="info-item-value">
                                            @php
                                                $statusClass = 'pending';
                                                $statusText = $profile->status ?? 'Not set';
                                                if(strtolower($statusText) === 'active' || strtolower($statusText) === 'approved') $statusClass = 'active';
                                                elseif(strtolower($statusText) === 'inactive' || strtolower($statusText) === 'rejected') $statusClass = 'inactive';
                                            @endphp
                                            <span class="status-badge {{ $statusClass }}">
                                                <span class="status-dot"></span>
                                                {{ $statusText }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions Section -->
                    <div class="actions-section">
                        <div class="last-updated">
                            <i class="bi bi-clock-history"></i>
                            <span>Profile managed by EduHire</span>
                        </div>
                        <a href="{{ url('/profile/edit') }}" class="edit-profile-btn">
                            <i class="bi bi-pencil-square"></i>
                            Edit Profile
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<style>
/* ===== EduHire Profile Page Styles ===== */

:root {
    --primary-bg: #0D1B2A;
    --secondary-bg: #112240;
    --card-bg: #1B2A4A;
    --card-border: #1E3A5F;
    --cyan: #00FFFF;
    --cyan-dim: rgba(0, 255, 255, 0.15);
    --cyan-glow: rgba(0, 255, 255, 0.3);
    --text-primary: #E0E6ED;
    --text-secondary: #8892A4;
    --text-muted: #5A6478;
    --success: #00E676;
    --warning: #FFB300;
    --danger: #FF5252;
}

.eduhire-profile-wrapper {
    background-color: var(--primary-bg);
    min-height: 100vh;
    position: relative;
    overflow: hidden;
    padding: 0;
}

/* ===== Background Effects ===== */
.bg-particles {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
}

.particle {
    position: absolute;
    width: 2px;
    height: 2px;
    background: var(--cyan);
    border-radius: 50%;
    opacity: 0;
    animation: particleFloat 8s infinite;
}

.particle:nth-child(1) { left: 5%; animation-delay: 0s; animation-duration: 10s; }
.particle:nth-child(2) { left: 15%; animation-delay: 1.2s; animation-duration: 8s; }
.particle:nth-child(3) { left: 25%; animation-delay: 0.5s; animation-duration: 12s; }
.particle:nth-child(4) { left: 35%; animation-delay: 2s; animation-duration: 9s; }
.particle:nth-child(5) { left: 45%; animation-delay: 0.8s; animation-duration: 11s; }
.particle:nth-child(6) { left: 55%; animation-delay: 1.5s; animation-duration: 7s; }
.particle:nth-child(7) { left: 65%; animation-delay: 3s; animation-duration: 10s; }
.particle:nth-child(8) { left: 75%; animation-delay: 0.3s; animation-duration: 9s; }
.particle:nth-child(9) { left: 85%; animation-delay: 2.5s; animation-duration: 8s; }
.particle:nth-child(10) { left: 95%; animation-delay: 1s; animation-duration: 12s; }
.particle:nth-child(11) { left: 10%; animation-delay: 3.5s; animation-duration: 10s; }
.particle:nth-child(12) { left: 20%; animation-delay: 4s; animation-duration: 9s; }
.particle:nth-child(13) { left: 30%; animation-delay: 2.2s; animation-duration: 11s; }
.particle:nth-child(14) { left: 40%; animation-delay: 1.8s; animation-duration: 8s; }
.particle:nth-child(15) { left: 50%; animation-delay: 0.7s; animation-duration: 10s; }
.particle:nth-child(16) { left: 60%; animation-delay: 3.2s; animation-duration: 9s; }
.particle:nth-child(17) { left: 70%; animation-delay: 2.8s; animation-duration: 12s; }
.particle:nth-child(18) { left: 80%; animation-delay: 1.3s; animation-duration: 7s; }
.particle:nth-child(19) { left: 90%; animation-delay: 4.5s; animation-duration: 11s; }
.particle:nth-child(20) { left: 50%; animation-delay: 0.2s; animation-duration: 8s; }

@keyframes particleFloat {
    0% { transform: translateY(100vh) scale(0); opacity: 0; }
    10% { opacity: 0.6; }
    50% { opacity: 0.3; }
    90% { opacity: 0.1; }
    100% { transform: translateY(-20vh) scale(1.5); opacity: 0; }
}

.floating-orb {
    position: fixed;
    border-radius: 50%;
    filter: blur(80px);
    pointer-events: none;
    z-index: 0;
}

.floating-orb-1 {
    width: 300px;
    height: 300px;
    background: rgba(0, 255, 255, 0.04);
    top: 10%;
    right: -100px;
    animation: orbFloat1 20s ease-in-out infinite;
}

.floating-orb-2 {
    width: 250px;
    height: 250px;
    background: rgba(0, 255, 255, 0.03);
    bottom: 20%;
    left: -80px;
    animation: orbFloat2 25s ease-in-out infinite;
}

.floating-orb-3 {
    width: 200px;
    height: 200px;
    background: rgba(0, 255, 255, 0.025);
    top: 50%;
    left: 50%;
    animation: orbFloat3 18s ease-in-out infinite;
}

@keyframes orbFloat1 {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(-60px, 40px); }
}

@keyframes orbFloat2 {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(50px, -30px); }
}

@keyframes orbFloat3 {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(-40px, -50px); }
}

.grid-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image:
        linear-gradient(rgba(0, 255, 255, 0.015) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 255, 255, 0.015) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
    z-index: 0;
}

/* ===== Content ===== */
.content-wrapper {
    position: relative;
    z-index: 1;
    padding: 40px 0 80px;
}

/* ===== Alert ===== */
.eduhire-alert {
    background: rgba(0, 230, 118, 0.1);
    border: 1px solid rgba(0, 230, 118, 0.3);
    border-radius: 12px;
    padding: 16px 20px;
    margin-bottom: 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: var(--success);
    font-size: 0.95rem;
    backdrop-filter: blur(10px);
}

.eduhire-alert i {
    font-size: 1.2rem;
    margin-right: 10px;
}

.eduhire-alert .btn-close {
    filter: invert(1);
    opacity: 0.5;
}

/* ===== Page Title ===== */
.page-title-section {
    text-align: center;
    margin-bottom: 40px;
}

.page-title-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--cyan-dim);
    border: 1px solid rgba(0, 255, 255, 0.2);
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 0.8rem;
    color: var(--cyan);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-bottom: 16px;
}

.page-title-badge i {
    font-size: 0.85rem;
}

.page-title {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--text-primary);
    margin: 0 0 10px;
    letter-spacing: -0.5px;
}

.page-title .highlight {
    color: var(--cyan);
    position: relative;
}

.typing-cursor {
    display: inline-block;
    width: 2px;
    height: 1.8rem;
    background: var(--cyan);
    margin-left: 4px;
    vertical-align: middle;
    animation: cursorBlink 1s step-end infinite;
}

@keyframes cursorBlink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

.page-subtitle {
    font-size: 1rem;
    color: var(--text-secondary);
    margin: 0;
}

/* ===== Profile Header Card ===== */
.profile-header-card {
    background: var(--secondary-bg);
    border: 1px solid var(--card-border);
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 24px;
    position: relative;
}

.scan-line {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--cyan), transparent);
    z-index: 5;
    animation: scanMove 4s linear infinite;
    opacity: 0.4;
}

@keyframes scanMove {
    0% { top: 0; }
    100% { top: 100%; }
}

.corner-decoration {
    position: absolute;
    width: 16px;
    height: 16px;
    z-index: 3;
}

.corner-decoration::before,
.corner-decoration::after {
    content: '';
    position: absolute;
    background: var(--cyan);
    opacity: 0.4;
}

.corner-decoration.top-left { top: 8px; left: 8px; }
.corner-decoration.top-left::before { width: 16px; height: 2px; top: 0; left: 0; }
.corner-decoration.top-left::after { width: 2px; height: 16px; top: 0; left: 0; }

.corner-decoration.top-right { top: 8px; right: 8px; }
.corner-decoration.top-right::before { width: 16px; height: 2px; top: 0; right: 0; }
.corner-decoration.top-right::after { width: 2px; height: 16px; top: 0; right: 0; }

.corner-decoration.bottom-left { bottom: 8px; left: 8px; }
.corner-decoration.bottom-left::before { width: 16px; height: 2px; bottom: 0; left: 0; }
.corner-decoration.bottom-left::after { width: 2px; height: 16px; bottom: 0; left: 0; }

.corner-decoration.bottom-right { bottom: 8px; right: 8px; }
.corner-decoration.bottom-right::before { width: 16px; height: 2px; bottom: 0; right: 0; }
.corner-decoration.bottom-right::after { width: 2px; height: 16px; bottom: 0; right: 0; }

/* Cover */
.profile-cover {
    height: 140px;
    background: linear-gradient(135deg, #0D1B2A 0%, #112240 50%, #0D1B2A 100%);
    position: relative;
    overflow: hidden;
}

.cover-pattern {
    position: absolute;
    inset: 0;
    background-image:
        radial-gradient(circle at 20% 50%, rgba(0, 255, 255, 0.06) 0%, transparent 50%),
        radial-gradient(circle at 80% 50%, rgba(0, 255, 255, 0.04) 0%, transparent 50%);
}

.cover-shape {
    position: absolute;
    border: 1px solid rgba(0, 255, 255, 0.08);
    border-radius: 50%;
}

.cover-shape-1 { width: 200px; height: 200px; top: -80px; right: -40px; }
.cover-shape-2 { width: 120px; height: 120px; top: 20px; right: 60px; }
.cover-shape-3 { width: 80px; height: 80px; bottom: -30px; left: 10%; }
.cover-shape-4 { width: 150px; height: 150px; top: -60px; left: 30%; }
.cover-shape-5 { width: 60px; height: 60px; bottom: 10px; right: 30%; }

/* Profile Info */
.profile-info-section {
    padding: 0 28px 28px;
    margin-top: -40px;
    position: relative;
    z-index: 2;
}

.profile-avatar-wrapper {
    display: flex;
    align-items: flex-end;
    gap: 20px;
    margin-bottom: 24px;
}

.profile-avatar {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    border: 3px solid var(--cyan);
    overflow: hidden;
    background: var(--card-bg);
    flex-shrink: 0;
    box-shadow: 0 0 20px rgba(0, 255, 255, 0.15);
}

.profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.avatar-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    font-weight: 700;
    color: var(--cyan);
    background: var(--cyan-dim);
}

.profile-name-area {
    padding-bottom: 6px;
}

.profile-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin: 0 0 4px;
}

.profile-role {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.85rem;
    color: var(--text-secondary);
}

.profile-role i {
    color: var(--cyan);
    font-size: 0.9rem;
}

.online-dot {
    width: 8px;
    height: 8px;
    background: var(--success);
    border-radius: 50%;
    display: inline-block;
    animation: dotPulse 2s ease-in-out infinite;
}

@keyframes dotPulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(0.8); }
}

/* Quick Stats */
.quick-stats-bar {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}

.quick-stat-item {
    background: var(--card-bg);
    border: 1px solid var(--card-border);
    border-radius: 10px;
    padding: 14px 16px;
    display: flex;
    align-items: center;
    gap: 12px;
    transition: border-color 0.3s, transform 0.3s;
}

.quick-stat-item:hover {
    border-color: rgba(0, 255, 255, 0.3);
    transform: translateY(-2px);
}

.quick-stat-icon {
    width: 38px;
    height: 38px;
    border-radius: 8px;
    background: var(--cyan-dim);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.quick-stat-icon i {
    font-size: 1rem;
    color: var(--cyan);
}

.quick-stat-text {
    display: flex;
    flex-direction: column;
    min-width: 0;
}

.quick-stat-value {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--text-primary);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.quick-stat-label {
    font-size: 0.72rem;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* ===== Info Section Cards ===== */
.info-section-card {
    background: var(--secondary-bg);
    border: 1px solid var(--card-border);
    border-radius: 14px;
    overflow: hidden;
    transition: border-color 0.3s;
}

.info-section-card:hover {
    border-color: rgba(0, 255, 255, 0.2);
}

.section-header {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 20px 24px;
    border-bottom: 1px solid var(--card-border);
}

.section-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.section-icon i {
    font-size: 1.1rem;
}

.section-icon.personal {
    background: rgba(0, 255, 255, 0.12);
    color: var(--cyan);
}
.section-icon.personal i { color: var(--cyan); }

.section-icon.contact {
    background: rgba(0, 230, 118, 0.12);
    color: var(--success);
}
.section-icon.contact i { color: var(--success); }

.section-icon.education {
    background: rgba(255, 179, 0, 0.12);
    color: var(--warning);
}
.section-icon.education i { color: var(--warning); }

.section-icon.teaching {
    background: rgba(0, 176, 255, 0.12);
    color: #00B0FF;
}
.section-icon.teaching i { color: #00B0FF; }

.section-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text-primary);
    margin: 0;
    flex: 1;
}

.section-count {
    font-size: 0.72rem;
    color: var(--text-muted);
    background: rgba(255, 255, 255, 0.05);
    padding: 4px 10px;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.section-body {
    padding: 20px 24px 24px;
}

/* Info Grid */
.info-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
}

.info-item {
    background: var(--card-bg);
    border: 1px solid var(--card-border);
    border-radius: 10px;
    padding: 16px;
    display: flex;
    align-items: flex-start;
    gap: 14px;
    transition: border-color 0.3s, transform 0.2s;
}

.info-item:hover {
    border-color: rgba(0, 255, 255, 0.25);
    transform: translateY(-1px);
}

.info-item-icon {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: var(--cyan-dim);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.info-item-icon i {
    font-size: 0.95rem;
    color: var(--cyan);
}

.info-item-content {
    flex: 1;
    min-width: 0;
}

.info-item-label {
    font-size: 0.72rem;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 4px;
}

.info-item-value {
    font-size: 0.95rem;
    font-weight: 500;
    color: var(--text-primary);
    word-break: break-word;
}

.info-item-value.not-set {
    color: var(--text-muted);
    font-style: italic;
    font-weight: 400;
}

.salary-amount {
    color: var(--cyan);
    font-weight: 700;
    font-size: 1.05rem;
}

.salary-currency {
    color: var(--text-secondary);
    font-size: 0.8rem;
    font-weight: 400;
    margin-left: 4px;
}

/* Status Badge */
.status-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.82rem;
    font-weight: 600;
    text-transform: capitalize;
}

.status-badge.active {
    background: rgba(0, 230, 118, 0.12);
    color: var(--success);
    border: 1px solid rgba(0, 230, 118, 0.25);
}

.status-badge.inactive {
    background: rgba(255, 82, 82, 0.12);
    color: var(--danger);
    border: 1px solid rgba(255, 82, 82, 0.25);
}

.status-badge.pending {
    background: rgba(255, 179, 0, 0.12);
    color: var(--warning);
    border: 1px solid rgba(255, 179, 0, 0.25);
}

.status-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: currentColor;
    animation: dotPulse 2s ease-in-out infinite;
}

/* Section Connector */
.section-connector {
    display: flex;
    justify-content: center;
    padding: 6px 0;
}

.section-connector::before {
    content: '';
    width: 2px;
    height: 20px;
    background: linear-gradient(to bottom, var(--card-border), rgba(0, 255, 255, 0.2), var(--card-border));
    border-radius: 2px;
}

/* ===== Actions Section ===== */
.actions-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 28px;
    padding: 20px 24px;
    background: var(--secondary-bg);
    border: 1px solid var(--card-border);
    border-radius: 14px;
}

.last-updated {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.85rem;
    color: var(--text-muted);
}

.last-updated i {
    color: var(--text-secondary);
}

.edit-profile-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 24px;
    background: var(--cyan);
    color: var(--primary-bg);
    border: none;
    border-radius: 10px;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(0, 255, 255, 0.2);
}

.edit-profile-btn:hover {
    background: #33FFFF;
    color: var(--primary-bg);
    transform: translateY(-2px);
    box-shadow: 0 6px 25px rgba(0, 255, 255, 0.35);
    text-decoration: none;
}

.edit-profile-btn:active {
    transform: translateY(0);
}

.edit-profile-btn i {
    font-size: 1rem;
}

/* ===== Responsive ===== */
@media (max-width: 991px) {
    .quick-stats-bar {
        grid-template-columns: 1fr;
    }
    .page-title {
        font-size: 1.8rem;
    }
}

@media (max-width: 767px) {
    .content-wrapper {
        padding: 24px 0 60px;
    }

    .page-title {
        font-size: 1.5rem;
    }

    .page-subtitle {
        font-size: 0.9rem;
    }

    .profile-avatar-wrapper {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .profile-avatar {
        width: 80px;
        height: 80px;
    }

    .profile-info-section {
        padding: 0 16px 20px;
    }

    .info-grid {
        grid-template-columns: 1fr;
    }

    .info-item[style*="grid-column: span 2"] {
        grid-column: span 1 !important;
    }

    .section-header {
        padding: 16px 18px;
    }

    .section-body {
        padding: 16px 18px 20px;
    }

    .actions-section {
        flex-direction: column;
        gap: 16px;
        text-align: center;
        padding: 18px;
    }

    .edit-profile-btn {
        width: 100%;
        justify-content: center;
    }

    .profile-cover {
        height: 100px;
    }

    .quick-stat-item {
        padding: 12px 14px;
    }
}

@media (max-width: 480px) {
    .page-title {
        font-size: 1.3rem;
    }

    .page-title-badge {
        font-size: 0.7rem;
        padding: 5px 12px;
    }

    .profile-name {
        font-size: 1.2rem;
    }

    .section-title {
        font-size: 1rem;
    }

    .info-item {
        padding: 12px;
    }

    .info-item-icon {
        width: 32px;
        height: 32px;
    }

    .info-item-icon i {
        font-size: 0.85rem;
    }
}
</style>


@endsection
