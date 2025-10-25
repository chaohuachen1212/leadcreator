(function($) {

  function wechatPopup() {
    var wechatBtn = $('.contact--block .wechat-btn');
    var close = $('.wechat--popup-block .close')

    wechatBtn.click(function(){
      $('.wechat--popup-block').addClass('is-active');
    });

    close.click(function(){
      $('.wechat--popup-block').removeClass('is-active');
    });

  }

  wechatPopup();
  

}(jQuery));
