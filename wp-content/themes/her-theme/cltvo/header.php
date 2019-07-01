<?php
		include 'functions.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Her</title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<?php include_once '../inc/favicon.php' ?>

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link href="../style.css" rel="stylesheet" type="text/css" />

	<!-- Estilos swiper -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
	<script
		src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous">
	</script>
	<script src="../js/functions.js"></script>

</head>
<body>
	<!-- Aquí abre el main-wrap -->
	<div class="main-wrap">
		<!--Menu -->
		<header class="header large">
			<div class="grid__container nav__main">
				<nav class="nav">
					<!-- redes y sucursales -->
					<div class="nav__left">
						<div class="nav__redes large">
							<?php var_dump($social); ?>
							<a href="<?php echo $social['facebook']['link'] ?>">
								<img class="nav__redes-img" src="<?php echo THEMEURL ?>images/menu/nav-facebook.png" alt="">
							</a>

							<a href="<?php echo $social['instagram']['link'] ?>">
								<img class="nav__redes-img" src="<?php echo THEMEURL ?>images/menu/nav-instagram.png" alt="">
							</a>
						</div>
						<div class="nav__sucursales">
							<a href="" class="flex">
								<img class="nav__sucursales-img" src="<?php echo THEMEURL ?>images/menu/cursor.svg" alt="">
								<p>Sucursales</p>
							</a>
						</div>
					</div>
					<!-- logo -->
					<div class="nav__logo">
						<a href="<?= BLOGURL ?>">
							<img class="nav__logo-img large" src="<?php echo THEMEURL ?>images/menu/logo-her.png" alt="">
						</a>
					</div>
					<!-- Botón agenda tu cita-->
					<div class="nav__items">
						<a class="navbar__link" href="<?= BLOGURL ?>">
							<button class="navbar__link-cta">AGENDA TU CITA</button>
						</a>
					</div>
				</nav>
			</div>
		</header>
		<!--Second navbar -->
		<nav class="navbar">
			<div class="navbar__down">
				<!--items texto-->
				<ul class="navbar__items-txt">
					<li>
						<a class="navbar__link" href="">
							ABOUT
						</a>
					</li>
					<li class="navbar__items-txt--drops">
						<a class="navbar__link" href="">
							PEINADOS
							<div class="navbar__link--arrow">
								<img src="<?php echo THEMEURL ?>images/menu/arrow.png" alt="">
							</div>

						</a>
					</li>
					<li class="navbar__items-txt--drops">
						<a class="navbar__link" href="<?php echo specialPagePermalink('mas-servicios') ?>">
							MÁS SERVICIOS
							<div class="navbar__link--arrow">
								<img src="<?php echo THEMEURL ?>images/menu/arrow.png" alt="">
							</div>
						</a>
					</li>
				</ul>
				<!--items images-->
				<!-- <div class="navbar__items-images">
					<a href="#" class="">
						<img src="<?php echo THEMEURL ?>images/menu/iax-horizontal.png" alt="">
					</a>
					<a href="#" class="navbar__items-images--logos">
						<img src="<?php echo THEMEURL ?>images/menu/niuspa.svg" alt="">
					</a>
					<a href="#" class="navbar__items-images--logos">
						<img src="<?php echo THEMEURL ?>images/menu/glowTan.svg" alt="">
					</a>
				</div> -->
			</div>
		</nav>
