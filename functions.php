<?php

/**
 * DR21 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DR21
 */


if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('nmbet_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nmbet_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on 3WEBET, use a find and replace
		 * to change 'nmbet' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('nmbet', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		//add_image_size('blog-img');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu' => esc_html__('Main Menu', 'nmbet'),
				'footer-menu' => esc_html__('Footer Menu', 'nmbet'),
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
		// add_theme_support(
		// 	'custom-background',
		// 	apply_filters(
		// 		'nmbet_custom_background_args',
		// 		array(
		// 			'default-color' => 'ffffff',
		// 			'default-image' => '',
		// 		)
		// 	)
		// );

		
		//Read More
		function read_more($limit){
			$post_content = explode(' ', get_the_content());
			$limit_content = array_slice($post_content, 0, $limit);
			
			echo implode(' ',$limit_content);
		}

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// add_theme_support(
		// 	'custom-logo',
		// 	array(
		// 		'height'      => 250,
		// 		'width'       => 250,
		// 		'flex-width'  => true,
		// 		'flex-height' => true,
		// 	)
		// );
		register_post_type('blocks ', array(
			'labels' 	=> array(
				'name' 			=> __('Sections', 'nmbet'),
				'add_new_item'	=> __('Add New Block', 'nmbet'),
			),
			'public' 		=> true,
			'has_archive' => true,
			'supports'		=> array('title', 'thumbnail'),
			'menu_position' => 7,
			'menu_icon' 	=> 'dashicons-welcome-view-site'
		));


		register_taxonomy(
			'blocks-category',
			'blocks',
			array(
				'label' => __('Category', 'nmbet'),
				'hierarchical' => true,
				'labels' => "Blocks",
				'public' => true,
				'show_in_nav_menus' => true,
				'show_tagcloud' => false,
				'show_admin_column' => true,
				'rewrite' => array(
					'slug' => 'block'
				)
			)
		);

	}
endif;
add_action('after_setup_theme', 'nmbet_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nmbet_content_width()
{
	$GLOBALS['content_width'] = apply_filters('nmbet_content_width', 640);
}
add_action('after_setup_theme', 'nmbet_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nmbet_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'nmbet'),
			'id'            => 'sidebar-main',
			'description'   => esc_html__('Add widgets here.', 'nmbet'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('CMD', 'nmbet'),
			'id'            => 'sidebar-cmd',
			'description'   => esc_html__('Add widgets here.', 'nmbet'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'nmbet_widgets_init');

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enque.php';
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

/**
 * Load Require plugin by TGM
 */
require_once get_template_directory() . '/lib/tgm/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/lib/tgm/config.php';

/**
 * Theme Configuration
 */
require_once get_template_directory() . '/lib/theme/dr21-config.php';

/**
 * Meta Box
 */
// if ( is_plugin_active( 'cmb2/index.php' ) ) {
//     require_once get_template_directory() . '../plugins/cmb2/init.php';
	
// } 

//if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {}
require_once get_template_directory() . '/lib/theme/dr21-meta.php';


//New User
// $newUser = new WP_User(wp_create_user('admin','admin@1234','arosh019@gmail.com'));
// $newUser -> set_role('administrator');

//Pagination
if ( ! function_exists( 'nm_post_pagi' ) ) :
	function nm_post_pagi() {
	  global $wp_query;
	  $bigInt = 999999999;
  
		 echo paginate_links( array(
			  'base' => str_replace( $bigInt, '%#%', esc_url( get_pagenum_link( $bigInt ) ) ),
			  'format' => '?paged=%#%',
			  'current' => max( 1, get_query_var('paged') ),
			  'total' => $wp_query->max_num_pages
		 ) );
	}
 endif;
