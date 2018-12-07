<?php
	global $wpdb, $post;
	setlocale(LC_MONETARY, 'en_US');
	
	// make sure no duplicate record
	$wpdb->delete( 'gg3arw36b12_app_products', array( 'wpid' => get_the_ID() ) );
	$wpdb->delete( 'gg3arw36b12_app_products_gallery', array( 'proid' => get_the_ID() ) );
	
	// Get value
	$uploads 	= wp_upload_dir();
	$upload_dir = $uploads['baseurl'];
	$subid		= get_field('sub_category')->ID;
	$cateid		= get_field('sub_category')->post_parent;
	$maincateid	= wp_get_post_parent_id($cateid);	
	$rprice 	= money_format('%i', get_field('regular_price'));
	$sprice 	= money_format('%i', get_field('sale_price'));	
	$u			= get_field('thumbnail');
	$u1080 		= str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_1080x888'));
	$u512 		= str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_512x421'));
	$u256 		= str_replace($upload_dir, '', wp_get_attachment_image_url($u, 'app_256x210'));
	
	// Insert new record
	$wpdb->insert( 
		'gg3arw36b12_app_products', 
		array( 
			'wpid' => get_the_ID(),
			'maincateid' => $maincateid,
			'cateid' => $cateid,
			'subid' => $subid,
			'title' => $post->post_title,
			'keyfeature' => get_field('key_features'),
			'regular_price' => $rprice,
			'sale_price' => $sprice,
			'thumb' => $u1080.','.$u512.','.$u256,
			'date_modified' => $post->post_modified  
		), 
		array( '%d','%d','%d','%d','%s','%s','%s','%s','%s','%s' ) 
	);
	
	// Galleries
	$galleries = get_field('galleries');
	if( $galleries ):
		foreach( $galleries as $gallery ):
			
			$g1080 = str_replace($upload_dir, '', $gallery['sizes']['app_1080x888']);
			$g512  = str_replace($upload_dir, '', $gallery['sizes']['app_512x421']);
			$g256  = str_replace($upload_dir, '', $gallery['sizes']['app_256x210']);
			
			// Insert new record
			$wpdb->insert( 
				'gg3arw36b12_app_products_gallery', 
				array( 
					'proid' => get_the_ID(),
					'img' => $g1080.','.$g512.','.$g256,
					'date_modified' => $post->post_modified  
				), 
				array( '%d','%s','%s' ) 
			);
		
		endforeach;
	endif;
	
	// Mobile Function from Nimol	
	require_once('../mobile/getdata.php');	
	product_json_generator ( $maincateid, $cateid, $subid );
	product_json_generator ( $maincateid, 0, 0 );
?>	