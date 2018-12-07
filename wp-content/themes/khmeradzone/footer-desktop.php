
	<div id="wrapper">
		<div id="footer">

			<div class="container-fluid map text-center">
				<div class="box-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31273.138541266064!2d104.885461!3d11.541647!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe93941b220488c7e!2sKhmer+Ads+Zone!5e0!3m2!1sen!2skh!4v1539930711925" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

			<div class="container-fluid padding-0 footer-buttom text-left" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/Khmer-AdsZone-Banner-07.jpg');background-size: cover;background-repeat: no-repeat;">
				<div class="container padding-50-0 group-footer-buttom">
					<div class="row">

						<div class="col-sm-12 text-center box-media-tablate ">
							<div class="media-quick-post-hide-tab">
								<ul>
                            <?php
                            if( have_rows('social_natwork', 'option') ):
                                while ( have_rows('social_natwork', 'option') ) : the_row();
                                    ?>
												<li>
													 <a href="<?php _e(get_sub_field('link')); ?>" target="_blank">
														  <img src="<?php _e(get_sub_field('icon')); ?>">
													 </a>
												</li>
                                    <?php
                                endwhile;
                            endif;
                            ?>
								</ul>
							</div>
						</div>


						<div class="col-sm-4 meida-about about-post">
							<div class="icon-text" style="">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg" style="">
								<h3><span>About</span> <span style="color: #FAAD1D;">Posts</span></h3>
							</div>
							<p class="media-footer-text-p"><?php _e(get_field('description_header','option')); ?></p>

							<ul class="media-footer-about-ul">
								<li>
									<div class="laste1-left"><img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Contact-Address.svg"></div>
									<div class="laste1-right"><?php _e(get_field('address_contact','option')); ?></div>
								</li>

								<li>
									<div class="laste1-left"><img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Contact-Phone.svg"></div>
									<div class="laste1-right"><?php _e(get_field('phone_number_contact','option')); ?> <br>
										<div class="media-footer-tel" style="margin-left: 60px;"><?php _e(get_field('phone_number_contact_1','option')); ?></div>
									</div>
								</li>

								<li>
									<div class="laste1-left"><img src="<?php bloginfo('template_url'); ?>/assets/images/KhmerAdsZone-Contact-Email.svg"></div>
									<div class="laste1-right">
										 <a href="mailto:<?php _e(get_field('email_contact','option')); ?>"><?php _e(get_field('email_contact','option')); ?></a>
										 <a href="<?php _e(get_field('website_contact','option')); ?>"><?php _e(get_field('website_contact','option')); ?></a> 
										 <a href="<?php _e(get_field('facebook_link_contact','option')); ?>" target="_blank"><?php _e(get_field('facebook_name_contact','option')); ?></a>
									</div>

								</li>
							</ul>
						</div>

						<div class="col-sm-4 media-quick media-quick-post-footer quick-post">
							<!-- <div class="media-quick-post-footer"> -->
							<div class="box-icon-text media-quick-post-footer">
								<div class="icon-text">
									<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
									<h3 style=""><span>Quick</span> <span style="color: #FAAD1D;">Posts</span></h3>
								</div>
							</div>
							<div class="footer-social-icon media-footer-socil-icon">
								<ul>
                            <?php
										  if( have_rows('social_natwork', 'option') ):
											 while ( have_rows('social_natwork', 'option') ) : the_row();
												 ?>
													<li>
														 <a href="<?php _e(get_sub_field('link')); ?>">
															  <img src="<?php _e(get_sub_field('icon')); ?>">
														 </a>
													</li>
												<?php
											 endwhile;
										  endif;
                            ?>
								</ul>
							</div>
							<div class="box-menu media-box-menu media-quick-post-footer box-ul" style="">
								<?php wp_nav_menu( array('theme_location' => 'menuFooter' ) ); ?>
						    </div>
						</div>
						
						<div class="col-sm-4 media-last-post-footer meida-about latest-post">
							<div class="icon-text">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/Eagle.svg">
								<h3 style=""><span>Latest</span> <span style="color: #FAAD1D;">Posts</span></h3>
							</div>
							<div class="slick-client">
                         <?php
                         $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                         $args  = array (
                             'post_type' => 'flex-events',
                             'posts_per_page' => 4,
                             'paged' => $paged,
                         );
                         query_posts($args);
                         if(have_posts()) :
                         while (have_posts()) : the_post(); ?>

									  <div class="row">
										 <div class="box-img-slide"><a href="<?php echo get_permalink();?>">
											 <img src="<?php _e(get_field('thumbnail'));?>"></a>
											 <p><?php _e(get_the_title());?></p>
										 </div>
									 </div>

								<?php
								endwhile;
								wp_reset_query();
								endif;
								?>

							</div>
						</div>

						<div class="col-sm-12 media-footer-row dev-by">
							<div class="col-sm-6">© 2018. All rights reserved. Khmer AdsZone</div>
							<div class="col-sm-6 text-right"><a href="http://tomnerbtech.com/" target="_blank">Developed by: tomnerbTech</a></div>
						</div>

					</div>
				</div>
			</div>

		</div> <!-- .footer -->
	</div> <!-- .wrapper -->
	 
	 <?php wp_footer(); ?> 
</body>
</html>
