<?php 
wp_reset_query();

$testimonial_title = get_field('testimonial_title');
$testimonial_image = get_field('testimonial_image');

$count_post = wp_count_posts('testimonial'); //đếm số lượng bài post
$count_post = $count_post->publish;
$count_button = round($count_post/2); //làm tròn
?>

<?php if($count_button > 0){?>
<section class="review padding-top" style="background: url(<?php echo $testimonial_image['url']; ?>) no-repeat;">
	<div class="container">
		<div class="row margin-top">
			<div class="col-sm-12 mx-auto text-center">
				<h2 class="blue-line text-center"><?php echo $testimonial_title; 


				 ?></h2>
			</div>
		</div>
		<div class="row margin-top">
			<div id="slide_review" class="carousel slide" data-ride="carousel">				
				<ol class="carousel-indicators">
					<?php for ($i=0; $i < $count_button ; $i++) { ?>
						<?php if($i == 0) { ?>
							<li data-target="#slide_review" data-slide-to="<?php echo $i; ?>" class="active"></li>
						<?php }else{?>
							<li data-target="#slide_review" data-slide-to="<?php echo $i; ?>"></li>
						<?php } ?>

					<?php } ?>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="row">
	<?php 
			$testimonial = new WP_Query(array('post_type' => 'testimonial'));
			$count = 1;
			while ($testimonial->have_posts()) {
				$testimonial->the_post();
			
	?>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="media">
								  <a class="mr-5" href=""><?php the_post_thumbnail('thumbnail'); ?></a>
								  <div class="media-body">
								    <h4 class="blue-line mt-0"><a href=""><?php the_title(); ?></a></h4>
								    <p><?php the_content(); ?></p>
								  </div>
								</div>
							</div>
				<?php if ($count%2 == 0) { ?>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">


				<?php } ?>


	<?php $count++; } ?>
						</div> <!-- end row -->
				</div>
			</div>
		</div>
	</div>
</section> <!-- end review -->
<?php } ?>
