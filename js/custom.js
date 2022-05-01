
// ISOTOPE FILTER
jQuery(document).ready(function($){

  if ( $('.iso-box-wrapper').length > 0 ) { 

      var $container  = $('.iso-box-wrapper'), 
        $imgs     = $('.iso-box img');

      $container.imagesLoaded(function () {

        $container.isotope({
        layoutMode: 'fitRows',
        itemSelector: '.iso-box'
        });

        $imgs.load(function(){
          $container.isotope('reLayout');
        })

      });

      //filter items on button click

      $('.filter-wrapper li a').click(function(){

          var $this = $(this), filterValue = $this.attr('data-filter');

      $container.isotope({ 
        filter: filterValue,
        animationOptions: { 
            duration: 750, 
            easing: 'linear', 
            queue: false, 
        }                
      });             

      // don't proceed if already selected 

      if ( $this.hasClass('selected') ) { 
        return false; 
      }

      var filter_wrapper = $this.closest('.filter-wrapper');
      filter_wrapper.find('.selected').removeClass('selected');
      $this.addClass('selected');

        return false;
      }); 

  }

});

// jQuery to collapse the navbar on scroll //
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".dropdown-content").css({"background":"white"});
        $(".note_result").css({"background":"white"});
        $(".note_result").css({"color":"#6d6d6e"});
        $(".note_result").find($(".up-a").css({"color":"#6d6d6e"}));
        $(".note_result").find($(".up-check").css({"color":"green"}));
        $(".note_result").find($(".up-times").css({"color":"red"}));
        

    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".dropdown-content").css({"background":"#6d6d6e"});
        $(".note_result").css({"background":"#6d6d6e"});
        $(".note_result").css({"color":"white"});
        $(".note_result").find($(".up-a").css({"color":"white"}));
        $(".note_result").find($(".up-check").css({"color":"lemon"}));
        $(".note_result").find($(".up-times").css({"color":"red"}));
    }
});


/* HTML document is loaded. DOM is ready. 
-------------------------------------------*/
$(function(){

  // ------- WOW ANIMATED ------ //
  wow = new WOW(
  {
    mobile: false
  });
  wow.init();

  // HIDE MOBILE MENU AFTER CLIKING ON A LINK
  $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });



});

