(function ($) {
    Drupal.behaviors.saveguard = {
        attach: function (context, settings) {
            msg = "If you continue your unsaved changes will be lost!!";
            window.onbeforeunload = function () {
                return msg;
            };
            $(':submit, input:image').click(function () {
                window.onbeforeunload = null;  // Turn off the warning before submit triggers it.
            });
        }
    };
})(jQuery);