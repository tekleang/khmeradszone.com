<?php
	$filename = "delivery.json";
		
	// make sure no tmp file
	if (file_exists($upload_path.$filename)){
		unlink($upload_path.$filename);
	}
	
	// Get value
	$m = date('d-m-Y h:i:s');
	$u = get_field('app_delivery_information_image', 'option');
	$u1080 = str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_1080x332'));
	$u512  = str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_512x158'));
	$u256  = str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_256x79'));
	
	// Put alloutput data into json format
	if( have_rows('app_delivery_information_step', 'option') ):
		while ( have_rows('app_delivery_information_step', 'option') ) : the_row();				
			$data .= '{"t":"'.get_sub_field('title').'","d":"'.preg_replace('~[\r\n]+~', '', get_sub_field('description')).'"},';		
		endwhile;
	endif;
	
	// Write json file
	$json = '[{"u":{"1080":"'.$u1080.'","512":"'.$u512.'","256":"'.$u256.'"},"m":"'.$m.'","s":['.substr($data,0,-1).']}]';	
	$file = fopen($upload_path.$filename, 'a');
	fwrite($file, $json);
	fclose($file);
?>