<?php
/*
 *	Template Name: faqs
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
									 <img src="<?php _e(get_field('banner_faqs','option')); ?>" alt="<?php _e(get_field('title_faqs','option')); ?>">
								</div>
								<div class="box-text">
									 <h1><?php _e(get_field('title_faqs','option')); ?></h1>
									 <ul>
										  <li><a href="<?php echo bloginfo('url');?>">Home</a></li>
										  <li class="active"><a href="FAQs.php"><?php echo get_template_name();?></a></li>
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
									 <img src="<?php bloginfo('template_url'); ?>/assets/asset/pic/KhmerAdsZone-Contact-Email80x80.svg">
									 <div class="box-text">
										  <p><?php _e(get_field('email_contact','option')); ?></p>
										  <p><?php _e(get_field('website_contact','option')); ?></p>
									 </div>

								</div>
						  </div>
					 </div>
				</div>


				<!-- Frequently Asked Questions -->
				<div class="faq padding-0">
					 <div class="group-faq padding-50-0" style="padding-bottom: -30px;">
						  <h2>Frequently Asked<span> Questions</span></h2>
						  <p style="padding-left: 30px;padding-right: 30px;"><?php _e(get_field('description_faqs','option')); ?></p>


						  <div style="margin-top: 30px;">

						  	<?php
			                   $paged = get_query_var('paged') ? get_query_var('paged') : 1;
			                   $args  = array (
			                       'post_type' => 'flex-faqs',
			                       'posts_per_page' => -1,
			                       'paged' => $paged,
			                   );
			                   query_posts($args);
			                   if(have_posts()) :
			                   while (have_posts()) : the_post(); ?>

										 <div data-parent="boxStyle" class="box-text">
											 <div class="question" data-clickshow="dropdown" data-sign="+,-">
												 <?php _e(get_the_title()); ?>
											 </div>
											 <div class="answer" data-boxcontent="slideToggle">
												 <P><?php _e(get_field('description')); ?></P>
											 </div>
										 </div>

						  <?php
						  endwhile;
						  wp_reset_query();
						  endif;
						  ?>

								<div class="question" class="box-text"></div>
						  </div>

					 </div>
				</div>
		  </div>


	 </div>
</div>