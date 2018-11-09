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

    <h1 class="titulo">Ventilated facades</h1>

   



<p>
Design and installation of ventilated facades. Availability to install various coatings, such as HPL, fiber cement boards High density or the like. Cielpanel supportive structures has both aluminum facade, as the profiles 'T' and 'L', as special structures for such facades designed galvanized steel.
Cielpanel available if the project requires it, the possibility of designing special facade profiles supportive to resolve new challenges.

</p>

<?php echo do_shortcode('[widgetkit id="19"]'); ?>
</div>



<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>