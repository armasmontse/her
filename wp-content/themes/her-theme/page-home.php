<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

    ?>

    <div class="promos__main">

        <?php get_template_part('template-parts/home/slider'); ?>

        <?php get_template_part('template-parts/home/promotions'); ?>

    </div>

    <?php

endwhile; endif;

get_footer();
