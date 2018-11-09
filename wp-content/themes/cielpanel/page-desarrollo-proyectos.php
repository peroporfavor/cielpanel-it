<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="<?php    bloginfo('html_type');?>">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
</head>
<body>
<?php get_header() ?>
<div class="desarrollo">
    <h2 class="tit_des">INICIO DE SESIÓN</h2>
    <input type="text" class="nombre" placeholder="nombre" >
    <input type="password" class="pass" placeholder="clave">
    <div class="sub">INGRESAR</div>
</div>


<?php get_footer() ?>
<?php wp_footer() ?>


</body>
</html>