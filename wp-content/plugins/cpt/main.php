<?php
/*
Plugin Name: CPT
Plugin URI: http://flexnovation.com/
Description: 
Author: CPT Team
Author URI: http://flexnovation.com/
Text Domain: 
Domain Path: /languages/
Version: 1.0
*/	

define('WP_POST_REVISIONS', 10); // Disable Post Revisions or Set the Number of Revisions to Keep
//define( 'DISALLOW_FILE_EDIT', true ); // Disallow theme editor
add_filter('show_admin_bar', '__return_false'); // Remoe admin bar
update_option( 'timezone_string', 'Asia/Phnom_Penh' ); // Set timezone
update_option( 'date_format', 'F j, Y' ); // Set Date Format
update_option( 'time_format', 'g:i A' ); // Set Time Format


/**
 * Description: Start new session (fix header sent)
 * Version: 1.0.0
 * Last update: 2016/10/16
 * Author: tuypheaktra <tuypheaktra@gmail.com>
 */
add_action('init', 'register_session'); 
function register_session(){
	if(!session_id()){
		ob_start();	 
		session_start();
	}
}


/**
 * Description: Modify Login/Administrator/Editor Stylesheet
 * Version: 1.0.0
 * Last update: 2016/08/31
 * Author: tuypheaktra <tuypheaktra@gmail.com>
 */   
add_action('login_footer', 'loginstyle');
add_action('admin_footer', 'adminstyle');
add_action('admin_footer', 'editorstyle'); 
function loginstyle(){
	wp_deregister_style( 'style_login' );
	wp_register_style( 'style_login', plugins_url( 'css/login.css', __FILE__ ) );
	wp_enqueue_style( 'style_login' );
} 
function adminstyle(){
	wp_deregister_style( 'style_admin' );
	wp_register_style( 'style_admin', plugins_url( 'css/admin.css', __FILE__ ) );
	wp_enqueue_style( 'style_admin' );
}
function editorstyle(){
	wp_deregister_style( 'style_editor' );
	wp_register_style( 'style_editor', plugins_url( 'css/editor.css', __FILE__ ) );
	wp_enqueue_style( 'style_editor' );
}

add_action('admin_menu', 'remove_admin_menus', 9999);
function remove_admin_menus(){
	if( !current_user_can( 'manage_options' ) ) {
		remove_menu_page('index.php');
		remove_menu_page('edit.php');
		remove_menu_page('edit.php?post_type=page');
		remove_menu_page('upload.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('tools.php');
		remove_menu_page('link-manager.php');
		remove_menu_page('themes.php');
		remove_menu_page('plugins.php');
		remove_menu_page('options-general.php');
		remove_menu_page('admin.php');
		remove_menu_page( 'wpcf7' );
		remove_menu_page('Dashboard');
	}
}

////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
* 	Admin Footer
*******************************************************************************/
//////////////////////////////////////////////////////////////////////////////// 
add_action('admin_footer_text', 'change_footer_admin');
function change_footer_admin() {
	$footertext .= '
		Developed by <a href="http://tomnerbtech.com" target="_blank">Tomnerb Tech</a>
		| <a href="" target="_blank">Google Analytics</a><br />
	'.add_thickbox(); 
	return $footertext;
}

/**
 * Description: Maintenance Mode
 * Version: 1.0.0
 * Last update: 2016/09/07
 * Author: pheaktra <kolapheaktra@gmail.com>
 */ 
add_action( 'wp_loaded', 'ng_maintenance_mode' );
function ng_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() && (get_field('maintenance_mode', 'option') == 'Enable') ) {
		header( $_SERVER["SERVER_PROTOCOL"] . ' 503 Service Temporarily Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'maintenance.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'maintenance.php' );
		}
		die();
	}
}

////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
* 	Redirect to 1st menu
*******************************************************************************/
//////////////////////////////////////////////////////////////////////////////// 
add_action( 'admin_init', 'post_redirect' );
function post_redirect() {
	if($_REQUEST['post_type']=="post-settings" && !isset($_REQUEST['taxonomy'])){
		wp_redirect(admin_url()."edit.php?post_type=flex-planning");
		exit;
	}
}


