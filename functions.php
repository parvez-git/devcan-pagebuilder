<?php
/**
 * Devcan Pagebuilder functions and definitions
 *
 * @package Devcan_Pagebuilder
 */

if ( ! function_exists( 'devcan_pagebuilder_setup' ) ) :

	function devcan_pagebuilder_setup() {

		load_theme_textdomain( 'devcan-pagebuilder', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'devcan-pagebuilder' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'devcan_pagebuilder_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'devcan_pagebuilder_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function devcan_pagebuilder_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'devcan_pagebuilder_content_width', 692 );
}
add_action( 'after_setup_theme', 'devcan_pagebuilder_content_width', 0 );

/**
 * Register widget area.
 */
function devcan_pagebuilder_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'devcan-pagebuilder' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'devcan-pagebuilder' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'devcan_pagebuilder_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function devcan_pagebuilder_scripts() {
	wp_enqueue_style( 'devcan-pagebuilder-style', get_stylesheet_uri() );

	wp_enqueue_script( 'devcan-pagebuilder-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'devcan-pagebuilder-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'devcan-pagebuilder-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'devcan_pagebuilder_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
