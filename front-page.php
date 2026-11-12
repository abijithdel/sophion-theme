<?php
/**
 * front-page.php — Homepage template
 *
 * Uses get_header() and get_footer() so WordPress properly
 * fires wp_head() and wp_footer() hooks — required for all
 * enqueued CSS and JS to load.
 *
 * @package Sophion
 */

get_header(); // loads template-parts/header.php via header.php
?>

<main>
    <?php get_template_part( 'template-parts/sections/hero' ); ?>
    <?php get_template_part( 'template-parts/sections/suitability' ); ?>
    <?php get_template_part( 'template-parts/sections/story' ); ?>
    <?php get_template_part( 'template-parts/sections/lifestyle' ); ?>
    <?php get_template_part( 'template-parts/sections/dr' ); ?>
    <?php get_template_part( 'template-parts/sections/check' ); ?>
</main>

<?php get_footer(); // loads footer.php → calls wp_footer() → outputs all JS ?>
