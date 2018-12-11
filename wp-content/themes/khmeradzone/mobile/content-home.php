	<?php
/*
 *	Template Name: Home
 *  Tag: Mobile
 */
?>

	<!-- main container -->
	<div id="wrapper">
		<div id="content">
			<div class="container-content">
			<!-- banner -->
			<div class="banner-home padding-0 ">
				<div class="group-banner-home">
					<div class="banner slick-main-banner position-relative"><!--banner-->

						<?php
			                 if( have_rows('hero_banner', 'option') ):
			                 $count = 0;
			                 while ( have_rows('hero_banner', 'option') ) : the_row();
			                 $num_row=$count++;
			                 ?>
						      <div class="box-img-text position-relative" data-fullscreen>
						      	<div class="box-img  <?php if($num_row == 0){echo 'active';}?>">
							      	<div class="gradientb" ></div>
						      		  <img src="<?php _e(get_sub_field('banner')); ?>" alt="<?php _e(get_sub_field('title')); ?>" style="width: 100%;">
							          <div class="description">
							              	<div class="">
								          		<h1><?php _e(get_sub_field('title')); ?></h1>
								          	</div>			          	
							          </div>			        
							      </div>
						      </div>
			                     <?php
			                 endwhile;
			                 endif;
			            ?>
					</div>
				</div>
			</div>

			<!-- We Are an Event Planning Agency -->
			<div class="agency padding-0">
				<div class="group-agency padding-50-0">
					<h2>We Are an <span>Event Planning Agency</span></h2>
					<div>
						 <div class="box-icon-agency">
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
										<div class="box-icon-text" align="center">
											  <div class="box-icon">
													<img src="<?php _e(get_field('icon'));?>">
											  </div>
											  <div class="box-text">
													<h3><?php _e(get_the_title());?></h3>
													<!-- <p><?php _e(get_field('short_description'));?></p> -->
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


			<!-- Our Successfull Real Facts -->
			<div class="facts padding-0" id="counter">
				<div class="group-facts padding-50-0" style="margin-bottom: 15px;">
					<h2>Our Successfull <span>Real Facts</span></h2>


					<div class="box-icon-facts" align="center">

						<?php
						if( have_rows('real_facts', 'option') ):
						while ( have_rows('real_facts', 'option') ) : the_row();
						?>
							 <div class="box-iocn-text">
								 <div class="box-icon">
									 <img src="<?php _e(get_sub_field('icon')); ?>">
								 </div>
								 <div class="box-text">
									 <h2 data-count="<?php _e(get_sub_field('data_count')); ?>" data-duration="<?php _e(get_sub_field('data_duration')); ?>" data-sign="<?php _e(get_sub_field('data_sign')); ?>">1</h2>
									 <p><?php _e(get_sub_field('short_description')); ?></p>
								 </div>
							 </div>

                         <?php
                         endwhile;
                         endif;
                         ?>

					</div>

					<!-- <div class="box-icon-facts">
						<div class="box-iocn-text"  align="center">
							<div class="box-icon">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Fact-01.svg">
							</div>
							<div class="box-text">
								<h3 data-count="168" data-duration="3000" data-sign="+">1</h3>
								<h4>Satisfied</h4>
								<h4> Clients</h4>
							</div>
						</div>

						<div class="box-iocn-text" align="center">
							<div class="box-icon">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Fact-02.svg">
							</div>
							<div class="box-text">
								<h3 data-count="15" data-duration="3000" data-sign="K">1</h3>
								<h4>Project</h4>
								<h4>Deals</h4>
							</div>
						</div>

						<div class="box-iocn-text" align="center">
							<div class="box-icon">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Fact-03.svg">
							</div>
							<div class="box-text">
								<h3 data-count="20" data-duration="3000" data-sign="K">1</h3>
								<h4>Cup of</h4>
								<h4>Coffee</h4>
							</div>
						</div>

						<div class="box-iocn-text" align="center">
							<div class="box-icon">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Fact-04.svg">
							</div>
							<div class="box-text">
								<h3 data-count="2013" data-duration="3000" data-sign=" ">1</h3>
								<h4>Founded</h4>
								<h4>Year</h4>
							</div>
						</div>

						<div class="box-iocn-text" align="center">
							<div class="box-icon">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Fact-05.svg" >
							</div>
							<div class="box-text">
								<h3 data-count="45" data-duration="3000" data-sign="+">1</h3>
								<h4>Team &</h4>
								<h4>Partners</h4>
							</div>
						</div>

						<div class="box-iocn-text" align="center">
							<div class="box-icon">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Fact-06.svg">
							</div>
							<div class="box-text">
								<h3 data-count="18" data-duration="3000" data-sign="+">1</h3>
								<h4>Win</h4>
								<h4>Awards</h4>
							</div>
						</div>
					</div> -->

				</div>
			</div>


			<!-- Client’s Testimonail -->
			<!-- <div class="client padding-0">
				<div class="group-client padding-50-0" style="padding-bottom: 20px;">
					<h2>Client’s <span>Testimonail</span></h2>

					<div class="box-testimonial text-align-center">

						<?php
		                   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
		                   $args  = array (
		                       'post_type' => 'flex-testimonail',
		                       'posts_per_page' => -1,
		                       'paged' => $paged,
		                   );
		                   query_posts($args);
		                   if(have_posts()) :
		                       $cc=0;
		                       $item ='';
		                       $itemPerRow = 3;
		                   while (have_posts()) : the_post();
		                       $cc += 1;
		                       if($cc == 1) $item .= '<div class="slick-testimonial" style="padding-top: 15px;">';
		                       $item .= '<div class="testimonial">
											 <div class="sub-testimonial">
											 	<div class="inside-testimonial point-bullet-down">
												 <h3 style="color: #FAAD1D !important;">'.get_the_title().'</h3>
												 <h3 style="margin-top: -30px;">'.get_field('position').'</h3>
												 <p class="media-client-p" style="padding: 30px 70px;color: #231F20 !important;">'.get_field('short_description').'</p>
												 </div>
												 <div class="item-center">
												 	<div class="box-img">
														<img src="'.get_field('profile').'" class="img-circle">
													</div>
												 </div>
											 </div>
										 </div>';

							  if($cc == $itemPerRow) { $item .= '</div>'; $cc = 0; };
						  endwhile;
                       echo $item;
						  wp_reset_query();
						  endif;
						  ?>

							<div class="slick-testimonial" style="padding-top: 15px;">
								<div class="testimonial">
									<div class="sub-testimonial">
										<div class="inside-testimonial point-bullet-down">
											<p style="padding-bottom: 15px;"><span>Ms. Elna</span></p>
											<p style="padding-bottom: 15px;">Deputy Manager - Sokha Hotel</p>

											<p class="line-height-reading font-14 padding-0-15">Thanks to the best provided IT solution in your shop. Every time I address and receive a high level of service and professionalism!</p>
										</div>
										<div class="item-center">
											<div class="box-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/images/happy-1.svg" alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="testimonial">
									<div class="sub-testimonial">
										<div class="inside-testimonial point-bullet-down">
											<p style="padding-bottom: 15px;"><span>Mr. Hout Sokha</span></p>
											<p style="padding-bottom: 15px;">GM - AMK Microfinance PLC.</p>

											<p class="line-height-reading font-14 padding-0-15">High level of hardware and software. There are no queues and cheap prices. There are interesting complex solutions of the whole ITC. I recommed!</p>
										</div>
										<div class="item-center">
											<div class="box-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/images/happy-2.svg" alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="testimonial">
									<div class="sub-testimonial">
										<div class="inside-testimonial point-bullet-down">
											<p style="padding-bottom: 15px;"><span>Ms. Socheata</span></p>
											<p style="padding-bottom: 15px;">General Manager - Uniliver</p>

											<p class="line-height-reading font-14 padding-0-15">I want to express my deep gratitude to the service for his high professionalism. Very accurately and qualitatively performs its work. It’s not the.</p>
										</div>
										<div class="item-center">
											<div class="box-img">
												<img src="<?php bloginfo('template_url'); ?>/assets/images/happy-3.svg" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>


						</div>

				</div>
			</div> -->



			</div>
		</div>
	</div>
