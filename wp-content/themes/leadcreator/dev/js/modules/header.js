(function ($) {

  
  $(document).ready(() => {
    function navOn() {
      $('.hamburger').toggleClass('is-active');
      $('nav').toggleClass('is-active');
      $('html, body').toggleClass('is-locked');
    }

    function navOff() {
      $('.hamburger').removeClass('is-active');
        $('nav').removeClass('is-active');
        $('html, body').removeClass('is-locked');
    }

    $('.hamburger').click(function () {
      navOn();
    })
    
    $('nav').click(function () {
      navOn();
    })
    
    $('.header--mobile-nav').click(function (e) {
      e.stopPropagation();
    })

    $(window).on('resize', function () {
      if ($(window).width() >= 768) {
        navOff();
      }
    });
  });


}(jQuery));
