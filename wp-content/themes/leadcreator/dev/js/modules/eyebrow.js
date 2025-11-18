(function($) {
    
  if ($('.eyebrow').length > 0) {

    if(document.cookie.includes("eyebrowClose=true") && document.cookie.includes("cmplz_consent_status=allow")) {
      return;
    } else {

      setTimeout(() => {

        let mobileWidth = window.matchMedia("(max-width: 768px)");
        let textContainerHeight = $('.eyebrow__text-container').outerHeight(); 
        let totalHeight;

        if (mobileWidth.matches) {
          totalHeight = textContainerHeight + 40; 
        } else {
          totalHeight = textContainerHeight + 50; 
        }
        let heightInPX = totalHeight + 'px';
      
        $('.eyebrow').css('height', heightInPX);
        $('header').css('top', heightInPX);
      
        setInterval(() => {
          $('.eyebrow').toggleClass('is-active');
        }, 1000);
      }, 500);
      

      $('.close-eyebrow').click(()=>{
          $('.eyebrow').css('height', '0');
          $('header').css('top', '0');
          $('.eyebrow').addClass('is-hidden');
          document.cookie = "eyebrowClose=true";
      });

    }

  }
  
}(jQuery));
