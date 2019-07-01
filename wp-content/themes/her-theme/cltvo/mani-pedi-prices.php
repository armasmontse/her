<div class="grid__container mani-pedi__main">
    <div class="peinados__title arrow_JS maquillaje__ttl">
        <p>MANI-PEDI</p>
        <div>
            <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
        </div>
    </div>
    <div class="peinados__col--container about__main--js">
        <div class="grid__col-1-2 mani-pedi__col">
            <?php for ($i = 0; $i <= ($mapel2-1); $i++) {?>
              <div class="peinados__row ">
                  <p class="peinados__row--name servicios--width maquillaje__border"><?php echo $mape[$i]->post->post_title ?></p>
                  <div class="peinados__row--price maquillaje__border"><?php echo $mape[$i]->caracts['precio'] ?></div>
              </div>
            <?php } ?>
        </div>
        <div class="grid__col-1-2 mani-pedi__col peinados__col--right">
          <?php for ($i = $mapel2; $i <= ($mapel1-1); $i++) {?>
            <div class="peinados__row ">
                <p class="peinados__row--name servicios--width maquillaje__border"><?php echo $mape[$i]->post->post_title ?></p>
                <div class="peinados__row--price maquillaje__border"><?php echo $mape[$i]->caracts['precio'] ?></div>
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
        <div class="grid__col-1-2 mani-pedi__col">
          <?php for ($i = 0; $i <= ($specl2-1); $i++) {?>
            <div class="peinados__row ">
                <p class="peinados__row--name servicios--width maquillaje__border"><?php echo $especiales[$i]->post->post_title ?></p>
                <div class="peinados__row--price maquillaje__border"><?php echo $especiales[$i]->caracts['precio'] ?></div>
            </div>
          <?php } ?>
        </div>
        <div class="grid__col-1-2 mani-pedi__col peinados__col--right">
          <?php for ($i = $specl2; $i <= ($specl1-1); $i++) {?>
            <div class="peinados__row ">
                <p class="peinados__row--name servicios--width maquillaje__border"><?php echo $especiales[$i]->post->post_title ?></p>
                <div class="peinados__row--price maquillaje__border"><?php echo $especiales[$i]->caracts['precio'] ?></div>
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
        <div class="grid__col-1-2 mani-pedi__col peinados__col--left">
          <?php foreach($extras as $manipedi): ?>
            <div class="peinados__row ">
                <p class="peinados__row--name servicios--width maquillaje__border"><?php echo $manipedi->post->post_title ?></p>
                <div class="peinados__row--price maquillaje__border"><?php echo $manipedi->caracts['precio'] ?></div>
            </div>
          <?php endforeach;?>
        </div>
    </div>

</div>
<?php get_footer(); ?>
