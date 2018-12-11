<?php
/*
 *	Template Name: Careers
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
									 <img src="<?php _e(get_field('banner_careers','option')); ?>" alt="<?php _e(get_field('title_careers','option')); ?>">
								</div>
								<div class="box-text">
									 <h1><?php _e(get_field('title_careers','option')); ?></h1>
									 <ul>
										  <li><a href="<?php echo bloginfo('url');?>">Home</a></li>
										  <li class="active"><a href="">Careers</a></li>
									 </ul>
								</div>
						  </div>
					 </div>
				</div>

				<!-- address -->
				<div class="address padding-0">
					 <div class="group-address padding-0">
						  <div class="box-img-text1" style="">
								<div class="box-img" style="" align="center">
									 <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/KhmerAdsZone-Contact-Address-80x80.svg">
									 <div class="box-text" style="">
										  <p><?php _e(get_field('address_contact','option')); ?></p>
									 </div>
								</div>
						  </div>

						  <div class="box-img-text2" style="">
								<div class="box-img" align="center">
									 <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/KhmerAdsZone-Contact-Phone80x80.svg">
									 <div class="box-text">
										  <p><?php _e(get_field('phone_number_contact','option')); ?></p>
										  <p><?php _e(get_field('phone_number_contact_1','option')); ?></p>
									 </div>

								</div>
						  </div>

						  <div class="box-img-text3">
								<div class="box-img" align="center">
									 <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/KhmerAdsZone-Contact-Email80x80.svg">
									 <div class="box-text">
										  <p><?php _e(get_field('email_contact','option')); ?></p>
										  <p><?php _e(get_field('website_contact','option')); ?></p>
									 </div>

								</div>
						  </div>
					 </div>
				</div>

				<!-- Sale Manager -->
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

					<div class="mycareer">
						<div class="sale padding-0">
							<div class="group-sale">
								  <h2><span><?php _e(get_the_title()); ?></span></h2>

									  <div class="box">
											<div class="group-box">
												 <h3>Career Title</h3>

												 <ul class="box-text">
													<li>
														<div class="text-1">Location</div>
														<div class="text-3">: <?php _e(get_field('location')); ?></div>
													</li>

													<li>
														<div class="text-1">Type of Employment</div>
														<div class="text-3">: <?php _e(get_field('type_of_employment')); ?></div>
													</li>

													<li>
														<div class="text-1">Published Date</div>
														<div class="text-3">: <?php
                                              $dateformatstring = "M d, Y";
                                              $unixtimestamp = strtotime(get_field('published_date'));
                                              echo date_i18n($dateformatstring, $unixtimestamp);
                                              ?></div>
													</li>

													<li>
														<div class="text-1">Close Date</div>
														<div class="text-3">: <?php
                                              $dateformatstring = "M d, Y";
                                              $unixtimestamp = strtotime(get_field('close_date'));
                                              echo date_i18n($dateformatstring, $unixtimestamp);
                                              ?></div>
													</li>

													<li>
														<div class="text-1">Hiring</div>
														<div class="text-3">: <?php _e(get_field('hiring')); ?></div>
													</li>
												</ul>

											</div>
									  </div>

									  <div class="box">
											<div class="group-box">
												 <h3>Job Description</h3>
												 <p style="margin-right: 15%;"><?php _e(get_field('job_description')); ?></p>
											</div>
									  </div>

								  
								  	<!-- Contact Information -->
									  <div class="box">
											<div class="group-box">
												 <h3>Contact Information</h3>
												 <ul class="box-text">
													<li>
														<div class="text-1">Contact Person</div>
														<div class="text-3">: <?php _e(get_field('contact_person')); ?></div>
													</li>

													<li>
														<div class="text-1">Phone</div>
														<div class="text-3">: <?php _e(get_field('phone')); ?></div>
													</li>

													<li>
														<div class="text-1">E-mail</div>
														<div class="text-3">: <?php _e(get_field('e-mail')); ?></div>
													</li>

													<li>
														<div class="text-1">Website</div>
														<div class="text-3">: <?php _e(get_field('website')); ?></div>
													</li>

													<li>
														<div class="text-1">Address</div>
														<div class="text-3">: <?php _e(get_field('address')); ?></div>
													</li>
												</ul>
											</div>
									  </div>

									  <!-- Job Responsibility -->
									  <div class="box responsibility">
											<div class="group-box">
												 <h3>Job Responsibility</h3>

                                     <?php _e(get_field('job_responsibility')); ?>

											</div>
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