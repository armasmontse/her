<?php

$images = get_field('gallery');

if( $images ):

    ?>

    <div class="glow__slider" id="promo_JS">
        <?php $i = 0; foreach( $images as $image ): ?>
            <div class="glow__slide">
                <img class="glow__slide--img" src="<?php echo get_thumbnail_image_url($image['ID']) ; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
        <?php $i++; endforeach; ?>
    </div>

    <?php

endif;
