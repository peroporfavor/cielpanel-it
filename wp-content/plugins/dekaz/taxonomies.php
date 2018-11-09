<?php
// Register Custom Taxonomy
function aplica_taxonomy() {
	
		$labels = array(
			'name'                       => _x( 'Aplicaciones', 'Taxonomy General Name', 'enersol.cl' ),
			'singular_name'              => _x( 'Aplicacion', 'Taxonomy Singular Name', 'enersol.cl' ),
			'menu_name'                  => __( 'Aplicaciones', 'enersol.cl' ),
			'all_items'                  => __( 'Todas las Aplicaciones', 'enersol.cl' ),
			'parent_item'                => __( 'Parent Item', 'enersol.cl' ),
			'parent_item_colon'          => __( 'Parent Item:', 'enersol.cl' ),
			'new_item_name'              => __( 'New Item Name', 'enersol.cl' ),
			'add_new_item'               => __( 'Add New Item', 'enersol.cl' ),
			'edit_item'                  => __( 'Edit Item', 'enersol.cl' ),
			'update_item'                => __( 'Update Item', 'enersol.cl' ),
			'view_item'                  => __( 'View Item', 'enersol.cl' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'enersol.cl' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'enersol.cl' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'enersol.cl' ),
			'popular_items'              => __( 'Popular Items', 'enersol.cl' ),
			'search_items'               => __( 'Search Items', 'enersol.cl' ),
			'not_found'                  => __( 'Not Found', 'enersol.cl' ),
			'no_terms'                   => __( 'No items', 'enersol.cl' ),
			'items_list'                 => __( 'Items list', 'enersol.cl' ),
			'items_list_navigation'      => __( 'Items list navigation', 'enersol.cl' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'aplicaciones', array( 'productosenersol' ), $args );
	
	}
    add_action( 'init', 'aplica_taxonomy', 0 );
    ?>