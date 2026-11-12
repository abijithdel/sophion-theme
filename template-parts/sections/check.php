<?php
/**
 * Section: Check Your Suitability Online
 * Multi-step sidebar + inline form
 */
?>

<section class="check-section">
    <div class="check-inner">

        <!-- ===== Left: Steps sidebar ===== -->
        <div class="check-left">

            <div class="check-heading-wrap">
                <h2 class="check-title">Check Your<br>Suitability <span class="check-title-inner">Online</span></h2>
                <p class="check-subtitle">If you are considering a <strong>same-day smile treatment</strong>, you can begin with an online assessment.</p>
            </div>

            <!-- Step 1 (active) -->
            <div class="check-step check-step--active" data-step="1">
                <div class="check-step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <p class="check-step-label">Step 1:</p>
                <p class="check-step-title">Complete a Short Questionnaire</p>
                <p class="check-step-desc">Share your details for a callback within 24 hours</p>
            </div>

            <!-- Step 2 -->
            <div class="check-step" data-step="2">
                <div class="check-step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/>
                    </svg>
                </div>
                <p class="check-step-label">Step 2:</p>
                <p class="check-step-title">Upload Four Smile Photos</p>
                <p class="check-step-desc">Upload front, left side, right side, and tilted smile photos.</p>
            </div>

            <!-- Step 3 -->
            <div class="check-step" data-step="3">
                <div class="check-step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                    </svg>
                </div>
                <p class="check-step-label">Step 3:</p>
                <p class="check-step-title">Clinical Review</p>
                <p class="check-step-desc">Our team will review your information and advise whether this treatment may be suitable.</p>
            </div>

        </div>

        <!-- ===== Right: Form ===== -->
        <div class="check-right">
            <div class="check-form-card">

                <!-- Form header -->
                <div class="check-form-header">
                    <div class="check-form-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#bf946a" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                    </div>
                    <p class="check-form-step-label">Step 1:</p>
                    <p class="check-form-step-title">Complete a Short Questionnaire</p>
                    <p class="check-form-step-desc">Share your details for a callback within 24 hours</p>
                </div>

                <!-- Form fields -->
                <form class="check-form" id="suitability-form" novalidate>

                    <div class="check-field-group">
                        <label class="check-label" for="cf-first-name">FIRST NAME<span class="check-required">*</span></label>
                        <input class="check-input" id="cf-first-name" type="text" placeholder="Enter your first name" required>
                    </div>

                    <div class="check-field-group">
                        <label class="check-label" for="cf-last-name">LAST NAME<span class="check-required">*</span></label>
                        <input class="check-input" id="cf-last-name" type="text" placeholder="Enter your last name" required>
                    </div>

                    <div class="check-field-group">
                        <label class="check-label" for="cf-dob">DATE OF BIRTH<span class="check-required">*</span></label>
                        <div class="check-input-icon-wrap">
                            <input class="check-input" id="cf-dob" type="text" placeholder="DD/MM/YYYY" required>
                            <svg class="check-cal-icon" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#bbb" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                        </div>
                    </div>

                    <div class="check-field-group">
                        <label class="check-label">GENDER<span class="check-required">*</span></label>
                        <div class="check-radio-group">
                            <label class="check-radio-label" for="cf-male">
                                <input class="check-radio" id="cf-male" type="radio" name="gender" value="male">
                                <span class="check-radio-custom"></span>
                                MALE
                            </label>
                            <label class="check-radio-label" for="cf-female">
                                <input class="check-radio" id="cf-female" type="radio" name="gender" value="female">
                                <span class="check-radio-custom"></span>
                                FEMALE
                            </label>
                            <label class="check-radio-label" for="cf-other">
                                <input class="check-radio" id="cf-other" type="radio" name="gender" value="other">
                                <span class="check-radio-custom"></span>
                                OTHER
                            </label>
                        </div>
                    </div>

                    <div class="check-field-group">
                        <label class="check-label" for="cf-phone">PHONE NUMBER<span class="check-required">*</span></label>
                        <div class="check-phone-wrap">
                            <div class="check-country-code">
                                <span class="check-flag">🇦🇺</span>
                                <span>+61</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </div>
                            <input class="check-input check-input--phone" id="cf-phone" type="tel" placeholder="Enter number" required>
                        </div>
                    </div>

                    <div class="check-field-group">
                        <label class="check-label" for="cf-email">EMAIL<span class="check-required">*</span></label>
                        <input class="check-input" id="cf-email" type="email" placeholder="Enter your email address" required>
                    </div>

                    <div class="check-form-footer">
                        <button class="check-next-btn" type="submit" id="check-next-btn">
                            Next
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </button>
                        <p class="check-secure-note">Your information is transmitted securely.</p>
                    </div>

                </form>
            </div>
        </div>

    </div>
</section>
