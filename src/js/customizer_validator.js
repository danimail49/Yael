wp.customize( "bdbg_footer_top_letterspace", function( setting ) {
    setting.validate = function( value ) {

        var code, notification;
        var intVal = parseInt( value, 10 );

        code = "required";
        if ( isNaN( intVal ) ) {
            notification = new wp.customize.Notification( code, { message: customizerErrors.isint_isreq } );
            setting.notifications.add( code, notification );

            setting.value = 0;
            return NaN;
        } else {
            setting.notifications.remove( code );
        }

        return intVal;
    };
} );
