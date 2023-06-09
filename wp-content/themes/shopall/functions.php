<?php
/**
 * Theme Palace functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme Palace
 * @subpackage shopall
 * @since shopall 1.0.0
 */


if ( ! function_exists( 'shopall_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shopall_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Theme Palace, use a find and replace
		 * to change 'shopall' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shopall' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// add woocommerce support
		add_theme_support( 'woocommerce' );
		if ( class_exists( 'WooCommerce' ) ) {
	    	global $woocommerce;

	    	if( version_compare( $woocommerce->version, '3.0.0', ">=" ) ) {
	      		add_theme_support( 'wc-product-gallery-zoom' );
				add_theme_support( 'wc-product-gallery-lightbox' );
				add_theme_support( 'wc-product-gallery-slider' );
			}
	  	}

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'register_block_pattern' ); 

		add_theme_support( 'register_block_style' ); 

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// Load Footer Widget Support.
		require_if_theme_supports( 'footer-widgets', get_template_directory() . '/inc/footer-widgets.php' );
		
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 600, 450, true );

		add_theme_support( "responsive-embeds" );

		// Set the default content width.
		$GLOBALS['content_width'] = 525;
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' 	=> esc_html__( 'Primary', 'shopall' ),
			'social' 	=> esc_html__( 'Social', 'shopall' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'shopall_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// This setup supports logo, site-title & site-description
		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 120,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( '/assets/css/editor-style' . shopall_min() . '.css', shopall_fonts_url() ) );

	
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-font-sizes', array(
		   	array(
		       	'name' => esc_html__( 'small', 'shopall' ),
		       	'shortName' => esc_html__( 'S', 'shopall' ),
		       	'size' => 12,
		       	'slug' => 'small'
		   	),
		   	array(
		       	'name' => esc_html__( 'regular', 'shopall' ),
		       	'shortName' => esc_html__( 'M', 'shopall' ),
		       	'size' => 16,
		       	'slug' => 'regular'
		   	),
		   	array(
		       	'name' => esc_html__( 'larger', 'shopall' ),
		       	'shortName' => esc_html__( 'L', 'shopall' ),
		       	'size' => 36,
		       	'slug' => 'larger'
		   	),
		   	array(
		       	'name' => esc_html__( 'huge', 'shopall' ),
		       	'shortName' => esc_html__( 'XL', 'shopall' ),
		       	'size' => 48,
		       	'slug' => 'huge'
		   	)
		));
		add_theme_support('editor-styles');
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'shopall_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shopall_content_width() {

	$content_width = $GLOBALS['content_width'];


	$sidebar_position = shopall_layout();
	switch ( $sidebar_position ) {

	  case 'no-sidebar':
	    $content_width = 1170;
	    break;

	  case 'left-sidebar':
	  case 'right-sidebar':
	    $content_width = 819;
	    break;

	  default:
	    break;
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 1170;
	}

	/**
	 * Filter shopall content width of the theme.
	 *
	 * @since shopall 1.0.0
	 *
	 * @param int $content_width Content width in pixels.
	 */
	$GLOBALS['content_width'] = apply_filters( 'shopall_content_width', $content_width );
}
add_action( 'template_redirect', 'shopall_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shopall_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shopall' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'shopall' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
        'name'       	=> esc_html__('Filter Sidebar', 'shopall'),
        'id'         	=> 'filter-woo-sidebar',
        'description' 	=> esc_html__( 'Add widgets here.', 'shopall' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ) );

	register_sidebars( 3, array(
		'name'          => esc_html__( 'Optional Sidebar %d', 'shopall' ),
		'id'            => 'optional-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'shopall' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'shopall_widgets_init' );

// function register_woo_widgets(){
//     register_sidebar( array(
//         'name'       => esc_html__('Woo Sidebar', 'shopall'),
//         'id'         => 'woo-sidebar',
//         'description' => esc_html__( 'Add widgets here->', 'shopall' ),
//         'before_widget'  => '<div id="%1$s" class="widget %2$s">',
//         'after_widget'   => '</div>',
//         'before_title'   => '<h2 class="widget-title">',
//         'after_title'    => '</h2>'
//     ) );
// }
// add_action( 'widgets_init', 'register_woo_widgets' );



if ( ! function_exists( 'shopall_fonts_url' ) ) :
/**
 * Register Google fonts
 *
 * @return string Google fonts URL for the theme.
 */
function shopall_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';


	/* translators: If there are characters in your language that are not supported by Lato, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'shopall' ) ) {
		$fonts[] = 'Lato:400,700,900';
	}

	/* translators: If there are characters in your language that are not supported by Roboto, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'shopall' ) ) {
		$fonts[] = 'Roboto:400,500,700,900';
	}

	

	$query_args = array(
		'family' => urlencode( implode( '|', $fonts ) ),
		'subset' => urlencode( $subsets ),
	);

	if ( $fonts ) {
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
endif;

/**
 * Add preconnect for Google Fonts.
 *
 * @since shopall 1.0.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function shopall_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'shopall-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'shopall_resource_hints', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function shopall_scripts() {
	$options = shopall_get_theme_options();
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'shopall-fonts', wptt_get_webfont_url( shopall_fonts_url() ), array(), '1.0' );

	// font awesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome' . shopall_min() . '.css' );

	// slick
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick' . shopall_min() . '.css' );

	// slick theme
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme' . shopall_min() . '.css' );

	// blocks
	wp_enqueue_style( 'shopall-blocks', get_template_directory_uri() . '/assets/css/blocks' . shopall_min() . '.css' );

	wp_enqueue_style( 'shopall-style', get_stylesheet_uri() );

	
	// Load the html5 shiv.
	wp_enqueue_script( 'shopall-html5', get_template_directory_uri() . '/assets/js/html5' . shopall_min() . '.js', array(), '3.7.3' );
	wp_script_add_data( 'shopall-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'shopall-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix' . shopall_min() . '.js', array(), '20160412', true );

	wp_enqueue_script( 'shopall-navigation', get_template_directory_uri() . '/assets/js/navigation' . shopall_min() . '.js', array(), '20151215', true );
	
	$shopall_l10n = array(
		'quote'          => shopall_get_svg( array( 'icon' => 'quote-right' ) ),
		'expand'         => esc_html__( 'Expand child menu', 'shopall' ),
		'collapse'       => esc_html__( 'Collapse child menu', 'shopall' ),
		'icon'           => shopall_get_svg( array( 'icon' => 'down', 'fallback' => true ) ),
	);
	
	wp_localize_script( 'shopall-navigation', 'shopall_l10n', $shopall_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/assets/js/slick' . shopall_min() . '.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'imagesloaded');

	wp_enqueue_script( 'jquery-packery.pkgd', get_template_directory_uri() . '/assets/js/packery.pkgd' . shopall_min() . '.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'shopall-custom', get_template_directory_uri() . '/assets/js/custom' . shopall_min() . '.js', array( 'jquery' ), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'shopall_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 *
 * @since Shopall 1.0.0
 */
function shopall_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'shopall-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks' . shopall_min() . '.css' ) );
	// Add custom fonts.
	wp_enqueue_style( 'shopall-fonts', wptt_get_webfont_url( shopall_fonts_url() ), array(), '1.0' );
}
add_action( 'enqueue_block_editor_assets', 'shopall_block_editor_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load core file
 */
require get_template_directory() . '/inc/core.php';


// function my_form_handler_shortcode() {
// 	ob_start();
// 	include 'assets/part/form-handler.php';
// 	return ob_get_clean();
//   }
//   add_shortcode( 'my_form_handler', 'my_form_handler_shortcode' );


  add_action('init', 'process_my_form');
  function process_my_form() {
	  global $wpdb;
	  if (isset($_POST['action']) && $_POST['action'] == 'process_form') {
		  $name = sanitize_text_field($_POST['name']);
		  $email = sanitize_email($_POST['email']);
		  $comment = sanitize_textarea_field($_POST['comment']);
  
		  $wpdb->insert(
			  'kp4_help_me',
			  array(
				  'name' => $name,
				  'email' => $email,
				  'comment' => $comment,
			  ),
			  array(
				  '%s',
				  '%s',
				  '%s'
			  )
		  );
  
		  wp_redirect('/thank-you/');
		  exit;
	  }
  }

