$=jQuery.noConflict(); 
$(document).ready(function($){
   //HOVER BOTONES iniciales
  
   function animSlider(pos, nombre, bajada, url){
        $('.slide').animate({
            left: pos
        },500);

        $('.info').animate({
            left: "-100%"
        },100);

        $('.info').animate({
            left: "15px"
        },300);
        $('.hero .info .titulo').text(nombre); 
        $('.hero .info .desc').text(bajada); 
        $('.hero .info a').attr('href',url);
   };

   $(".t1").click(function(){
        animSlider('0px','El Romero','Instalación de estructuras 246 MWp en el Romero, Chile','#');
        // $('.slide').animate({
        //     left: "0px"
        // },500)
    });  
    $(".t2").click(function(){
        animSlider('-100%','Marchigüe','Instalación de estructuras 246 MWp en Marchigüe, Chile','#');
        // alert('t2');
        // $('.slide').animate({
        //     left: "-100%"
        // },500)
        
    });  
    $(".t3").click(function(){
        animSlider('-200%','La Esperanza','Instalación de plantas Fotovoltaicas 9MWp en La Esperanza, Chile','#');
        // alert('t3');
        // $('.slide').animate({
        //     left: "-200%"
        // },500)
    });  
    $(".t4").click(function(){
        animSlider('-300%','El Manzano','Instalación de plantas Fotovoltaicas 9MWp en El Manzano, Chile','#');
        // alert('t3');
        // $('.slide').animate({
        //     left: "-300%"
        // },500)
    });  
    $(".t5").click(function(){
        animSlider('-400%','Luna','Instalación de plantas Fotovoltaicas 9MWp en Luna, Chile','#');
        // alert('t3');
        // $('.slide').animate({
        //     left: "-400%"
        // },500)
    });
    
    // setInterval(function(){
        // animSlider('0px','El Romero','Instalación de estructuras 256 MWp en el Romero, Chile','#');
        
        // animSlider('-100%','Marchigüe','Instalación de estructuras 246 MWp en Marchigüe, Chile','#');
        // setTimeout(2000);
        // animSlider('-200%','La Esperanza','Instalación de plantas Fotovoltaicas 9MWp en La Esperanza, Chile','#');
        // animSlider('-300%','El Manzano','Instalación de plantas Fotovoltaicas 9MWp en El Manzano, Chile','#');
        // animSlider('-400%','Luna','Instalación de plantas Fotovoltaicas 9MWp en Luna, Chile','#');

    // },3000);

});


// .hero
    // background: url("../img/El-Romero-Slider.jpg")