////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
* 	Replace Howdy
*******************************************************************************/
//////////////////////////////////////////////////////////////////////////////// 
function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', 'Hi, ', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );


////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
* 	ACF Option Page
*******************************************************************************/
////////////////////////////////////////////////////////////////////////////////
if (function_exists('acf_add_options_page')) {
    // General
    acf_add_options_page(array(
        'title' => 'Generals',
        'icon_url' => '',
        'redirect' => false,
        'position' => 99,
    ));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'Hero Banner'));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'Home'));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'Real Facts'));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'About Us'));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'Services'));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'Portfolios'));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'Events'));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'Careers'));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'Contact'));
    acf_add_options_sub_page(array('parent' => 'acf-options-generals', 'title' => 'FAQs'));

}





////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
* 	ACF Custom Post Type
*******************************************************************************/
////////////////////////////////////////////////////////////////////////////////
add_action('init', 'custom_post_type');
	function custom_post_type() {
	    // Posts
	    $args = array(
	        "label" => "All Posts",
	        "description" => "",
	        "public" => true,
	        "show_ui" => true,
	        "has_archive" => false,
	        "show_in_menu" => true,
	        "exclude_from_search" => false,
	        "capability_type" => "post",
	        "map_meta_cap" => true,
	        "hierarchical" => false,
	        "rewrite" => array(),
	        "query_var" => true,
	        "menu_position" => 101,
	        'no_found_rows' => true,
	        "capabilities" => array(
	            "create_posts" => false
	        ),
	    );
	    register_post_type("post-settings", $args);



        // Events
        $args = array( 
            'labels' => array(
                'name' => __('Events'),
                'menu_name' => __('Events'),
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=post-settings',
            "rewrite" => array("slug" => "events/post"),
        );
        register_post_type("flex-events", $args);

        // Services
        $args = array(
            'labels' => array(
                'name' => __('Services'),
                'menu_name' => __('Services'),
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=post-settings',
            "rewrite" => array("slug" => "services/post"),
        );
        register_post_type("flex-services", $args);

        // Portfolios
        $args = array(
            'labels' => array(
                'name' => __('Portfolios'),
                'menu_name' => __('Portfolios'),
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=post-settings',
            "rewrite" => array("slug" => "portfolios/post"),
        );
        register_post_type("flex-portfolios", $args);

        // Careers
        $args = array(
            'labels' => array(
                'name' => __('Careers'),
                'menu_name' => __('Careers'),
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=post-settings',
            "rewrite" => array("slug" => "careers/post"),
        );
        register_post_type("flex-careers", $args);

        // Our Team
        $args = array(
            'labels' => array(
                'name' => __('Our Team'),
                'menu_name' => __('Our Team'),
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=post-settings',
            "rewrite" => array("slug" => "our-team/post"),
        );
        register_post_type("flex-our-team", $args);

        // Testimonail
        $args = array(
            'labels' => array(
                'name' => __('Testimonail'),
                'menu_name' => __('Testimonail'),
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=post-settings',
            "rewrite" => array("slug" => "testimonail/post"),
        );
        register_post_type("flex-testimonail", $args);

        // FAQs
        $args = array(
            'labels' => array(
                'name' => __('FAQs'),
                'menu_name' => __('FAQs'),
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=post-settings',
            "rewrite" => array("slug" => "faqs/post"),
        );
        register_post_type("flex-faqs", $args);

        // Clients
        $args = array( 
            'labels' => array(
                'name' => __('Clients'),
                'menu_name' => __('Clients'),
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=post-settings',
            "rewrite" => array("slug" => "clients/post"),
        );
        register_post_type("flex-clients", $args);

        // Planning Agency
        $args = array(
            'labels' => array(
                'name' => __('Planning Agency'),
                'menu_name' => __('Planning Agency'),
            ),
            'public' => true,
            'show_in_menu' => 'edit.php?post_type=post-settings',
            "rewrite" => array("slug" => "planning/post"),
        );
        register_post_type("flex-planning", $args);

        


    }

