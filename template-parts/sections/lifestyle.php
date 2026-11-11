<?php
$img   = get_template_directory_uri() . '/assets/images/';
$star  = esc_url( $img . 'star.svg' );
$arrow = esc_url( $img . 'right-arrow-white.svg' );
?>

<section class="lifestyle-section">

    <div class="lifestyle-title-wrap">
        <h2 class="lifestyle-title">Why <span class="lifestyle-title-inner">Lifestyle Smiles?</span></h2>
        <p class="lifestyle-subtitle">Lifestyle Smiles provides comprehensive dental care with a focus on appropriate, evidence-based cosmetic treatment.</p>
    </div>

    <div class="lifestyle-body">

        <div class="lifestyle-left">
            <p class="lifestyle-list-heading">OUR TEAM OFFERS EXPERIENCE IN:</p>
            <ul class="lifestyle-list">
                <li class="lifestyle-list-item">
                    <img src="<?php echo $star; ?>" alt="star" class="lifestyle-star">
                    General and restorative dentistry
                </li>
                <li class="lifestyle-list-item">
                    <img src="<?php echo $star; ?>" alt="star" class="lifestyle-star">
                    Digital smile planning
                </li>
                <li class="lifestyle-list-item">
                    <img src="<?php echo $star; ?>" alt="star" class="lifestyle-star">
                    Composite bonding
                </li>
                <li class="lifestyle-list-item">
                    <img src="<?php echo $star; ?>" alt="star" class="lifestyle-star">
                    Porcelain veneers
                </li>
                <li class="lifestyle-list-item">
                    <img src="<?php echo $star; ?>" alt="star" class="lifestyle-star">
                    Invisalign
                </li>
                <li class="lifestyle-list-item">
                    <img src="<?php echo $star; ?>" alt="star" class="lifestyle-star">
                    Dental Implants
                </li>
                <li class="lifestyle-list-item">
                    <img src="<?php echo $star; ?>" alt="star" class="lifestyle-star">
                    All-on-4 Plus
                </li>
            </ul>
        </div>

        <div class="lifestyle-right">
            <div class="lifestyle-approach-card">
                <h3 class="lifestyle-approach-title">Our Approach to Care</h3>
                <p class="lifestyle-approach-desc">Each patient is assessed individually to determine whether treatment is suitable, and to ensure options are explained clearly.</p>
                <div class="lifestyle-highlight-box">
                    <p class="lifestyle-highlight-label">FOR SAME-DAY TREATMENTS</p>
                    <p class="lifestyle-highlight-text">We focus on conservative approaches, careful planning, and outcomes aligned with your dental health and goals.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="lifestyle-cta-wrap">
        <button class="lifestyle-cta-btn">
            Check Your Suitability
            <img src="<?php echo $arrow; ?>" alt="arrow" class="lifestyle-arrow-icon">
        </button>
    </div>

</section>
