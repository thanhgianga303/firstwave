(function($) {
    "use strict";
    
    var $contactForm = $('#firstwaveContactForm');
  
      $(document).on('ajaxPromise', '[data-request]', function() {
        $(this).closest('form').find('.form-group-holder.has-error').removeClass('has-error');
      });
  
      $contactForm.on('ajaxSuccess', function(event, message) {
        $(this)[0].reset();
      });
  
})(jQuery);
    