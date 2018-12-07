<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" /> 
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <meta name="dejsion" content="">
    <meta name="keyword" content="">
    <title>
        <?php wp_title(' '); ?>
        <?php if(wp_title(' ', false)) { echo ' | '; } ?><?php bloginfo('name'); ?>
    </title>
     <?php wp_head(); ?>
	 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/mobile-style.css">
	 <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/mobile-style-<?php echo get_template_name();?>.css"/>

</head>
    <body>
        <div id="wrap">
        <div id="header">
            <div data-headerh class="container-cus">
                <div class="container-cus2" style="background-color: #1F0C0C;padding-right: 10px;
    padding-left: 10px;" data-navclickslide data-durationnav="300" data-widthslide="89">
                    <div class="box-logo-hamberger">
                        <div class="hamburger-menu" id="hamburger-menu">
                            <div class="bar1"></div>
                            <div class="bar2"></div> 
                            <div class="bar3"></div>
                        </div>
                        <div class="logo">
                            <img src="<?php _e(get_field('logo_mobile','option')); ?>" alt="<?php echo bloginfo('name'); ?>">
                        </div>
                        <span style="color: #F29022;text-transform: uppercase;"><?php echo get_template_name();?></span>
                    </div>
                    
                    <ul class="ul-media">
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
            <nav>
                <ul data-menusidebar class="menu-side-bar">
                    <div class="sidebar-head item-center">
                        <div class="sidebar-logo" style="margin-left: -15%;">
                            <img src="<?php _e(get_field('logo_mobile_white','option')); ?>">
                        </div>
                    </div>
                    <?php wp_nav_menu( array('theme_location' => 'mainMenu' ) ); ?>
                    <?php wp_nav_menu( array('theme_location' => 'menuHeader' ) ); ?>
                </ul>
            </nav>
        </div>
    </div>

