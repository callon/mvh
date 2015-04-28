<?php
	
	add_action( 'init', 'create_post_types' );
	function create_post_types() {
		//-----------------------Custom Post Type PROJECT MVH-----------------------//
		$mvh_labels = array(
			'name' => _x('Med Venlig Hilsen projects', 'post type general name'),
			'singular_name' => _x('MVH Project', 'post type singular name'),
			'add_new' => _x('Add New', 'project_mvh'),
			'add_new_item' => __('Add New MVH project'),
			'edit_item' => __('Edit MVH project'),
			'new_item' => __('New MVH project'),
			'all_items' => __('All MVH projects'),
			'view_item' => __('View MVH project'),
			'search_items' => __('Search MVH projects'),
			'not_found' =>  __('No projects from MVH found'),
			'not_found_in_trash' => __('No projects from MVH found in Trash'), 
			'parent_item_colon' => '',
			'menu_name' => __('Projects MVH')
		);
		$mvh_args = array(
			'labels' => $mvh_labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'show_in_menu' => true, 
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true, 
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		); 
		register_post_type('mvh', $mvh_args);
	

		//-----------------------Custom Post Type PROJECT DKB-----------------------//
		$dkb_labels = array(
			'name' => _x('Det Kolde Bord projects', 'post type general name'),
			'singular_name' => _x('DKB Project', 'post type singular name'),
			'add_new' => _x('Add New', 'project_dkb'),
			'add_new_item' => __('Add New DKB project'),
			'edit_item' => __('Edit DKB project'),
			'new_item' => __('New DKB project'),
			'all_items' => __('All DKB projects'),
			'view_item' => __('View DKB project'),
			'search_items' => __('Search DKB projects'),
			'not_found' =>  __('No projects from DKB found'),
			'not_found_in_trash' => __('No projects from DKB found in Trash'), 
			'parent_item_colon' => '',
			'menu_name' => __('Projects DKB')
		);
		$dkb_args = array(
			'labels' => $dkb_labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'show_in_menu' => true, 
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true, 
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		); 
		register_post_type('dkb',$dkb_args);


		//-----------------------Custom Post Type Front Page Segments / General Appearance -----------------------//
		$look_labels = array(
			'name' => _x('Look / Frontpage', 'post type general name'),
			'singular_name' => _x('Look / Frontpage', 'post type singular name'),
			'add_new' => _x('Add New', 'look'),
			'add_new_item' => __('Add new look / frontpage'),
			'edit_item' => __('Edit look / frontpage'),
			'new_item' => __('New look / frontpage'),
			'all_items' => __('Look / Frontpage'),
			'view_item' => __('View look / frontpage'),
			'search_items' => __('Search look / frontpage'),
			'not_found' =>  __('No look / frontpage found'),
			'not_found_in_trash' => __('No look / frontpage found in Trash'), 
			'parent_item_colon' => '',
			'menu_name' => __('Look / Frontpage')
		);
		$look_args = array(
			'labels' => $look_labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'show_in_menu' => true, 
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true, 
			'hierarchical' => false,
			'menu_position' => null,
			'taxonomies' => array('post_tag'), 
			'supports' => array( 'title', 'editor' )
		); 
		register_post_type('look', $look_args);	


//-----------------------Custom Post Type PROMOS DKB / MVH / GENERAL-----------------------//
		$segment_labels = array(
			'name' => _x('Segments', 'post type general name'),
			'singular_name' => _x('Segment', 'post type singular name'),
			'add_new' => _x('Add New', 'segments'),
			'add_new_item' => __('Add new segment'),
			'edit_item' => __('Edit segment'),
			'new_item' => __('New segment'),
			'all_items' => __('All segments'),
			'view_item' => __('View segment'),
			'search_items' => __('Search segments'),
			'not_found' =>  __('No segments found'),
			'not_found_in_trash' => __('No segments found in Trash'), 
			'parent_item_colon' => '',
			'menu_name' => __('Segments')
		);
		$segment_args = array(
			'labels' => $segment_labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'show_in_menu' => true, 
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true, 
			'hierarchical' => false,
			'menu_position' => null,
			'taxonomies' => array('post_tag'), 
			'supports' => array( 'title', 'editor', 'thumbnail' )
		); 
		register_post_type('segment',$segment_args);


		$card_index_labels = array(
			'name' => _x('Card Index', 'post type general name'),
			'singular_name' => _x('card', 'post type singular name'),
			'add_new' => _x('Add New', 'card_index'),
			'add_new_item' => __('Add New Card'),
			'edit_item' => __('Edit card'),
			'new_item' => __('New card'),
			'all_items' => __('All cards'),
			'view_item' => __('View cards'),
			'search_items' => __('Search cards'),
			'not_found' =>  __('No cards found'),
			'not_found_in_trash' => __('No cards found in Trash'), 
			'parent_item_colon' => '',
			'menu_name' => __('Card Index')
		);
		$card_index_args = array(
			'labels' => $card_index_labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true, 
			'show_in_menu' => true, 
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true, 
			'hierarchical' => false,
			'menu_position' => null,
		); 
		register_post_type('card', $card_index_args);

	}
	
	  

?>