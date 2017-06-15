<?php


// Add styles and scripts to the header/footer
function epc_scripts() {
	wp_enqueue_style( 'Google-Fonts', 'https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
	wp_enqueue_style( 'Main', get_stylesheet_uri(), array(), '1.00' );
	wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/lib/owl/owl.carousel.min.css', array(), '1.00');
	wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/lib/owl/owl.carousel.min.js', array('jquery'), '1.00', true );
	wp_enqueue_script( 'magnificpopup-js', get_template_directory_uri() . '/lib/magnificpopup/jquery.magnific-popup.min.js', array('jquery'), '1.00', true );
	wp_enqueue_style( 'magnificpopup-css', get_template_directory_uri() . '/lib/magnificpopup/magnific-popup.css', array(), '1.00');
	wp_enqueue_script( 'bxslider-js', get_template_directory_uri() . '/lib/bxslider/jquery.bxslider.min.js', array('jquery'), '1.00', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.00', true );
}

add_action( 'wp_enqueue_scripts', 'epc_scripts');

add_theme_support( 'post-thumbnails' ); 

add_image_size( 'page-banner', 1920, 279, true );
add_image_size( 'partner-logo', 300, 241 );
add_image_size( 'blog-thumb', 961, 399, true );

// Content width for embedded content
if ( ! isset( $content_width ) ) {
	$content_width = 980;
}

// Add some nice formatting for the page titles
function epc_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'epc' ), max( $paged, $page ) );

	return $title;
}

add_filter( 'wp_title', 'epc_wp_title', 10, 2 );


// Register Menu
register_nav_menus( array(
	'main' => __( 'Main Menu'),
) );


function register_my_cpts() {

	/**
	 * Post Type: Partners.
	 */

	$labels = array(
		"name" => __( 'Partners', '' ),
		"singular_name" => __( 'Partner', '' ),
	);

	$args = array(
		"label" => __( 'Partners', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "partner", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "partner", $args );
}

add_action( 'init', 'register_my_cpts' );

function register_my_taxes() {

	/**
	 * Taxonomy: Locations.
	 */

	$labels = array(
		"name" => __( 'Locations', '' ),
		"singular_name" => __( 'Location', '' ),
	);

	$args = array(
		"label" => __( 'Locations', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Locations",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'partner_location', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "partner_location", array( "partner" ), $args );

	/**
	 * Taxonomy: Partner Category.
	 */

	$labels = array(
		"name" => __( 'Partner Category', '' ),
		"singular_name" => __( 'Partner Categories', '' ),
	);

	$args = array(
		"label" => __( 'Partner Category', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Partner Category",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'partner_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "partner_category", array( "partner" ), $args );
}

add_action( 'init', 'register_my_taxes' );


function epc_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Col 1',
		'id'            => 'footer1',
		'before_widget' => '<div class="navigation-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Col 2',
		'id'            => 'footer2',
		'before_widget' => '<div class="stuff-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Col 3',
		'id'            => 'footer3',
		'before_widget' => '<div class="connect-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'epc_widgets_init' );


// Head Cleanup
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version

remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );




?>