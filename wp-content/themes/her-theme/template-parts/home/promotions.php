<?php

$args = [
    'post_type' => 'cltvo_promociones',
    'posts_per_page' => -1
];

$query = new WP_Query($args);

if ($query->have_posts()):

    ?>

    <div class="grid__row">

        <?php while($query->have_posts()): $query->the_post(); ?>

            <div class="grid__container">
                <div class="promos__item">
                    <div class="promos__ttl arrow_JS">
                        <h3><?php the_title(); ?></h3>
                        <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
                    </div>
                    <div class="promos__info toggle_JS about__main--js">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>

    </div>

    <?php

endif;

wp_reset_postdata();
