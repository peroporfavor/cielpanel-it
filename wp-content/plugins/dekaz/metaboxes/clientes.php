<?php
add_action( 'cmb2_admin_init', 'va_metaboxes_clientes' );
include (plugin_dir_path( __FILE__ ) . '../ids.php');

function va_metaboxes_clientes() {
   $prefix = '_cmb2_';   
   global $id_clientes;
   global $pagina;
   $cmb2 = new_cmb2_box( array(
    'id'           => $prefix . 'cliente_metabox',
    'title'        => __( 'Clientes en el slider', $pagina ),
    'object_types' => array( 'page', ), // Post type
    'show_on'      => array( 'id' => array( $id_clientes, ) ), // Uses specific post IDs to display this metabox only on that page
) );
      //Creates grouping
      $group_field_id = $cmb2->add_field( array(
        'id'      => $prefix . 'metagroup_cliente',
        'type'    => 'group',
        // 'show_on'      => array( 'id' => array( 231, ) ),
        'options' => array(
            'group_title'   => __( 'Cliente {#} ', $pagina ),
            'add_button'    => __( 'Agregar cliente', $pagina ),
            'remove_button' => __( 'Quitar cliente', $pagina ),
            'sortable'      => true,
        ),
    ) );

    $cmb2->add_group_field( $group_field_id, array(
      'name' => 'Nombre Cliente',
      'id'   => $prefix . 'cliente_nom',
      'type' => 'text',
    ) );

    $cmb2->add_group_field( $group_field_id, array(
      'name' => 'URL Cliente',
      'id'   => $prefix . 'cliente_web',
      'type' => 'text',
    ) );

    $cmb2->add_group_field( $group_field_id, array(
      'name' => 'logo del cliente',
      'id'   => $prefix . 'cliente_file',
      'type' => 'file',
    ) );
   

 }
?>