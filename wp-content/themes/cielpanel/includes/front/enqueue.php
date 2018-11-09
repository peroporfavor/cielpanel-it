<?php
function cielp_styles(){
    //Registrar los estilos
    wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css',array(),'7.0.0');
    wp_register_style('googleFont', 'https://fonts.googleapis.com/css?family=Lato:400,700',array('normalize'),'1.1');
    wp_register_style('styleFlex', get_template_directory_uri() . '/assets/css/flexslider.css',array('normalize'),'1.0');
    wp_register_style('magnificPopup', get_template_directory_uri() . '/assets/css/magnific-popup.css','1.1');
    wp_register_style('styleFlexiSel', get_template_directory_uri() . '/assets/css/flexisel.css',array('normalize'),'1.0');
    wp_register_style('style', get_template_directory_uri() . '/assets/css/app.css',array('normalize'),'1.07');
    wp_register_style('fontawesomecss', get_template_directory_uri() . '/assets/css/font-awesome.min.css',array(),'1.0');
    wp_enqueue_style('normalize');
    wp_enqueue_style('googleFont');
    wp_enqueue_style('fontawesomecss');

    wp_enqueue_style('styleFlexiSel');
    wp_enqueue_style('styleFlex');
    wp_enqueue_style('style');
    wp_enqueue_style('magnificPopup');
    
    

    //Registrar JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('scriptsFlex',get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js',array(),'1.0.0',true);
    wp_enqueue_script('countCircle',get_template_directory_uri() . '/assets/js/jquery.countupcircle.min.js',array(),'1.0.0',true);
    wp_enqueue_script('videoPopUp',get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',array(),'1.0.0',true);
    wp_enqueue_script('flexisel',get_template_directory_uri() . '/assets/js/jquery.flexisel.js',array(),'1.0.0',true);
    wp_enqueue_script('scripts',get_template_directory_uri() . '/assets/js/app.js',array(),'1.0.2',true);
    wp_enqueue_script('script_SL',get_template_directory_uri() . '/assets/js/slider.js',array(),'1.0.0',true);
    wp_enqueue_script('live',get_template_directory_uri() . '/assets/js/live.js',array(),'1.0.0',true);

    
}
add_action('wp_enqueue_scripts','cielp_styles');