<?php
$img_base = get_template_directory_uri() . '/assets/images/';
$before_after = esc_url( $img_base . 'before-after.webp' );
$logo         = esc_url( $img_base . 'logo.webp' );
?>

<section class="story-section">
    <h2 class="story-title">Patient <span class="story-title-inner">Stories</span></h2>
    <div class="story-cards-container">

        <div class="story-card">
            <div class="story-card-inner">
                <div class="story-card-logo">
                    <img src="<?php echo $logo; ?>" alt="Lifestyle Smiles Logo" class="story-logo-img">
                </div>
                <div class="story-card-image-wrapper">
                    <img
                        src="<?php echo $before_after; ?>"
                        alt="Before and After Patient Transformation"
                        class="story-before-after-img"
                    >
                </div>
                <p class="story-photo-caption">After photo taken approximately 7 months after procedure.</p>
            </div>
            <div class="story-card-details">
                <p class="story-treatment-label">Treatment done by:</p>
                <p class="story-doctor-name">Dr. Rosana Prada</p>
                <p class="story-reg-number">Reg no. DEN0002551420</p>
            </div>
        </div>

        <div class="story-card">
            <div class="story-card-inner">
                <div class="story-card-logo">
                    <img src="<?php echo $logo; ?>" alt="Lifestyle Smiles Logo" class="story-logo-img">
                </div>
                <div class="story-card-image-wrapper">
                    <img
                        src="<?php echo $before_after; ?>"
                        alt="Before and After Patient Transformation"
                        class="story-before-after-img"
                    >
                </div>
                <p class="story-photo-caption">After photo taken approximately 7 months after procedure.</p>
            </div>
            <div class="story-card-details">
                <p class="story-treatment-label">Treatment done by:</p>
                <p class="story-doctor-name">Dr. Rosana Prada</p>
                <p class="story-reg-number">Reg no. DEN0002551420</p>
            </div>
        </div>

    </div>

    <div class="story-disclaimer">
        <p>
            <em>These photos show a real patient of Lifestyle Smiles with their written consent. Images are genuine,
            and taken under consistent conditions without filters, have not been digitally altered with AI tools,
            or artificial lighting effects.</em>
        </p>
    </div>

</section>