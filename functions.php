
<?php

// 1. Theme Setup
function mytheme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'sphion'),
    ));

}

add_action('after_setup_theme', 'mytheme_setup');


// 2. Enqueue CSS
function mytheme_enqueue_styles() {

    wp_enqueue_style(
        'google-fonts-poppins',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'header-css',
        get_template_directory_uri() . '/assets/css/header.css',
        array('google-fonts-poppins'),
        '1.0'
    );

}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


function mytheme_scripts() {

    $js_file = get_template_directory() . '/assets/js/main.js';

    if (file_exists($js_file)) {

        wp_enqueue_script(
            'main-js',
            get_template_directory_uri() . '/assets/js/main.js',
            array(),
            filemtime($js_file),
            false
        );

    }

}

add_action('wp_enqueue_scripts', 'mytheme_scripts');


?>
