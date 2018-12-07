<?php
/*
 *	Template Name: contact
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
									 <img src="<?php _e(get_field('banner_contact','option')); ?>">
								</div>
								<div class="box-text">
									 <h1><?php _e(get_field('title_contact','option')); ?></h1>
									 <ul>
										  <li><a href="<?php echo bloginfo('url');?>">Home</a></li>
										  <li class="active"><a href="<?php echo get_template_name();?>">Contact</a></li>
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

				<!-- Contact Form -->
				<div class="form padding-0">
					 <div class="group-form padding-50-0">
						  <h2>Contact <span>Form</span></h2>
						  <p style="padding: 5px 30px 10px 30px;text-align: center;"><?php _e(get_field('description_contact_form','option')); ?></p>

						  <div class="box-form" style="">
								<form class="form-inline" style="" align="center">
									 <div class="box-input" style="">
										  <input type="Name" class="form-control media-width" id="name" placeholder="Name*" style="">
									 </div>
								</form>
						  </div>

						  <div class="box-form">
								<form class="form-inline" align="center">
									 <div class="box-input">
										  <input type="email" class="form-control media-width" id="email" placeholder="Email*" >
									 </div>
								</form>
						  </div>

						  <div class="box-form">
								<form class="form-inline" align="center">
									 <div class="box-input">
										  <input type="Phone" class="form-control media-width" id="Phone" placeholder="Phone*">
									 </div>
								</form>
						  </div>

						  <div class="box-form">
								<form class="form-inline" align="center">
									 <div class="box-input">
										  <textarea class="form-control" placeholder="Message*"></textarea>
									 </div>
								</form>
						  </div>

						  <style type="text/css">

						  </style>
						  <div class="button" style="">
								<button>Submit</button>
						  </div>
					 </div>
				</div>
		  </div>


	 </div>
</div>