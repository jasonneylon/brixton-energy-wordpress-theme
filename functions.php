<?php
/**
 * Add Custom Header
 */

function theme_brixtonenergy_custom_header_setup() { 

	add_theme_support( 'custom-header', array( 'default-image' => '%2$s/header-brixtonenergy.png' ) );

	register_default_headers( array(
	    'brixtonenergy' => array(
	        'url'           => '%2$s/header-brixtonenergy.png',
	        'thumbnail_url' => '%2$s/header-brixtonenergy-thumbnail.png',
	        'description'   => _x( 'brixtonenergy', 'Brixton Energy default header', 'twentythirteen' )
	    ),
	) );

} 
add_action( 'after_setup_theme', 'theme_brixtonenergy_custom_header_setup' );


/**
 * Import twenty thirteen base styles
 */

function theme_brixtonenergy_styles() {

	// Load Twenty Thirteen main style
	wp_enqueue_style( 'twentythirteen', get_template_directory_uri() . '/style.css' , array( ), '2013-09-09' );

	// Load Twenty Thirteen RTL style if necessary
	if ( is_rtl() ) {
		wp_enqueue_style( 'twentythirteen-rtl', get_template_directory_uri() . '/rtl.css' , array( 'twentythirteen' ), '2013-09-09' );
	}

	// Loads our main stylesheet
	wp_enqueue_style( 'twentythirteen-style', get_stylesheet_uri(), array( 'twentythirteen' ), '2013-09-09' );

}

add_action( 'wp_enqueue_scripts', 'theme_brixtonenergy_styles' );

?>