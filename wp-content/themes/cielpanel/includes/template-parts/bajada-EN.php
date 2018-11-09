<div class="bajada">
    <div class="fecha">
        <p> <span>Since</span> 1998 </p>
    </div> <!-- fecha -->
    <div class="linea"></div>
    <div class="info">
        <p>
            <?php
                global $post;
                $content = $post->post_content;
                echo $content;
            ?>
        </p>
        <img src="<?php echo get_template_directory_uri() . '/assets/img/per_bajada.png' ?>" alt="">
    </div> <!--info -->
</div>