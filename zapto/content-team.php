<?php 
wp_reset_query();

$staff = new WP_Query(array('post_type'=> 'the_team'));
$team_about_title = get_field('team_about_title');
$team_title = get_field('team_title');
?>

<section class="team py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mx-auto text-center">
				<h2 class="blue-line text-center">
					<?php echo $team_title; ?>
					<?php echo $team_about_title; ?>
						

				</h2>
			</div>
		</div>
		<div class="row margin-top">
<?php 
		while ($staff -> have_posts()) {$staff -> the_post();?>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="singer-recent-work">
					<div class="recent-work-image">
						<a href=""><?php the_post_thumbnail();?></a>
						<div class="work-detail"> 
							<h3><a href=""><?php the_title();?></a></h3>
							<p>
								<?php 
									$teams = get_the_terms( $post->ID, 'team' ); 
									// print_r($teams);
									if(!empty($teams)){
										foreach ($teams as $team) {
											echo $team->slug.' ';
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
</section> <!-- end team -->