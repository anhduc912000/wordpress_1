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
$logo = get_theme_mod('custom_logo');
$logo_editted = wp_get_attachment_image_src( $logo, 'full' );
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
	<script type="text/javascript" src="<? bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 
	<script src="<? bloginfo( 'stylesheet_directory' ); ?>/js/jquery.counterup.min.js"></script>
	<script src="<? bloginfo( 'stylesheet_directory' ); ?>/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="<? bloginfo( 'stylesheet_directory' ); ?>/js/javascript.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zapto' ); ?></a>
		<div class="header">

	<div class="menu">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="logo">
					<?php if(!empty($logo_editted)){?>

						<a href="<?php echo the_permalink() ; ?>"><img src="<?php echo $logo_editted[0] ; ?>" alt=""></a>
					<?php  } ?>
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
			</nav> <!-- end menu -->
		</div>
	</div>
</div> <!-- end header -->
<div class="slider">
	<div class="slider-show">
		<?php 
			$text_1 = get_field('text-1');
			$text_2 = get_field('text-2');
			$text_3 = get_field('text-3');
			$text_1_span = get_field('text-1-span');
			$text_3_span = get_field('text-3-span');
			$slider = get_field('slider-pic1');
			$slider1 = get_field('slide-pic2');
			$slider2 = get_field('slide-pic3');

			$button_text_1 = get_field('button_text_1');
			$link_text_1 = get_field('link_text_1');
			$button_text_2 = get_field('button_text_2');
			$link_text_2 = get_field('link_text_2');

		?>

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="<?php echo $slider['url'] ;?>"  alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo $slider1['url'] ;?>" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo $slider2['url'] ;?>" alt="Third slide">
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
	</div>
	<div class="slider-caption">
		<div class="slider-content t-cn s-tb slider-2">
			<div class="title-container s-tb-c title-compress t-lft">
				<h2><?php echo $text_1 ; ?><span> <?php echo $text_1 ; ?></span></h2>
				<h1><?php echo $text_2 ; ?></h1>
				<h2><span><?php echo $text_3_span ; ?></span> <?php echo $text_3 ; ?></h2>
				<?php if(!empty($button_text_1)){?>
					<a href="<?php echo $link_text_1  ; ?>" class="btn btn-buytheme"><?php echo $button_text_1 ; ?></a>
				<?php } ?>
				<?php if(!empty($button_text_2)){?>
					<a href="<?php echo $link_text_2 ; ?>" class="btn btn-contact"><?php echo $button_text_2 ; ?></a>
				<?php } ?>
			</div>
			
		</div>
		
	</div>		
</div><!--  end slide -->


	<div id="content" class="site-content">