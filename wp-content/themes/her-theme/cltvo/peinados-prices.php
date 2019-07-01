  <div class="grid__container peinados__main">
    <div class="peinados__title arrow_JS">

      <p>PEINADOS</p>
        <div>
            <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
        </div>
    </div>
    <div class="grid__container peinados__col--container toggle_JS about__main--js">
        <div class="grid__col-1-2 peinados__col-mobile">
          <?php for ($i = 0; $i <= ($norml2-1); $i++) {?>
            <div class="peinados__row maquillaje__row">
                <p class="peinados__row--name"><?php echo $peinados[$i]->post->post_title ?></p>
                <p class="peinados__row--time"><?php echo $peinados[$i]->caracts['duracion'] ?></p>
                <div class="peinados__row--price"><?php echo $peinados[$i]->caracts['precio'] ?></div>
            </div>
          <?php } ?>
      </div>

        <div class="grid__col-1-2 peinados__col--right peinados__col-mobile">
          <?php for ($i = $norml2; $i <= ($norml1-1); $i++) {?>
            <div class="peinados__row maquillaje__row ">
                <p class="peinados__row--name"><?php echo $peinados[$i]->post->post_title ?></p>
                <p class="peinados__row--time"><?php echo $peinados[$i]->caracts['duracion'] ?></p>
                <div class="peinados__row--price"><?php echo $peinados[$i]->caracts['precio'] ?></div>
            </div>
          <?php } ?>
        </div>
    </div>
    <hr class="horizontal-line maquillaje__line">
    <div class="peinados__title arrow_JS">
        <p>EXTRAS</p>
        <div>
            <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
        </div>
    </div>

    <div class="grid__container peinados__col--container toggle_JS about__main--js">
        <div class="grid__col-1-2 peinados__col--left peinados__col-mobile">

          <?php foreach($extras as $peinado) :?>
            <div class="peinados__row  maquillaje__row">
                <p class="peinados__row--name"><?php echo $peinado->post->post_title ?></p>
                <p class="peinados__row--time"><?php echo $peinado->caracts['duracion'] ?></p>
                <div class="peinados__row--price"><?php echo $peinado->caracts['precio'] ?></div>
            </div>
          <?php endforeach;?>
        </div>
    </div>
    <div class="grid__container peinados__col--container toggle_JS about__main--js peinados__extras">
        <div class="grid__col-1-2 peinados__col--right peinados__col-mobile">
            <div class="peinados__info">
              <?php foreach($extras as $peinado) :?>
                <p>
                    <?php echo $peinado->caracts['extra'] ?>
                </p>
              <?php endforeach;?>

            </div>
        </div>
    </div>
</div>
