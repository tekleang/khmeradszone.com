<?php
/*
 *	Template Name: Services
 */
?>
 <div id="wrapper">
	<div id="content">

		<!-- banner home -->
			<div class="container-fluid sub-banner">
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">			   
			    	<div class="item">
			    	<div class="gradientb" ></div>
			        <img src="<?php _e(get_field('banner_services','option')); ?>" alt="<?php _e(get_field('title_services','option')); ?>">
			          <div class="carousel-caption">
			          	<div class="box-text-button">
			          		<h1><?php _e(get_field('title_services','option')); ?></h1>
			          		<ul class="click-home">
			          			<li><a href="<?php echo bloginfo('url');?>">HOME</a></li>
			          			<li class="active"><a href=""><?php echo get_template_name();?></a></li>
			          		</ul>
			          	</div>			          	
			          </div>
			        </div>
			    </div>
			</div>

			<!-- Press Release For Media -->
			<div class="container-fluid services text-left">
				<div class="container group-services">
					<div class="row">
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

						<div class="col-sm-12 section-services">
							<div class="col-sm-6 media-box-text-media box-text">
								<div class="box-release">
									<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
									 <?php echo SetTextColor('<h2>',get_the_title(),'</h2>');?>
								</div>
								<p><?php _e(shortenText(get_field('description'),500));?></p>
								<a href="<?php _e(get_permalink());?>">
									<div class="button">
										<button>View More</button>
									</div>
								</a>
							</div>
							<div class="col-sm-6 padd main-box-img">
								<div class="box-img">
									<a>
										<img src="<?php _e(get_field('thumbnail'));?>">
									</a>
								</div>
							</div>
						</div>

					 <?php
					 endwhile;
					 wp_reset_query();
					 endif;
					 ?>

					</div>
				</div>
			</div>

			<!-- We Are an Event Planning Agency -->
			<div class="container-fluid agency text-center">
				<div class="container group-agency">
					<div class="icon-text">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
						<h2><span>We Are an</span> <span style="color: #FAAD1D;">Event Planning Agency</span></h2>
					</div>

					<div class="row">
                   <?php
                   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                   $args  = array (
                       'post_type' => 'flex-planning',
                       'posts_per_page' => -1,
                       'paged' => $paged,
							  'order' =>'ASC'
                   );
                   query_posts($args);
                   if(have_posts()) :
                   while (have_posts()) : the_post(); ?>
							  <div class="col-sm-3 paddb">
								 <div class="box-icon-text">
									 <div class="box-icon">
										 <img src="<?php _e(get_field('icon'));?>">
									 </div>
									 <div class="box-text">
										 <h3><?php _e(get_the_title());?></h3>
										 <p><?php _e(get_field('short_description'));?></p>
									 </div>
								 </div>
							 </div>
						  <?php
						  endwhile;
						  wp_reset_query();
						  endif;
						  ?>


					</div>
				</div>
			</div>

			<!-- Roadshow & Launching Activities -->
		 <!-- Press Release For Media -->
		 <div class="container-fluid services text-left">
			  <div class="container group-services">
					<div class="row">
                   <?php
                   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                   $args  = array (
                       'post_type' => 'flex-services',
                       'posts_per_page' => 4,
                       'paged' => $paged,
                       'order'          => 'ASC',
                   );
                   query_posts($args);
                   if(have_posts()) :

                       while (have_posts()) : the_post();  ?>


									<div class="col-sm-12 section-services">
										 <div class="col-sm-6 media-box-text-media box-text">
											  <div class="box-release">
													<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
                                       <?php echo SetTextColor('<h2>',get_the_title(),'</h2>');?>
											  </div>
											  <p><?php _e(shortenText(get_field('description'),500));?></p>
											  <a href="<?php _e(get_permalink());?>">
													<div class="button">
														 <button>View More</button>
													</div>
											  </a>
										 </div>
										 <div class="col-sm-6 padd main-box-img">
											  <div class="box-img">
													<a>
														 <img src="<?php _e(get_field('thumbnail'));?>">
													</a>
											  </div>
										 </div>
									</div>

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