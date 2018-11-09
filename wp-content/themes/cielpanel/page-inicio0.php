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

<!-- slider -->
<?php get_template_part( 'includes/template-parts/slider');?>

<!-- bajada -->
<?php 
get_template_part( 'includes/template-parts/bajada');
?>

<!-- video cielpanel -->
<div class="videoreel">

<iframe width="560" height="315" src="https://www.youtube.com/embed/QzA9JENK8pE?rel=0&amp;controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>

<!-- carrusel -->
<?php 

get_template_part( 'includes/template-parts/carrusel');

?>


<?php get_footer() ?>
<?php wp_footer() ?>
</body>


</html>