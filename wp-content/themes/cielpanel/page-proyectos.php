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
<?php
$addvid = '?rel=0&ytp-pause-overlay=0&showinfo=0';
if (get_locale() == 'en_GB') {
    $ACF1 = 'tituloen';
    $ACF2 = 'bajadaen';
    $ACF3 = 'textoen';
    $ACF4 = 'boton_textoen';
    $ACF4 = 'boton_textoen';
    $text1 = 'more';
    $text2 = ' See video';
}else{
    $ACF1 = 'titulo';
    $ACF2 = 'bajada';
    $ACF3 = 'texto';
    $ACF4 = 'boton_texto';
    $text1 = 'Ver mas';
    $text2 = ' Ver video';
    $ACF4 = 'boton_textoen';
}

?>

<?php get_header();?>
<div class="con_proyecto">
    <h2 class="titulo"><?php the_field($ACF1,11);?></h2>
    <div class="proy">
    <?php
    if( have_rows('proyectos_rep',11) ):
        $numB = 1;
        while ( have_rows('proyectos_rep',11) ) : the_row();
        ?>
        <div class="caja">
            <div class="imagen2">
                <?php
                $images = get_sub_field('slide_proyectos');
                if( $images ): ?>
                    <div id="<?php echo ('flex' . $numB); ?>" class="flexslider">
                    <ul class="slides">
                    <?php foreach( $images as $image ): ?>
                        <li>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <p><?php echo $image['caption']; ?></p>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                    </div>
                <?php endif;
                ?>
            </div> <!-- imagen2 -->
            <div class="texto">
                <div class="tituloC"><?php the_sub_field($ACF1); ?></div>
                <div class="bajadaC"><?php the_sub_field($ACF2); ?></div>
            </div> <!-- texto -->
            <div class="vermas">
            <?php if (get_sub_field('video_proyecto')):
                $video_embed_url = get_sub_field('video_proyecto', false, false);
                // $thumbnail_url = $thumbnail['url'];
                    ?>
                <a class="video popup-youtube" href="<?php echo $video_embed_url . $addvid?>"> <i class="fa fa-video-camera" aria-hidden="true"></i><?php echo $text2 ?> </a>

                    <?php endif; ?>
               
                </div> <!-- ver mas -->    
                </div> <!-- caja -->

                <?php $numB++; endwhile; endif; ?>
            
            
     

    </div> <!-- proy -->    
</div> <!-- con_proyecto -->





<?php get_footer();?>

<?php wp_footer() ?>
</body>
</html>