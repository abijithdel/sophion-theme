<?php
$img   = get_template_directory_uri() . '/assets/images/';
$dr    = esc_url( $img . 'dr-julie-taing.webp' );
$heart = esc_url( $img . 'heart.svg' );
$arrow = esc_url( $img . 'right-arrow-white.svg' );
?>

<section class="dr-section">

    <div class="dr-inner">

        <!-- Left: photo + name -->
        <div class="dr-left">
            <div class="dr-photo-card">
                <img
                    src="<?php echo $dr; ?>"
                    alt="Dr Julie Taing – Cosmetic Dentist at Lifestyle Smiles"
                    class="dr-photo"
                >
            </div>

            <div class="dr-name-wrap">
                <p class="dr-meet">Meet <span class="dr-name-italic">Dr Julie Taing</span></p>
                <p class="dr-role">COSMETIC DENTIST</p>
            </div>
        </div>

        <!-- Right: bio + focus list + quote + CTA -->
        <div class="dr-right">

            <p class="dr-bio">
                Dr Julie Taing is a general dentist at Lifestyle Smiles with an interest in cosmetic and restorative dentistry, including composite bonding, veneers and smile enhancement.
            </p>

            <p class="dr-focus-heading">
                <em>She provides patient-centred care with a focus on:</em>
            </p>

            <ul class="dr-focus-list">
                <li class="dr-focus-item">
                    <img src="<?php echo $heart; ?>" alt="" class="dr-heart-icon">
                    Clear communication
                </li>
                <li class="dr-focus-item">
                    <img src="<?php echo $heart; ?>" alt="" class="dr-heart-icon">
                    Minimally invasive treatment where appropriate
                </li>
                <li class="dr-focus-item">
                    <img src="<?php echo $heart; ?>" alt="" class="dr-heart-icon">
                    Maintaining natural tooth structure
                </li>
            </ul>

            <blockquote class="dr-quote">
                "Dr Julie works closely with patients to understand their concerns and to determine suitable treatment options based on their individual needs and oral health."
            </blockquote>

            <div class="dr-cta-wrap">
                <button class="dr-apply-btn">
                    Apply Now
                    <img src="<?php echo $arrow; ?>" alt="" class="dr-arrow-icon">
                </button>
            </div>

        </div>

    </div>

</section>
