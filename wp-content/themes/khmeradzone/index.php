<?php
/*
 * Description: Index
 * Version: 1.0.0
 * Last update: 2018/07/01
 * Refer: tuypheaktra <tuypheaktra99@gmail.com>
 * Author: tuypheaktra <tuypheaktra99@gmail.com>
 */
	// Check detect file (file exist only for project that have mobile site only)
	if(is_file(dirname(__FILE__).'/detect.php')){ 
		require_once('detect.php');
		$detect = new Mobile_Detect;
		if( $detect->isMobile() && !$detect->isTablet() ){ $baseview = 'mobile';  }
	}

	$baseview = isset($baseview) ? $baseview : 'desktop'; 
	
	// Header
	get_header($baseview); 
	
	// Get Content Template
	if(is_page() || is_search()):
		get_template_part($baseview.'/'.'content', get_template_name());
	else:
		 get_template_part($baseview.'/'.'content-single', get_template_name());
	endif;
	//echo get_template_name();
	
	// Footer              
	get_footer($baseview); 
	
	// All script write down here
	if(is_file(dirname(__FILE__).'/'.$baseview.'/config.php')){
		wp_reset_query(); // Make sure reset all query
		require_once( $baseview.'/config.php' );	
	}
?>