<?php
/**
 * @package Autumn_CPT
 * @version 0.2
 */
/*
Plugin Name: Autumn Custom Post Type
Plugin URI: www.example.com
Description: Learning CPTs
Author: Autumn
Version: 0.2
Author URI: http://autumnfjeld.com
*/


function aut_custom_post_type() {
	$labels = array(
		'name'          => __('AutProducts', 'textdomain'),
		'singular_name' => __('AutProduct', 'textdomain'),
	);

	register_post_type('aut_product',
		array(
			'labels'      => $labels,
			'public'      => true,
			'show_in_rest'=> true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'custom-fields'),
			'rewrite'     => array( 'slug' => 'autproducts' ), // my custom slug

		)
	);
}

add_action('init', 'aut_custom_post_type');



add_action('add_meta_boxes', 'add_color_meta_box');

/* Add custom data fields to the add/edit post page. */
function add_color_meta_box() {
	add_meta_box(
		'color_meta', 
		'Color', 
		'show_color_field', 
		'aut_product', 
		'side', 'low');
}


function show_color_field() {
	global $post;
	// $custom = get_post_custom($post->ID);
	// $color_field = $custom['show_color_field'][0];
	?>
	<label>Color:</label>
	<input type='text' name='color_value' value='' />
	<?php
  }
  