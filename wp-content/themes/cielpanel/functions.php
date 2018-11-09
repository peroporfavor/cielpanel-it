<?php
//hooks
include ( get_stylesheet_directory() . '/includes/front/enqueue.php' ); //aqui coloco los css
require_once(get_template_directory() .  '/includes/class-wp-bootstrap-navwalker.php');
function cielpanel_menus(){
    //Registrar menus
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'cielpanel'),
        'social-menu' => __('Social Menu', 'cielpanel'),
        'top-menu' => __('top Menu', 'cielpanel')
    ));
}
add_action('init','cielpanel_menus');

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');