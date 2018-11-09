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
$addvid = '?rel=0&ytp-pause-overlay=0&showinfo=0';
if (get_locale() == 'en_GB') {
    $ACF1 = 'tituloen';
    $ACF2 = 'bajadaen';
    $ACF3 = 'textoen';
    $ACF4 = 'boton_textoen';
    $ACF5 = 'descripcionen';
    $text1 = 'more';
    $text2 = ' Video';
}else{
    $ACF1 = 'titulo';
    $ACF2 = 'bajada';
    $ACF3 = 'texto';
    $ACF4 = 'boton_texto';
    $ACF5 = 'descripcion';
    $text1 = 'Mas';
    $text2 = ' Ver video';
}
?>
<div class="cont_maq">
    <h2 class="maq_tit"><?php the_field($ACF1); ?> </h2>
    <div class="maq_bajada"><?php the_field($ACF2); ?>   </div>
    <div class="maquinaria">
        <?php
        if( have_rows('maquinarias_rep',42) ):
            $numB = 1;
            while ( have_rows('maquinarias_rep',42) ) : the_row();
            ?>
            <div class="cajaM">
                <img class="imagen" src="<?php the_sub_field('imagen') ?>" alt="">
                <div class="texto">
                    <div class="numero"><?php the_sub_field('numero'); ?></div>
                    <div class="textoensi"><?php the_sub_field($ACF5); ?></div>
                </div> <!-- texto -->
                <div class="vermas">
                    <?php if (get_sub_field('video')):
                    $video_embed_url = get_sub_field('video', false, false);
                    // $thumbnail_url = $thumbnail['url'];
                        ?>
                    <a class="video popup-youtube" href="<?php echo $video_embed_url . $addvid?>"> <i class="fa fa-video-camera" aria-hidden="true"></i><?php echo $text2 ?> </a>

                        <?php endif; ?>
                        <?php if (get_sub_field('pdf')): ?>
                        <a class="pdf" href="<?php the_sub_field('pdf') ?>" target="_blank">PDF</a>
                        <?php endif; ?>    
                 

                </div> <!-- ver mas -->    
            </div> <!-- caja -->

            <?php $numB++; endwhile; endif; ?>

        </div> <!-- maquinaria -->     

</div> <!-- cont_maq -->


<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>