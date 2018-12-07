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
			        <img src="<?php _e(get_field('banner_portfolios','option')); ?>" alt="<?php _e(get_field('title_portfolios','option')); ?>">
			          <div class="carousel-caption">
			          	<div class="box-text-button">
			          		<h1><?php _e(get_field('title_portfolios','option')); ?></h1>
			          		<ul class="click-home"> 
			          			<li><a href="<?php echo bloginfo('url');?>">HOME</a></li>
			          			<li class="active"><a href=""><?php echo get_template_name();?></a></li>
			          		</ul>
			          	</div>			          	
			          </div>
			        </div>
			    </div>
			</div>

			<!-- Discover Our Portfolios We Did -->
			<div class="container-fluid discover text-center">
				<div class="container group-discover">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg" style="">
					<h2 style=""><span>Discover Our</span> <span style="color: #FAAD1D;">Portfolios We Did</span></h2>
				</div>
				
				<div class="row">
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

						 <div class="col-sm-3 paddb">
							 <div class="box-img-text">
								 <div class="box-img" >
									 <img src="<?php _e(get_field('thumbnail'));?>" style="">
									 <div class="box-gra-text-hover" style="">
										 <div class="gradient"></div>
									 </div>
								 </div>

								 <div class="box-gra-text-hover box-dis-hover" style="">
									 <div class="box-text" style="">
										 <h4><?php _e(get_the_title());?></h4>
										 <p><?php _e(get_the_date());  ?></p>
										 <a href="<?php _e(get_permalink());?>">
											 <div class="button">
												 <button>VIEW DETAILS</button>
											 </div>
										 </a>

									 </div>
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