<!-- main container -->
<div id="wrapper">
	 <div id="content">
		  <!-- banner home -->
		  <div class="container-fluid sub-banner padding-0">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					 <div class="item">
						  <div class="gradientb" ></div>
						  <img src="<?php _e(get_field('banner_events','option')); ?>" alt="<?php _e(get_field('title_events','option')); ?>">
						  <div class="carousel-caption">
								<div class="box-text-button">
									 <h1><?php _e(get_field('title_events','option')); ?></h1>
									 <ul class="click-home last-border">
										  <li><a href="<?php _e(bloginfo('url')); ?>">HOME</a></li>
										  <li><a href="<?php _e(get_the_permalink(14));?>">Events</a></li>
										  <li class="active"><a><?php _e(get_the_title()); ?></a></li>
									 </ul>
								</div>
						  </div>
					 </div>
				</div>
		  </div>

		  <!-- Roadshow & Launching Activities -->
		  <div class="container-fluid padding-0">
				<div class="container group-roadshow padding-50-0">

					 <div class="row">
						  <div class="col-sm-1"></div>
						  <div class="col-sm-10">
								<h2><?php _e(get_the_title()); ?></h2>
								<div class="box-underline-center">
									 <span class="underline-1px-white"></span>
								</div>

								<div class="box-img-text">
									 <div class="box-text-tilte">
										  <div class="box-text">Posted: <?php _e(get_the_date());  ?></div>
									 </div>

									 <div class="box-img-text">
										  <div class="box-img">
                                    			<?php _e(get_field('description')); ?>
										  </div>
									 </div>
								</div>

						  </div>
						  <div class="col-sm-1"></div>
					 </div>
				</div>
		  </div>
	 </div>
</div>