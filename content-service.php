<?php 
wp_reset_query();

$service = new WP_Query(array('post_type'=> 'service' ));

$service_title = get_field('service_title');

?>


<section class="service py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mx-auto text-center">
				<h2 class="blue-line text-center"><?php echo $service_title; ?></h2>
			</div>
		</div>
		<div class="row margin-top">
	<?php 
		while($service-> have_posts()){ $service -> the_post();
			$service_icon = get_field('service_icon');


			?>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-top">
				<div class="single-srevice">
					<a href=""><i class="fa fa-<?php echo $service_icon; ?> ?>"></i></a>
					<h3><a href=""><?php the_title();?></a></h3>
					<p><?php the_content();?></p>
				</div>
			</div>
	<?php } ?>
		</div>
	</div>
</section>

