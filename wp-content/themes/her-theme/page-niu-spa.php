<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>

    <section class="grid__row">

        <?php get_template_part('template-parts/home/slider'); ?>

        <!-- logo container -->
        <div class="glow__logo-container niu__logo">
            <img src="<?php echo get_thumbnail_image_url() ; ?>" alt="#">
        </div>


    </section>

    <div class="glow__prices niu__main">

        <p class="niu__main--subttl"><?php the_field('subtitle') ?></p>

        <div class="niu__subcontainer">

            <div class="niu__main--txt">
                <?php the_content(); ?>
            </div>

            <?php get_template_part('template-parts/niu/tratamientos'); ?>

        </div>

        <?php get_template_part('template-parts/niu/precios-por-sesion'); ?>

        <?php get_template_part('template-parts/niu/masajes'); ?>

        <div class="niu__content">
            <?php the_field('content'); ?>
        </div>

    </div>

    <!-- Sucursales que cuenta con el servicio de NIU -->

    <?php get_template_part('template-parts/niu/sucursales'); ?>

    <hr class="horizontal-line niu__line">

    <div class="glow__image niu__images--social">
        <?php if (get_field('facebook')): ?>
            <a class="navbar__items--redes" href="<?php the_field('facebook') ?>" target="_blank">
                <img class="nav__redes-img niu__redes" src="<?php echo THEMEURL ?>images/menu/faceblue.svg">
            </a>
        <?php endif; ?>
        <?php if (get_field('instagram')): ?>
            <a class="navbar__items--redes" href="<?php the_field('instagram') ?>" target="_blank">
                <img class="nav__redes-img niu__redes" src="<?php echo THEMEURL ?>images/menu/instagramblue.svg">
            </a>
        <?php endif; ?>
        <?php if (get_field('url')): ?>
            <a class="navbar__items--redes niu__redes" href="<?php the_field('url') ?>" target="_blank">
                <img class="nav__redes-img" style="width: 100px; height: 16px;" src="<?php echo THEMEURL ?>images/menu/niumexico.svg" alt="#">
            </a>
        <?php endif; ?>
    </div>



<?php

endwhile; endif;

get_footer();
