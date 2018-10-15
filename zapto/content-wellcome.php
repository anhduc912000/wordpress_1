<?php
wp_reset_query(); 
$wellcome_title = get_field('wellcome_title');
$discription 	= get_field('discription');
?>

<section class="wellcome py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-9 mx-auto text-center">
				<h2 class="blue-line text-center"><?php echo $wellcome_title;?></h2>
				<p class="discription"><?php echo $discription;?></p>
			</div>
		</div>
		<div class="row">
			

		<?php $product = new WP_Query(array('post_type' => 'intro_products'));
		while ($product -> have_posts()) {
				$product->the_post();

				$product_link = get_field('product_link');
				$product_button_text = get_field('product_button');
		  ?>
			<div class="col-sm-4 _3colum">
				<h2 class="blue-line"><a href=""><?php the_title();?></a></h2>
				<div class="content"><?php the_content();?></div>
				<?php if(!empty($product_button_text)) { ?> 
					<a href="<?php echo $product_link; ?>" class="btn btn-primary"><?php echo $product_button_text;?></a>
				<?php } ?>
			</div>

		<?php } ?>
		</div>

	</div>
	
</section> <!-- end wellcome -->