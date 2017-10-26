<?php
/**
 * jsf-financial functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jsf-financial
 */

if ( ! function_exists( 'jsf_financial_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jsf_financial_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on jsf-financial, use a find and replace
		 * to change 'jsf-financial' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jsf-financial', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-top' => esc_html__( 'Main nav top', 'jsf-financial' ),
			'menu-bottom' => esc_html__( 'Main nav bottom', 'jsf-financial' ),
			'footer-1' => esc_html__( 'Footer 1', 'jsf-financial' ),
			'footer-2' => esc_html__( 'Footer 2', 'jsf-financial' ),
			'footer-3' => esc_html__( 'Footer 3', 'jsf-financial' ),
			'footer-4' => esc_html__( 'Footer 4', 'jsf-financial' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'jsf_financial_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    // add_image_size('large', 700, '', true); // Large Thumbnail
    // add_image_size('medium', 250, '', true); // Medium Thumbnail
    // add_image_size('small', 120, '', true); // Small Thumbnail
    // add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('archive-size', 360, '', true);
	}
endif;
add_action( 'after_setup_theme', 'jsf_financial_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jsf_financial_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jsf_financial_content_width', 640 );
}
add_action( 'after_setup_theme', 'jsf_financial_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jsf_financial_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jsf-financial' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jsf-financial' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jsf_financial_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jsf_financial_scripts() {
	wp_enqueue_style( 'jsf-financial-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jsf-financial-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'js-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(jquery), '2', true );

	wp_enqueue_script( 'js-flexslider-init', get_template_directory_uri() . '/js/flexslider-init.js', array(jquery), '1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jsf_financial_scripts' );


// Load jsf finantial styles
function jsf_financial_styles()
{
    wp_register_style('css-flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.0', 'all');
    wp_enqueue_style('css-flexslider'); // Enqueue it!


}
add_action('wp_enqueue_scripts', 'jsf_financial_styles'); // Add Theme 


/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type
function create_post_type_resource_center()
{
    register_post_type('resource-centers', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => 'Resource center', // Rename these to suit
            'singular_name' => 'Resource center',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Resource center',
            'edit' => 'Edit',
            'edit_item' => 'Edit Resource center',
            'new_item' => 'New Resource center',
            'view' => 'View Resource center',
            'view_item' => 'View Resource center',
            'search_items' => 'Search Resource center',
            'not_found' => 'No Resource center found',
            'not_found_in_trash' => 'No Resource center found in Trash'
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'author',
            'comments'
        ),
        'can_export' => true, // Allows export in Tools > Export
        'menu_icon'  => 'dashicons-groups',
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
add_action('init', 'create_post_type_resource_center'); // Add our jsf_financial Custom Post Type
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

