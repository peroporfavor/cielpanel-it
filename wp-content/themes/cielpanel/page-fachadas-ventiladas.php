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

    <h1 class="titulo">Fachadas Ventiladas</h1>

   



<p>
Diseño e instalación de Fachadas Ventiladas. Disponibilidad de instalar distintos revestimientos, como HPL, Placas de Fibrocemento de Alta densidad u otros similares. Cielpanel dispone de estructuras soportante de fachada tanto en aluminio, como los perfiles ‘T’ y ‘L’, como estructuras especiales para este tipo de fachadas diseñadas en acero galvanizado.
Cielpanel dispone, si el proyecto lo exige, de la posibilidad de diseñar perfiles soportante de fachada especiales que permitan resolver nuevos desafíos.

</p>

<?php echo do_shortcode('[widgetkit id="19"]'); ?>
</div>



<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>