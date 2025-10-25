(function($) {


  function findFooterHight(){
    var footerH = $('footer').outerHeight();
    var btnContactSec = $('.global--bottom-contact').outerHeight();
    var totalHight = footerH + btnContactSec;

    console.log(btnContactSec);

    $('.global--bottom-contact .bg-img').height(totalHight);
  }

  findFooterHight();

   $(window).resize(function(){
     findFooterHight();
   });

}(jQuery));
