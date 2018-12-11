<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

	 <meta name="keyword" content="<?php _e(get_field('meta_keyword_'.get_template_name(),'option')); ?>">
	 <meta name="description" content="<?php _e(get_field('meta_description_'.get_template_name(),'option')); ?>">
    <meta name="og:type"        content="website">   
    <meta name="fb:app_id"      content=""/>
	 <meta name="og:title"       content="<?php _e(get_the_title()); ?>">
	 <meta name="og:url"         content="<?php _e(get_field('logo_desktop','option')); ?>">
    <link rel="shortcut icon" href="<?php _e(get_field('shortcut_icon','option')); ?>"/>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/desk-style.css"/>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/desk-style-<?php echo get_template_name();?>.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css">
    


    <title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
     <?php wp_head(); ?>


</head>
<body>
    <div id="wrapper">
        <div id="header">
            
            <div class="main-box-nav">
                <div class="container-fluid">
                    <div class="container">
                        <nav class="nav-top">
                            <div class="sub-nav-top">
                                <div class="menu-header-menu-container">
                                     <?php wp_nav_menu( array('theme_location' => 'menuHeader' ) ); ?>
                                    <ul class="menu">
                                        <li><a href="https://goo.gl/maps/uVPmbvU2BZ82" target="_blank" >MAPS</a></li>
                                    </ul>
                                </div>
                               
                                <ul class="ul-media">
                                    <li>Visit us:</li>
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
                        </nav>
                    </div>
                </div>
                <div class="container-fluid container-fluid-menu">
                    <div class="container">
                        <nav class="nav-bottom">
                            <div class="box-logo">
                                <a class="logo" href="<?php bloginfo('url'); ?>" title="">
												<img src="<?php _e(get_field('logo_desktop','option')); ?>" alt="<?php echo bloginfo('name'); ?>">
										  </a>
                            </div>
                            <?php wp_nav_menu( array('theme_location' => 'mainMenu' ) ); ?>
                        </nav>
                    </div>
                </div>
            </div>

        </div> <!-- .header -->
    </div> <!-- .wrapper -->