(function($) {
  var menu = $(".menu__icon"),
      inner = $(".inner-animate"),
      allSpacesRe = /\s+/g;

  new WOW().init();

  menu.on('click', function() {
      $(this).closest('.menu').toggleClass('menu_state_open');
  });
  $('.menu__links-item').on('click', function() {
      $('.menu').removeClass('menu_state_open');
  });

  inner.hover(function(){ 
    $(this).find("img").addClass("inner-animate-img");
    },function(){ 
    $(this).find("img").removeClass("inner-animate-img");
    }
  );

  jQuery(window).load(function() {
    jQuery("#preloader").delay(100).fadeOut("slow");
    jQuery("#load").delay(100).fadeOut("slow");
  });

  //jQuery for page scrolling feature - requires jQuery Easing plugin
  $(function() {

    $('.page-scroll a').on('click', function(event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1500, 'easeInOutExpo');
      event.preventDefault();
    });

  });
	
})(jQuery);
