<?php 
wp_reset_query();
 $number_1 = get_field('number_1');
 $number_2 = get_field('number_2');
 $number_3 = get_field('number_3');
 $number_4 = get_field('number_4');
 $text_1 = get_field('text_1');
 $text_2= get_field('text_2');
 $text_3 = get_field('text_3');
 $text_4 = get_field('text_4');

?>
<section class="counter py-5 margin-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm3 col-xs-12">
				<div class="about-counter-list">
					<h2 class="about-counter"><?php echo $number_1; ?></h2>
					<p><?php echo $text_1; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm3 col-xs-12"> 
				<div class="about-counter-list">
					<h2 class="about-counter"><?php echo $number_2; ?></h2>
					<p><?php echo $text_2; ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm3 col-xs-12">
				<div class="about-counter-list">
					<h2 class="about-counter"><?php echo $number_3; ?></h2>
					<p><?php echo $text_3; ?></p> 
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm3 col-xs-12">
				<div class="about-counter-list">
					<h2 class="about-counter"><?php echo $number_4; ?></h2>
					<p><?php echo $text_4; ?></p>
				</div>
			</div>
		</div>
	</div>	
</section> <!-- end counter -->