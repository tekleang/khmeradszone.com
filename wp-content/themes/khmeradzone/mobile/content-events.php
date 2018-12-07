<?php
/*
 *	Template Name: Event
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
									 <img src="<?php _e(get_field('banner_events','option')); ?>" alt="<?php _e(get_field('title_events','option')); ?>">
								</div>
								<div class="box-text">
									 <h1><?php _e(get_field('title_events','option')); ?></h1>
									 <ul>
										  <li><a href="<?php echo bloginfo('url');?>">Home</a></li>
										  <li class="active"><a><?php echo get_template_name();?></a></li>
									 </ul>
								</div>
						  </div>
					 </div>
				</div>


				<!-- events -->
				<div class="event padding-0">
					 <div class="group-event padding-50-0" style="margin-top: -10px;">
					<?php
						$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						$args  = array (
						   'post_type' => 'flex-events',
						   'posts_per_page' => -1,
						   'paged' => $paged,
						);
						query_posts($args);
						if(have_posts()) :
						while (have_posts()) : the_post(); ?>

                   	
						  <a href="<?php echo get_permalink();?>">
								<div class="box">
									 <div class="box-img-text">
										  <div class="box-img">
												<img src="<?php _e(get_field('thumbnail'));?>">
										  </div>
										  <div class="box-text">
												<h3><?php _e(get_the_title());?></h3>
										  </div>

									 </div>
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