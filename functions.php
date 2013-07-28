<?php
add_theme_support( 'post-thumbnails' );

remove_action('wp_head', 'wp_generator');
add_action( 'init', 'register_portfolio' );

function register_portfolio() {

	$labels = array(
		'name' => _x( 'Portfolio', 'portfolio_item' ),
		'singular_name' => _x( 'Portfolio item', 'portfolio_item' ),
		'add_new' => _x( 'Add new', 'portfolio_item' ),
		'add_new_item' => _x( 'Add New portfolio item', 'portfolio_item' ),
		'edit_item' => _x( 'Edit portfolio item', 'portfolio_item' ),
		'new_item' => _x( 'New portfolio item', 'portfolio_item' ),
		'view_item' => _x( 'View Portfolio item', 'portfolio_item' ),
		'search_items' => _x( 'Search Portfolio', 'portfolio_item' ),
		'not_found' => _x( 'No portfolio found', 'portfolio_item' ),
		'not_found_in_trash' => _x( 'No portfolio found in Trash', 'portfolio_item' ),
		'parent_item_colon' => _x( 'Parent Portfolio item:', 'portfolio_item' ),
		'menu_name' => _x( 'Portfolio', 'portfolio_item' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'Portfolio',
		'supports' => array( 'title', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,

		'show_in_nav_menus' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => false,
		'capability_type' => 'post'
	);

	register_post_type( 'portfolio', $args );

	add_filter('pre_get_posts', 'query_post_type');
	function query_post_type($query) {
		if(is_category() || is_tag()) {
			$post_type = get_query_var('post_type');
			if($post_type) {
				$post_type = $post_type;
			} else {
				$post_type = array('post','portfolio');
			}
			$query->set('post_type',$post_type);
			$query->set('orderby','menu_order');
			$query->set('order','DESC');
		return $query;
		}
	}
}
?>