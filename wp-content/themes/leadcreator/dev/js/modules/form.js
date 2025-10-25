// (function($) {
//   // FORM FUNCTIONS
//   // ==================================================
//   function sendData(form, formUrl, thankUrl) {
//     const $form = $(form),
//       data = $form.serialize(),
//       homeURL = location.origin,
//       thankURL = homeURL + thankUrl;

//     $.ajax({
//       url: formUrl,
//       data: data,
//       dataType: "xml",
//       complete: function() {
//         window.location = thankURL;
//       }
//     });
//     return false;
//   }

//   function formSubmit(button, formSelector, sfdcUrl, thankUrl) {
//     const $submit = $(button),
//       form = formSelector,
//       url = sfdcUrl;

//     $submit.click(function(e) {
//       e.preventDefault();

//       const $requiredInput = $('.input-required');

//       $requiredInput.removeClass('error');

//        $requiredInput.each(function() {
//          const value = $(this).val();

//          if (value === '') {
//            $(this).addClass('error');
//          }
//        });

//        if ($requiredInput.hasClass('error')) {
//          return false;
//        }

//        sendData(form, url, thankUrl);
//     });
//   }

//   // formSubmit('.contact-submit', '.contact-form', 'formUrl', '/thank-you/');

// }(jQuery));
