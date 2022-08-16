<?php
/**
 * Equila functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Equila
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function equila_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Equila, use a find and replace
		* to change 'equila' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'equila', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'equila' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'equila_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'equila_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function equila_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'equila_content_width', 640 );
}
add_action( 'after_setup_theme', 'equila_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function equila_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'equila' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'equila' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'equila_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function equila_scripts() {

	wp_enqueue_style( 'edf-skin', get_template_directory_uri() . '/css/skin.css', array(), _S_VERSION );

	wp_enqueue_script( 'edf-wow',  get_template_directory_uri() . '/js/wow.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'edf-script',  get_template_directory_uri() . '/js/script.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'equila_scripts' );

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
// acf theme option

if (function_exists('acf_add_options_page')) {


    acf_add_options_page(array(
        'page_title' => 'Global Options',
        'menu_title' => 'Global Options',
        'menu_slug' => 'global-options',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

}
// svg image support
function edf_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'edf_mime_types');

// Removes from admin menu
add_action( 'admin_menu', 'edf_remove_admin_menus' );
function edf_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'edf_remove_comment_support', 100);

function edf_remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function edf_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'edf_admin_bar_render' );


function edf_remove_date_archives() {

    //if we are on date archive page
    if ( is_date() ) {
        // otherwise error 404 is displayed
        global $wp_query;
        $wp_query->set_404();
    }
}
add_action( 'template_redirect', 'edf_remove_date_archives' );
