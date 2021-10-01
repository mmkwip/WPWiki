<?php
/**
 * WordWiki functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordWiki
 */

if ( ! function_exists( 'wordwiki_setup' ) ) :
	function wordwiki_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// WordWiki uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'navigation' => esc_html__( 'Primary', 'wordwiki' ),
			'navigation-page' => esc_html__( 'Primary Welcome', 'wordwiki' ),
			'navigation-top' => esc_html__( 'Top Navigation', 'wordwiki' ),
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wordwiki_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wordwiki_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wordwiki' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wordwiki' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wordwiki_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wordwiki_scripts() {
	wp_enqueue_style( 'wordwiki-style', get_stylesheet_uri() );
	wp_enqueue_style( 'wordwiki-responsive', get_template_directory_uri() . '/responsive.css', array(), false, 'screen and (max-width: 1045px)' );
	wp_enqueue_script( 'wordwiki-app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wordwiki_scripts' );
