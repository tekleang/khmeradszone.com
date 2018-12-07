<?php
/*
 *	Template Name: About
 *  Tag: Mobile
 */
?>

	<!-- main container -->
	<div id="wrapper">
		<div id="content">

			<div class="container-content" style="background-color: #ffffff;float: left;">
				<!-- banner-about -->
				<div class="sub-banner padding-0">
					<div class="group-banner-about">
						<div class="box-img-text" >
							<div class="box-img">
								<div class="gradientb"></div>
								 <img src="<?php _e(get_field('banner_about','option')); ?>" alt="<?php _e(get_field('title_about','option')); ?>">
							</div>
							<div class="box-text">
								<h1><?php _e(get_field('title_about','option')); ?></h1>
								<ul>
									 <li><a href="<?php bloginfo('url'); ?>">HOME</a></li>
									 <li class="active"><a href=""><?php echo get_template_name();?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Khmer AdsZone Overview -->
				<div class="overview padding-0">
					<div class="group-overview padding-50-0">
						<h2>Khmer AdsZone <span>Overview</span></h2>
						<div class="box-img">
							 <img src="<?php _e(get_field('thumbnail_overview','option')); ?>">
							<div class="text-on-img">
								<p><?php _e(get_field('name_about_overview','option')); ?></p>
								<p><?php _e(get_field('position_about_overview','option')); ?></p>
							</div>
						</div>
						<div class="box-text">
                      <?php _e(get_field('description_overview','option')); ?>
						</div>
					</div>
				</div>

				<!-- Our Vision -->
				<div class="vision padding-0" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/asset/pic/Khmer-AdsZone-About-03.jpg');background-repeat: no-repeat;">
					<div class="group-vision padding-50-0">
						<h2>Our <span>Vision</span></h2>

						<div class="box-text">
							<p>
                         <?php _e(get_field('description_our_vision','option')); ?>							</p>
						</div>
						<div class="box-icon">
							<img src="<?php bloginfo('template_url'); ?>/assets/asset/pic/breakect-2.svg">
						</div>

					</div>
				</div>

				<!-- Our Mission -->
				<div class="mission padding-0">
					<div class="group-mission padding-50-0" style="padding-bottom: 20px;">
						<h2>Our <span>Mission</span></h2>
						<div class="box-img" style="">
							 <img src="<?php _e(get_field('thumbnail_our_mission','option')); ?>">
						</div>

						<div class="box">
							<div class="group-box">

								<div class="box-icon-text">
									<div class="box-icon box-text">
                               <?php _e(get_field('description_our_mission','option')); ?>
									</div>
								</div>


							</div>
						</div>

					</div>
				</div>

				<!-- Our Objective -->
				<div class="objective padding-0" style="background-color: #F1E7C4;">
					<div class="objective-vision padding-50-0" style="padding-bottom: 20px;">
						<h2>Our <span>Objective</span></h2>

						<div class="box">
							<div class="group-box">

								<div class="box-icon-text">
									<div class="box-icon box-text ">
										<?php _e(get_field('description_our_objective','option')); ?>
									</div>
								</div>
	

							</div>
						</div>

					</div>
				</div>

				<!-- Our Team -->
				<div class="team padding-0">
					<div class="group-team" style="padding-top: 30px;">
						<h2>Our <span>Team</span></h2>

						<div>

							
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
									$cc=0;
									$item ='';
									$itemPerRow = 2;
									while (have_posts()) : the_post(); 
								$cc += 1;
								if($cc == 1) $item .= '<div class="box-img-text">';
									
									$item .= '
										<div class="box-img">
											<div class="img-gra">
												<div class="gradientb"></div>
												<img src="'.get_field('profile').'">
											</div>

											<div class="box-text">
												<h3>'.get_the_title().'</h3>
												<h3>'.get_field('position').'</h3>
											</div>
										</div>';
									
									if($cc == $itemPerRow) { $item .= '</div>'; $cc = 0; };
									endwhile;
									_e($item);
								wp_reset_query();
								endif;
							?>


						</div>
					</div>
				</div>

				
			</div>


		</div>
	</div>