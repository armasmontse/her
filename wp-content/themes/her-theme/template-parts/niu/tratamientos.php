<?php

// Obtenemos el post service de niu.
$post = get_posts([
    'name'           => 'niu-spa',
    'post_type'      => 'service',
    'post_status'    => 'publish',
    'posts_per_page' => 1
])[0];

$term = get_term_by('slug', 'tratamientos', 'category');

if($term):

    $args = [
        'post_type' => 'post',
        'posts_per_page' => -1,
        'meta_query' => [
            [
                'key' => 'service_type',
                'value' => $post->ID,
            ]
        ],
        'cat' => $term->term_id
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()):

    ?>

        <div class="niu__main--shape">
            <p>T R A T A M I E N T O S</p>
        </div>

        <div class="niu__main--items">

            <?php while($query->have_posts()): $query->the_post(); ?>

                <div class="tratamientos">
                    <p class="">
                        <?php the_title(); ?>
                    </p>
                </div>
                <img class="border-left" src="<?php echo THEMEURL ?>images/pages/whiteline.svg" alt="#">

            <?php endwhile; ?>

        </div>

    <?php

    endif;

    wp_reset_postdata();

endif;
