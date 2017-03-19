(function ($) {

  $(document).ready(function () {

    myParaxify = paraxify('.paraxify', {
      speed: 1
    });


    var headerOffset = $('.header-section').offset().top;

    $(window).scroll(function(){
      var body = $('body'),
      topBar = $('.top-bar-section'),
      scroll = $(window).scrollTop();
      headerHeight = $('.header-section').height();
      if (scroll >= headerOffset) {
        body.addClass('fixed-header');
        topBar.css({
          marginBottom : headerHeight + "px"
        });
      }
      else {
        body.removeClass('fixed-header');
        topBar.css({
          marginBottom : "0"
        });
      }
    });

  });

})(jQuery);
