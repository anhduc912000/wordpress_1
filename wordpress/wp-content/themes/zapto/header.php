<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zapto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>zapto theme</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<? bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<? bloginfo( 'stylesheet_directory' ); ?>/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<? bloginfo( 'stylesheet_directory' ); ?>/css/style.css">

	<script type="text/javascript" src="<? bloginfo( 'stylesheet_directory' ); ?>/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<? bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<? bloginfo( 'stylesheet_directory' ); ?>/js/javascript.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zapto' ); ?></a>
		<div class="header">
			<nav class="menu navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
						<div class="logo">
							<a class="navbar-brand" href="#"><span>zapto </span>design</a>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						
						<?php wp_nav_menu( array( 
							'container' => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'navbarSupportedContent',
							'menu_class' => 'navbar-nav ml-auto' 

					) ); 


					?>
					</div>
					
				</div>
			</nav> <!-- end menu -->
			<div class="container">
				<div class="slide">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="https://demo.themelocation.com/zapto/images/slider/1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="https://demo.themelocation.com/zapto/images/slider/4.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="https://demo.themelocation.com/zapto/images/slider/3.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div><!--  end slide -->
				<div class="col-10 slogan">
				<h2>MATERIALS THAT <span>CREATE SOLUTIONS</span></h2>
				<h1>ZAPTO DESIGN</h1>
				<h2><span>TECHNOLOGY AT THE</span> SPEED OF LIFE</h2>
				<a href="#" class="btn btn-buytheme">buy Theme</a>
				<a href="#" class="btn btn-contact">Contact Us</a>
			</div>
			</div>
		</div> <!-- end header -->


	<div id="content" class="site-content">