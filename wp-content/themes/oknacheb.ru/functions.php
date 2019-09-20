<?php
/**
 * oknacheb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oknacheb
 */

if ( ! function_exists( 'oknacheb_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function oknacheb_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on oknacheb, use a find and replace
         * to change 'oknacheb' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'oknacheb', get_template_directory() . '/languages' );

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
         'menu-1' => esc_html__( 'Primary', 'oknacheb' ),
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
        add_theme_support( 'custom-background', apply_filters( 'oknacheb_custom_background_args', array(
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
     }
  endif;
  add_action( 'after_setup_theme', 'oknacheb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oknacheb_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'oknacheb_content_width', 640 );
}
add_action( 'after_setup_theme', 'oknacheb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oknacheb_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'oknacheb' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'oknacheb' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
 ) );
}
add_action( 'widgets_init', 'oknacheb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function my_jquery() {
 wp_deregister_script( 'jquery-core' );
 wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, null );
 wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'my_jquery' );

function my_vk_api() {
 wp_deregister_script( 'vk-api' );
 wp_register_script( 'vk-api', 'https://vk.com/js/api/openapi.js?147', false, null );
 wp_enqueue_script( 'vk-api' );
}

add_action( 'wp_enqueue_scripts', 'my_vk_api' );


function mihdan_add_defer_attribute( $tag, $handle ) {
    
  $handles = array(
    'my-js-handle',
    'another-handle',
  );
    
   foreach( $handles as $defer_script) {
      if ( $defer_script === $handle ) {
         return str_replace( ' src', ' async="async" src', $tag );
      }
   }
 
   return $tag;
}
add_filter( 'script_loader_tag', 'mihdan_add_defer_attribute', 10, 2 );


/* Enqueue scripts and styles.*/
function oknacheb_scripts() {
  wp_enqueue_style( 'libs-styles', get_stylesheet_directory_uri() . '/css/libs.min.css' );
  wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/style.css' );
  wp_enqueue_style( 'media-style', get_stylesheet_directory_uri() . '/css/media.min.css' );

  wp_enqueue_script( 'libs-scripts', get_template_directory_uri() . '/js/libs.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'common-script', get_template_directory_uri() . '/js/common.js', array('jquery', 'libs-scripts'), null, true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
 }
}

add_action( 'wp_enqueue_scripts', 'oknacheb_scripts' );

/* Отключаем админ панель для всех, кроме администраторов. */
if (!current_user_can('administrator')):
 show_admin_bar(false);
endif;

add_action( 'after_setup_theme', function() {
  add_theme_support( 'pageviews' );
});

/*
 * Implement the Custom Header feature.

require get_template_directory() . '/inc/custom-header.php';

 * Custom template tags for this theme.

require get_template_directory() . '/inc/template-tags.php';

 * Functions which enhance the theme by hooking into WordPress.

require get_template_directory() . '/inc/template-functions.php';

 * Customizer additions.

require get_template_directory() . '/inc/customizer.php';

 * Load Jetpack compatibility file.

if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}
*/