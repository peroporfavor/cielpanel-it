<?php
add_action( 'cmb2_admin_init', 'va_metaboxes_info' );

function va_metaboxes_info() {
   $prefix = '_cmb2_';   
   
   $cmb = new_cmb2_box( array(
     'id'           => $prefix . 'metaboxinfo',
     'title'        => __( 'Información de la página', 'tarpulinktanks.cl' ),
     'object_types' => array( 'page', ), // Post type
     'show_names'   => true,
     'show_on'      => array( 'id' => array( 231, ) ), // Uses specific post IDs to display this metabox only on that page
   ) );
   $cmb->add_field( array(
     'name' => 'Direccion',
     'id'   => $prefix . 'direccion',
     'desc' => 'Portugal 1357, Santiago, Chile',
     'type'    => 'text',
   ) );


   $cmb->add_field( array(
    'name' => 'telefono',
    'id'   => $prefix . 'telefono',
    'desc' => 'ejemplo: (+562)21231233',
    'type' => 'text',
    'save_fields' => true, 
  ) );

  $cmb->add_field( array(
    'name' => 'WhatsApp',
    'id'   => $prefix . 'whatsapp',
    'desc' => 'ejemplo: 56998908978',
    'type' => 'text',
    'save_fields' => true, 
  ) );

  $cmb->add_field( array(
    'name' => 'E-mail',
    'id'   => $prefix . 'email',
    'desc' => 'ejemplo: contacto@tarpulintanks.cl',
    'type' => 'text',
    'save_fields' => true, 
  ) );
   

 }
?>