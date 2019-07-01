<?php

// Obtenemos el post service de niu.
$post = get_posts([
    'name'           => 'niu-spa',
    'post_type'      => 'service',
    'post_status'    => 'publish',
    'posts_per_page' => 1
])[0];

$args = [
    'post_type' => 'cltvo_sucursales',
    'posts_per_page' => -1,
    'meta_query' => [
        [
            'key' => 'service_types',
            'value' => $post->ID,
            'compare' => 'LIKE'
        ]
    ]
];

$query = new WP_Query($args);

if ($query->have_posts()):

    ?>

    <div class="niu__info">
        <div class="niu__info--container">
            <div class="niu__info--item">
               Previa Cita:
            </div>
            <?php while($query->have_posts()): $query->the_post(); ?>

                <?php $sucursal = get_post_meta(get_the_ID(), 'Cltvo_Sucursal')[0]; ?>

                <div class="niu__info--item">
                    <h3><?php the_title(); ?></h3>
                    <?php if($sucursal['direccion']): ?>
                        <p><?php echo $sucursal['direccion'] ?></p>
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
        </div>
    </div>

    <?php

endif;

wp_reset_postdata();
