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
							<img src="<?php _e(get_field('banner_portfolios','option')); ?>" alt="<?php _e(get_field('title_portfolios','option')); ?>">
						</div>
						<div class="box-text last-child">
							<h1><?php _e(get_field('title_portfolios','option')); ?></h1>
							<ul>
								<li><a href="<?php echo bloginfo('url');?>">Home</a></li>
								<li><a href="<?php _e(get_permalink(12)); ?>">PORTFLIOS</a></li>
								<li class="active"><a><?php _e(shortenText(get_the_title(),20)); ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Grand Opening Prime One Real Estate Cambodia, Hong Kong, and China -->
			<div class="grand padding-0">
				<div class="group-grand padding-50-0">
					<h2><?php _e(get_the_title()); ?></h2>
					<div class="box-underline-center">
					    <span class="underline-1px-white"></span>
					</div>

					<div class="box-text-img-post">
						<div class="box-text-post" align="center">
							<p>Posted: <?php _e(get_the_date());  ?></p>
							<img src="<?php _e(get_field('thumbnail')); ?>">
						</div>
						<div class="box-text">
							<?php _e(get_field('description')); ?>
						</div>
					</div>

					
					
				</div>
			</div>
		</div>
		

	</div>
</div>

