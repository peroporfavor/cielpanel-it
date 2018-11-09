<?php
//SHORTCODES

function catalogo_btn_shortcode( $atts, $content = null){
	$atts = shortcode_atts( array(
			'cat' => 'iluminacion-led'
			), $atts, 'catalogo_btn');
	// return '<a href="'.$atts[catID].'" class="btn btn-primary">'. $content .'</a>';
	return "<a href='../pdftest?var=$atts[cat]' class='btn btn-primary'>$content</a>";
	
}
//[catalogo_btn catID="12"]Catalogo[/catalogo_btn]
add_shortcode( 'catalogo_btn', 'catalogo_btn_shortcode' );


function cataprod_btn_shortcode( $atts, $content = null){
	$atts = shortcode_atts( array(
			'id' => ''
			), $atts, 'cataprod_btn');
			
	$coso = $post->ID;
	// return '<a href="'.$atts[catID].'" class="btn btn-primary">'. $content .'</a>';
	return "<a href='../test2?var=$coso' class='btn btn-primary'>$content</a>";
	
}
//[catalogo_btn catID="12"]Catalogo[/catalogo_btn]
add_shortcode( 'cataprod_btn', 'cataprod_btn_shortcode' );
?>