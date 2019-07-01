<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>

    <section class="grid__row">

        <?php get_template_part('template-parts/home/slider'); ?>

        <div class="glow__logo-container">
            <img src="<?php echo get_thumbnail_image_url() ; ?>" alt="">
        </div>

        <!--  Description -->
        <div class="glow__prices">

            <div class="glow__prices--txt">
                <?php the_content(); ?>
            </div>

            <?php get_template_part('template-parts/glow-tan/services'); ?>

            <h1 class="glow__logo-container--ttl">
                <?php the_field('subtitle') ?>
            </h1>

        </div>

        <?php if (get_field('instagram')): ?>
            <div class="glow__image">
                <a href="<?php the_field('instagram') ?>" target="_blank">
                    <img src="<?php echo THEMEURL ?>images/pages/justglow.svg" alt="#">
                </a>
            </div>
        <?php endif; ?>

    </section>

<?php

endwhile; endif;

get_footer();
