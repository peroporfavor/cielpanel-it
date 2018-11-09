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

<?php get_header();
if (get_locale() == 'en_GB') {
    $ACF1 = 'tituloen';
    $ACF2 = 'bajadaen';
    $ACF3 = 'textoen';
    $ACF4 = 'boton_textoen';
    $text2 = ' See video';
}else{
    $ACF1 = 'titulo';
    $ACF2 = 'bajada';
    $ACF3 = 'texto';
    $ACF4 = 'boton_texto';
    $text2 = ' Ver video';
}
?>

    <div class="con_trabajo">
        
        <div class="tituloG_trabajo">
            <h2><?php the_field($ACF1,9);?></h2>
        </div>

<!-- repeticiones de trabajos -->
<?php if( have_rows('trabajo_repetidor',9) ):  
$flexid = 1;
while ( have_rows('trabajo_repetidor',9) ) : the_row();

if ($flexid%2!=0): 
    $img = "img_trabajoG_par";
    $imgDER = "espacio_trabajoG_par";
    $texto = "texto_trabajoG";
else:
  
    $img = "img_trabajoG_impar";
    $imgDER = "espacio_trabajoG_impar";
    $texto = "texto_trabajoG_DER";
endif; 
?>
<div class="linea_trabajoG">
    <div class="<?php echo $img  ?>">
        <div class="foto_nt">
            <?php
            $images = get_sub_field('imagenes');
             ?>
                <div class="flexslider" id="<?php echo 'flex' . $flexid;?>">
                    <ul class="slides">
                    <?php foreach( $images as $image ): ?>
                        <li>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" alt="">
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div> <!-- flexslider -->
            </div> <!-- foto_nt -->
    
    </div>
    <div class="<?php echo $texto;?>">
        <div class="texto_trabajoG_1">
        <?php the_sub_field($ACF1);	?>
        </div>
        <div class="texto_trabajoG_2">
        <?php the_sub_field($ACF2);	?>
        </div>
        <div class="texto_trabajoG_3"></div>
        <?php if(get_sub_field('video')): ?>
        <a class="video popup-youtube" id="vid_hincadoraB" href="https://www.youtube.com/watch?v=-GBZBsa_wIM?rel=0&ytp-pause-overlay=0&showinfo=0">
                    <i class="fa fa-video-camera" aria-hidden="true"></i> <?php echo $text2 ?> 
        </a>
        <?php endif; ?>
    </div>
    <div class="<?php echo $imgDER  ?>"></div>
</div>
<?php 
$flexid++; 
endwhile;
endif; ?>
<!-- <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube video</a> -->




</div>
<?php get_footer();?>

<?php wp_footer() ?>
</body>
</html>