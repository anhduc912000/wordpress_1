<?php
wp_reset_query();
  
  $why_title = get_field('why_title');
  $why_choose_image_1 = get_field('why_choose_image_1');
  $why_choose_image_2 = get_field('why_choose_image_2');
  $service_title_1	= get_field('service_title_1');
  $service_content_1 = get_field('service_content_1');
  $service_icon_1 = get_field('service_icon_1');
  $service_title_2	= get_field('service_title_2');
  $service_content_2 = get_field('service_content_2');
  $service_icon_2 = get_field('service_icon_2');
  $service_title_3	= get_field('service_title_3');
  $service_content_3 = get_field('service_content_3');
  $service_icon_3 = get_field('service_icon_3');
?>


<section class="why_chose py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mx-auto text-center">
				<h2 class="blue-line text-center"><?php echo  $why_title ;?></h2>
			</div>
		</div>
		<div class="row margin-top">
			<div class="col-sm-6 col-xs-12">
						<div id="carousel-about-why" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-about-why" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-about-why" data-slide-to="1"></li>
								<li data-target="#carousel-about-why" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
							<?php if (!empty( $why_choose_image_1)) { ?>
								<div class="carousel-item active">
									<img src="<?php echo $why_choose_image_1['url'] ?>" alt="First slide">
								</div>
							<?php } ?>
							<?php if (!empty( $why_choose_image_2)) { ?>
								<div class="carousel-item">
									<img src="<?php echo $why_choose_image_2['url'] ?>" alt="Second slide">
								</div>
							<?php } ?>
							</div>
							<?php if(!empty($why_choose_image_1) || !empty($why_choose_image_2)) {  ?>
							<a class="left carousel-control" href="#carousel-about-why" role="button" data-slide="prev">
								<span class="fa fa-long-arrow-right" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-about-why" role="button" data-slide="next">
								<span class="fa fa-long-arrow-left" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							<?php } ?>
						</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<ul>
				<?php if(empty($service_icon_1) || empty($service_title_1) || empty($service_content_1)) {

				} else{  ?>
					<li>
						<div class="media">
						  <a class="mr-5" href=""><i class="fa fa-share-<?php echo  $service_icon_1; ?>"></i></a>
						  <div class="media-body">
						    <h4 class="blue-line mt-0"><a href=""><?php echo $service_title_1; ?></a></h4>
						    <?php echo  $service_content_1; ?>
						  </div>
						</div>
					</li>
				<?php } ?>

				<?php if(empty($service_icon_2) || empty($service_title_2) || empty($service_content_2)) {  

				} else{ ?>
					<li>
						<div class="media">
						  <a class="mr-5" href=""><i class="fa fa-<?php echo  $service_icon_2; ?>"></i></a>
						  <div class="media-body">
						    <h4 class="blue-line mt-0"><a href=""><?php echo $service_title_2; ?></a></a></h4>
						      <?php echo  $service_content_2; ?>
						  </div>
						</div>
					</li>
				<?php } ?>

				<?php if(empty($service_icon_3) || empty($service_title_3) || empty($service_content_3)) { 

				}else{ ?>
					<li>
						<div class="media">
						  <a class="mr-5" href=""><i class="fa fa-<?php echo  $service_icon_3; ?>"></i></a>
						  <div class="media-body">
						    <h4 class="blue-line mt-0"><a href=""><?php echo $service_title_3; ?></a></a></h4>
						      <?php echo  $service_content_3; ?>
						  </div>
						</div>
					</li>
				<?php } ?>

				</ul>
				</div>
			</div>
		</div>
	</div>
</section><!-- end why_chose -->