<div class="bajada">
	    <div class="fecha">
	        <p> <span>Desde</span><?php the_field('bajada_fecha');  ?> </p>
	    </div> <!-- fecha -->
	    <div class="linea"></div>
	    <div class="info">
	      
			<?php 
			// global $post;
			// $content = $post->post_content;
			// echo $content;
			the_field('bajada_texto'); 
			?>
	        
	        <img src="<?php echo get_template_directory_uri() . '/assets/img/per_bajada.png' ?>" alt="">
	    </div> <!--info -->
</div>