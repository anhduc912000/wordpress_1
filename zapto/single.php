<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zapto
 */

get_header('aboutPage');
?>

<section class="detail py-5 padding-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="row">
					<?php while (have_posts()) { the_post();
							$id = get_the_ID();
						?>
					 
					<div class="singer-blog">
						<a href=""><?php the_post_thumbnail('medium'); ?></a>
						<div class="datemonth"><?php echo get_the_date($the_date,$id); ?></div>
						<div class="menber">post by <span><?php the_author(); ?></span></div>
						<h3><a href=""><?php the_title(); ?></a></h3>
						<p class="content"><?php the_content(); ?></p>
					</div>
				<?php } ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pl-4">
				<?php get_sidebar();
				the_category();
			
?>
			</div>  
		</div>
	</div>
</section>

<?php
get_footer();
?>
