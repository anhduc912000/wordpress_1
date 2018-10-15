<?php 
wp_reset_query();// tranhs anh huong lenh lap truoc do
$recent_work =  new WP_Query(array('post_type' => 'recent_work'));
$work_filter_nav = new WP_Query(array('post_type' => 'work_filter_nav'));

$work_title = get_field('work_title');
?>


<section class="recent-work py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mx-auto text-center">
				<h2 class="blue-line text-center"><?php echo $work_title?></h2>
			</div>
		</div>
		<div class="row">
			<ul class="list-group">
				<li data-filter="all" class="list-group-item filter active">All</li>

	<?php while($work_filter_nav-> have_posts()){

		$work_filter_nav -> the_post();	
		$work_filter_nav_title = get_field('work_filter_nav_title');
		$work_category = get_field('list_filter');
	?>
	
			<li data-filter="<?php echo $work_category; ?>" class="list-group-item filter"><?php echo $work_filter_nav_title; ?></li>
	<?php } ?>
			</ul>
		</div>

		<ul class="row col-12 content">
	<?php 
		while($recent_work-> have_posts()){ $recent_work -> the_post();?>
	
			<li class="col-sm-6 col-lg-6 col-md-6 col-xs-12
				<?php 
					$categories = get_the_category($post->id);
					// print_r($categories);
					foreach ($categories as $category) {
						echo $category->slug.' ';
					}
				?>
			">
				<div class="singer-recent-work">
					<div class="recent-work-image">
						<a href=""><?php the_post_thumbnail();?></a>
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
			</li>
	<?php } ?>	
		</ul>
	</div>
</section> <!-- end recent work -->

