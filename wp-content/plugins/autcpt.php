<?php
/**
 * @package Autumn_CPT
 * @version 0.1
 */
/*
Plugin Name: Autumn Custom Post Type
Plugin URI: www.example.com
Description: Learning CPTs
Author: Autumn
Version: 0.1
Author URI: http://autumnfjeld.com
*/


function aut_custom_post_type() {
	register_post_type('aut_product',
		array(
			'labels'      => array(
				'name'          => __('AutProducts', 'textdomain'),
				'singular_name' => __('AutProduct', 'textdomain'),
			),
				'public'      => true,
                'show_in_rest'=> true,
				'has_archive' => true,
                'rewrite'     => array( 'slug' => 'autproducts' ), // my custom slug

		)
	);
}

add_action('init', 'aut_custom_post_type');