<!DOCTYPE html>
<html lang="<?php echo substr(get_bloginfo ( 'language' ), 0, 2);?>">
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php wp_title(); ?></title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="<?php echo THEMEURL;?>humans.txt">

	<?php include_once('inc/favicon.php');?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />

	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,900" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
</head>
<body>
    <?php

    $contacto = new Cltvo_Page_Contacto();
    $social = $contacto->social_net;

    ?>
	<?php

	/**
	 *CLTVO: poner esto en true sólo en la versiones locales.
	 */

	if( !defined('CLTVO_ISLOCAL') || ( CLTVO_ISLOCAL != true) ){ include_once('inc/analytics.php'); }

    ?>


	<!--[if gt IE 8]><div style="z-index: 1000; padding: 5px 0; text-align: center; position: absolute; top: 0; left: 0; width: 100%; background-color: #312822;"><p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: white;">Consider <a style="color: #EA7640;
	text-decoration: underline;" href="http://www.google.com/intl/es/chrome/browser/" target="_blank">updating your browser</a> in order to render this site correctly.</p></div><!-->
    <!--<![endif]-->

    <!-- Begin Constant Contact Active Forms -->
    <!-- <script> var _ctct_m = "19a051c127765feef366fe274b476c29"; </script>
    <script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async="" defer=""></script> -->
    <!-- End Constant Contact Active Forms -->

	<!-- Aquí abre el main-wrap -->
	<div class="main-wrap">

		<header class="grid__row header">
			<div class=" grid__container header__container">
				<div class="header__info">
					<div class="header__info--social">
						<a href="<?php echo $social['facebook']['link'] ?>" target="_blank">
	                        <img class="nav__redes-img" src="<?php echo THEMEURL ?>images/pages/facebook3.svg" alt="<?php echo $social['facebook']['cuenta'] ?>">
	                    </a>
	                    <a style="margin-left: -2px;" href="<?php echo $social['instagram']['link'] ?>" target="_blank">
	                        <img class="nav__redes-img" src="<?php echo THEMEURL ?>images/menu/instagram2.svg" alt="<?php echo $social['instagram']['cuenta'] ?>">
	                    </a>
					</div>
					<a href="<?php echo BLOGURL ?>/sucursales" class="header__info--localization-lg">
                        <img class="" src="<?php echo THEMEURL ?>images/menu/where.svg" alt="">
                        <p>Sucursales</p>
					</a>
				</div>
				<div class="header__logo">
					<a href="<?php echo BLOGURL ?>">
                    	<img class="nav__logo-img large" src="<?php echo THEMEURL ?>images/menu/her-logo2.svg" alt="">
                	</a>
				</div>
				<div class="header__btn">
					<a class="navbar__link" href="<?php echo get_permalink( specialPage('agenda-tu-cita') ) ?>">
						<button class="navbar__link-cta">AGENDA TU CITA</button>
					</a>
				</div>
			</div>
		</header>
		<!--Second navbar -->


		<button class="navbar-collapse__JS">
			<img class="navbar-collapse open" src="<?php echo THEMEURL ?>images/menu/menu3.svg" alt="">
			<img class="navbar-collapse close" src="<?php echo THEMEURL ?>images/menu/menu-collapse-close.svg" alt="">
		</button>
		<nav class="navbar topnav" id="navbar__JS">
			<div class=" grid__container navbar__container">
				<!-- drop menu en mobile -->
				<div class="navbar__drops--mobile">
					<a class="navbar__items" href="<?php echo get_permalink( specialPage('sucursales') ) ?>">
						<img class="navbar__pointer" src="<?php echo THEMEURL ?>images/menu/where.svg" alt="">
						Sucursales
					</a>
					<a class="navbar__items" href="<?php echo get_permalink( specialPage('about') ) ?>">About</a>
					<a class="navbar__items" href="<?php echo BLOGURL ?>/servicios/peinados">Peinados</a>
					<a class="navbar__items" href="<?php echo BLOGURL ?>/servicios/maquillaje">Maquillaje</a>
					<!-- <a class="navbar__items" href="<?php echo BLOGURL ?>/servicios/tratamientos">Tratamientos</a> -->
					<a class="navbar__items" href="<?php echo BLOGURL ?>/servicios/mani-pedi">Mani - pedi</a>
					<a class="navbar__items" href="<?php echo BLOGURL ?>/servicios/depilacion-con-hilo">Depilación de Hilo</a>
					<a class="navbar__lax navbar__items" href="<?php echo get_permalink( specialPage('lax') ) ?>" class="navbar__images--container-first">
						<img src="<?php echo THEMEURL ?>images/menu/lax2.svg" alt="">
					</a>
					<a class="navbar__glow navbar__items" href="<?php echo get_permalink( specialPage('glow-tan') ) ?>" class="navbar__images--container">
						<img src="<?php echo THEMEURL ?>images/menu/glowTan.svg" alt="">
					</a>
					<a href="<?php echo get_permalink( specialPage('niu-spa') ) ?>" class="navbar__images--container navbar__items navbar__items--niu">
						<img src="<?php echo THEMEURL ?>images/menu/niuspa.svg" alt="">
					</a>
					<div class="navbar__items">
						<a  class="navbar__items--redes" href="<?php echo $social['facebook']['link'] ?>">
	                        <img class="nav__redes-img" src="<?php echo THEMEURL ?>images/pages/facebook3.svg" alt="<?php echo $social['facebook']['cuenta'] ?>">
	                    </a>
	                    <a  class="navbar__items--redes" href="<?php echo $social['instagram']['link'] ?>">
	                        <img class="nav__redes-img" src="<?php echo THEMEURL ?>images/menu/instagram2.svg" alt="<?php echo $social['instagram']['cuenta'] ?>">
	                    </a>
					</div>
				</div>
				<!-- termina drop menu en mobile -->
				<div class="navbar__drops">
					<div class="navbar__drops--item <?php if(is_active('about')): ?>active<?php endif ?>">
						<a href="<?php echo get_permalink( specialPage('about') ) ?>">ABOUT</a>
					</div>

					<div class="navbar__drops--container navbar__dropdown">

						<div class="navbar__drops--item dropbtn
							<?php if(is_active('peinados')): ?>active<?php endif ?>
							<?php if(is_active('maquillaje')): ?>active<?php endif ?>">
							<a class="" href="<?php echo BLOGURL ?>/servicios/peinados">Peinados</a>
							<div class="navbar__drops--arrow"><img src="<?php echo THEMEURL ?>images/menu/arrow.svg" alt=""></div>
						</div>
						<div class="navbar__dropdown-content maq">
							<a class="<?php if(is_active('maquillaje')): ?>active<?php endif ?>" href="<?php echo BLOGURL ?>/servicios/maquillaje">Maquillaje</a>
						</div>

					</div>

					<div class="navbar__drops--container navbar__dropdown">

						<div class="navbar__drops--item dropbtn
							<?php if(is_active('mas-servicios')): ?>active<?php endif ?>
							<?php if(is_active('tratamientos')): ?>active<?php endif ?>
							<?php if(is_active('mani-pedi')): ?>active<?php endif ?>
							<?php if(is_active('hilo')): ?>active<?php endif ?>
							">
							<a href="<?php echo BLOGURL ?>/servicios/otros">MÁS SERVICIOS</a>
							<div class="navbar__drops--arrow"><img src="<?php echo THEMEURL ?>images/menu/arrow.svg" alt=""></div>
						</div>
						<div class="navbar__dropdown-content">
							<!-- <a class="<?php if(is_active('tratamientos')): ?>active<?php endif ?>" href="<?php echo BLOGURL ?>/servicios/tratamientos">TRATAMIENTOS</a> -->
							<a class="<?php if(is_active('mani-pedi')): ?>active<?php endif ?>" href="<?php echo BLOGURL ?>/servicios/mani-pedi">MANI - PEDI</a>
							<a class="<?php if(is_active('hilo')): ?>active<?php endif ?>" href="<?php echo BLOGURL ?>/servicios/depilacion-con-hilo">DEPILACIÓN HILO</a>
						</div>
					</div>
				</div>
				<!-- i m a g e n e s  -->
				<div class="navbar__images">
					<a class="navbar__lax" href="<?php echo get_permalink( specialPage('lax') ) ?>" class="navbar__images--container-first">
						<img src="<?php echo THEMEURL ?>images/menu/lax2.svg" alt="">
					</a>
					<a class="navbar__glow" href="<?php echo get_permalink( specialPage('glow-tan') ) ?>" class="navbar__images--container">
						<img src="<?php echo THEMEURL ?>images/menu/glowTan.svg" alt="">
					</a>
					<a href="<?php echo get_permalink( specialPage('niu-spa') ) ?>" class="navbar__images--container">
						<img src="<?php echo THEMEURL ?>images/menu/niuspa.svg" alt="">
					</a>
				</div>
				 <a href="<?php echo get_permalink( specialPage('sucursales') ) ?>" class="navbar__info--localization">
					<p>Sucursales  </p>
				</a>
			</div>
		</nav>
