/**
 * Custom code for WP Customizer
 */

(function ($) {
    'use strict';

    $(function () {

        wp.customize('bdbg_header_background', function (value) {
            value.bind(function (newval) {
                $('.bdbg-header').css('background-color', newval);
            });
        });

        wp.customize('bdbg_header_logo_padding_top', function (value) {
            value.bind(function (newval) {
                $('.bdbg-logo').css('padding-top', newval + 'px');
            });
        });

        wp.customize('bdbg_header_logo_padding_bottom', function (value) {
            value.bind(function (newval) {
                $('.bdbg-logo').css('padding-bottom', newval + 'px');
            });
        });

        wp.customize('bdbg_header_menu_vertical_margin', function (value) {
            value.bind(function (newval) {
                $('.bdbg-menu').css('margin-top', newval + 'px');
            });
        });

    });

})(jQuery);
//# sourceMappingURL=customizer.js.map
