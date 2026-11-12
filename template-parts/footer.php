<?php
/**
 * Template Part – Footer
 *
 * @package Sophion
 */
?>

<footer class="site-footer">

    <!-- ========================================================
         MAIN FOOTER COLUMNS
    ========================================================= -->
    <div class="footer-container">

        <!-- Col 1 · Brand + tagline -->
        <div class="footer-brand">

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo" aria-label="<?php bloginfo( 'name' ); ?>">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>"
                    alt="<?php bloginfo( 'name' ); ?>"
                    class="footer-logo-img"
                    width="180"
                    height="60"
                    loading="lazy"
                />
            </a><!-- .footer-logo -->

            <p class="footer-tagline">
                Serving the Brighton community for over 50 years<br>
                with compassionate, comprehensive dental care.
            </p>

        </div><!-- .footer-brand -->

        <!-- Col 2 · Location -->
        <div class="footer-col footer-location">
            <h3 class="footer-col-heading">Location</h3>
            <p class="footer-address">Shop 2, 28 Carpenter St, Brighton</p>
            <a href="https://maps.google.com/?q=Shop+2+28+Carpenter+St+Brighton"
               class="footer-directions"
               target="_blank"
               rel="noopener noreferrer">
                Get Directions <span class="footer-arrow" aria-hidden="true">&#8594;</span>
            </a>
        </div><!-- .footer-location -->

        <!-- Col 3 · Contact & hours -->
        <div class="footer-col footer-contact">
            <h3 class="footer-col-heading">Contact Details</h3>
            <p class="footer-hours-label">Opening Hours</p>
            <ul class="footer-hours">
                <li>Mon &ndash; Fri,&ensp;8:00am &ndash; 5:30pm</li>
                <li>Sat &ndash; By appointment only</li>
                <li>Sun &ndash; Closed</li>
            </ul>
        </div><!-- .footer-contact -->

    </div><!-- .footer-container -->

    <!-- ========================================================
         BOTTOM BAR
    ========================================================= -->
    <div class="footer-bottom">
        <p class="footer-copy">
            Copyright &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.
            All Rights Reserved
            <span class="footer-divider">|</span>
            <a href="<?php echo esc_url( home_url( '/disclaimer' ) ); ?>">Disclaimer</a>
            <span class="footer-divider">|</span>
            <a href="<?php echo esc_url( get_privacy_policy_url() ?: home_url( '/privacy-statement' ) ); ?>">Privacy Statement</a>
        </p>
    </div><!-- .footer-bottom -->

</footer><!-- .site-footer -->

