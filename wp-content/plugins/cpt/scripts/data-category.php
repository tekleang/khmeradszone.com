<?php
	$filename = "category.json";
		
	// make sure no tmp file
	if (file_exists($upload_path.$filename)){
		unlink($upload_path.$filename);
	}
	
	add_shortcode( 'gcate', 'gcate_shortcode' );
	function gcate_shortcode($atts) {
		extract( shortcode_atts( array( 'id' => '', 'repeat' => '' ), $atts ) );
		
		// Get parrent data from given id
		$post = get_post($id);
		$slug = wp_basename($post->post_name); 
		
		if( have_rows($repeat, 'option') ):
			while ( have_rows($repeat, 'option') ) : the_row();
				
				if( have_rows('p-'.$slug) ): $list = '';
					while ( have_rows('p-'.$slug) ) : the_row();
					
						if (strpos(get_the_title(get_sub_field('page')), 'All') !== false){
							$sc .= '{"id":"-1","title":"'.get_the_title(get_sub_field('page')).'"},';
						}else{
							$sc .= '{"id":"'.get_sub_field('page').'","title":"'.get_the_title(get_sub_field('page')).'"},';
						}
						
					endwhile;
					$list .= '{"id":"'.$id.'","n":"'.$post->post_title.'","sc":['.substr($sc,0,-1).']}';
				endif;	
			endwhile;
		endif;	
		
		return $list;
	}
	
	// Get value
	$m = date('d-m-Y h:i:s');
	$uploads 	= wp_upload_dir();
	$upload_dir = $uploads['baseurl'];
	
	/* TV/Audio/Video
	   ========================================================================== */
	$u0		 = get_field('category_thumbnail_app_product_categories_tv-audio-video', 'option');
	$u01080	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u0, 'app_1080x888'));
	$u0512 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u0, 'app_512x421'));
	$u0256 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u0, 'app_256x210'));   
	$d[0][0] = do_shortcode('[gcate id="46" repeat="tv-audio-video"]');
	$d[0][1] = do_shortcode('[gcate id="48" repeat="tv-audio-video"]');
	$d[0][2] = do_shortcode('[gcate id="50" repeat="tv-audio-video"]');
	$d[0][3] = do_shortcode('[gcate id="52" repeat="tv-audio-video"]');	
	$data[0] = '{"id":"20","t":"TV/Audio/Video","u":"'.$u01080.','.$u0512.','.$u0256.'","m":"'.$m.'","c":['.$d[0][0].','.$d[0][1].','.$d[0][2].','.$d[0][3].']}';
	
	/* Mobile
	   ========================================================================== */
	$u1		 = get_field('category_thumbnail_app_product_categories_mobiles', 'option');
	$u11080	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u1, 'app_1080x888'));
	$u1512 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u1, 'app_512x421'));
	$u1256 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u1, 'app_256x210'));     
	$d[1][0] = do_shortcode('[gcate id="113" repeat="mobiles"]');
	$d[1][1] = do_shortcode('[gcate id="115" repeat="mobiles"]');
	$data[1] = '{"id":"22","t":"Mobiles","u":"'.$u11080.','.$u1512.','.$u1256.'","m":"'.$m.'","c":['.$d[1][0].','.$d[1][1].']}';
	
	/* Appliances
	   ========================================================================== */
	$u2		 = get_field('category_thumbnail_app_product_categories_appliances', 'option');
	$u21080	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u2, 'app_1080x888'));
	$u2512 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u2, 'app_512x421'));
	$u2256 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u2, 'app_256x210'));  
	$d[2][0] = do_shortcode('[gcate id="151" repeat="appliances"]');
	$d[2][1] = do_shortcode('[gcate id="153" repeat="appliances"]');
	$d[2][2] = do_shortcode('[gcate id="155" repeat="appliances"]');
	$d[2][3] = do_shortcode('[gcate id="157" repeat="appliances"]');
	$data[2] = '{"id":"24","t":"Appliances","u":"'.$u21080.','.$u2512.','.$u2256.'","m":"'.$m.'","c":['.$d[2][0].','.$d[2][1].','.$d[2][2].','.$d[2][3].']}';
	
	/* Air Conditioner
	   ========================================================================== */
	$u3	 = get_field('category_thumbnail_app_product_categories_air-conditioners', 'option');
	$u31080	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u3, 'app_1080x888'));
	$u3512 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u3, 'app_512x421'));
	$u3256 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u3, 'app_256x210'));  
	$d[3][0] = do_shortcode('[gcate id="197" repeat="air-conditioners"]');
	$data[3] = '{"id":"26","t":"Air Conditioner","u":"'.$u31080.','.$u3512.','.$u3256.'","m":"'.$m.'","c":['.$d[3][0].']}';
	
	/* Power Tools/LED Lighting
	   ========================================================================== */
	$u4		 = get_field('category_thumbnail_app_product_categories_power-toolsled-lighting', 'option');
	$u41080  = str_replace($upload_dir, '', wp_get_attachment_image_url($u4, 'app_1080x888'));
	$u4512 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u4, 'app_512x421'));
	$u4256 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u4, 'app_256x210'));    
	$d[4][0] = do_shortcode('[gcate id="222" repeat="power-toolsled-lighting"]');
	$d[4][1] = do_shortcode('[gcate id="224" repeat="power-toolsled-lighting"]');
	$d[4][2] = do_shortcode('[gcate id="226" repeat="power-toolsled-lighting"]');
	$data[4] = '{"id":"28","t":"Power Tools/LED Lighting","u":"'.$u41080.','.$u4512.','.$u4256.'","m":"'.$m.'","c":['.$d[4][0].','.$d[4][1].','.$d[4][2].']}';
	
	/* B2B
	   ========================================================================== */
	$u5		 = get_field('category_thumbnail_app_product_categories_b2b', 'option');
	$u51080  = str_replace($upload_dir, '', wp_get_attachment_image_url($u5, 'app_1080x888'));
	$u5512 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u5, 'app_512x421'));
	$u5256 	 = str_replace($upload_dir, '', wp_get_attachment_image_url($u5, 'app_256x210'));   
	$d[5][0] = do_shortcode('[gcate id="275" repeat="b2b"]');
	$d[5][1] = do_shortcode('[gcate id="277" repeat="b2b"]');
	$d[5][2] = do_shortcode('[gcate id="281" repeat="b2b"]');
	$d[5][3] = do_shortcode('[gcate id="279" repeat="b2b"]');
	$data[5] = '{"id":"30","t":"B2B","u":"'.$u51080.','.$u5512.','.$u5256.'","m":"'.$m.'","c":['.$d[5][0].','.$d[5][1].','.$d[5][2].','.$d[5][3].']}';
	
	
	// Write json file	
	$json = '['.$data[0].','.$data[1].','.$data[2].','.$data[3].','.$data[4].','.$data[5].']';
	
	
	$file = fopen($upload_path.$filename, 'a');
	fwrite($file, $json);
	fclose($file);
?>