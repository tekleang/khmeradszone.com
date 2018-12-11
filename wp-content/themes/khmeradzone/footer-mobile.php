
		<div id="wrapper">
		<div id="footer">
			<div class="container-footer">

				<!-- Business Partners And Clients -->
				<div class="partner padding-0">
					<div class="group-partner padding-50-0" style="margin-bottom: 20px;">
						<h2>Business Partners <span>And Clients</span></h2>

						 <div class="text-align-center">
								<div class="slick-partner">
                            <?php
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $args  = array (
                                'post_type' => 'flex-clients',
                                'posts_per_page' => -1,
                                'paged' => $paged,
                            );
                            query_posts($args);
                            if(have_posts()) :
										  $cc=0;$item ='';$itemPerRow = 12;
                            while (have_posts()) : the_post();
										  $cc += 1;
										  if($cc == 1) $item .= '<div class="item-center"><div>';
												$item .= '<div class="sub-box-client">
													 <div class="client item-center">
														 <a href="'.get_field('url').'"> <img src="'.get_field('logo').'"></a>
													 </div>
												 </div>';

										 	if($cc == $itemPerRow) { $item .= '</div></div>'; $cc = 0; };
                            	endwhile;
                                echo $item;
                                wp_reset_query();
                            endif;
                            ?>

								</div>
						</div>

					</div>
				</div>

				<!-- footer -->
				<div class="footer padding-0">
					<div class="group-footer padding-50-0">
						<div class="item-center">
							<div class="box-img" style="margin-top: -15px;">
								<a href="<?php echo bloginfo('url'); ?>">
									 <img src="<?php _e(get_field('logo_desktop','option')); ?>">
								</a>
							</div>
						</div>

						<div>
							<div class="box-detail-top">
								
								<div style="padding: 15px;">
									<ul>

										<li>
											<a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62543.62362152224!2d104.8500976!3d11.553544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951aedf6e995f%3A0xe93941b220488c7e!2sKhmer+Ads+Zone!5e0!3m2!1sen!2skh!4v1539793044476" target="_blank">
												<div class="box-icon">
													<img src="<?php bloginfo('template_url'); ?>/assets/images/icon/KhmerAdsZone-Contact-Address.svg" alt="">
												</div>
												<div class="box-detail">
													<p class="text-align-left font-14"><?php _e(get_field('address_contact','option')); ?></p>
												</div>
											</a>
											
										</li>
										<li>
											<div class="box-icon">
												<img src="<?php bloginfo('template_url'); ?>/assets/images/icon/KhmerAdsZone-Contact-Phone.svg" alt="">
											</div>
											<div class="box-detail">
												<p>Phone:<a href="tel:<?php _e(get_field('phone_number_contact','option')); ?>"><?php _e(get_field('phone_number_contact','option')); ?> </p></a>
												<a ><p><a href="tel:<?php _e(get_field('phone_number_contact_1','option')); ?>"><?php _e(get_field('phone_number_contact_1','option')); ?></a></p></a>
											</div>
										</li>
										<li>
											<div class="box-icon">
												<img src="<?php bloginfo('template_url'); ?>/assets/images/icon/KhmerAdsZone-Contact-Email.svg" alt="">
											</div>
											<div class="box-detail">
												<p> E-mail:<a href="mailto:<?php _e(get_field('email','option')); ?>" title=""><?php _e(get_field('email_contact','option')); ?></a></p>

												<a href="<?php _e(get_field('website','option')); ?>"><p><?php _e(get_field('website_contact','option')); ?></p></a>
												<a href="<?php _e(get_field('facebook_link_contact','option')); ?>" target="_blank"><?php _e(get_field('facebook_name_contact','option')); ?></a>
											</div>
										</li>
									</ul>
								</div>

							</div>

						</div>


						<div class="dev-by">
								<p>Adkhmerzone © 2018 All Rights Reserved.</p>
								<p><a href="http://tomnerbtech.com/" target="_blank">Developed by: tomnerbTech</a></p>
						</div>

					</div>
				</div>
			</div>
			

		</div>
	</div>

	 <?php wp_footer(); ?> 
</body>
</html>
