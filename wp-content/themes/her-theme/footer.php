
		</div> <!-- Aquí cierra el main-wrap -->

		<div class="general">
            <footer class="footer">
                <div class="grid__container" >
                    <h6 class="parragraph-footer">HER Barra de Peinados 2018®</h6>
				</div>
			</footer>
        </div>

        <?php

        $args = [
            'post_type' => 'ctct_forms',
            'posts_per_page' => 1
        ];

        $query = new WP_Query($args);

        ?>

        <?php if(shortcode_exists('ctct') && !empty($query->posts)): ?>
        <div id="popup" class="popup">
            <div class="popup__box">
                <div class="popup__outer">
                    <span class="popup__close close">&times;</span>
                    <div class="popup__inner">
                        <span class="popup__ttl popup__ttl--ttl">
                            Suscríbete a nuestro newsletter
                        </span>
                        <span class="popup__ttl popup__ttl--subttl">
                            y te enviaremos todas nuestras noticias, promociones y eventos
                        </span>
                        <div>
                            <?php echo do_shortcode('[ctct form="' . $query->posts[0]->ID . '"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php wp_footer(); ?>

	</body>
</html>
