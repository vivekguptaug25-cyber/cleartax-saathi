<?php
/**
 * Theme setup and asset loading.
 *
 * @package CleartaxSaathi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cleartax_saathi_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'cleartax-saathi' ),
		)
	);
}
add_action( 'after_setup_theme', 'cleartax_saathi_setup' );

function cleartax_saathi_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'cleartax-saathi-fonts',
		'https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'cleartax-saathi-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'cleartax-saathi-fonts' ),
		$theme_version
	);

	if ( is_front_page() ) {
		wp_enqueue_script(
			'gsap',
			'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
			array(),
			'3.12.5',
			true
		);

		wp_enqueue_script(
			'gsap-scroll-trigger',
			'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
			array( 'gsap' ),
			'3.12.5',
			true
		);

		wp_enqueue_script(
			'gsap-split-text',
			'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/SplitText.min.js',
			array( 'gsap' ),
			'3.12.5',
			true
		);

		wp_enqueue_script(
			'cleartax-saathi-theme',
			get_template_directory_uri() . '/assets/js/theme.js',
			array( 'gsap', 'gsap-scroll-trigger', 'gsap-split-text' ),
			$theme_version,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'cleartax_saathi_assets' );
