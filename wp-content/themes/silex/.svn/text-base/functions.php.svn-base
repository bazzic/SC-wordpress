<?php
if ( function_exists('register_sidebar') ) {
    register_sidebar();
}

function sr_template_tagline() {
	$return = '';
	if($tagline = get_bloginfo( 'description' )) {
		$lines = preg_split('/[\.,]/', $tagline, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
		if(count($lines)) {
	 		foreach($lines as $ln) {
	 			$return .= '<span>' . $ln . '</span>';			 			
	 		}
	 		$return = '<h1>' . $return . '</h1>';
		}
	}   
	return $return;
} 

/** Tell WordPress to run silex_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'silex_setup' );
    
if ( ! function_exists( 'silex_setup' ) ):
function silex_setup() {

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'sr', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'silex' ),
	) );

	// This theme allows users to set a custom background
	add_custom_background();

	// Your changeable header business starts here
	define( 'HEADER_TEXTCOLOR', '' );
	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
	define( 'HEADER_IMAGE', '%s/image/header/path.jpg' );
}
endif;?>