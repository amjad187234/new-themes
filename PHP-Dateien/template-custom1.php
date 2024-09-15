<?php
/*
Template Name: Portfolio Template
*/
get_header();
?>

<main>
    <h1><?php the_title(); ?></h1>
    <section class="portfolio-gallery">
        <?php
        // Hier werden Portfolio-Projekte oder Videos geladen (als Beispiel nehmen wir benutzerdefinierte Posts vom Typ 'portfolio')
        $portfolio_query = new WP_Query(array(
            'post_type' => 'portfolio',
            'posts_per_page' => 10
        ));

        if ($portfolio_query->have_posts()) :
            while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
                <article class="portfolio-item">
                    <h2><?php the_title(); ?></h2>
                    <div class="portfolio-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div class="portfolio-description">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>Keine Projekte gefunden.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
