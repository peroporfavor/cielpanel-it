<div class="carrusel">
<div class="clientes">
        <div class="titulo">Nuestros <span>Clientes</span></div>
        
        <div class="flexslider" id="flexinicio">
        <ul class="slides">
        <?php
            // loop through the rows of data
        while ( have_rows('carrusel_clientes') ) : the_row();
        ?>
            <li>
                <img src="
                <?php 
                the_sub_field('logo_cliente'); 
                ?>"  alt="" srcset="" />
            </li>
            <?php
            endwhile;
            ?>


            <!-- items mirrored twice, total of 12 -->
        </ul>
        </div>

        <div class="flexslider" id="flexinicio_movil">
            <ul class="slides">
            <?php
            // loop through the rows of data
            while ( have_rows('carrusel_clientes') ) : the_row();
            ?>
                <li>
                    <img src="<?php the_sub_field('logo_cliente'); ?>"  alt="" srcset="" />
                </li>
            <?php
            endwhile;
            ?>


                <!-- items mirrored twice, total of 12 -->
            </ul>
        </div>
        

    </div> <!-- clientes -->
 </div> <!-- carrusel -->
