(function($) {

  function wechatPopup() {
    var projects= $('.our--works .project');
    var close = $('.video--popup-block .close')

    projects.click(function(){
      $('.video--popup-block').addClass('is-active');
      var imageurl = $(this).attr('data');
      $('.video--popup-block img').attr('src', imageurl);
    });

    close.click(function(){
      $('.video--popup-block').removeClass('is-active');
    });

  }

  wechatPopup();
  

}(jQuery));