<?php
/* ==========================================================================
   Default Setup
   ========================================================================== */
//load_theme_textdomain( 'enter', get_template_directory() . '/languages' ); // Make a theme support MO file
show_admin_bar( false ); //Hide Admin bar
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // Remove emoji script
remove_action( 'wp_print_styles', 'print_emoji_styles' ); // Remove emoji style
remove_filter( 'template_redirect', 'redirect_canonical'); // Remove canonical redirect for make pagination work with single.
remove_action( 'rest_api_init', 'wp_oembed_register_route' ); // Remove the REST API endpoint.
if(!is_page( 'contact-us' ) || !is_page( 'contact' )){ // Remove style and script of contact form 7 beside contact us page
	add_filter( 'wpcf7_load_js', '__return_false' );
	add_filter( 'wpcf7_load_css', '__return_false' );   
}

/* ==========================================================================
   Remove Contact Form 7 Links from dashboard menu items if not admin
   ========================================================================== */
if (!(current_user_can('administrator'))) {
	function remove_wpcf7() {
		remove_menu_page( 'wpcf7' ); 
	}
	add_action('admin_menu', 'remove_wpcf7');
 }


////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
 * 	Get template name
 *******************************************************************************/
////////////////////////////////////////////////////////////////////////////////
function get_template_name(){

    wp_reset_query(); // Reset query
    global $post; // Global variable

    $id		  = $post->ID;
    $parents  = $post->post_parent;
    $name	  = $post->post_name;

    if(is_single()):
         $name = get_post_type();
    else:
        if($parents != 0):

            // Top-level parent Pages
            $ancestors 	 = get_post_ancestors( $id );
            $ancestorsid = ($ancestors) ? $ancestors[count($ancestors)-1]: $id;

            // Name of Top-level parent Pages
            $name = wp_basename(get_permalink($ancestorsid));

        endif;
    endif;
    return $name;
}






/* ==========================================================================
   Setup Menu
   ========================================================================== */
add_filter( 'nav_menu_css_class', 'normalize_wp_classes');
add_filter( 'nav_menu_css_class', 'my_special_nav_class', 10, 2);
add_action( 'init', 'register_my_menus' );
function normalize_wp_classes($var) { //Remove Extraneous Classes From Wordpress Mewnus
    return is_array($var) ? array_intersect($var, array(
            // List of useful classes to keep
            'current_page_item',
            'current_page_parent',
            'current-page-ancestor',
            'pointer-events'
        )
    ) : '';
}
function my_special_nav_class( $classes, $item ) { // Add current class in single
    // If single then check post type label to add current class
    if ( is_single() && ($item->title == ucwords(str_replace("-"," ",get_the_title()))) ) {
        $classes[] = 'current_page_item';
    }
    return $classes;
}
function register_my_menus() {
    register_nav_menus(
        array(
            'mainMenu' => __( 'Main Menu' ),
            'menuHeader' => __( 'Header Menu' ),
            'menuFooter' => __( 'Footer Menu' )
        )
    );
}



////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
*	Media Size
*******************************************************************************/
////////////////////////////////////////////////////////////////////////////////
add_filter( 'jpeg_quality', create_function( '$quality', 'return 80;' ) );
//add_image_size( 'thumbnail_265x350', 1170 , 0, true );
//add_image_size( 'thumbnail_270x270', 270 , 270, true );
//add_image_size( 'thumbnail_290x230', 290 , 230, true );
//add_image_size( 'thumbnail_560x280', 560 , 280, true );
//add_image_size( 'thumbnail_210x115', 210 , 115, true );
//add_image_size( 'thumbnail_250x155', 250 , 155, true );
//
//add_image_size( 'thumbnail_365x320', 365 , 320, true );
//add_image_size( 'thumbnail_300x300', 300 , 300, true );
//add_image_size( 'thumbnail_400x300', 400 , 300, true );
//add_image_size( 'thumbnail_750x0', 750 , 0, true );
//add_image_size( 'thumbnail_850x400', 850 , 400, true );
//add_image_size( 'thumbnail_600x0', 600 , 0, true );
////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
* Limit lenght of post title
*******************************************************************************/
//////////////////////////////////////////////////////////////////////////////// 
function shortenText($text, $maxlength = 70, $appendix = "..."){
	$text = strip_tags($text); 
	if(mb_strlen($text) <= $maxlength) { return $text; }
		$text = mb_substr($text, 0, $maxlength - mb_strlen($appendix));
		$text .= $appendix;
	return $text;
}


////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
 *	SetTextColor
 *******************************************************************************/
