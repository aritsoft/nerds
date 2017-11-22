<?php

/**

 * adammp functions and definitions.

 *

 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 *

 * @package adammp

 */



/* Constants */



define('ADAMMP_THEMEROOT', get_template_directory_uri() );

define('ADAMMP_IMAGES', ADAMMP_THEMEROOT. '/images' );

define('ADAMMP_JS', ADAMMP_THEMEROOT. '/js' );

define('ADAMMP_CSS', ADAMMP_THEMEROOT. '/css' );

define('ADAMMP_THEMEINCLUDES', get_template_directory(). '/inc' );



$adammp_url = esc_url( admin_url() );



if ( ! function_exists( 'adammp_setup' ) ) :

/**

 * Sets up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which

 * runs before the init hook. The init hook is too late for some features, such

 * as indicating support for post thumbnails.

 */

function adammp_setup() {

	/*

	 * Make theme available for translation.

	 * Translations can be filed in the /languages/ directory.

	 * If you're building a theme based on adammp, use a find and replace

	 * to change 'nerds' to the name of your theme in all the template files.

	 */

	load_theme_textdomain( 'nerds', ADAMMP_THEMEROOT . '/languages' );



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

		'primary' => esc_html__( 'Primary Menu', 'nerds' ),	

        'footer_menu' => esc_html__( 'Footer Menu', 'nerds' ),

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



	/*

	 * Enable support for Post Formats.

	 * See https://developer.wordpress.org/themes/functionality/post-formats/

	 */

	add_theme_support( 'post-formats', array(

		'image',

		'video',

		'audio',

	) );



	// Set up the WordPress core custom background feature.

	add_theme_support( 'custom-background', apply_filters( 'adammp_custom_background_args', array(

		'default-color' => 'ffffff',

		'default-image' => '',

	) ) );

}

endif;

add_action( 'after_setup_theme', 'adammp_setup' );



/**

 * Set the content width in pixels, based on the theme's design and stylesheet.

 *

 * Priority 0 to make it available to lower priority callbacks.

 *

 * @global int $content_width

 */

function adammp_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'adammp_content_width', 640 );

}

add_action( 'after_setup_theme', 'adammp_content_width', 0 );



add_editor_style( 'editor-style.css' );



/**

 * Register widget area.

 *

 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

 */



//Widgets

function adammp_widgets_init() {

    // Blog Right Sidebar widget area, located in the Sidebar. Empty by default.

	register_sidebar( array(

		'name'          => esc_html__( 'Blog Right Sidebar', 'nerds' ),

		'id'            => 'blog-sidebar-right',

		'description'   => esc_html__( 'Add widgets here.', 'nerds' ),   

		'before_widget' => '<section id="%1$s" class="single-widget %2$s">',

		'after_widget'  => '</section>',

		'before_title'  => '<h4 class="widget-title">',

		'after_title'   => '</h4>',

	) );

    

    // Blog Left Sidebar widget area, located in the Sidebar. Empty by default.

	register_sidebar( array(

		'name'          => esc_html__( 'Blog Left Sidebar', 'nerds' ),

		'id'            => 'blog-sidebar-left',

		'description'   => esc_html__( 'Add widgets here.', 'nerds' ),

		'before_widget' => '<section id="%1$s" class="single-widget %2$s">',

		'after_widget'  => '</section>',

		'before_title'  => '<h4 class="widget-title">',

		'after_title'   => '</h4>',

	) );



    // First footer widget area, located in the footer. Empty by default.

    register_sidebar( array(

        'name' => esc_html__( 'Footer 1', 'nerds' ),

        'id' => 'footer-widget-1',

        'description' => esc_html__( 'The first footer widget area', 'nerds' ),

        'before_widget' => '<div id="%1$s" class="%2$s">',

        'after_widget' => '</div>',

        'before_title' => '<h2 class="foot_title">',

        'after_title' => '</h2>',

    ) );

 

    // Second Footer Widget Area, located in the footer. Empty by default.

    register_sidebar( array(

        'name' => esc_html__( 'Footer 2', 'nerds' ),

        'id' => 'footer-widget-2',

        'description' => esc_html__( 'The second footer widget area', 'nerds' ),

        'before_widget' => '<div id="%1$s" class="%2$s">',

        'after_widget' => '</div>',

        'before_title' => '<h2 class="foot_title">',

        'after_title' => '</h2>',

    ) );

 

    // Third Footer Widget Area, located in the footer. Empty by default.

    register_sidebar( array(

        'name' => esc_html__( 'Footer 3', 'nerds' ),

        'id' => 'footer-widget-3',

        'description' => esc_html__( 'The third footer widget area', 'nerds' ),

        'before_widget' => '<div id="%1$s" class="%2$s">',

        'after_widget' => '</div>',

        'before_title' => '<h2 class="foot_title">',

        'after_title' => '</h2>',    

    ) );

 

    // Third Footer Widget Area, located in the footer. Empty by default.

    register_sidebar( array(

        'name' => esc_html__( 'Footer 4', 'nerds' ),

        'id' => 'footer-widget-4',

        'description' => esc_html__( 'The fourth footer widget area', 'nerds' ),

        'before_widget' => '<div id="%1$s" class="%2$s">',

        'after_widget' => '</div>',

        'before_title' => '<h2 class="foot_title">',

        'after_title' => '</h2>',    

    ) );

 

}



