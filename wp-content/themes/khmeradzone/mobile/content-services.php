<?php
/*
 *	Template Name: Services
 *  Tag: Mobile
 */
?>

<!-- main container -->
<div id="wrapper">
	 <div id="content">
		  <div class="container-content">
				<!-- banner-about -->
				<div class="sub-banner padding-0">
					 <div class="group-banner-about">
						  <div class="box-img-text">
								<div class="box-img">
									 <div class="gradientb"></div>
									 <img src="<?php bloginfo('template_url'); ?>/assets/asset/pic/KhmerAdsZone-News-Event-01.jpg" style="">
								</div>
								<div class="box-text">
									 <h1>EVENT MANAGEMENT</h1>
									 <ul>
										  <li><a href="index.php">Home</a></li>
										  <li class="active"><a href="About.php">Services</a></li>
									 </ul>
								</div>
						  </div>
					 </div>
				</div>

				<!-- Press Release For Media -->
				<div class="release padding-0">
					 <div class="group-release padding-50-0">
						  <!-- Press Release For Media -->
						  <?php
                   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                   $args  = array (
                       'post_type' => 'flex-services',
                       'posts_per_page' => 4,
                       'paged' => $paged,
                   );
                   query_posts($args);
                   if(have_posts()) :

                   while (have_posts()) : the_post();?>

                   		<a href="SERVICES-detail.php">
								<div class="box-img-text">
									 <?php echo SetTextColor('<h2>',get_the_title(),'</h2>');?>
									 <div class="box-img">
										  <img src="<?php _e(get_field('thumbnail'));?>">
									 </div>
									 <div class="box-text">
										  <p><?php _e(shortenText(get_field('description'),300));?></p>
									 </div>
									 <!-- <a href="<?php _e(get_permalink());?>">
										<div class="button">
											<button>View More</button>
										</div>
									</a> -->


								</div>
						  </a>


					 <?php
					 endwhile;
					 wp_reset_query();
					 endif;
					 ?>
						  

						  

					 </div>
				</div>
		  </div>

	 </div>
</div>