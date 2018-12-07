<?php
/*
 *	Template Name: About
 */
?>
 <div id="wrapper">
	<div id="content">

			<!-- banner home -->
			<div class="container-fluid sub-banner">
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">	
			    	<div class="item">
			    		<div class="gradientb" ></div>
			        	<img src="<?php _e(get_field('banner_about','option')); ?>" alt="<?php _e(get_field('title_about','option')); ?>">
				        <div class="carousel-caption">
				            <div class="box-text">
				          		<h1><?php _e(get_field('title_about','option')); ?></h1>
				          		<ul class="click-home">
				          			<li><a href="<?php bloginfo('url'); ?>">HOME</a></li>
				          			<li class="active"><a href=""><?php echo get_template_name();?></a></li>
				          		</ul>
				          	</div>			          	
				         </div>
				    </div>
			    </div>
			</div>

			<!-- Khmer AdsZone Overview -->
			<div class="container-fluid text-left overview">
				<div class="container group-overview">
					<div class="row" style="padding-bottom: 65px;">
						<div class="col-sm-6 box-img-text-left media-overview-box-text">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
							<h2><span>Khmer AdsZone</span> <span style="color: #FAAD1D;">Overview</span></h2>
							<div class="box-text-left">
                         <?php _e(get_field('description_overview','option')); ?>
							</div>
						</div>
						<div class="col-sm-6">

							<div class="box-img-text-right">
								<div class="box-img">
									<div class="gradientb"></div>
									<img src="<?php _e(get_field('thumbnail_overview','option')); ?>">
								</div>
								<div class="box-text">
									<h3><?php _e(get_field('name_about_overview','option')); ?></h3>
									<h3><?php _e(get_field('position_about_overview','option')); ?></h3>
								</div>
							</div>

						</div>


					</div>
				</div>
			</div>

			<!-- Our Vision -->
			<div class="container-fluid vision text-center" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/Khmer-AdsZone-About-03.jpg');background-size: cover;background-repeat: no-repeat;">
				<div class="container group-vision">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
					<h2><span>Our</span> <span style="color: #FFFFFF;">Vision</span></h2>
					<div class="row" style="padding-bottom: 50px;">
						<div class="box-text">
							<h2>
                         <?php _e(get_field('description_our_vision','option')); ?>
							</h2>
						</div>
						<div class="box-icon-brecket"><img src="<?php bloginfo('template_url'); ?>/assets/images/breakect-2.svg"></div>
					</div>
				</div>
			</div>

			<!-- Our Mission -->
			<!-- <div class="container-fluid mission text-left">
				<div class="container group-mission">
					<div class="row" style="padding-bottom: 50px;">
						<div class="col-sm-6">

						  <div class="box-img-text-left">
							  <div class="box-img">
								  <div class="gradientb"></div>
								  <img src="<?php _e(get_field('thumbnail_our_mission','option')); ?>">
							  </div>
						  </div>
		
						</div>
						<div class="col-sm-6 our-mission">
							<div class="box-img-text-right">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
								<h2><span>Our</span> <span style="color: #FAAD1D;">Mission</span></h2>

                         <?php _e(get_field('description_our_mission','option')); ?>

							</div>
						</div>
					</div>
				</div>
			</div> -->

			<!-- Our Objective -->
			<div class="container-fluid object text-center" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/Khmer-AdsZone-About-05.jpg');background-size: cover;background-repeat: no-repeat;">
				<div class="container group-object">
					<div class="icon-text">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
						<h2><span>Our</span> <span style="color: #FAAD1D;">Mission</span></h2>					
					</div>
					<div class="row">

						<div class="col-sm-12 our-object">
							<h2><?php _e(get_field('description_our_objective','option')); ?></h2>
                      		<div class="box-icon-brecket"><img src="<?php bloginfo('template_url'); ?>/assets/images/breakect-2.svg"></div>
						</div>

					</div>
				</div>
			</div>

			<!-- Our Team -->
			<div class="container-fluid team text-center">
				<div class="container group-team">
					<div class="icon-text">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
						<h2><span>Our</span> <span style="color: #FAAD1D;">Team</span></h2>
					</div>
					
					<div class="row">
                   <?php
                   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                   $args  = array (
                       'post_type' => 'flex-our-team',
                       'posts_per_page' => -1,
                       'paged' => $paged,
                       'order' =>'ASC'
                   );
                   query_posts($args);
                   if(have_posts()) :
                   while (have_posts()) : the_post(); ?>

						<div class="col-sm-3 padd">
							<div  class="box-group-img-discover" style="">
								<div class="box-img">
									<img src="<?php _e(get_field('profile'));?>" style="width: 100%;height: 100%;">
								</div>
								
								<div class="box-dis-hover media-gradient-team">
									<div class="gradient"></div>
								</div>
								
								<div class="test-hover">
									<div>
										<h3><span style="color: #FFFFFF;"><?php _e(get_the_title());?></span></h3>
										<h3><span style="color: #FFFFFF;"><?php _e(get_field('position'));?></span></h3>
									</div>
									<div class="button media-button-team">
										<button>VIEW DETAILS</button>
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

			<!-- Business Partners And Clients -->
			<div class="container-fluid partner padding-0 text-center">
				<div class="container padding-50-0 group-partner">
					<div class="icon-text">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg" style="">
						<h2 class="media-bog-h2-partner"><span>Business Partners And</span> <span style="color: #FAAD1D;">Clients</span></h2>
					</div>
					
					<div class="slick-client">

                      <?php
                      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                      $args  = array (
                          'post_type' => 'flex-clients',
                          'posts_per_page' => -1,
                          'paged' => $paged,
                          'order' =>'ASC'
                      );
                      query_posts($args);
                      if(have_posts()) :

                          $cc=0;
                          $item ='';$itemPerRow = 12;
                      while (have_posts()) : the_post();
                          $cc += 1;
                          if($cc == 1) $item .= '<div class="row">';
                          $item .= '<div class="col-sm-2 padd">
											 <div class="box-img-pertner">
												  <a href="'.get_field('url').'"> <img src="'.get_field('logo').'"></a>
											 </div>
										</div>';
								  if($cc == $itemPerRow) { $item .= '</div>'; $cc = 0; };
                      endwhile;
                      echo $item;
                          wp_reset_query();
                      endif;
                      ?>
						</div>


				</div>
			</div>
			
	</div>
</div>