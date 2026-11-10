<?php get_header(); ?>

<main class="page-content">

    <?php while (have_posts()) : the_post(); ?>

        <section class="page-section">

            <h1><?php the_title(); ?></h1>

            <div class="page-description">
                <?php the_content(); ?>
            </div>

        </section>

    <?php endwhile; ?>

</main>