add_action( 'widgets_init', 'adammp_widgets_init' );



/**

 * Enqueue scripts and styles.

 */

function adammp_scripts() {

    

    require_once( ADAMMP_THEMEINCLUDES . '/enqueue_styles.php' ); 

    require_once( ADAMMP_THEMEINCLUDES . '/enqueue_scripts.php' );  

    

	wp_enqueue_style( 'adammp-style', get_stylesheet_uri() );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );

	}

}

add_action( 'wp_enqueue_scripts', 'adammp_scripts' );



function adammp_custom_fonts_url() {

    $font_url = '';

    

    /*

    Translators: If there are characters in your language that are not supported

    by chosen font(s), translate this to 'off'. Do not translate into your own language.

     */

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'nerds' ) ) {

        $font_url = add_query_arg( 'family', urlencode( 'Lato:400,700,900|Open Sans:300,400,600,700|Oswald:400,500,600,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );

    }

    return $font_url;

}

/*

Enqueue scripts and styles.

*/

function adammp_gfont_scripts() {

    wp_enqueue_style( 'google-fonts', adammp_custom_fonts_url(), array(), '1.0.0' );

}

add_action( 'wp_enqueue_scripts', 'adammp_gfont_scripts' );





function adam_port_gallery_scripts() {

    $adammp_port_style = get_post_meta( get_the_ID(), 'adam_port_style', true );

    

    if( $adammp_port_style == 'value1' || $adammp_port_style == 'value2' || $adammp_port_style == 'value3' ) {



       wp_register_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', null, '1.6.0', true );



       wp_register_script( 'adam-portfolio-slide', get_template_directory_uri() . '/js/portfolio-slide.js', null, 'null', true );



       wp_enqueue_script( 'slick' );       



       wp_enqueue_script( 'adam-portfolio-slide' );   

    }

}    



add_action( 'wp_enqueue_scripts', 'adam_port_gallery_scripts' );



/**

 * Implement the Custom Header feature.

 */

require ADAMMP_THEMEINCLUDES . '/custom-header.php';



/**

 * Custom template tags for this theme.

 */

require ADAMMP_THEMEINCLUDES . '/template-tags.php';



/**

 * Custom functions that act independently of the theme templates.

 */

require ADAMMP_THEMEINCLUDES . '/extras.php';



/**

 * Customizer additions.

 */

require ADAMMP_THEMEINCLUDES . '/customizer.php';



/**

 * Load Jetpack compatibility file.

 */

require ADAMMP_THEMEINCLUDES . '/jetpack.php';



/**

 * Page and Post custom metabox file.

 */

require ADAMMP_THEMEINCLUDES . '/metabox.php';



/**

 * TGMPA Plugins register.

 */

require_once ADAMMP_THEMEINCLUDES . '/required_plugins.php';



// Redux Initialize

require_once ADAMMP_THEMEINCLUDES . '/adammp-theme-config.php';



// One click demo import

require_once ADAMMP_THEMEINCLUDES . '/adammp_oneclick_demo.php';



/**

 * Remove auto p from the_excerpt function in search pages

 */



if ( is_search() ) {

    remove_filter( 'the_excerpt', 'wpautop');

    function adammp_excerpt_more( $more ) {

        return '';

    }

    add_filter('excerpt_more', 'adammp_excerpt_more');

}



function adammp_post_excerpt_length( $length ) {

	return 20;

}

add_filter( 'excerpt_length', 'adammp_post_excerpt_length', 999 );



function adammp_post_excerpt_more( $more ) {

    return '';

}

add_filter('excerpt_more', 'adammp_post_excerpt_more');





/**

 * Declare WooCommerce Support

 */



add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {

    add_theme_support( 'woocommerce' );

}



add_filter( 'woocommerce_output_related_products_args', 'adammp_related_products_args' );

  function adammp_related_products_args( $args ) {

	$args['posts_per_page'] = 3; // 4 related products

	$args['columns'] = 3; // arranged in 2 columns

	return $args;

}

    

add_filter( 'locale', function() {

    return 'zxx';

});



function adam_sanitize_pagination($content) {

    // Remove role attribute

    $content = str_replace('role="navigation"', '', $content);



    return $content;

}



add_action('navigation_markup_template', 'adam_sanitize_pagination');
function adam_redux_variable() {
    global $adammp_option;  // This is your opt_name.
    return ($adammp_option);
}
function wpd_nav_menu_link_atts( $atts, $item, $args, $depth ){
    if( '/' == substr( $atts['href'], 0, 1 ) ){
		$siteurl = home_url();
        $atts['href'] = $siteurl . $atts['href'];
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wpd_nav_menu_link_atts', 20, 4 );

