<?php
/**
 * Raw labs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Raw_labs
 */

if ( ! defined( 'RAW_LABS_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'RAW_LABS_VERSION', '1.0.0' );
}

if ( ! function_exists( 'raw_labs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function raw_labs_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Raw labs, use a find and replace
		 * to change 'raw-labs' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'raw-labs', get_template_directory() . '/languages' );

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
				'header-menu' => esc_html__( 'Header Menu', 'raw-labs' )
			)
		);

        class Menu_With_Description extends Walker_Nav_Menu {
            function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
                global $wp_query;
                $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        
                $class_names = $value = '';
        
                $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
                $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
                $class_names = ' class="' . esc_attr( $class_names ) . '"';
        
                $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
        
                $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
                $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
                $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
                $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
        
                $item_output = $args->before;
                $item_output .= '<a'. $attributes .'>';
                $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
                // $item_output .= '<br /><span class="sub">' . $item->description . '</span>';
                $item_output .= '</a>';
                $item_output .= $args->after;
        
                $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
        }

        
        

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
				'raw_labs_custom_background_args',
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
add_action( 'after_setup_theme', 'raw_labs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function raw_labs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'raw_labs_content_width', 640 );
}
add_action( 'after_setup_theme', 'raw_labs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function raw_labs_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'raw-labs' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'raw-labs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'raw_labs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function raw_labs_scripts() {
    wp_enqueue_style( 'raw-labs-fullpage-style', get_template_directory_uri() . '/css/vendor/fullpage.min.css', array(), RAW_LABS_VERSION);
    wp_enqueue_style( 'raw-labs-gridlex-style', get_template_directory_uri() . '/css/vendor/gridlex.min.css', array(), RAW_LABS_VERSION); 
    wp_enqueue_style( 'raw-labs-modal-style', get_template_directory_uri() . '/css/vendor/jquery.modal.min.css', array(), RAW_LABS_VERSION);
    wp_enqueue_style( 'raw-labs-aos-style', get_template_directory_uri() . '/css/vendor/aos.css', array(), RAW_LABS_VERSION);
    wp_enqueue_style( 'raw-labs-tooltip-style', get_template_directory_uri() . '/css/vendor/tooltip.css', array(), RAW_LABS_VERSION);   
    wp_enqueue_style( 'raw-labs-style', get_stylesheet_uri(), array(), RAW_LABS_VERSION );
    wp_style_add_data( 'raw-labs-style', 'rtl', 'replace' );
    

    
    wp_enqueue_script( 'raw-labs-navigation', get_template_directory_uri() . '/js/vendor/modernizr-3.11.2.min.js', array(), RAW_LABS_VERSION, true );
    wp_enqueue_script( 'raw-labs-fullpage', get_template_directory_uri() . '/js/vendor/fullpage.min.js', array(), RAW_LABS_VERSION, true );
    wp_enqueue_script( 'raw-labs-scrolloverflow', get_template_directory_uri() . '/js/vendor/scrolloverflow.min.js', array(), RAW_LABS_VERSION, true );  
    wp_enqueue_script( 'raw-labs-modal', get_template_directory_uri() . '/js/vendor/jquery.modal.min.js', array(), RAW_LABS_VERSION, true );
    wp_enqueue_script( 'raw-labs-aos', get_template_directory_uri() . '/js/vendor/aos.js', array(), RAW_LABS_VERSION, true ); 
    wp_enqueue_script( 'raw-labs-tooltip', get_template_directory_uri() . '/js/vendor/tooltip.js', array(), RAW_LABS_VERSION, true );  
    wp_enqueue_script( 'raw-labs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), RAW_LABS_VERSION, true );
    wp_enqueue_script( 'raw-labs-main', get_template_directory_uri() . '/js/main.js', array(), RAW_LABS_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'raw_labs_scripts' );

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

/**
 * Hide Admin Bar
 */
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
  show_admin_bar(false);
}

/**
 * Excerpt
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Change dashboard Posts to News
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
    $labels->all_items = 'All News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
}

add_action( 'init', 'cp_change_post_object' );

add_action('template_redirect', 'ehi_redirect_archive');
function ehi_redirect_archive()
{
    if (is_archive() || is_singular( 'study' ))
	if (is_archive())
    {
        wp_redirect(home_url(), 301);
        exit;
    }
}
