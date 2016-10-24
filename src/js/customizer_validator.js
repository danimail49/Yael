wp.customize( 'bdbg_footer_top_letterspace', function ( setting ) {

    setting.validate = function ( value ) {
        var code, notification;
        var year = parseInt( value, 10 );

        code = 'required';
        if ( isNaN( year ) ) {
            notification = new wp.customize.Notification( code, {message: "myPlugin.l10n.yearRequired"} );
            setting.notifications.add( code, notification );
            value = 0;
        } else {
            setting.notifications.remove( code );
        }

        return 0;
    };
} );
