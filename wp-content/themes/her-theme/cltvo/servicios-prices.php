<div class="grid__container servicios__main">
    <div class="peinados__title arrow_JS maquillaje__ttl">
        <p>MANI-PEDI</p>
        <div>
            <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
        </div>
    </div>
    <div class="peinados__col--container about__main--js">
        <div class="grid__col-1-2 servicios__cols">
            <?php for ($i = 1; $i <= 3; $i++) {?>
                <div class="peinados__row ">
                    <p class="peinados__row--name servicios--width maquillaje__border">NATURAL</p>
                    <div class="peinados__row--price maquillaje__border">$270</div>
                </div>
            <?php } ?>
        </div>
        <div class="grid__col-1-2 servicios__cols peinados__col--right">
            <?php for ($i = 1; $i <= 3; $i++) {?>
                <div class="peinados__row">
                    <p class="peinados__row--name servicios--width maquillaje__border">ROCKERO</p>
                    <div class="peinados__row--price maquillaje__border">$270</div>
                </div>
            <?php } ?>
        </div>
    </div>


     <hr class="horizontal-line maquillaje__line">
    <div class="peinados__title arrow_JS maquillaje__ttl">
        <p>ESPECIALES</p>
        <div>
            <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
        </div>
    </div>
    <div class="peinados__col--container about__main--js">
        <div class="grid__col-1-2 servicios__cols">
            <?php for ($i = 1; $i <= 2; $i++) {?>
                <div class="peinados__row ">
                    <p class="peinados__row--name servicios--width maquillaje__border">NATURAL</p>
                    <div class="peinados__row--price maquillaje__border">$270</div>
                </div>
            <?php } ?>
        </div>
        <div class="grid__col-1-2 servicios__cols peinados__col--right">
            <?php for ($i = 1; $i <= 3; $i++) {?>
                <div class="peinados__row">
                    <p class="peinados__row--name servicios--width maquillaje__border">ROCKERO</p>
                    <div class="peinados__row--price maquillaje__border">$270</div>
                </div>
            <?php } ?>
        </div>
    </div>

     <hr class="horizontal-line maquillaje__line">
    <div class="peinados__title arrow_JS maquillaje__ttl">
        <p>EXTRAS</p>
        <div>
            <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
        </div>
    </div>

    <div class="peinados__col--container about__main--js">
        <div class="grid__col-1-2 servicios__cols peinados__col--left">
            <?php for ($i = 1; $i <= 3; $i++) {?>
                <div class="peinados__row">
                    <p class="peinados__row--name servicios--width maquillaje__border">TRENZA EXTRA</p>
                    <div class="peinados__row--price maquillaje__border">$80</div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>
<?php get_footer(); ?>
