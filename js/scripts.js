(function ($) {

  $(document).ready(function () {

    myParaxify = paraxify('.paraxify', {
      speed: 0.5
    });

    var headerOffset = $('.header-section').offset().top;
    var body = $('body');
    var topBar = $('.top-bar-section');

    $(window).scroll(function(){
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

    $('.customers-slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      autoplay: true,
      autoplaySpeed: 10000,
      appendDots: $('.slider-dots'),
      prevArrow: '<span class="arrow prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>',
      nextArrow: '<span class="arrow next"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>',
      responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      ]
    });

    $('.clients-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      arrows: false,
      dots: false,
      autoplay: true,
      autoplaySpeed: 5000,
      responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      ]
    });


    $('.main-navigation > ul').superfish({
      delay: 600,
      popUpSelector: '.dropdown',
      animation: {
        opacity:'show',
        height:'show'
      },
      animationOut: {
        opacity:'hide',
        height:'hide'
      },
      speed: 'fast',
      speedOut: 'fast',
      autoArrows: true,
    });


  });

})(jQuery);
