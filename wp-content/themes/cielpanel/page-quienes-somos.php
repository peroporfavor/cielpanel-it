<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="<?php	bloginfo('html_type');?>">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
</head>
<style>
	div#story-269, div#story-270, div#story-271, div#story-272, div#story-273, div#story-274, div#story-275, div#story-276, div#story-277, div#story-278 {
    display: none;
}
	
</style>
<body>
<?php get_header() ?>
<!-- <div id="embedpop"> -->
    <!-- <div class="embedcerrar">X</div>    -->
    <!-- <object data=" -->
    <?php 
    // echo get_template_directory_uri() . '/assets/pdf/trayectoriaCielpanel.pdf'
    ?>
    <!-- " type="application/pdf" width="90%" height="auto"></object>  -->
<!-- </div> -->

<div class="nosotros">
    <h1 class="titulo">Nosotros</h1>
    <h3 class="bajadatitulo">20 años de experiencia.</h3>
    <div class="texto1">
    Cielpanel es fundada en 1998 en Santiago (Chile), como contratistas en trabajos de carpintería y Drywall (ITC) en la edificación retail.
    </div> <!--texto1 -->
    <div class="division"></div>
    <div class="texto2">
    El 2015 nos iniciamos en los montajes mecánicos fotovoltaicos de plantas en suelo, y el 2016 comenzamos nuestro primer contrato en El Romero (246MWp) de Acciona en Vallenar (Chile), de la mano de STI-Norland. Seguidamente, participamos de 6 proyectos más, avanzando en nuestra experiencia en instalaciones con estructuras con Tracker.
    </div> <!--texto2 -->
    <div class="division"></div>
    <div class="texto3">
    Hoy en 2018, hemos incorporado toda la maquinaria necesaria para la ejecución de los montajes, pasando por la Topografía, el Hincado y Perforación, Armado de estructuras y la Instalación de módulos fotovoltaicos. Hasta el día de hoy, que nos encontramos ejecutando el montaje mecánico de 2 plantas.
    </div> <!--texto3 -->

    <div class="contador">
        <div class="contador1">
            <div id="count-box1">20</div>
            <p>años</p>
            <p>experiencia</p>
        </div> <!--contador1 -->
        <div class="divC"></div>
        <div class="contador2">
            <div id="count-box2">516</div>
            <p>proyectos</p>
            <p>IT</p>
        </div> <!--contador2 -->
        <div class="divC"></div>
        <div class="contador3">
            <div id="count-box3">8</div>
            <p>proyectos</p>
            <p>FV</p>
        </div> <!--contador3 -->
        <div class="divC"></div>
        <div class="contador4">
            <div id="count-box4">3</div>
            <p>países</p>
            <p>operación</p>
        </div> <!--contador4 -->
        
    </div> <!-- contador -->

    <div class="socios">
        <h2 class="titulo">SOCIOS</h2>
        <div class="fotos">
            <div class="socio1">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/julio.png' ?>" alt="">
                <h5>Julio Delgado Canales</h5>
                <p>IT Director Operacional</p>
                <p>Ingeniero Civil U. de Chile</p>
                <p>Msc. Diseño y Construcción Sustentable UDD</p>
                <div class="linea"></div>
            </div> <!-- socio1 -->
            <div class="socio2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/rodrigo.png' ?>" alt="">
                <h5>Rodrigo Añazco Saba</h5>
                <p>IT Director Comercial</p>
                <p>Ingeniero Civil Industrial U. de Chile</p>
                <p>Ingeniero Civil en Materiales IDIEM</p>
                <div class="linea"></div>
            </div> <!-- socio2 -->
        </div> <!-- fotos -->
    </div> <!-- socios -->

</div> <!-- nosotros -->



<div class="lineatiempo"
<?php echo do_shortcode('[cool-timeline layout="default" animation="none" date-format="F j" icons="NO" show-posts="20" skin="default"]'); ?>
</div>

<div class="invierte">
<!--
    <div  class="traytext">
        <p>trayectoria</p> 
        <p><span>Cielpanel</span></p>
    </div>
-->
    
    <a href="<?php echo get_page_link(17); ?>" class="invtext">
            <p>invierte</p> 
            <p><span>en nosotros</span></p>
    </a>
    
    
</div>
<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>