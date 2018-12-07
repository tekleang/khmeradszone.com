<?php
/*
 *	Template Name: Contact
 */
?>
 <div id="wrapper">
	<div id="content">

		<!-- banner home -->
			<div class="container-fluid sub-banner">
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">			   
			    	<div class="item">
			    	<div class="gradientb" ></div>
			        <img src="<?php _e(get_field('banner_contact','option')); ?>" alt="<?php _e(get_field('title_contact','option')); ?>">
			          <div class="carousel-caption">
			          	<div class="box-text-button">
			          		<h1><?php _e(get_field('title_contact','option')); ?></h1>
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

			<!-- Contact Form -->
			<div class="container-fluid form text-center">
				<div class="container group-form">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
					<h2><span>Contact</span> <span style="color: #FAAD1D;">Form</span></h2>
					<p class="media-form-paddd-p"> <?php _e(get_field('description_contact_form','option')); ?></p>
					<div class="row">

						<div class="col-sm-4">
							<form class="form-inline">
							    <div class="box-input" style="">
							      <input type="Name" class="form-control media-width" id="name" placeholder="Name*">	
							    </div>					      
							</form>
						</div>

						<div class="col-sm-4">
							<form class="form-inline">
							    <div class="box-input">
							      <input type="email" class="form-control" id="email" placeholder="Email*">	
							    </div>					      
							</form>
						</div>

						<div class="col-sm-4">
							<form class="form-inline">
							    <div class="box-input">
							      <input type="Phone" class="form-control" id="email" placeholder="Phone*">	
							    </div>					      
							</form>
						</div>

						<div class="col-sm-12">
    						<form class="form-inline">
							     <textarea class="form-control" placeholder="Message*"></textarea>				      
							</form>
    					</div>

    					<div class="col-sm-12">
							<button>Submit</button>
						</div>
					</div>
				</div>
			</div>

	</div>
</div>