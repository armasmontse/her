<?php

// Obtenemos el post service para esta página
$post = get_posts([
    'name'           => 'glow-tan',
    'post_type'      => 'service',
    'post_status'    => 'publish',
    'posts_per_page' => 1
])[0];

// Hacemos un query de los servicios que tengan este tipo.
$args = [
    'post_type' => 'post',
    'posts_per_page' => -1,
    'meta_query' => [
        [
            'key' => 'service_type',
            'value' => $post->ID,
        ]
    ]
];

$query = new WP_Query($args);

if ($query->have_posts()):

    ?>

    <div class="glow__prices--numbers">

        <?php while($query->have_posts()): $query->the_post(); ?>

            <div class="prices__block">
                <p class= "prices__block--ttl"><?php echo strtoupper(get_the_title()); ?></p>
                <p class= "prices__block--quantity"><?php echo parse_money(get_field('price')); ?></p>
            </div>

        <?php endwhile; ?>

    </div>

    <?php

endif;

wp_reset_postdata();
