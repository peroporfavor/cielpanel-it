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

    <h1 class="titulo">Exterior</h1>

   



<p>
Installing and opaque envelopes and glass facades, with solutions:

</p>
<div class="vineta-quehacemos">
<ul>
    <li>Design assistance envelope.</li>
    <li>Eifs, simple and full.</li>
    <li>Stucco.</li>
    <li>Ventilated facades.</li>
    <li>Glazed curtain walls and opaque.</li>
    <li>Lightweight metal coatings.</li>
    <li>Light support structures coatings.</li>
    <li>Covered in metalcon.</li>
    </ul>

</div>
</div>
<div class="fondogris">

<?php echo do_shortcode('[widgetkit id="14"]'); ?>

</div>



<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>