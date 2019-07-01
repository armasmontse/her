<div class="service">

    <div class="service__box">

        <div class="service__name">
            <?php the_title(); ?>
        </div>

        <?php if(get_field('duration')): ?>
            <div class="service__time"><?php the_field('duration') ?></div>
        <?php endif; ?>

    </div>

    <?php if(get_field('price')): ?>
        <div class="service__price "><?php echo parse_money(get_field('price')); ?></div>
    <?php endif; ?>

</div>
