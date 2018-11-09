<?php
if ( ! function_exists('jugadores') ) {

	// Register Custom Post Type
	function jugadores() {
		$labels = array(
			'name'                  => _x( 'jugadores', 'jugadores', 'unosport.cl' ),
			'singular_name'         => _x( 'jugadores', 'jugador', 'unosport.cl' ),
			'menu_name'             => __( 'jugadores', 'unosport.cl' ),
			'name_admin_bar'        => __( 'jugadores', 'unosport.cl' ),
			'archives'              => __( 'Item Archives', 'unosport.cl' ),
			'attributes'            => __( 'Item Attributes', 'unosport.cl' ),
			'parent_item_colon'     => __( 'Parent Item:', 'unosport.cl' ),
			'all_items'             => __( 'All Items', 'unosport.cl' ),
			'add_new_item'          => __( 'Add New Item', 'unosport.cl' ),
			'add_new'               => __( 'Agregar nuevo', 'unosport.cl' ),
			'new_item'              => __( 'Agregar items', 'unosport.cl' ),
			'edit_item'             => __( 'Editar items', 'unosport.cl' ),
			'update_item'           => __( 'Update Item', 'unosport.cl' ),
			'view_item'             => __( 'View Item', 'unosport.cl' ),
			'view_items'            => __( 'View Items', 'unosport.cl' ),
			'search_items'          => __( 'Search Item', 'eunosport.cl' ),
			'not_found'             => __( 'Not found', 'unosport.cl' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'unosport.cl' ),
			'featured_image'        => __( 'Featured Image', 'unosport.cl' ),
			'set_featured_image'    => __( 'Set featured image', 'unosport.cl' ),
			'remove_featured_image' => __( 'Remove featured image', 'unosport.cl' ),
			'use_featured_image'    => __( 'Use as featured image', 'unosport.cl' ),
			'insert_into_item'      => __( 'Insert into item', 'unosport.cl' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'unosport.cl' ),
			'items_list'            => __( 'Items list', 'unosport.cl' ),
			'items_list_navigation' => __( 'Items list navigation', 'unosport.cl' ),
			'filter_items_list'     => __( 'Filter items list', 'unosport.cl' ),
		);
		$args = array(
			'label'                 => __( 'jugadores', 'unosport.cl' ),
			'description'           => __( 'Post Type Description', 'unosport.cl' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'excerpt', 'author', 'thumbnail'),
			'taxonomies'            => array( 'category',),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'templates'				=> true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-universal-access-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'jugadores', $args );
	}
	add_action( 'init', 'jugadores');

    }
?>