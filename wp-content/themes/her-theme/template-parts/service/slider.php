<?php

if(get_field('show_slider')):

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

    $query = new WP_Query($args);

    if ($query->have_posts()):

        ?>

        <div class="peinados-slider">
	        <div class="swiper-container gallery-top">
                <?php while($query->have_posts()): $query->the_post(); ?>
                    <?php if(has_post_thumbnail()): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo get_thumbnail_image_url() ; ?>" alt="">
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <div class="swiper-container gallery-thumbs scroller_JS" style="width: 100%; !important outline:none !important;">
                <?php while($query->have_posts()): $query->the_post(); ?>
                    <?php if(has_post_thumbnail()): ?>
                        <div class="">
                            <h4 class="title-slider-content">
                                <?php the_title(); ?>
                            </h4>
                            <div class="parragraph-slider-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>

        <?php

    endif;

    wp_reset_postdata();

endif;
