<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>

    <section class="grid__row">

        <?php get_template_part('template-parts/home/slider'); ?>

        <div class="lax__main">

            <div class="lax__main--img">
                <img src="<?php echo get_thumbnail_image_url() ; ?>">
            </div>

            <div class="lax__main--txt">
                <?php the_content(); ?>
            </div>

        </div>

        <?php get_template_part('template-parts/lax/sucursales'); ?>

        <?php if (get_field('url')): ?>
            <div class="lax__services--container lax__page">
                <h3 class="lax__services--ttl">AGENDA TU CITA</h3>
                <a class="lax__page--link" href="<?php the_field('url'); ?>" target="_blank"><?php the_field('url') ?></a>
            </div>
        <?php endif; ?>

    </section>

<?php

endwhile; endif;

get_footer();
