 <?php
  // $args = array(
  //     'theme_location' => 'top-menu',
  //     'container' => 'nav',
  //     'container_class' => 'top-menu',
  //     'container_id' => 'top-menu',
  //     'link_before' => '<span class="sr-text">',
  //     'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
  //     'walker'			=> new WP_Bootstrap_Navwalker(),
  //     'link_after' => '</span>'
  // );
  // wp_nav_menu($args);
  ?>
<header class="head">
  <div class="logo">
    <a href="
	    <?php  echo pll_home_url(); ?>
			
	
		    
			"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>"> </a>
  </div>
  <div class="menumovil"> <i class="fa fa-bars" aria-hidden="true"></i> </div>
  <?php
 
 $args = array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
      'depth'				=> 3, // 1 = with dropdowns, 0 = no dropdowns.
      'container_class' => 'menu-principal navbar-collapse',
      'container_id' => 'menu-principal bs-example-navbar-collapse-1',
      'link_before' => '<span class="sr-text">',
      // 'menu_class'		=> 'mr-auto',
      // 'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
      // 'walker'			=> new WP_Bootstrap_Navwalker(),
      'link_after' => '</span>'
  );
  wp_nav_menu($args);
  ?>

<div class="movilFull">
  <i class="fa fa-times" aria-hidden="true"></i>
  <?php 
    $args = array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
      'container_class' => 'menu-movil2',
      'container_id' => 'menu-movil2',
      'link_before' => '<span class="sr-text">',
      'link_after' => '</span>'
  );
  wp_nav_menu($args); 
  ?>

</div> 

</header>