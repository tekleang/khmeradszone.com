<?php
/*
 *	Template Name: Portfolios
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
									 <img src="<?php _e(get_field('banner_portfolios','option')); ?>" alt="<?php _e(get_field('title_portfolios','option')); ?>">
								</div>
								<div class="box-text">
									 <h1><?php _e(get_field('title_portfolios','option')); ?></h1>
									 <ul>
										  <li><a href="<?php echo bloginfo('url');?>">Home</a></li>
										  <li class="active"><a href=""><?php _e(get_permalink(12)); ?></a></li>
									 </ul>
								</div>
						  </div>
					 </div>
				</div>

				<!-- Discover Our Portfolios We Did -->

				<div class="discover padding-0">
					 <div class="group-discover padding-50-0">
						  <h2>Discover Our <span>Portfolios We Did</span></h2>


				<?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args  = array (
                    'post_type' => 'flex-portfolios',
                    'posts_per_page' => -1,
                    'paged' => $paged,
                );
                query_posts($args);
                if(have_posts()) :
                while (have_posts()) : the_post(); ?>


					<a href="<?php _e(get_permalink()); ?>">
						<div class="box-discover">
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