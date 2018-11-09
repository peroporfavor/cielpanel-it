$=jQuery.noConflict(); 

 
  var windowssize = $(window).width();



$(document).ready(function($){

  $("ul#menu-menuprincipal li, ul#menu-principalmenu li ").hover(function () { //When trigger is hovered...
    $(this).children("ul.sub-menu").slideDown('fast');
}, function () {
    $(this).children("ul.sub-menu").slideUp('slow');
});



  $(window).load(function() {


      // $("#myCarousel").flexisel();
  

    //carrusel movil
    $('#flexinicio_movil').flexslider({
      animation: "slide",
      controlNav: false,
      minItems: 1,
      maxItems: 1,
    });
    //carrusel normal
    $('#flexinicio').flexslider({
      animation: "slide",
      animationLoop: true,
      itemWidth: 050,
      itemMargin: 90,
      mousewheel: true,
      slideshow: true,
      slideshowSpeed: 1900,
      minItems: 2,
      maxItems: 4,
      move: 1
    });

    //sliders productos
    $('#flexproductos').flexslider({
      animation: "slide",
      minItems: 1,
      maxItems: 1,
    });

    $('#flex1').flexslider({ animation: "slide", minItems: 1, maxItems: 1,initDelay:200});
    $('#flex2').flexslider({ animation: "slide", minItems: 1, maxItems: 1,initDelay:500});
    $('#flex3').flexslider({ animation: "slide", minItems: 1, maxItems: 1,initDelay:900});
    $('#flex4').flexslider({ animation: "slide", minItems: 1, maxItems: 1,initDelay:1200});
    $('#flex5').flexslider({ animation: "slide", minItems: 1, maxItems: 1,initDelay:300});
    $('#flex6').flexslider({ animation: "slide", minItems: 1, maxItems: 1,initDelay:100});
    $('#flex7').flexslider({ animation: "slide", minItems: 1, maxItems: 1,initDelay:450});
    $('#flex8').flexslider({ animation: "slide", minItems: 1, maxItems: 1,initDelay:500});
    $('#flex9').flexslider({ animation: "slide", minItems: 1, maxItems: 1,initDelay:600});


    // CONTADOR NOSOTROS
      $('#count-box1').CountUpCircle({
        duration: 2500, // In ms, default: 5000
        opacity_anim: false,
        step_divider: 1
        });
      $('#count-box2').CountUpCircle({
          duration: 2500, // In ms, default: 5000
          opacity_anim: false,
          step_divider: 1
      });            
      $('#count-box3').CountUpCircle({
            duration: 2500, // In ms, default: 5000
            opacity_anim: false,
            step_divider: 1
      });
      $('#count-box4').CountUpCircle({
        duration: 2500, // In ms, default: 5000
        opacity_anim: false,
        step_divider: 1
      });


  //menu movil
     $('.menumovil').on('click touchstart', function () {
      $(".movilFull").fadeIn(),
      $(".head").css("height","100vh");
      $(".fa-bars").css("display","none");
    });

    $('.movilFull i').on('click', function () {
      $(".movilFull").toggle("fadeout");
      $(".head").css("height","90px");
      $(".fa-bars").css("display","block");
    });
      $('.menu-movil2 a').on('click', function () {
        $(".movilFull").toggle("fadeout");
        $(".head").css("height","90px");
        $(".fa-bars").css("display","block");
    });


  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 0,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
    mainClass: 'mfp-with-zoom',
   
});
   
$('.traytext').on('click', function () {
  $(".pdf").css("display","block");
});

     

    });
    

});

