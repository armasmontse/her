<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

    get_template_part('template-parts/service/slider');

    get_template_part('template-parts/service/categories');

    ?>

    <div class="grid__container peinados__col--container toggle_JS about__main--js peinados__extras">
        <div class="grid__col-1-2 peinados__col--right peinados__col-mobile">
            <div class="peinados__info">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

    <?php

endwhile; endif;

get_footer();
