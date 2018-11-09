<footer>
    
    <div class="cajafooter">

        <div class="logoF">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/logo_footer.png' ?>" alt="">
        </div>
        <div class="textoFooter">
        <?php
        while ( have_rows('direcciones',5) ) : the_row();
        ?>        
        <div class="texto">
        <h3><?php the_sub_field('pais'); ?></h3>
        <p><?php the_sub_field('datos_pais'); ?></p>
        </div>
        <?php endwhile; ?>
        </div> <!-- texto Footer -->
  

        <div class="dibujo">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/per_footer.png' ?>" alt="">
        </div>


    </div>



</footer>
    <div class="dekaz"><p> Diseñado por <a href="http://www.dekaz.cl" target="_blank">Dekaz</a></p></div>