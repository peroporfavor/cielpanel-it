<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="<?php	bloginfo('html_type');?>">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
</head>

<body>
<?php get_header() ?>
<!-- <div id="embedpop"> -->
    <!-- <div class="embedcerrar">X</div>    -->
    <!-- <object data=" -->
    <?php 
    // echo get_template_directory_uri() . '/assets/pdf/trayectoriaCielpanel.pdf'
    ?>
    <!-- " type="application/pdf" width="90%" height="auto"></object>  -->
<!-- </div> -->
<div class="margenes">

    <h1 class="titulo">Curtain Walls</h1>

   



<p>
Assistance in design to architecture, engineering details, purchasing and logistics offices, manufacture and installation of Curtain Walls.


</p>
<p>
Cielpanel has own systems of profiles on demand or structural silicone. can also develop specific systems for projects.

</p>

<?php echo do_shortcode('[widgetkit id="21"]'); ?>
</div>



<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>