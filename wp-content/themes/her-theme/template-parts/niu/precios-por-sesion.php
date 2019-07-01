<?php

// Obtenemos el post service de niu.
$post = get_posts([
    'name'           => 'niu-spa',
    'post_type'      => 'service',
    'post_status'    => 'publish',
    'posts_per_page' => 1
])[0];

$term = get_term_by('slug', 'precios-por-sesion', 'category');

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

        <table class="niu__main--table">
            <tr>
                <th>PRECIOS POR SESIÓN</th>
                <th>desde</th>
            </tr>

            <?php while($query->have_posts()): $query->the_post(); ?>

                <tr>
                    <td><?php the_title(); ?> </td>
                    <td><?php echo parse_money(get_field('price')); ?></td>
                </tr>

            <?php endwhile; ?>

        </table>

    <?php

    endif;

    wp_reset_postdata();

endif;
