<?php 
wp_reset_query();// tranhs anh huong lenh lap truoc do
$recent_work =  new WP_Query(array('post_type' => 'recent_work'));

?>


<section class="recent-work py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mx-auto text-center">
				<h2 class="blue-line text-center">recent work</h2>
			</div>
		</div>
		<div class="row">
			<ul class="list-group">
				<li class="list-group-item filter active">all</li>
				<li class="list-group-item filter">App Mockups</li>
				<li class="list-group-item filter">Print Design</li>
				<li class="list-group-item filter">Visual Design</li>
				<li class="list-group-item filter">UI & UX Design</li>
			</ul>
		</div>
		<div class="row col-12">
	<?php while($recent_work-> have_posts()){
		$recent_work -> the_post();

	 ?>


			<div class="col-sm-6 col-lg-6 col-md-6 col-xs-12 no-gutters">
				<div class="singer-recent-work">
					<div class="recent-work-image">
						<a href="">
							<?php the_post_thumbnail();?>
						</a>
						<div class="work-detail"> 
							<h3><a href=""><?php the_title(); ?></a></h3>
							<p>
								<?php 
								$work = get_the_terms( $post->ID, 'type_work' ); 
								if(!empty($work)){
									foreach ($work as $key => $value) {
										echo $value->name;
									}
								}
								?>
									
							</p>
						</div>
					</div>
				</div>
			</div>

		<?php } ?>	
		</div>
	</div>
</section> <!-- end recent work -->