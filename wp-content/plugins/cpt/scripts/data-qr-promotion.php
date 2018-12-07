<?php
	global $wpdb, $post;	
	
	// make sure no duplicate record
	$wpdb->delete( 'gg3arw36b12_app_qrcode', array( 'wpid' => get_the_ID() ) );
		
	// Get value
	$youtube_link 	 = get_field('app-qr-promotion_youtube_link');
	$store_id		 = get_field('app-qr-promotion_store_name')->ID;
	$store_name		 = get_field('app-qr-promotion_store_name')->post_title;
	$description	 = get_field('app-qr-promotion_description');
	$duration		 = get_field('app-qr-promotion_duration');
	$goal			 = get_field('app-qr-promotion_goal');
	$offer			 = get_field('app-qr-promotion_offer');
	$offer_available = get_field('app-qr-promotion_offer_available');
	$day_limit		 = get_field('app-qr-promotion_limit');
	
	// Extract YouTube ID from iframe
	$pattern = '/embed\/([\w+\-+]+)[\"\?]/';	
	preg_match($pattern, $youtube_link, $matches);
		
	// Insert new record to gg3arw36b12_app_qrcode
	$wpdb->insert( 
		'gg3arw36b12_app_qrcode', 
		array( 
			'title' => $post->post_title,	
			'wpid' => $post->ID,		
			'store_id' => $store_id,
			'store_name' => $store_name,
			'description' => $description,
			'youtube_id' => $matches[1],
			'duration' => $duration,
			'goal' => $goal,
			'offer' => $offer, 
			'offer_available' => $offer_available,
			'date_modified' => $post->post_modified,  
			'day_limit' => $day_limit
		), 
		array( '%s','%d','%d','%s','%s','%s','%d','%d','%d','%d','%s','%d' ) 
	);
	
		
	$count = $wpdb->get_var( "SELECT COUNT(id) FROM gg3arw36b12_app_qrcode_gifcode WHERE qr_id = '".$post->ID."'" ); 
	if($count < $offer){
		
		for($i=1; $i<=($offer - $count); $i++){
			
			$wpdb->insert( 
				'gg3arw36b12_app_qrcode_gifcode', 
				array( 
					'store_id' => $store_id,
					'qr_id' => $post->ID,
					'gifcode' => mt_rand(10000000, 99999999),
					'status' => 0,
				), 
				array( '%d','%d','%d','%d' ) 
			);
			
		}
			
	}else{
		$limit = $count - $offer;
						
		$wpdb->query("DELETE FROM gg3arw36b12_app_qrcode_gifcode WHERE qr_id = '".$post->ID."' AND status = 0 LIMIT ".$limit);
	}
?>