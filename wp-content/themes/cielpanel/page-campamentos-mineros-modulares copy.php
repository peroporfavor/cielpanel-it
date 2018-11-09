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

    <h1 class="titulo">Muros Cortina</h1>

   



<p>
Asistencia en diseño a arquitectura, Ingeniería de detalles, Logísticas de compras y despachos, Fabricación e Instalación de Muros Cortina.
</p>
<p>
Cielpanel dispone de sistemas propios de perfilerías a la vista o de silicona estructural. Pudiendo además desarrollar sistemas específicos para los proyectos.

</p>

<?php echo do_shortcode('[widgetkit id="21"]'); ?>
</div>



<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>