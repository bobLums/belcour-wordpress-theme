<?php

function scripts()
{
	wp_enqueue_script('jquery');

	wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
	wp_enqueue_script('app');

	wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','scripts');

// Theme Options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus

register_nav_menus(
	array(
		'main-menu' => 'Main Menu Location',
	)
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Custom Image Sizes
add_image_size('blog-small', 300, 300, true);
add_image_size('blog-med', 540, 325, true);
add_image_size('page-img', 500, 400, false);
add_image_size('full-width', 1200, 600, false);
add_image_size('full-height', 2000, 1000, false);

// Custom Post Types
function custom_posts()
{
	$args = array(
		'labels' => array(
						'name' => 'Recipes',
						'singualr_name' => 'Recipe',
					),
		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'comments', 'editor', 'thumbnail', 'custom-fields', 'author'),
		'taxonomies' => array('types', 'components'),  
		'menu_icon' => 'dashicons-carrot',
	);
	register_post_type('recipes', $args);

	$args2 = array(
		'labels' => array(
						'name' => 'Products',
						'singualr_name' => 'Product',
					),
		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'comments', 'editor', 'thumbnail', 'custom-fields', 'author'),  
		'menu_icon' => 'dashicons-coffee',
	);
	register_post_type('products', $args2);

	$args3 = array(
		'labels' => array(
						'name' => 'Press',
						'singualr_name' => 'Press',
					),
		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'comments', 'editor', 'thumbnail', 'custom-fields', 'author'), 
		'menu_icon' => 'dashicons-media-text',
	);
	register_post_type('press', $args3);
}
add_action('init', 'custom_posts');

// Custom Taxonomy
function custom_taxonomy()
{
	$args = array(
		'labels' => array(
			'name' => 'Types',
			'singular_name' => 'Type',
		),
		'public' => true,
		'hierarchical' => true,
		'show_admin_column' => true,
	);
	register_taxonomy('types', array('recipes'), $args);

	$args1 = array(
		'labels' => array(
			'name' => 'Components',
			'singular_name' => 'Component',
		),
		'public' => true,
		'hierarchical' => true,
		'show_admin_column' => true,
	);
	register_taxonomy('components', array('recipes'), $args1);

}
add_action('init', 'custom_taxonomy');

/*! Remove tags support from posts
function myprefix_unregister_tags() {
    unregister_taxonomy_for_object_type('post_tag', 'recipes');
}
add_action('init', 'myprefix_unregister_tags'); */

// Register Sidebars
function my_sidebars()
{
	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'blog-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);
}
add_action('widgets_init','my_sidebars');

//Comments Customization

//Comments: Remove Website Field 
add_filter('comment_form_default_fields', 'website_remove');
function website_remove($fields)
{
if(isset($fields['url']))
unset($fields['url']);
return $fields;
}

/**
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
}

// Shortcodes Set Up

include('custom-shortcodes.php');

// woocommerce Customization

////////////////

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_theme_support( 'wc-product-gallery-slider' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'woocommerce', array(
'thumbnail_image_width' => 200,
'gallery_thumbnail_image_width' => 100,
'single_image_width' => 500,
) );

/////////////// Shop Page Edits

remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

add_action( 'before_woocommerce_init', function() {
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
} );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<div class="container">';
}

function my_theme_wrapper_end() {
    echo '</div>';
}

// Adding row div to the loop

function my_before_loop() {
	echo '<div class="row mb-5">';
}
add_action( 'woocommerce_before_shop_loop', 'my_before_loop', 1 );

function my_after_loop() {
	echo '</div>';
}
add_action( 'woocommerce_after_shop_loop', 'my_after_loop', 90 );

//  Adding col divs to products

add_filter('post_class', function($classes, $class, $product_id) {
	if( is_shop() ) :
        $classes = array_merge(['col-6','mb-3'], $classes);
		return $classes;
    endif; 
},10,3);

// Customize thumbnail

function woocommerce_template_loop_product_thumbnail(){
	$featured_img_url = get_the_post_thumbnail_url($post->ID, 'page-img'); 
	$prod_title = get_the_title();;
	echo '<img src="' .$featured_img_url .'" alt="' .$prod_title .'" class="img-responsive w-100 mb-3">';
}

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/////////////// Single Product Page Edits

// Add row div and first call

function my_before_single_product() {
	echo '<div class="row" style="margin-top: 100px;"><div class="col-md-6 mb-3">';
}
function before_single_product_end() {
	echo '</div><div class="col-md-6 mb-3">';
}
add_action( 'woocommerce_before_single_product_summary', 'my_before_single_product', 1 );
add_action( 'woocommerce_before_single_product_summary', 'before_single_product_end', 90 );

function after_summary() {
	echo '</div>';
}
add_action( 'woocommerce_single_product_summary', 'after_summary', 90 );

function before_reviews() {
	echo '<div class="mx-auto w-100 mb-5"><hr></div><div class="col mb-5">';
}
add_action( 'woocommerce_after_single_product_summary', 'before_reviews', 1 );

function after_reviews() {
	echo '</div>';
}
add_action( 'woocommerce_after_single_product_summary', 'after_reviews', 90 );

/* Remove Categories from Single Products */

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// 1. Remove the description product tab
add_filter( 'woocommerce_product_tabs', 'remove_descrip_product_tab', 98 );
function remove_descrip_product_tab( $tabs ) {
    // Remove the description tab
    unset( $tabs['description'] );

    return $tabs;
}

// 2. Add the product description after the product short description
add_action( 'woocommerce_single_product_summary', 'my_custom_action', 60 );
function my_custom_action() {
    global $post;

    // Product description output
    echo '<div class="product-post-content">' . the_content() . '</div>';
}

/////////////// Cart Page Edits

add_filter( 'woocommerce_cart_item_thumbnail', function( $image, $cart_item, $cart_item_key ){
 $product = $cart_item['data'];
 return $product->get_image( 'gallery_thumbnail_image_width' );
}, 3, 100 );