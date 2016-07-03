(function ($) {

Drupal.behaviors.initModalFormsRegister = {
  attach: function (context, settings) {
  	      var screenWidth = $(window).width();
      if (screenWidth > 480){
    $("a[href*='/user/register'], a[href*='?q=user/register']", context).once('init-modal-forms-register', function () {
      this.href = this.href.replace(/user\/register/,'modal_forms/nojs/register');
    }).addClass('ctools-use-modal ctools-modal-modal-popup-medium');
}
  }
};

})(jQuery);
