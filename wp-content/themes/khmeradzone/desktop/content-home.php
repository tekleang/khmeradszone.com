<?php
/*
 *	Template Name: Home
 */
?>
 <div id="wrapper">
	<div id="content">
		
		<!-- banner home -->
			<div class="container-fluid banner-home">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
                 <?php
                 if( have_rows('hero_banner', 'option') ):
                     $count = 0; $count1=0;
                     while ( have_rows('hero_banner', 'option') ) : the_row();
                         $num_row=$count++;
                         ?>
								 <li data-target="#myCarousel" data-slide-to="<?php echo $count1; ?>" class="<?php if($num_row == 0){echo 'active';}?>"></li>
                         <?php
                         $count1++;
                     endwhile;
                 endif;
                 ?>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner meida-banner-home">
                 <?php
                 if( have_rows('hero_banner', 'option') ):
                 $count = 0;
                 while ( have_rows('hero_banner', 'option') ) : the_row();
                 $num_row=$count++;
                 ?>
			      <div class="item  <?php if($num_row == 0){echo 'active';}?>">
			      	<div class="gradientb" ></div>
		      		  <img data-imgzoom data-sarallax src="<?php _e(get_sub_field('banner')); ?>" alt="<?php _e(get_sub_field('title')); ?>" style="width: 100%;">
			          <div class="carousel-caption">
			              	<div class="box-text-button media-text-banner-home">
			          		<h1><?php _e(get_sub_field('title')); ?></h1>
			          		<div class="button">
			          			<a href="<?php _e(get_permalink(8)); ?>"><button>ABOUT</button></a>
			          			<a href="<?php _e(get_permalink(10)); ?>"><button>SERVICES</button></a>
			          		</div>
			          	</div>			          	
			          </div>			        
			      </div>
                     <?php
                 endwhile;
                 endif;
                 ?>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
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

			<!-- Our Successfull Real Facts -->
			<div class="container-fluid fact" id="counter">
				<div class="row">
					<div class="col-sm-6 box-img-text-left" style="">
						<div class="box-img" style="">
							<div class="gradient"></div>
							<img src="<?php _e(get_field('thumbnail_facts','option')); ?>" style="">
						</div>
						
					</div>
				</div>
				
				<div class="container group-fact text-left boximg-text-right" id="counter">
					<div class="row">
						<div class="col-sm-6"></div>
						<div class="col-sm-6 text-left box-group-fact-right meida-box-group-fact-right">
							<div class="icon-text">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
								<h2><span>Our Successfull</span> <span style="color: #FAAD1D;">Real Facts</span></h2>												
								<p><?php _e(get_field('short_description_facts','option')); ?></p>
							</div>
							<div class="box-img-text">

								<?php
								if( have_rows('real_facts', 'option') ):
								while ( have_rows('real_facts', 'option') ) : the_row();
								?>
									 <div class="col-sm-4">
										 <div>
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
							<h3 style="color: #FAAD1D;">LOOKING FOR SOMETHING VERY SPECIAL?</h3>
							<p style="padding: 15px 0;">Plan Your Budget And Let’s Get Started!</p>
							<div class="button">
								<a href="<?php _e(get_permalink(16)) ?>"><button>CONTACT US</button></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<!-- Client’s Testimonail -->
			<!-- <div class="container-fluid client text-center">
				<div class="container group-client">
					<div class="icon-text">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
						<h2><span>Client’s</span> <span style="color: #FAAD1D;">Testimonail</span></h2>
					</div>

					<div class="slick-client">

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
                       if($cc == 1) $item .= '<div class="row">';
                       $item .= '<div class="col-sm-4">
									 <div class="group-text-happy tooltip-name media-box-client" style="width: 100%;">
										 <h3 style="color: #FAAD1D !important;">'.get_the_title().'</h3>
										 <h3 style="margin-top: -30px;">'.get_field('position').'</h3>
										 <p class="media-client-p" style="padding: 30px 70px;color: #231F20 !important;">'.get_field('short_description').'</p>
									 </div>
									 <div class="circle-img">
										 <img src="'.get_field('profile').'" class="img-circle">
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
			</div> -->

			<!-- Business Partners And Clients -->
			<div class="container-fluid partner text-center">
				<div class="container group-partner">
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
                       $item ='';
                       $itemPerRow = 12;
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


	</div> <!-- .content -->
</div> <!-- .wrapper -->