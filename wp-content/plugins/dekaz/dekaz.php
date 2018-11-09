<?php
/*
Plugin Name: dekaz
Plugin URI: www.dekaz.cl
Description: Agrega custom post y tambien el metabox extra
Version: 0.1.0
Author: Patricio Gonzalez
Author URI: http://www.dekaz.cl
Text Domain: enersol
Domain Path: /languages
*/

if (file_exists (dirname( __FILE__ ) . '/CMB2-trunk/init.php')) {
	require_once dirname(__FILE__).'/CMB2-trunk/init.php';
  }

//Llamar 
require_once dirname(__FILE__).'/metaboxes.php';
// require_once dirname(__FILE__).'/custompost.php';
// require_once dirname(__FILE__).'/shortcodes.php';
?>
