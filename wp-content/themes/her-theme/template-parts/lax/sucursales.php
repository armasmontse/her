<?php

$term = get_term_by('slug', 'lax', 'branch_type');

$args = [
    'tax_query' => [
        [
            'taxonomy' => $term->taxonomy,
            'field' => 'id',
            'terms' => $term->term_id
        ]
    ],
    'post_type' => 'cltvo_sucursales',
    'posts_per_page' => -1
];

$query = new WP_Query($args);

if ($query->have_posts()): while($query->have_posts()): $query->the_post();

    $sucursal = get_post_meta(get_the_ID(), 'Cltvo_Sucursal')[0];

    $service_types = get_field('service_types');

    ?>

    <div class="lax__branch">

        <?php if($sucursal['direccion']): ?>
            <div class="lax__main--address">
                <?php echo $sucursal['direccion']; ?>
            </div>
        <?php endif; ?>

        <hr class="horizontal-line niu__line">

        <?php if($service_types): ?>

            <div class="lax__services--container">
                <h3 class="lax__services--ttl">SERVICIOS</h3>
                <div class="lax__services">
                    <?php foreach($service_types as $service_type): ?>
                        <?php if(has_post_thumbnail($service_type->ID)): ?>
                            <div class="lax__services--img-box">
                                <div class="lax__services--img" alt="<?php echo $service_type->post_title; ?>" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($service_type->ID) ) ; ?>')"></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

        <?php endif; ?>

    </div>

    <hr class="horizontal-line niu__line">

    <?php

endwhile; endif; wp_reset_postdata();
