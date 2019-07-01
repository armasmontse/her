<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

    ?>

    <div class="about grid__row">
        <div class="grid__container">
            <div class="grid__col-1-1">

                <div class="about__content" style="margin-top: 20px;">
                    <div class="about__content-box uno">
                        <h3 class="about__content-ttl title-page">¿Qué es HER?</h3>
                        <div class="about__content-text parragraph-page-text">
                              <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <?php get_template_part('template-parts/about/branch'); ?>

            </div>
        </div>
    </div>

    <?php

endwhile; endif;

get_footer();
