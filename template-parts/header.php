<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <div class="nav-icon-container">
        <img id="nav-icon" class="nav-list-con" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/list.svg'); ?> "alt="Nav List Icon">
    </div>

    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="logo-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.webp'); ?> "alt="Website Logo">
        </a>
    </div>

    <nav class="nav-links">
        <?php
           wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container'      => false,
        'menu_class'     => 'nav-menu',
        'fallback_cb'    => false,
        'depth'          => 2,
          ));
        ?>
    </nav>

    <div class="btn-container">
        <a href="/">
            <button class="btn-number btn">
                <img class="phone-icon" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/telephone.svg'); ?> "alt="telephone icon">
                03 9593 1611
            </button>
        </a>
        <a href="/">
            <button class="btn-booking btn">Book Consultation</button>
        </a>
        <a href="/" style="text-decoration: none;">
            <button class="btn-apply btn">Apply Now</button>
        </a>
    </div>
    </div>

</header>