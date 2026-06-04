<?php
// resources/views/livewire/pages/public/landing-page.blade.php
?>

<div>
    {{-- "Education is the most powerful weapon which you can use to change the world." - Nelson Mandela --}}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500&display=swap');

        .bnhs-wrap { font-family: 'DM Sans', sans-serif; }

        .bnhs-hero {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 2rem;
            background: #0a3d2e;
            padding: 3rem 2rem 2.5rem;
        }

        .bnhs-hero-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.07;
            background-image: repeating-linear-gradient(45deg, #fff 0, #fff 1px, transparent 0, transparent 50%);
            background-size: 20px 20px;
            pointer-events: none;
        }

        .bnhs-hero-top {
            position: relative;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .bnhs-crest {
            width: 72px;
            height: 72px;
            background: #fff;
            border-radius: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 24px rgba(0,0,0,0.3);
        }

        .bnhs-crest-text {
            font-family: 'Playfair Display', serif;
            font-weight: 900;
            font-size: 18px;
            color: #0a3d2e;
            line-height: 1;
        }

        .bnhs-crest-line {
            width: 36px;
            height: 1.5px;
            background: #0a3d2e;
            margin: 4px 0;
        }

        .bnhs-crest-sub {
            font-size: 7px;
            font-weight: 500;
            color: #555;
            letter-spacing: 1px;
        }

        .bnhs-school-name {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
        }

        .bnhs-hero-sub {
            font-size: 13px;
            color: rgba(255,255,255,0.6);
            margin-top: 4px;
            letter-spacing: 0.5px;
        }

        .bnhs-hero-location {
            font-size: 12px;
            color: rgba(255,255,255,0.5);
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .bnhs-divider {
            position: relative;
            height: 1px;
            background: rgba(255,255,255,0.1);
            margin-bottom: 1.5rem;
        }

        .bnhs-motto {
            position: relative;
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 15px;
            color: rgba(255,255,255,0.55);
            font-style: italic;
            margin-bottom: 1.5rem;
            letter-spacing: 0.5px;
        }

        .bnhs-stats {
            position: relative;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }

        .bnhs-stat {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 12px;
            padding: 14px 12px;
            text-align: center;
        }

        .bnhs-stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            line-height: 1;
        }

        .bnhs-stat-label {
            font-size: 11px;
            color: rgba(255,255,255,0.6);
            margin-top: 4px;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .bnhs-enroll-banner {
            background: linear-gradient(135deg, #d97706, #b45309);
            border-radius: 14px;
            padding: 1.25rem 1.5rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .bnhs-enroll-banner h4 {
            font-family: 'Playfair Display', serif;
            font-size: 17px;
            color: #fff;
            font-weight: 700;
        }

        .bnhs-enroll-banner p {
            font-size: 12px;
            color: rgba(255,255,255,0.75);
            margin-top: 3px;
        }

        .bnhs-enroll-btn {
            background: #fff;
            color: #92400e;
            border: none;
            border-radius: 8px;
            padding: 9px 18px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            white-space: nowrap;
            font-family: 'DM Sans', sans-serif;
            transition: background 0.2s;
        }

        .bnhs-enroll-btn:hover { background: #fef3c7; }

        .bnhs-two-col {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .bnhs-card {
            background: #fff;
            border: 0.5px solid #e5e7eb;
            border-radius: 14px;
            padding: 1.25rem;
        }

        .bnhs-card-title {
            font-size: 11px;
            font-weight: 500;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 1rem;
        }

        .bnhs-bar-track {
            height: 10px;
            border-radius: 999px;
            overflow: hidden;
            display: flex;
            margin-bottom: 1.25rem;
            background: #f3f4f6;
        }

        .bnhs-bar-seg { height: 100%; }

        .bnhs-legend-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .bnhs-legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
        }

        .bnhs-legend-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .bnhs-legend-count {
            margin-left: auto;
            font-weight: 500;
        }

        .bnhs-total-row {
            border-top: 0.5px solid #e5e7eb;
            margin-top: 1rem;
            padding-top: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .bnhs-total-label { font-size: 13px; color: #6b7280; }

        .bnhs-total-num {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 700;
            color: #111827;
        }

        .bnhs-right-col { display: flex; flex-direction: column; gap: 1rem; }

        .bnhs-events-list { display: flex; flex-direction: column; gap: 10px; }

        .bnhs-event-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            padding-bottom: 10px;
            border-bottom: 0.5px solid #e5e7eb;
        }

        .bnhs-event-item:last-child { border-bottom: none; padding-bottom: 0; }

        .bnhs-event-date {
            font-size: 11px;
            font-weight: 500;
            color: #6b7280;
            background: #f3f4f6;
            border-radius: 6px;
            padding: 2px 8px;
            white-space: nowrap;
        }

        .bnhs-programs-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 1.5rem;
        }

        .bnhs-prog-card {
            border-radius: 14px;
            padding: 1.25rem 1rem;
            text-align: center;
        }

        .bnhs-prog-pct {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 900;
            line-height: 1;
        }

        .bnhs-prog-name {
            font-size: 13px;
            font-weight: 500;
            margin-top: 6px;
        }

        .bnhs-prog-sub {
            font-size: 11px;
            margin-top: 2px;
            opacity: 0.7;
        }

        .bnhs-prog-green { background: #ecfdf5; }
        .bnhs-prog-green .bnhs-prog-pct,
        .bnhs-prog-green .bnhs-prog-name { color: #065f46; }
        .bnhs-prog-green .bnhs-prog-sub { color: #059669; }

        .bnhs-prog-amber { background: #fffbeb; }
        .bnhs-prog-amber .bnhs-prog-pct,
        .bnhs-prog-amber .bnhs-prog-name { color: #92400e; }
        .bnhs-prog-amber .bnhs-prog-sub { color: #b45309; }

        .bnhs-prog-gray { background: #f9fafb; }
        .bnhs-prog-gray .bnhs-prog-pct,
        .bnhs-prog-gray .bnhs-prog-name { color: #111827; }
        .bnhs-prog-gray .bnhs-prog-sub { color: #6b7280; }

        .bnhs-mv-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 1.5rem;
        }

        .bnhs-mv-card {
            border-radius: 12px;
            padding: 1rem 1.25rem;
            border: 0.5px solid transparent;
        }

        .bnhs-mv-label {
            font-size: 11px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 6px;
        }

        .bnhs-mv-text { font-size: 13px; line-height: 1.6; }

        .bnhs-mv-mission { background: #f0fdf4; border-color: #bbf7d0; }
        .bnhs-mv-mission .bnhs-mv-label { color: #166534; }
        .bnhs-mv-mission .bnhs-mv-text { color: #15803d; }

        .bnhs-mv-vision { background: #fffbeb; border-color: #fde68a; }
        .bnhs-mv-vision .bnhs-mv-label { color: #92400e; }
        .bnhs-mv-vision .bnhs-mv-text { color: #b45309; }

        .bnhs-contact-info { font-size: 12px; color: #6b7280; line-height: 1.8; }

        .bnhs-footer-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 0.5px solid #e5e7eb;
            padding-top: 1rem;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .bnhs-footer-btns { display: flex; gap: 8px; }

        .bnhs-btn-outline {
            background: none;
            border: 0.5px solid #d1d5db;
            border-radius: 8px;
            padding: 7px 14px;
            font-size: 12px;
            color: #374151;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            transition: background 0.2s;
        }

        .bnhs-btn-outline:hover { background: #f9fafb; }

        .bnhs-btn-primary {
            background: #0a3d2e;
            border: none;
            border-radius: 8px;
            padding: 7px 14px;
            font-size: 12px;
            color: #fff;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            transition: background 0.2s;
        }

        .bnhs-btn-primary:hover { background: #0d4f3b; }

        .bnhs-footer-copy { font-size: 11px; color: #9ca3af; }

        @media (max-width: 768px) {
            .bnhs-two-col { grid-template-columns: 1fr; }
            .bnhs-school-name { font-size: 20px; }
            .bnhs-programs-row { grid-template-columns: 1fr; }
            .bnhs-mv-row { grid-template-columns: 1fr; }
        }
    </style>

    <div class="bnhs-wrap">

        {{-- Hero --}}
        <div class="bnhs-hero">
            <div class="bnhs-hero-pattern"></div>

            <div class="bnhs-hero-top">
                <div class="bnhs-crest">
                    <span class="bnhs-crest-text">NHS</span>
                    <div class="bnhs-crest-line"></div>
                    <span class="bnhs-crest-sub">BANDURAN</span>
                </div>
                <div>
                    <div class="bnhs-school-name">Banduran National<br>High School</div>
                    <div class="bnhs-hero-sub">Republic of the Philippines · Department of Education</div>
                    <div class="bnhs-hero-location">
                        <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Cadiz City, Negros Occidental
                    </div>
                </div>
            </div>

            <div class="bnhs-divider"></div>
            <div class="bnhs-motto">"Excellence · Honor · Character · Service"</div>

            <div class="bnhs-stats">
                <div class="bnhs-stat">
                    <div class="bnhs-stat-num" style="color:#4ade80;">30%</div>
                    <div class="bnhs-stat-label">Scholars</div>
                </div>
                <div class="bnhs-stat">
                    <div class="bnhs-stat-num" style="color:#fbbf24;">20%</div>
                    <div class="bnhs-stat-label">Honor Roll</div>
                </div>
                <div class="bnhs-stat">
                    <div class="bnhs-stat-num" style="color:#fff;">10%</div>
                    <div class="bnhs-stat-label">Excellence</div>
                </div>
            </div>
        </div>

        {{-- Enrollment Banner --}}
        <div class="bnhs-enroll-banner">
            <div>
                <h4>Enrollment Open — SY 2026–2027</h4>
                <p>Early registration until May 30 · Slots are limited</p>
            </div>
            <button class="bnhs-enroll-btn">Enroll Now →</button>
        </div>

        {{-- Two Column --}}
        <div class="bnhs-two-col">

            {{-- Student Population --}}
            <div class="bnhs-card">
                <div class="bnhs-card-title">Student population · SY 2025–2026</div>

                <div class="bnhs-bar-track">
                    <div class="bnhs-bar-seg" style="width:30%; background:#16a34a;"></div>
                    <div class="bnhs-bar-seg" style="width:20%; background:#d97706;"></div>
                    <div class="bnhs-bar-seg" style="width:10%; background:#374151;"></div>
                    <div class="bnhs-bar-seg" style="width:40%; background:#e5e7eb;"></div>
                </div>

                <div class="bnhs-legend-grid">
                    <div class="bnhs-legend-item">
                        <div class="bnhs-legend-dot" style="background:#16a34a;"></div>
                        <span style="color:#6b7280;">Scholars</span>
                        <span class="bnhs-legend-count">375</span>
                    </div>
                    <div class="bnhs-legend-item">
                        <div class="bnhs-legend-dot" style="background:#d97706;"></div>
                        <span style="color:#6b7280;">Honor Roll</span>
                        <span class="bnhs-legend-count">250</span>
                    </div>
                    <div class="bnhs-legend-item">
                        <div class="bnhs-legend-dot" style="background:#374151;"></div>
                        <span style="color:#6b7280;">Excellence</span>
                        <span class="bnhs-legend-count">125</span>
                    </div>
                    <div class="bnhs-legend-item">
                        <div class="bnhs-legend-dot" style="background:#e5e7eb;"></div>
                        <span style="color:#6b7280;">Regular</span>
                        <span class="bnhs-legend-count">500</span>
                    </div>
                </div>

                <div class="bnhs-total-row">
                    <span class="bnhs-total-label">Total enrolled</span>
                    <span class="bnhs-total-num">1,250</span>
                </div>
            </div>

            {{-- Right Column --}}
            <div class="bnhs-right-col">

                {{-- Events --}}
                <div class="bnhs-card">
                    <div class="bnhs-card-title">Upcoming events</div>
                    <div class="bnhs-events-list">
                        <div class="bnhs-event-item">
                            <span>Parent-Teacher Conference</span>
                            <span class="bnhs-event-date">Mar 20</span>
                        </div>
                        <div class="bnhs-event-item">
                            <span>Honor Roll Assembly</span>
                            <span class="bnhs-event-date">Mar 25</span>
                        </div>
                        <div class="bnhs-event-item">
                            <span>Recognition Rites</span>
                            <span class="bnhs-event-date">Apr 5</span>
                        </div>
                    </div>
                </div>

                {{-- Contact --}}
                <div class="bnhs-card">
                    <div class="bnhs-card-title">Contact</div>
                    <div class="bnhs-contact-info">
                        Banduran, Cadiz City<br>
                        Negros Occidental 6121<br><br>
                        📞 (034) 123-4567<br>
                        📧 banduran.nhs@deped.gov.ph
                    </div>
                </div>

            </div>
        </div>

        {{-- Programs --}}
        <div class="bnhs-programs-row">
            <div class="bnhs-prog-card bnhs-prog-green">
                <div class="bnhs-prog-pct">30%</div>
                <div class="bnhs-prog-name">STEM Excellence</div>
                <div class="bnhs-prog-sub">Science &amp; Mathematics</div>
            </div>
            <div class="bnhs-prog-card bnhs-prog-amber">
                <div class="bnhs-prog-pct">20%</div>
                <div class="bnhs-prog-name">Arts &amp; Culture</div>
                <div class="bnhs-prog-sub">Visual &amp; Performing Arts</div>
            </div>
            <div class="bnhs-prog-card bnhs-prog-gray">
                <div class="bnhs-prog-pct">10%</div>
                <div class="bnhs-prog-name">Sports Development</div>
                <div class="bnhs-prog-sub">Varsity &amp; Athletics</div>
            </div>
        </div>

        {{-- Mission / Vision --}}
        <div class="bnhs-mv-row">
            <div class="bnhs-mv-card bnhs-mv-mission">
                <div class="bnhs-mv-label">Mission</div>
                <div class="bnhs-mv-text">To produce globally competitive, God-loving, and environmentally conscious graduates.</div>
            </div>
            <div class="bnhs-mv-card bnhs-mv-vision">
                <div class="bnhs-mv-label">Vision</div>
                <div class="bnhs-mv-text">A center of excellence producing future leaders of Cadiz City and beyond.</div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="bnhs-footer-row">
            <div class="bnhs-footer-btns">
                <button wire:click="$refresh" class="bnhs-btn-outline">🔄 Refresh</button>
                <button class="bnhs-btn-primary">📥 Download Prospectus</button>
            </div>
            <div class="bnhs-footer-copy">© 2025 Banduran National High School · DepEd Cadiz City Division</div>
        </div>

    </div>
</div>
