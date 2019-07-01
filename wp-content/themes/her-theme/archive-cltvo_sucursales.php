<?php

get_header();

$page_sucursales = new Cltvo_Page_Sucursales();

?>

<div class="sucursales grid__row">
	<div class="grid__container">
		<div class="grid__col-1-1">

			<div class="about__content">
				<div class="about__content-box uno">
					<h3 class="about__content-ttl title-page">¿Dónde está HER?</h3>
					<div class="about__content-text parragraph-page-text">
						<?php echo wpautop($page_sucursales->post->post_content) ?>
					</div>
				</div>
            </div>

			<!-- B o x  -  s u c u r s a l e s -->
			<div class="grid__row about__border sucursales__grid-4">
				<div class="grid__container">

                    <?php

                    $terms = [
                        'barra-de-peinados',
                        'bx',
                        'lax',
                    ];

                    foreach($terms as $term):

                        $term = get_term_by('slug', $term, 'branch_type');

                        $logo = get_field('logo', $term);

                        ?>

						<div class="grid__col-1-3 custom-border">

							<div class="box-grid ">
                                <?php if($logo): ?>
                                    <img class="about__box-logo-img <?php echo $term->slug; ?>" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                                <?php else: ?>
                                    <?php echo $term->name; ?>
                                <?php endif; ?>
								<hr class="box-grid__divisor" style="width: 100%" />
                            </div>

                            <div class="box-grid">
								<div class="box-description parragraph-page-text">
                                    <?php echo nl2br($term->description); ?>
								</div>
								<hr class="box-grid__divisor" />
							</div>

							<?php

                            $args = [
                                'tax_query' => [
                                    [
                                        'taxonomy' => $term->taxonomy,
                                        'field' => 'id',
                                        'terms' => $term->term_id
                                    ]
                                ],
                                'post_type' => 'cltvo_sucursales',
                                'posts_per_page' => -1
                            ];

                            $query = new WP_Query($args);

                            if ($query->have_posts()): while($query->have_posts()): $query->the_post();

                                $sucursal = get_post_meta(get_the_ID(), 'Cltvo_Sucursal')[0];

                                ?>

                                <div class="box-grid">
									<div class="box-description parragraph-page-text" onclick="locate( ' <?php echo $sucursal['google_maps'] ?> ' )">
										<h4 class="box-description-sucursal title-sucursales"><?php the_title(); ?></h4>
										<div class="box-description-direccion">
                                            <?php echo nl2br($sucursal['direccion']); ?>
                                            <?php if(array_key_exists('phone', $sucursal) && $sucursal['phone']): ?>
                                                <?php foreach(explode(',', $sucursal['phone']) as $phone): ?>
                                                    T: <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a> <br>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
										</div>
										<hr class="box-grid__divisor" />
									</div>
								</div>

                                <?php

                            endwhile; endif; ?>

						</div>

					<?php endforeach; ?>

				</div>
			</div>

		</div>
	</div>
</div>

<script>
function locate(loc) {
    document.getElementById("gMaps").setAttribute("src", loc);
}
</script>

<?php include 'inc/map.php'; ?>

<?php include 'footer.php'; ?>
