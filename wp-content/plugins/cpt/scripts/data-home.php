<?php
	$filename = "home.json";
		
	// make sure no tmp file
	if (file_exists($upload_path.$filename)){
		unlink($upload_path.$filename);
	}
	
	// Get value
	$m = date('d-m-Y h:i:s');
	$uf = get_field('image_footer_home_page', 'option');
	$uf1080 = str_replace($upload_dir, '', wp_get_attachment_image_url($uf, 'app_1080x332'));
	$uf512  = str_replace($upload_dir, '', wp_get_attachment_image_url($uf, 'app_512x158'));
	$uf256  = str_replace($upload_dir, '', wp_get_attachment_image_url($uf, 'app_256x79'));
	
	
	// Put alloutput data into json format
	if( have_rows('hero_banner_home_page', 'option') ): $data = '';
		while ( have_rows('hero_banner_home_page', 'option') ) : the_row();		
				
			// Get Data
			$u = get_sub_field('image');
			$u1080 = str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_1080x525'));
			$u512  = str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_512x249'));
			$u256  = str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_256x124'));
			
			$data .= '{"img":{"1080":"'.$u1080.'","512":"'.$u512.'","256":"'.$u256.'"},"m":"'.$m.'"},';	
				
		endwhile;
	endif;
	
	// Top Deals
	$topdeals = get_field('top_deals', 'option');
	if( $topdeals ): $galleries = '';
		foreach( $topdeals as $id ):
			
			// Get Data
			$t = get_the_title($id);
			$k = preg_replace('~[\r\n]+~', '', get_field('key_features', $id));
			$r = get_field('regular_price', $id);
			$s = get_field('sale_price', $id);
			$u = get_field('thumbnail', $id);
			$u1080 = str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_1080x525'));
			$u512  = str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_512x249'));
			$u256  = str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_256x124'));
						
			// Add USD
			if($r){ $r = '$ '.$r; }
			if($s){ $s = '$ '.$s; }
			
			// Gallery
			$images = get_field('galleries', $id);
			if( $images ): $galleries = ''; $gallery = '';
				foreach( $images as $g ):
					
					$g1080 = str_replace($upload_dir, '', $g["sizes"]["app_1080x525"]);
					$g512  = str_replace($upload_dir, '', $g["sizes"]["app_512x249"]);
					$g256  = str_replace($upload_dir, '', $g["sizes"]["app_256x124"]);					
					$gallery .= '{"img":"'.$g1080.','.$g512.','.$g256.'"},';	
							
				endforeach;
				$galleries = substr($gallery,0,-1);
			endif;	
			
			// Json Data
			$product_top_deals .= '{"id":"'.$id.'","title":"'.$t.'","keyfeature":"'.$k.'","regular_price":"'.$r.'","sale_price":"'.$s.'","modify_date":"'.$m.'","thumb":"'.$u1080.','.$u512.','.$u256.'","img":['.$galleries.']},';
			
		endforeach;
		$top_deals = substr($product_top_deals,0,-1);
	endif;
	
	// Write json file
	$json = '[{"slide":['.substr($data,0,-1).']},{"topdeals":['.$top_deals.']},{"footer":{"img":{"1080":"'.$uf1080.'","512":"'.$uf512.'","256":"'.$uf256.'"},"m":"'.$m.'"}}]';		
	$file = fopen($upload_path.$filename, 'a');
	fwrite($file, $json);
	fclose($file);
?>