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

    <h1 class="titulo">Interior</h1>

   



<p>
Ejecutamos instalaciones de los siguientes tipos:

</p>
<div class="vineta-quehacemos">
<ul>
    <li>Diseño de estructuras drywall</li>
    <li>Estructuras galvanizadas, Placas, Juntas, Empastes y Pinturas.</li>
    <li>Tabiques drywall</li>
    <li>Cielos drywall</li>
    <li>Cielos acústicos</li>
    <li>Asistencia en alternativas especificadas</li>
</ul>

</div>
</div>
<div class="fondogris">

<?php echo do_shortcode('[widgetkit id="6"]'); ?>

</div>



<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>