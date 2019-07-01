<?php

$terms = [
    'barra-de-peinados',
    'bx',
    'lax',
];

global $current_term;

foreach($terms as $term){

    $term = get_term_by('slug', $term, 'branch_type');

    $current_term = $term;

    $logo = get_field('logo', $term);

    ?>

    <hr class="horizontal-line">

    <div class="about__box-logo arrow_JS">
        <?php if($logo): ?>
            <img class="about__box-logo-img <?php echo $term->slug; ?>" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
        <?php else: ?>
            <?php echo $term->name; ?>
        <?php endif; ?>
        <div>
            <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
        </div>
    </div>

    <?php

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

    if ($query->have_posts()):

    ?>

        <div>

            <?php while($query->have_posts()): $query->the_post(); ?>

                <?php get_template_part('template-parts/about/sucursal'); ?>

            <?php endwhile; ?>

        </div>

    <?php

    endif;

    wp_reset_postdata();

}
