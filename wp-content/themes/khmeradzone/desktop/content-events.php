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
			        <img src="<?php _e(get_field('banner_events','option')); ?>" alt="<?php _e(get_field('title_events','option')); ?>">
			          <div class="carousel-caption">
			          	<div class="box-text-button">
			          		<h1><?php _e(get_field('title_events','option')); ?></h1>
			          		<ul class="click-home">
			          			<li><a href="<?php echo bloginfo('url');?>">HOME</a></li>
			          			<li class="active"><a href=""><?php echo get_template_name();?></a></li>
			          		</ul>
			          	</div>			          	
			          </div>
			        </div>
			    </div>
			</div>

			<!-- Grand Opening Prime One Real Estate -->
			<div class="container-fluid grand text-left">
				<div class="container group-grand">
					<div class="row">
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

							 <div class="col-sm-4 padd">
								 <a href="<?php echo get_permalink();?>">
									 <div class="box-img">
										 <img src="<?php _e(get_field('thumbnail'));?>">
										 <div class="box-dis-hover media-gradient-tab-grand">
											 <div class="gradient"></div>
										 </div>
									 </div>

									 <div class="box-text">
										 <p><?php _e(get_the_title());?></p>
									 </div>
								 </a>
							 </div>

						  <?php
						  endwhile;
						  wp_reset_query();
						  endif;
						  ?>
						  <!-- pagination	 -->
							<div class="pagination">
								<div class="page">
									<ul>
										<li><a href="#" class="icon prev-disabled">
											<img src="<?php bloginfo('template_url'); ?>/assets/images/icon/left-arrow.svg">
										</a></li>
										<li><a href="#" class="current">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">6</a></li>
										<li><a href="#" class="icon next">
											<img src="<?php bloginfo('template_url'); ?>/assets/images/icon/right-arrow.svg">
										</a></li>
									</ul>
								</div>
							</div>
					</div>
				</div>
			</div>


	</div>
</div>