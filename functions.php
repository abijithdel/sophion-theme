<?php

// 1. Theme Setup
function mytheme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'sphion'),
    ));

}
add_action('after_setup_theme', 'mytheme_setup');


// 2. Enqueue CSS
function mytheme_enqueue_styles() {

    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    // Google Fonts - Poppins
    wp_enqueue_style(
        'google-fonts-poppins',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Google Fonts - Playfair Display
    wp_enqueue_style(
        'google-fonts-playfair',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Header CSS
    $header_css = $theme_path . '/assets/css/header.css';

    if (file_exists($header_css)) {
        wp_enqueue_style(
            'header-css',
            $theme_uri . '/assets/css/header.css',
            array('google-fonts-poppins', 'google-fonts-playfair'),
            filemtime($header_css)
        );
    }

    // Home CSS
    $home_css = $theme_path . '/assets/css/home.css';

    if (file_exists($home_css)) {
        wp_enqueue_style(
            'home-css',
            $theme_uri . '/assets/css/home.css',
            array('header-css'),
            filemtime($home_css)
        );
    }

    // Responsive CSS
    $responsive_css = $theme_path . '/assets/css/responsive.css';

    if (file_exists($responsive_css)) {
        wp_enqueue_style(
            'responsive-css',
            $theme_uri . '/assets/css/responsive.css',
            array('home-css'),
            filemtime($responsive_css)
        );
    }

    // Footer CSS
    $footer_css = $theme_path . '/assets/css/footer.css';

    if (file_exists($footer_css)) {
        wp_enqueue_style(
            'footer-css',
            $theme_uri . '/assets/css/footer.css',
            array('responsive-css'),
            filemtime($footer_css)
        );
    }

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


// 3. Enqueue JavaScript
function mytheme_scripts() {

    $js_file = get_template_directory() . '/assets/js/main.js';

    if (file_exists($js_file)) {
        wp_enqueue_script(
            'main-js',
            get_template_directory_uri() . '/assets/js/main.js',
            array(),
            filemtime($js_file),
            true
        );
    }

}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

