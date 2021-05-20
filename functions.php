<?php
/**
 * Charlie Salas-Humara Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Charlie_Salas-Humara_Theme
 */

  
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'charlie_salas_humara_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function charlie_salas_humara_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Charlie Salas-Humara Theme, use a find and replace
		 * to change 'charlie-salas-humara-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'charlie-salas-humara-theme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'charlie-salas-humara-theme' ),
			)
		);

		@ini_set( 'upload_max_size' , '64M' );
		@ini_set( 'post_max_size', '64M');
		@ini_set( 'max_execution_time', '300' );

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
				'charlie_salas_humara_theme_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'charlie_salas_humara_theme_setup' );

// Remove the product description Title
add_filter( 'woocommerce_product_description_heading', '__return_null' );


add_theme_support('woocommerce');




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function charlie_salas_humara_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'charlie_salas_humara_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'charlie_salas_humara_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function charlie_salas_humara_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'charlie-salas-humara-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'charlie-salas-humara-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'charlie_salas_humara_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function charlie_salas_humara_theme_scripts() {
	wp_enqueue_style( 'charlie-salas-humara-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'charlie-salas-humara-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'charlie-salas-humara-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'charlie_salas_humara_theme_scripts' );

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

// WOOOOOOO COMMERCE
function charlie_salas_humara_theme_woocommerce_support(){
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'charlie_salas_humara_theme_woocommerce_support');


// add_action( 'after_setup_theme', 'woocommerce_support' );
// function woocommerce_suppoer() {
// 	add_theme_support( 'woocommerce' );
// }
// // Change the product description title
// add_filter('woocommerce_product_description_heading', 'change_product_description_heading');
// function change_product_description_heading() {
//  return __('NEW TITLE HERE', 'woocommerce');
// }

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

add_filter('add_to_cart_redirect', 'lw_add_to_cart_redirect');
function lw_add_to_cart_redirect() {
 global $woocommerce;
 $lw_redirect_checkout = $woocommerce->cart->get_checkout_url();
 return $lw_redirect_checkout;
}

function custom_wc_get_sale_price( $sale_price, $product ) {
	return $product->get_regular_price(); 
		return $sale_price;
	}
	add_filter( 'woocommerce_get_sale_price', 'custom_wc_get_sale_price', 50, 2 );
	add_filter( 'woocommerce_get_price', 'custom_wc_get_sale_price', 50, 2 );

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

function quantity_wp_head() {

	if ( is_product() ) {
		?>
	<style type="text/css">.quantity, .buttons_added { width:0; height:0; display: none; visibility: hidden; }</style>
	<?php
		}
	}
	add_action( 'wp_head', 'quantity_wp_head' );


	function sw_delete_remove_product_notice(){
		$notices = WC()->session->get( 'wc_notices', array() );
		if(isset($notices['success'])){
			for($i = 0; $i < count($notices['success']); $i++){
				if (strpos($notices['success'][$i], __('removed','woocommerce')) !== false) {
					array_splice($notices['success'],$i,1);
				}
			}
			WC()->session->set( 'wc_notices', $notices['success'] );
		}
	}
	
	add_action( 'woocommerce_before_shop_loop', 'sw_delete_remove_product_notice', 5 );
			