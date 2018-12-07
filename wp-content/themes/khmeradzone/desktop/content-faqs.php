<?php
/*
 *	Template Name: FAQs
 */
?>
 <div id="wrapper">
	<div id="content">

		<!-- banner home -->
			<div class="container-fluid sub-banner">
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">			   
			    	<div class="item">
			    	<div class="gradientb" ></div>
			        <img src="<?php _e(get_field('banner_faqs','option')); ?>" alt="<?php _e(get_field('title_faqs','option')); ?>">
			          <div class="carousel-caption">
			          	<div class="box-text-button">
			          		<h1><?php _e(get_field('title_faqs','option')); ?></h1>
			          		<ul class="click-home">
			          			<li><a href="<?php echo bloginfo('url');?>">HOME</a></li>
			          			<li class="active"><a href=""><?php echo get_template_name();?></a></li>
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

			<!-- Frequently Asked Questions -->
			<div class="container-fluid faq text-center">
				<div class="container group-faq">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
					<h2><span>Frequently Asked</span> <span style="color: #FAAD1D;">Questions</span>
					<p style="padding: 30px 15%;"><?php _e(get_field('description_faqs','option')); ?></p>
					<div class="row">
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

							 <div data-parent="boxStyle">
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





						<div class="question"></div>
    				</div>
				</div>
			</div>
			
	</div>
</div>