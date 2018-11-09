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
	div#story-259, div#story-260, div#story-261, div#story-262, div#story-263, div#story-264, div#story-265, div#story-266, div#story-267, div#story-268, h2.timeline-main-title {
    display: none;
}
	
</style>
<body>
	
<?php get_header() ?>
<div class="nosotros">
    <h1 class="titulo">About us</h1>
    <h3 class="bajadatitulo">20 years of experience.</h3>
    <div class="texto1">
    Cielpanel is founded in 1998 in Santiago (Chile), as contractors in carpentry and drywall (ITC) in the construction retail area.
    </div> <!--texto1 -->
    <div class="division"></div>
    <div class="texto2">
    We started in the photovoltaic mechanical ground mounting plants, and in 2016 we
    performed our first contract in El Romero (246MWp) of Acciona in Vallenar (Chile), with
    STI-Norland. Hereinafter we participated in 6 more projects, getting experience in
    installations with tracking structures.
    </div> <!--texto2 -->
    <div class="division"></div>
    <div class="texto3">
    We have incorporated all the necessary machinery for the performing of mounting , going
    through the topography, the driving and drilling, the assembly of structures and the
    installation of photovoltaic modules. Until today, we are performing the mechanical mounting
    of 2 PV plants.
        </div> <!--texto3 -->

    <div class="contador">
        <div class="contador1">
            <div id="count-box1">20</div>
            <p>Years</p>
            <p>of experience</p>
        </div> <!--contador1 -->
        <div class="divC"></div>
        <div class="contador2">
            <div id="count-box2">516</div>
            <p>IT</p>
            <p>projects</p>
        </div> <!--contador2 -->
        <div class="divC"></div>
        <div class="contador3">
            <div id="count-box3">8</div>
            <p>FV</p>
            <p>projects</p>
        </div> <!--contador3 -->
        <div class="divC"></div>
        <div class="contador4">
            <div id="count-box4">3</div>
            <p>Operational</p>
            <p>countries</p>
        </div> <!--contador4 -->
        
    </div> <!-- contador -->

    <div class="socios">
        <h2 class="titulo">Partners</h2>
        <div class="fotos">
            <div class="socio1">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/julio.png' ?>" alt="">
                <h5>Julio Delgado Canales</h5>
                <p>PV Operational Director</p>
                <p>Civil Engineer U.de Chile</p>
                <p>Msc. Design and Sustainable Construction UDD</p>
                <div class="linea"></div>
            </div> <!-- socio1 -->
            <div class="socio2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/rodrigo.png' ?>" alt="">
                <h5>Rodrigo Añazco Saba</h5>
                <p>PV Commercial Director</p>
                <p>Civil industrial Engineer U. de Chile</p>
                <p>Materials Civil Engineer IDIEM</p>
                <div class="linea"></div>
            </div> <!-- socio2 -->
        </div> <!-- fotos -->
    </div> <!-- socios -->

</div> <!-- nosotros -->

<div class="lineatiempo">
	<h1 class="titulo" style="text-align: center">Cielpanel Trajectory</h1>
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
            <p>invest</p> 
            <p><span>in us</span></p>
    </a>
    
    
</div>
<?php get_footer() ?>
<?php wp_footer() ?>
</body>
</html>


