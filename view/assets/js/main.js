$(function ()
{
	jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 3000
            });
        });
})


var $slider = $('#home-slider');
$(document).ready(function(){
    $slider.slick({
        autoplay: true,
        autoplaySpeed: 30000,
        dots: true,
        infinite: true,
        fade: true,
        arrows: false
    });
    $("#home-slider-container .slider-controls .slider-prev").on("click",function(){
      $slider.slick('slickPrev');
    });
    $("#home-slider-container .slider-controls .slider-next").on("click",function(){
      $slider.slick('slickNext');
    });

    $slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});

});

$(window).resize(function(){
	    $slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});
})

$(function() {
    AOS.init({

    });
})


$(window, document, undefined).ready(function() {

    $('.input').blur(function() {
      var $this = $(this);
      if ($this.val())
        $this.addClass('used');
      else
        $this.removeClass('used');
    });
    
    });
  
  
  $('#tab1').on('click' , function(){
      $('#tab1').addClass('login-shadow');
     $('#tab2').removeClass('signup-shadow');
  });
  
  $('#tab2').on('click' , function(){
      $('#tab2').addClass('signup-shadow');
     $('#tab1').removeClass('login-shadow');
  
  
  });
  // external js: isotope.pkgd.js


  $('.grid').isotope({
    // options
    itemSelector: '.grid-item',
    columnWidth: 200,
    layoutMode: 'fitRows'
  });
  $(document).ready(function(){
    /* $('ul.nav li a').click(function(){
      $('li a').removeClass("active");
      $(this).addClass("active");
  }); */
 
  });
  xxx = document.getElementById('navcol-1');
  console.log(xxx);