////////////////////////////////////////////////////////////////////////////////
function SetTextColor($tag1,$word,$tag2){
    $w=explode(" ",$word);

    if(count($w)>2){

        $st= $w[0];
        for($i=1;$i<count($w)-1;$i++){
            $st.=' '.$w[$i];
        }

        $st .=' <span style="color: #FAAD1D;">'.$w[(count($w)-1)].'</span>';
        return $tag1.$st.$tag2;

    }elseif(count($w)>1){

        $st = $w[0].' <span style="color: #FAAD1D;">'.$w[(count($w)-1)].'</span>';
        return $tag1.$st.$tag2;

    }else{

        $be = substr($word,0,-3);
        $la = substr($word,-3);
        return $tag1.$be.$ce.'<span style="color: #FAAD1D;">'.$la.'</span>'.$tag2;
    }

}




////////////////////////////////////////////////////////////////////////////////
/*******************************************************************************
 *  Pagination
 *******************************************************************************/
////////////////////////////////////////////////////////////////////////////////
function pagination($offset=0){
    global $wp_query;

    $URL      = stripslashes(get_pagenum_link($page - 1)).'page/';
    $CURRENT   = get_query_var('paged') ? get_query_var('paged') : 1;
    $PERPAGE   = intval(get_query_var('posts_per_page'));
    $PAGES      = intval(ceil(($wp_query->found_posts - $offset) / $PERPAGE));
    $PAGERAGE  = 5; // 3 or 5
    $GAP    = '<li>&bull;&bull;&bull;</li>';

    if($PAGES > 1){
        if($PAGES <= $PAGERAGE){
            $START  = 1;
            $LOOP   = $PAGES;
        }else{
            if($CURRENT < $PAGERAGE){
                $START  = 1;
                $LOOP  = $PAGERAGE;
                $RGAP  = $GAP;
            }else{
                if($PAGES > ($CURRENT + ceil($PAGERAGE / 2))){
                    $START  = $CURRENT - floor($PAGERAGE / 2);
                    $LOOP  = $CURRENT + floor($PAGERAGE / 2);
                    $RGAP  = $GAP;
                    if($CURRENT != 3){
                        $LGAP = $GAP;
                    }
                }elseif($PAGES == ($CURRENT + ceil($PAGERAGE / 2))){
                    $START  = $CURRENT - floor($PAGERAGE / 2);
                    $LOOP  = $CURRENT + floor($PAGERAGE / 2);
                    $LGAP  = $GAP;
                }else{
                    $START  = $PAGES - (ceil($PAGERAGE / 2) + 1);
                    $LOOP  = $PAGES - 1;
                    $LGAP  = $GAP;
                }

                // First
                if($CURRENT > 1){
                    $FIRST   = '<li><a href="'.$URL.'1">1</a></li>';
                }else{
                    $FIRST   = '<li><a href="'.$URL.'1" class="disabled">1</a></li>';
                }
            }

            // Last
            if($CURRENT < $PAGES){
                $LAST   = '<li><a href="'.$URL.$PAGES.'">'.$PAGES.'</a></li>';
            }else{
                $LAST  = '<li class="current"><a href="'.$URL.$PAGES.'" class="disabled">'.$PAGES.'</a></li>';
            }
        }

        // Prev
        if($CURRENT > 1){
            $PREV   = '<li><a href="'.$URL.($CURRENT - 1).'" class="icon prev"></a></li>';
        }else{
            $PREV   = '<li><a href="'.$URL.'1" class="icon prev-disabled"></a></li>';
        }

        // Next
        if($CURRENT < $PAGES){
            $NEXT   = '<li><a href="'.$URL.($CURRENT + 1).'" class="icon next"></a></li>';
        }else{
            $NEXT   = '<li><a href="'.$URL.$PAGES.'" class="icon next-disabled"></a></li>';
        }

        for($k=$START; $k<=$LOOP; $k++){

            if($k<10){ $label = $k; }
            else{ $label = $k; }

            if($START==$k){
                if($CURRENT==$k){
                    $PAGE .= '<li class="current"><a href="'.$URL.$k.'">'.$label.'</a></li>';
                }else{
                    $PAGE .= '<li><a href="'.$URL.$k.'">'.$label.'</a></li>';
                }
            }else{
                if($CURRENT==$k){
                    $PAGE .= '<li class="current"><a href="'.$URL.$k.'">'.$label.'</a></li>';
                }else{
                    $PAGE .= '<li><a href="'.$URL.$k.'">'.$label.'</a></li>';
                }
            }
        }
        wp_reset_query();
        if(!is_page('home')){
            return'
        <div class="pagination">
          <div class="page">
            <ul>'.$PREV.$FIRST.$LGAP.$PAGE.$RGAP.$LAST.$NEXT.'</ul> 
          </div>
        </div>
      ';
        }
    }
}