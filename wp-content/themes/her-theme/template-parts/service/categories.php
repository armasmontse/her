<?php

$args = [
    'post_type' => 'post',
    'posts_per_page' => -1,
    'meta_query' => [
        [
            'key' => 'service_type',
            'value' => get_the_ID(),
        ]
    ]
];

$categories = get_categories();

?>

    <div class="grid__container peinados__main">

        <?php

        foreach(array_reverse($categories) as $category):

            $args['cat'] = $category->term_id;

            $query = new WP_Query($args);

            if ($query->have_posts()):

                ?>

                <div class="peinados__title arrow_JS maquillaje__ttl">
                    <p><?php echo $category->name; ?></p>
                    <div>
                        <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg">
                    </div>
                </div>

                <div class="grid__container peinados__col--container toggle_JS about__main--js">

                    <div class="grid__col-1-2 peinados__col-mobile">

                        <?php $i = 0; while($query->have_posts()): $query->the_post(); ?>

                            <?php if(!($i % 2) || count($query->posts) < 4): ?>

                                <?php get_template_part('template-parts/service/service-with-price-and-duration'); ?>

                            <?php endif; ?>

                        <?php $i++; endwhile; ?>

                    </div>

                    <?php if(count($query->posts) >= 4): ?>
                        <div class="grid__col-1-2 peinados__col-mobile">

                            <?php $i = 0; while($query->have_posts()): $query->the_post(); ?>

                                <?php if($i % 2): ?>

                                    <?php get_template_part('template-parts/service/service-with-price-and-duration'); ?>

                                <?php endif; ?>

                            <?php $i++; endwhile; ?>

                        </div>
                    <?php endif; ?>

                </div>

                <?php

            endif;

            wp_reset_postdata();

        endforeach;

        ?>

    </div>


<?php
