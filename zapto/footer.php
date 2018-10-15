<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zapto
 */

$logo = get_theme_mod('custom_logo');
$logo_editted = wp_get_attachment_image_src( $logo, 'full' );
?>
</div><!-- #content -->
<footer class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-3 col-xs-12">
				<div class="singer-footer">
					<h2 class="blue-line">About Us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at purus varius odio tempus cursus. vitae, commodo dui.</p>
					<div class="social-media">
						<ul>
							<li><a href=""><i class="fa fa-facebook"></a></i></li>
							<li><a href=""><i class="fa fa-twitter"></a></i></li>
							<li><a href=""><i class="fa fa-pinterest-p"></a></i></li>
							<li><a href=""><i class="fa fa-dribbble"></a></i></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-2 col-xs-12">
				<div class="singer-footer">
					<h2 class="blue-line">Quicks Links</h2>
					<div class="quick-links">
						<ul>
							<li><a href="">About</a></li>
							<li><a href="">Services</a></li>
							<li><a href="">Portfolio</a></li>
							<li><a href="">Blogs</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<div class="singer-footer">
					<h2 class="blue-line">Recent Post</h2>
					<div class="footer-media">
						<ul class="list-unstyled">
						  <li class="media">
						    <img class="mr-3" src="https://demo.themelocation.com/zapto/images/blog/4.jpg" alt="Generic placeholder image">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1">List-based media object</h5>
						      Cras sit amet nibh libero, in gravida nulla. 
						    </div>
						  </li>
						  <li class="media">
						    <img class="mr-3" src="https://demo.themelocation.com/zapto/images/blog/5.jpg" alt="Generic placeholder image">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1">List-based media object</h5>
						      Cras sit amet nibh libero, in gravida nulla.
						    </div>
						  </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-3 col-xs-12">
				<div class="singer-footer">
					<h2 class="blue-line">Contact Info</h2>
					<div class="contact-info">
						<ul>
							<li><i class="fa fa-map-marker"></i>Schönhauser Allee 167c 10435 Berlin Germany</li>
							<li><i class="fa fa-envelope-o"></i>zaptodesign@gmail.com</li>
							<li><i class="fa fa-phone"></i>+49 30 47373795</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 m-auto">
			<div class="logo">	
					<?php if(!empty($logo_editted)){?>

							<a href="<?php echo the_permalink() ; ?>"><img src="<?php echo $logo_editted[0] ?>" alt=""></a>

						<?php } ?>
				</div>
		</div>
	</div>
</footer>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
