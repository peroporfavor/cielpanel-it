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
<?php get_header(); 
$post = get_post(82);
$formulario = apply_filters('the_content', $post->post_content);
?>
<div class="contacto">

    <div class="c1"> 
        <div class="c1_form">
        <h1 class="tituloCon">Contact us</h1>
        <div class="formulario"><?php echo $formulario;?></div>	
        </div>
        <img src="<?php echo get_template_directory_uri() . '/assets/img/grafica-contacto.jpg' ?>" alt="">
    </div> <!-- c1 -->

   

</div> <!-- contacto -->

 <div class="c2">
        <div class="mapa">
            <div class="map1">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.7318216285194!2d-70.57241418479579!3d-33.40416010252415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662ced9174ad1b9%3A0x640e736a75c92092!2sCerro+El+Plomo+5931%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1528752603065" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
            <div class="leyenda">CHILE</div>
        </div> <!-- mapa1 -->
        <div class="mapa">
            <div class="map2">
            
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9609128123884!2d-77.04533498540597!3d-12.114826991421964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c83a3b594701%3A0x2a5e5be5428fcac4!2sAv.+Gral.+C%C3%B3rdova+313%2C+Lima+15074%2C+Per%C3%BA!5e0!3m2!1ses-419!2scl!4v1529426306909" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            
            </div>
            <div class="leyenda">PERÚ</div>
        </div> <!-- mapa2 -->

    </div> <!-- c2 -->


<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>