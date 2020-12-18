<?php
/**
 * avoriazchalets functions and definitions
 *
 * @package avoriazchalets
 */

/****************************************************/
/*                       Hooks                       /
/****************************************************/

/* Enqueue scripts and styles */
add_action('wp_enqueue_scripts', 'avoriazchalets_scripts');

/* Add Menus */
add_action('init', 'avoriazchalets_custom_menu');

/* Dashboard Config */
add_action('wp_dashboard_setup', 'avoriazchalets_dashboard_widget');

/* Dashboard Style */
add_action('admin_head', 'avoriazchalets_custom_fonts');

/* Remove Default Menu Items */
add_action('admin_menu', 'avoriazchalets_remove_menus');

/* Change Posts Columns */
add_filter('manage_posts_columns', 'avoriazchalets_manage_columns');

/* Reorder Admin Menu */
add_filter('custom_menu_order', 'avoriazchalets_reorder_menu');
add_filter('menu_order', 'avoriazchalets_reorder_menu');

/* Remove Comments Link */
add_action('wp_before_admin_bar_render', 'avoriazchalets_manage_admin_bar');

/* Remove Admin Bar */
add_action('after_setup_theme', 'avoriazchalets_remove_admin_bar');

/**= Add Custom Post Types and Taxonomies =**/

//require_once ('custom-post-types.php');

/****************************************************/
/*                     Functions                     /
/****************************************************/

function avoriazchalets_scripts() {
	wp_enqueue_style( 'avoriazchalets-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
	wp_enqueue_script( 'avoriazchalets-core-js', get_template_directory_uri() . '/inc/js/compiled.js', array('jquery'), true);
	wp_enqueue_script( 'avoriazchalets-owl-js', get_template_directory_uri() . '/inc/js/owl.carousel.min.js', array('jquery'), true);
}

function avoriazchalets_custom_menu() {
	register_nav_menus(array(
		'upper-menu' => __( 'Main Menu Upper' ),
		'lower-menu' => __( 'Main Menu Lower' ),
		'footer-menu' => __( 'Footer Menu' ),
		'guide-menu' => __( 'Guide Pages Menu' ),
		'legal-menu' => __( 'Legal Menu'),
		'mobile-menu' => __( 'Mobile Menu'),
	));
}
add_action( 'init', 'avoriazchalets_custom_menu' );

function avoriazchalets_dashboard_widget() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'avoriazchalets Support', 'avoriazchalets_dashboard_help');
}

function avoriazchalets_dashboard_help() {
	echo file_get_contents(__DIR__ . "/admin-settings/dashboard.html");
}

function avoriazchalets_custom_fonts() {
	echo '<style type="text/css">' . file_get_contents(__DIR__ . "/admin-settings/style-admin.css") . '</style>';

	if(function_exists('acf_add_options_page')) {
		acf_add_options_page(array(
			'page_title' 	=> 'Theme Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'site-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}
}


function avoriazchalets_remove_menus(){
	remove_menu_page( 'edit-comments.php' ); //Comments
}

function avoriazchalets_manage_columns($columns) {
	unset($columns["comments"]);
	return $columns;
}
function pine_add_page_slug_body_class( $classes ) {
    global $post;
    
    if ( isset( $post ) ) {
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}

add_filter( 'body_class', 'pine_add_page_slug_body_class' );

function avoriazchalets_reorder_menu() {
    return array(
		'index.php',                        // Dashboard
		'separator1',                       // --Space--
		'edit.php',                         // Posts
		'edit.php?post_type=page',          // Pages
		'upload.php',                       // Media
		'separator2',                       // --Space--
		'themes.php',                       // Appearance
		'plugins.php',                      // Plugins
		'users.php',                        // Users
		'tools.php',                        // Tools
		'options-general.php',              // Settings
		'wpcf7',                            // Contact Form 7
   );
}

function avoriazchalets_manage_admin_bar(){
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}

/**= Add Custom Post Types and Taxonomies =**/
require_once ('custom-post-types.php');

if(function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function avoriazchalets_remove_admin_bar() {
	show_admin_bar(false);
}
function post_leader_excerpt() {
	global $post;
    $text = get_field('main_copy');
    if ( '' != $text ) {
      $text = strip_shortcodes( $text );
      $text = apply_filters('the_content', $text);
      $text = str_replace(']]>', ']]>>', $text);
      $text_length = strlen($text); // Get text length (characters)
      $excerpt_length = 150;  // 50 desired characters
      $excerpt_more = '...';
      $text = substr($text, 0, $excerpt_length);// Shorten the text
      // If the text is more than 50 characters, append $excerpt_more
      if ($text_length > $excerpt_length) {
        $text .= $excerpt_more;
      }

    }
	return apply_filters('the_excerpt', $text);
}


// add_action('acf/render_field_settings', 'my_admin_only_render_field_settings');

// function my_admin_only_render_field_settings( $field ) {
	
// 	acf_render_field_setting( $field, array(
// 		'label'			=> __('Display as Currency?'),
// 		'instructions'	=> '',
// 		'name'			=> 'currency',
// 		'type'			=> 'true_false',
// 		'ui'			=> 1,
// 	), true);
	
// }


// function change numbers to UK format (comma)

add_filter('acf/format_value/type=number', 'fix_number', 20, 3);
function fix_number($value, $post_id, $field) {
$value = number_format($value);
  return $value;
}

function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyAww1oT-GyrFh_DTnnBF6LwtUBkEVunVlU';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/*
* Add option of uploading images to posts
*/
add_theme_support( 'post-thumbnails' );

// Enter custom JS TO ADMIN AREA


function banner_admin_script() {
    global $post_type;
    if ( $post_type == 'property' )
		wp_enqueue_script( 'camps-script', get_template_directory_uri().'/admin-settings/admin.js', '', '', true ); // "TRUE" - ADDS JS TO FOOTER
		
		if ( $post_type == 'intproperty' )
        wp_enqueue_script( 'inter-script', get_template_directory_uri().'/admin-settings/admininter.js', '', '', true ); // "TRUE" - ADDS JS TO FOOTER
}
add_action( 'admin_print_scripts-post-new.php', 'banner_admin_script', 11 );
add_action( 'admin_print_scripts-post.php', 'banner_admin_script', 11 );