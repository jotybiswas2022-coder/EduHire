@extends('frontend.app')

@section('content')

<section class="eh-teacher-details-section">
    <div class="container">

        <!-- Hero / Teacher Summary -->
        <div class="eh-teacher-hero">
            
            <!-- Avatar -->
            <div class="eh-teacher-avatar">
                <div class="eh-avatar-wrapper">
                    <img src="{{ config('app.storage_url') }}{{ $teacher->image }}"
                         alt="{{ $teacher->name }}"
                         class="eh-avatar-img"
                         loading="lazy"
                         onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22140%22 height=%22140%22><rect fill=%22%231B2838%22 width=%22140%22 height=%22140%22 rx=%2270%22/><text x=%2270%22 y=%2288%22 text-anchor=%22middle%22 fill=%22%2300FFFF%22 font-size=%2242%22 font-weight=%22bold%22>{{ strtoupper(substr($teacher->name, 0, 1)) }}</text></svg>'">
                </div>
                <span class="eh-status-dot"></span>
            </div>

            <!-- Basic Info -->
            <div class="eh-teacher-basic">
                <h2 class="eh-teacher-name">{{ $teacher->name }}</h2>
                <p class="eh-teacher-role">Professional Educator</p>
                <div class="eh-teacher-badges">
                    <span class="eh-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        {{ $teacher->experience ?? '0' }} Years Experience
                    </span>
                    <span class="eh-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        {{ $teacher->district ?? 'N/A' }}, {{ $teacher->division ?? '' }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Info Grid -->
        <div class="eh-info-grid">

            <!-- Personal Information -->
            <div class="eh-info-card">
                <div class="eh-card-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    <h5 class="eh-card-title">Personal Information</h5>
                </div>
                <ul class="eh-card-list">
                    <li>
                        <span class="eh-label">Father's Name</span>
                        <span class="eh-value">{{ $teacher->father_name ?? 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Mother's Name</span>
                        <span class="eh-value">{{ $teacher->mother_name ?? 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Date of Birth</span>
                        <span class="eh-value">{{ $teacher->dob ?? 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Gender</span>
                        <span class="eh-value">{{ $teacher->gender ?? 'N/A' }}</span>
                    </li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="eh-info-card">
                <div class="eh-card-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    <h5 class="eh-card-title">Contact Details</h5>
                </div>
                <ul class="eh-card-list">
                    <li>
                        <span class="eh-label">Email</span>
                        <span class="eh-value">{{ $teacher->email ?? 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Phone</span>
                        <span class="eh-value">{{ $teacher->number ?? 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Division</span>
                        <span class="eh-value">{{ $teacher->division ?? 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">District</span>
                        <span class="eh-value">{{ $teacher->district ?? 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Address</span>
                        <span class="eh-value">{{ $teacher->current_address ?? 'N/A' }}</span>
                    </li>
                </ul>
            </div>

            <!-- Education -->
            <div class="eh-info-card">
                <div class="eh-card-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 1.657 2.686 3 6 3s6-1.343 6-3v-5"/></svg>
                    <h5 class="eh-card-title">Education Background</h5>
                </div>
                <ul class="eh-card-list">
                    <li>
                        <span class="eh-label">Bachelor's Degree</span>
                        <span class="eh-value">{{ $teacher->bachelor_degree ?? 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Master's Degree</span>
                        <span class="eh-value">{{ $teacher->master_degree ?? 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Major Subject</span>
                        <span class="eh-value">{{ $teacher->subject_major ?? 'N/A' }}</span>
                    </li>
                </ul>
            </div>

            <!-- Teaching Info -->
            <div class="eh-info-card">
                <div class="eh-card-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00FFFF" stroke-width="2"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
                    <h5 class="eh-card-title">Teaching Information</h5>
                </div>
                <ul class="eh-card-list">
                    <li>
                        <span class="eh-label">Preferred Subjects</span>
                        <span class="eh-value">{{ !empty($teacher->preferred_subject_names) ? implode(', ', $teacher->preferred_subject_names) : 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Preferred Classes</span>
                        <span class="eh-value">{{ !empty($teacher->preferred_class_names) ? implode(', ', $teacher->preferred_class_names) : 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Experience</span>
                        <span class="eh-value">{{ $teacher->experience ?? '0' }} Years</span>
                    </li>
                    <li>
                        <span class="eh-label">Expected Salary</span>
                        <span class="eh-value eh-salary">{{ $teacher->salary ? number_format($teacher->salary).' BDT' : 'N/A' }}</span>
                    </li>
                    <li>
                        <span class="eh-label">Previous Institution</span>
                        <span class="eh-value">{{ $teacher->previous_school ?? 'N/A' }}</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Back Button -->
        <div class="eh-back-wrap">
            <a href="{{ url()->previous() }}" class="eh-btn-back">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5"/><path d="M12 19l-7-7 7-7"/></svg>
                Back to Teachers List
            </a>
        </div>

    </div>
</section>

<style>
/* ===== BASE ===== */
.eh-teacher-details-section {
    background-color: #0D1B2A;
    color: #E0E6ED;
    min-height: 100vh;
    padding: 60px 0 80px;
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
}

/* ===== HERO ===== */
.eh-teacher-hero {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 24px;
    margin-bottom: 50px;
    padding: 40px 30px;
    background: linear-gradient(135deg, rgba(0, 255, 255, 0.03) 0%, rgba(0, 255, 255, 0.01) 100%);
    border: 1px solid rgba(0, 255, 255, 0.08);
    border-radius: 16px;
}

@media (min-width: 768px) {
    .eh-teacher-hero {
        flex-direction: row;
        text-align: left;
        padding: 40px 50px;
    }
}

/* ===== AVATAR ===== */
.eh-teacher-avatar {
    position: relative;
    flex-shrink: 0;
}

.eh-avatar-wrapper {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    padding: 4px;
    background: linear-gradient(135deg, #00FFFF 0%, #0D1B2A 50%, #00FFFF 100%);
    animation: eh-ring-spin 6s linear infinite;
}

@keyframes eh-ring-spin {
    0%   { background: linear-gradient(0deg, #00FFFF 0%, #0D1B2A 50%, #00FFFF 100%); }
    25%  { background: linear-gradient(90deg, #00FFFF 0%, #0D1B2A 50%, #00FFFF 100%); }
    50%  { background: linear-gradient(180deg, #00FFFF 0%, #0D1B2A 50%, #00FFFF 100%); }
    75%  { background: linear-gradient(270deg, #00FFFF 0%, #0D1B2A 50%, #00FFFF 100%); }
    100% { background: linear-gradient(360deg, #00FFFF 0%, #0D1B2A 50%, #00FFFF 100%); }
}

.eh-avatar-img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    display: block;
    border: 3px solid #0D1B2A;
}

.eh-status-dot {
    position: absolute;
    bottom: 10px;
    right: 10px;
    width: 16px;
    height: 16px;
    background: #00FFFF;
    border-radius: 50%;
    border: 3px solid #0D1B2A;
    box-shadow: 0 0 10px rgba(0, 255, 255, 0.6);
}

/* ===== BASIC INFO ===== */
.eh-teacher-basic {
    flex: 1;
}

.eh-teacher-name {
    font-size: 1.8rem;
    font-weight: 700;
    color: #FFFFFF;
    margin: 0 0 4px;
    letter-spacing: -0.02em;
}

.eh-teacher-role {
    font-size: 1rem;
    color: #00FFFF;
    margin: 0 0 16px;
    font-weight: 500;
}

.eh-teacher-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

@media (min-width: 768px) {
    .eh-teacher-badges {
        justify-content: flex-start;
    }
}

.eh-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(0, 255, 255, 0.08);
    border: 1px solid rgba(0, 255, 255, 0.15);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.82rem;
    color: #B0BEC5;
    font-weight: 500;
}

/* ===== INFO GRID ===== */
.eh-info-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
}

@media (min-width: 768px) {
    .eh-info-grid {
        grid-template-columns: 1fr 1fr;
    }
}

/* ===== CARDS ===== */
.eh-info-card {
    background: #112240;
    border: 1px solid rgba(0, 255, 255, 0.06);
    border-radius: 14px;
    padding: 24px 28px;
    transition: border-color 0.3s ease, transform 0.3s ease;
}

.eh-info-card:hover {
    border-color: rgba(0, 255, 255, 0.2);
    transform: translateY(-2px);
}

.eh-card-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
    padding-bottom: 14px;
    border-bottom: 1px solid rgba(0, 255, 255, 0.08);
}

.eh-card-title {
    font-size: 1rem;
    font-weight: 700;
    color: #00FFFF;
    margin: 0;
    letter-spacing: 0.02em;
}

/* ===== LIST ===== */
.eh-card-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.eh-card-list li {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 10px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.04);
    gap: 12px;
}

.eh-card-list li:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.eh-card-list li:first-child {
    padding-top: 0;
}

.eh-label {
    font-size: 0.82rem;
    color: #7A8BA0;
    font-weight: 500;
    white-space: nowrap;
    min-width: 120px;
}

.eh-value {
    font-size: 0.88rem;
    color: #D0D8E0;
    font-weight: 500;
    text-align: right;
    word-break: break-word;
}

.eh-salary {
    color: #00FFFF;
    font-weight: 700;
}

/* ===== BACK BUTTON ===== */
.eh-back-wrap {
    margin-top: 40px;
}

.eh-btn-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #00FFFF;
    color: #0D1B2A;
    padding: 12px 28px;
    border-radius: 10px;
    font-weight: 700;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid #00FFFF;
}

.eh-btn-back:hover {
    background: transparent;
    color: #00FFFF;
    transform: translateX(-4px);
}
</style>

@endsection
