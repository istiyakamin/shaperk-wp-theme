<?php
/**
 * Shaperk functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shaperk
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'shaperk_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shaperk_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Shaperk, use a find and replace
		 * to change 'shaperk' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shaperk', get_template_directory() . '/languages' );

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
				'menu-1'=> esc_html__( 'Primary', 'shaperk' ),
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
				'shaperk_custom_background_args',
				array(
					'default-color'=> 'ffffff',
					'default-image'=> '',
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
				'height'     => 250,
				'width'      => 250,
				'flex-width' => true,
				'flex-height'=> true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'shaperk_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shaperk_content_width() {
	$GLOBALS['content_width']= apply_filters( 'shaperk_content_width', 640 );
}
add_action( 'after_setup_theme', 'shaperk_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shaperk_widgets_init() {
	register_sidebar(
		array(
			'name'         => esc_html__( 'Sidebar', 'shaperk' ),
			'id'           => 'sidebar-1',
			'description'  => esc_html__( 'Add widgets here.', 'shaperk' ),
			'before_widget'=> '<section id="%1$s"class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title'  => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shaperk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shaperk_scripts() {
	//CSS
	wp_enqueue_style( 'shaperk-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'main-shaperk-css', 'https://shaperk.com/saas/dist/style.css');
	//wp_style_add_data( 'shaperk-style', 'rtl', 'replace' );

	//JS
	wp_enqueue_script( 'shaperk-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main-bootstrap-bundle','https://shaperk.com/saas/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-jquery','https://shaperk.com/saas/dist/js/jquery.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-classy-nav','https://shaperk.com/saas/dist/js/default/classy-nav.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-waypoints.min.js','https://shaperk.com/saas/dist/js/waypoints.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-jquery-easing','https://shaperk.com/saas/dist/js/jquery.easing.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-jquery-scrollup','https://shaperk.com/saas/dist/js/default/jquery.scrollup.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-owl-carousol','https://shaperk.com/saas/dist/js/owl.carousel.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-imagesloaded','https://shaperk.com/saas/dist/js/imagesloaded.pkgd.min.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'main-isotope','https://shaperk.com/saas/dist/js/default/isotope.pkgd.min.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'main-magnific-popup','https://shaperk.com/saas/dist/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-animatedheadline','https://shaperk.com/saas/dist/js/jquery.animatedheadline.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-wow','https://shaperk.com/saas/dist/js/wow.min.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-cookiealert','https://shaperk.com/saas/dist/js/default/cookiealert.js', array(), _S_VERSION, true);
    wp_enqueue_script( 'main-mail','https://shaperk.com/saas/dist/js/default/mail.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'main-scroll-indicator','https://shaperk.com/saas/dist/js/default/scrollindicator.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'main-active','https://shaperk.com/saas/dist/js/default/active.js', array(), _S_VERSION, true);


    // <script src=""></script>
    // <script src="/saas/dist/js/jquery.magnific-popup.min.js"></script>
    // <script src="/saas/dist/js/jquery.animatedheadline.min.js"></script>
    // <script src="/saas/dist/js/jquery.counterup.min.js"></script>
    // <script src="/saas/dist/js/wow.min.js"></script>
    // <script src="/saas/dist/js/jarallax.min.js"></script>
    // <script src="/saas/dist/js/jarallax-video.min.js"></script>
    // <script src="/saas/dist/js/default/cookiealert.js"></script>
    // <script src="/saas/dist/js/default/jquery.passwordstrength.js"></script>
    // <script src="/saas/dist/js/default/mail.js"></script>
    // <script src="/saas/dist/js/default/active.js"></script>


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shaperk_scripts' );

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
 * Comment Walker additions.
 */
require get_template_directory() . '/inc/Custom_Walker_Comment.php';


// ############## CUSTOM CODE BY ISTYAK

/*
 * custom pagination with bootstrap .pagination class
 * source: http://www.ordinarycoder.com/paginate_links-class-ul-li-bootstrap/
 */
function shaperk_pagination( $echo = true ) {
	global $wp_query;

	$big = 999999999; // need an unlikely integer

	$pages = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type'  => 'array',
			'prev_next'   => true,
			'prev_text'    => __('« Prev'),
			'next_text'    => __('Next »'),
		)
	);

	if( is_array( $pages ) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

		$pagination = '<div class="saasbox-pagination-area mt-5"><nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';

		foreach ( $pages as $page ) {
			$pagination .= "<li class='page-item page-link'><span class=''>$page</span></li>";
		}

		$pagination .= '</ul></nav></div>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
}
