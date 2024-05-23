<?php

// Remove global gutenberg styles
add_action( 'wp_enqueue_scripts', 'remove_global_styles' );
function remove_global_styles(){
    wp_dequeue_style( 'global-styles' );
}

// Cleanup unwanted output from header.
remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );

// Disable XMLRPC
add_filter('xmlrpc_enabled', '__return_false');

// Disbale emojis
add_action( 'init', 'disable_emojis' );
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}

function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

// Theme setup
add_action( 'after_setup_theme', 'colibry_setup' );
function colibry_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'colibry', get_template_directory() . '/languages' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Don't use hardcoded title tag but let WP handle it.
	add_theme_support( 'title-tag' );

	// Support HTML5 markup for these:
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for selective refresh for widgets in customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

}

// Limit revisions to 4
if (!defined('WP_POST_REVISIONS'))
	define('WP_POST_REVISIONS', 4);

// Keep it simple, remove some metaboxes.
add_action( 'admin_menu', 'my_remove_meta_boxes' );
function my_remove_meta_boxes(){
	remove_meta_box( 'commentstatusdiv', 'post', 'normal' );
	remove_meta_box( 'commentsdiv', 'post', 'normal' );
	remove_meta_box( 'revisionsdiv', 'post', 'normal' );
	remove_meta_box( 'authordiv', 'post', 'normal' );
}

// Don't compress uploaded images
add_filter('jpeg_quality', function($arg){ return 100; });

// Remove ID from menu item
add_filter('nav_menu_item_id', function(){ return ''; });

// Menus.
register_nav_menus( array(
    'main-menu'             => __( 'Main Menu', 'colibry' ),
    'footer-menu-company'   => __( 'Footer Company Menu', 'colibry' ),
    'footer-menu-resources' => __( 'Footer Resources Menu', 'colibry' ),
    'footer-menu-bottom'    => __( 'Footer Bottom Menu', 'colibry' ),
) );