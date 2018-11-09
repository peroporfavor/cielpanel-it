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
Instalación de envolventes y fachadas opacas y acristaladas, con soluciones de:

</p>
<div class="vineta-quehacemos">
<ul>
    <li>Asistencia en diseño de envolventes</li>
    <li>Eifs, simple y full</li>
    <li>Stucco</li>
    <li>Fachadas Ventiladas</li>
    <li>Muros cortina acristalados y opacos</li>
    <li>Revestimientos metálicos livianos</li>
    <li>Estructuras livianas de soporte de revestimientos</li>
    <li>Cubiertas en metalcon</li>
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