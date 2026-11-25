<?php
/**
 * Merinos theme setup.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function merinos_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'merinos_setup' );

function merinos_asset_version( $relative_path ) {
	// File mtime as version so every theme upload busts browser/CDN caches.
	$mtime = filemtime( get_template_directory() . $relative_path );
	return $mtime ? (string) $mtime : wp_get_theme()->get( 'Version' );
}

function merinos_enqueue_assets() {
	wp_enqueue_style( 'merinos-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap', array(), null );
	wp_enqueue_style( 'merinos-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );
	wp_enqueue_style( 'merinos-style', get_stylesheet_uri(), array(), merinos_asset_version( '/style.css' ) );

	wp_enqueue_script( 'merinos-script', get_template_directory_uri() . '/js/script.js', array(), merinos_asset_version( '/js/script.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'merinos_enqueue_assets' );
