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
<body class="aboutpage">


<div class="header">
	<div class="menu">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="logo">
						<?php if(!empty($logo_editted)){?>

							<a href="<?php echo the_permalink() ; ?>"><img src="<?php echo $logo_editted[0] ?>" alt=""></a>

						<?php } ?>
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
<?php $about_image = get_field('about_image'); ?>
<div class="slider-caption" style=""><!-- background:url(<?php //echo $about_image['url']; ?>) no-repeat -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="slider-content t-cn s-tb slider-2">
					<?php //while (have_posts()) { the_post(); 
						$about_title = get_field('about_title');
						?>
					<div class="title-container s-tb-c title-compress t-lft text-center">
						<h2><span>
							<?php if(is_home()){ 

								echo get_post(get_option('page_for_posts'))-> post_title;
							}else{ the_title(); }

								?>
								


							</span></h2>
						<p><?php echo $about_title; ?></p>
					</div>
				
				</div>
			</div>
		</div>
	</div>	
</div>	
<div id="content" class="site-content">