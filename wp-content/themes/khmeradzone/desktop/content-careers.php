<?php
/*
 *	Template Name: Careers
 */
?>
 <div id="wrapper">
	<div id="content">
		
		<!-- banner home -->
			<div class="container-fluid sub-banner">
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">			   
			    	<div class="item">
			    	<div class="gradientb" ></div>
			        <img src="<?php _e(get_field('banner_careers','option')); ?>" alt="<?php _e(get_field('title_careers','option')); ?>">
			          <div class="carousel-caption">
			          	<div class="box-text-button">
			          		<h1><?php _e(get_field('title_careers','option')); ?></h1>
			          		<ul class="click-home">
			          			<li><a href="<?php echo bloginfo('url');?>">HOME</a></li>
			          			<li class="active"><a href="">CAREERS</a></li>
			          		</ul>
			          	</div>			          	
			          </div>
			        </div>
			    </div>
			</div>

			<!-- address -->
			<div class="container-fluid address text-center">
				<div class="container group-address">
					<div class="row">
						<div class="col-sm-4">
							<div class="padd1">
								<div class="box-icon-img">
									<img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Contact-Address-80x80.svg">			
								</div>
								<p><?php _e(get_field('address_contact','option')); ?></p>
							</div>							
						</div> 

						<div class="col-sm-4">
							<div class="padd2">
								<div class="box-icon-img">
									<img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Contact-Phone80x80.svg">			
								</div>
								 <p><?php _e(get_field('phone_number_contact','option')); ?> <br><?php _e(get_field('phone_number_contact_1','option')); ?></p>
							</div>							
						</div>

						<div class="col-sm-4">
							<div class="padd3 contact-list">
								<div class="box-icon-img">
									<img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Contact-Email80x80.svg">			
								</div>
								 <p><a href="mailto:<?php _e(get_field('email_contact','option')); ?>"><?php _e(get_field('email_contact','option')); ?></a>
									  <br><a href="<?php _e(get_field('website_contact','option')); ?>"><?php _e(get_field('website_contact','option')); ?></a></p>
							</div>							
						</div>

					</div>
				</div>
			</div>

			<!-- Sale Manager -->
			<div class="container-fluid text-center sale">

             <?php
             $paged = get_query_var('paged') ? get_query_var('paged') : 1;
             $args  = array (
                 'post_type' => 'flex-careers',
                 'posts_per_page' => -1,
                 'paged' => $paged,
             );
             query_posts($args);
             if(have_posts()) :
             while (have_posts()) : the_post(); ?>

				<div class="container group-sale media-tab-padd-text">
					<h2><span style="color: #FAAD1D;"><?php _e(get_the_title()); ?></span></h2>
					
					<div class="row text-left">
						<div class="col-sm-4 media-sale-manager career">
							<h2>Career Title</h2>
							<ul style="">
								<li>
									<div style="" class="col-sm-6 text-left">Location</div>
									<div style="" class="col-sm-6 text-right">: <?php _e(get_field('location')); ?></div>
								</li>

								<li>
									<div class="col-sm-6 text-left">Type of Employment</div>
									<div class="col-sm-6 text-right">: <?php _e(get_field('type_of_employment')); ?></div>
								</li>

								<li>
									<div class="col-sm-6 text-left">Published Date</div>
									<div class="col-sm-6 text-right">:
                               <?php
                               $dateformatstring = "M d, Y";
                               $unixtimestamp = strtotime(get_field('published_date'));
                               echo date_i18n($dateformatstring, $unixtimestamp);
                               ?>
									</div>
								</li>

								<li>
									<div class="col-sm-6 text-left">Close Date</div>
									<div class="col-sm-6 text-right">:
                               <?php
                               $dateformatstring = "M d, Y";
                               $unixtimestamp = strtotime(get_field('close_date'));
                               echo date_i18n($dateformatstring, $unixtimestamp);
                               ?>
									</div>
								</li>

								<li>
									<div class="col-sm-6 text-left">Hiring</div>
									<div class="col-sm-6 text-right">: <?php _e(get_field('hiring')); ?></div>
								</li>
							</ul>
						</div>

						<div class="col-sm-8 media-sale-manager job">
							<h2>Job Description</h2>
							<p><?php _e(get_field('job_description')); ?></p>
						</div>
					</div>

					<div class="row text-left">
						<div class="col-sm-4 media-sale-manager information">
							<h2>Contact Information</h2>
							<ul style="">
								<li style="">
									<div class="text-left" style="">Contact Person</div>
									<div class="text-right" style="">: <?php _e(get_field('contact_person')); ?></div>
								</li>

								<li>
									<div class="text-left">Phone</div>
									<div class="text-right">: <?php _e(get_field('phone')); ?></div>
								</li>

								<li>
									<div class="text-left">E-mail</div>
									<div class="text-right">: <?php _e(get_field('e-mail')); ?></div>
								</li>

								<li>
									<div class="text-left">Website</div>
									<div class="text-right">: <?php _e(get_field('website')); ?></div>
								</li>

								<li>
									<div class="text-left">Address</div>
									<div class="text-right">: <?php _e(get_field('address')); ?></div>
								</li>
							</ul>
						</div>

						<div class="col-sm-8 media-sale-manager responsibility">
							<h2>Job Responsibility</h2>
                      <?php _e(get_field('job_responsibility')); ?>
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