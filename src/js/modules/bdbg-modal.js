/**
 * Search Modal
 */
$( ".bdbg-js-search" ).on( "click touchstart", function() {
    $( ".bdbg-overlay" ).addClass( "bdbg-overlay--visible" );
    $( ".bdbg-form--search #s" ).focus();
} );

$( ".bdbg-overlay__button--close" ).on( "click touchstart", function() {
    $( ".bdbg-overlay" ).removeClass( "bdbg-overlay--visible" );
} );

$( ".bdbg-modal--search" ).find( "#s" ).on( "keypress", function( event ) {
    if ( 13 === event.keyCode ) {
        let modalHeading = $( ".bdbg-modal__heading" );
        let count = 0;

        modalHeading.html( modalHeading.data( "textsearch" ) );
        setInterval( function() {
            if ( 0 === count ) {
                modalHeading.html( modalHeading.data( "textsearch" ) );
                count++;
            } else if ( 2 === count ) {
                count = 0;
            } else {
                count++;
            }
            modalHeading.append( "." );
        }, 500 );
    }
} );
