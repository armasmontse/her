<?php

$cols = [
    [
        'peinados',
        'maquillaje',
        'corte'
    ],
    [
        'mani-pedi',
        'glow-tan',
        'niu-spa',
        'barberia',
    ],
    [
        'tratamientos',
        'mascarillas',
        'color'
    ]
];

global $current_term;

$service_types = get_field('service_types');

$columns = [];

if(is_array($service_types)){

    foreach($cols as $col) {

        $columns[] = array_filter($service_types, function($service_type) use ($col){

            return in_array($service_type->post_name, $col);

        });

    }

}


?>

<div class="about__main-peinados toggle_JS">

    <div class="about__box-dropdown">

        <div class="sucursal">

            <div class="flex arrow_JS">
                <h4 class="parragraph-page-text"><?php the_title(); ?></h4>
                <div>
                    <img class="about__box-logo-flecha" src="<?= THEMEURL ?>/images/pages/flecha.svg" alt="">
                </div>
            </div>

            <div class="box__content toggle_JS">
                <?php foreach($columns as $col): ?>
                    <div class="col-1-3">
                        <?php foreach($col as $service_type): ?>

                            <span style="display: block;" class="span-border-line <?php echo $current_term->slug; ?>"><?php echo $service_type->post_title; ?></span>

                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>

</div>
