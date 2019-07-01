<div class="grid__container peinados__main">
    <div class="peinados__title arrow_JS maquillaje__ttl">
        <p>MAQUILLAJE</p>
        <div>
            <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
        </div>
    </div>
    <div class="grid__container peinados__col--container toggle_JS about__main--js">
        <div class="grid__col-1-2 peinados__col-mobile">
          <?php for ($i = 0; $i <= ($maql2-1); $i++) {?>
            <div class="peinados__row">
                <p class="peinados__row--name maquillaje__border"><?php echo $maquillados[$i]->post->post_title ?></p>
                <p class="peinados__row--time maquillaje__border--time"><?php echo $maquillados[$i]->caracts['duracion'] ?></p>
                <div class="peinados__row--price maquillaje__border"><?php echo $maquillados[$i]->caracts['precio'] ?></div>
            </div>
          <?php } ?>
        </div>

        <div class="grid__col-1-2 peinados__col-mobile">
          <?php for ($i = $maql2; $i <= ($maql1-1); $i++) {?>
            <div class="peinados__row ">
                <p class="peinados__row--name maquillaje__border"><?php echo $maquillados[$i]->post->post_title ?></p>
                <p class="peinados__row--time maquillaje__border--time"><?php echo $maquillados[$i]->caracts['duracion'] ?></p>
                <div class="peinados__row--price maquillaje__border"><?php echo $maquillados[$i]->caracts['precio'] ?></div>
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

    <div class="grid__container peinados__col--container toggle_JS about__main--js">
        <div class="grid__col-1-2 peinados__col--left peinados__col-mobile">
          <?php foreach($extras as $maquillado) :?>
            <div class="peinados__row ">
                <p class="peinados__row--name maquillaje__border"><?php echo $maquillado->post->post_title ?></p>
                <p class="peinados__row--time maquillaje__border--time"><?php echo $maquillado->caracts['duracion'] ?></p>
                <div class="peinados__row--price maquillaje__border"><?php echo $maquillado->caracts['precio'] ?></div>
            </div>
          <?php endforeach;?>
        </div>
    </div>
    <div class="grid__container peinados__col--container toggle_JS about__main--js peinados__extras">
        <div class="grid__col-1-2 peinados__col--right peinados__col-mobile">
            <div class="peinados__info">
              <?php foreach($extras as $maquillado) :?>
                <p>
                    <?php echo $maquillado->caracts['extra'] ?>
                </p>
              <?php endforeach;?>
            </div>
        </div>
    </div>

</div>
<?php get_footer(); ?>
