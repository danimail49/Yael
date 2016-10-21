/**
 * Search Modal
 */
$( ".bdbg-js-search" ).on( "click", function() {
    $( ".bdbg-overlay" ).addClass( "bdbg-overlay--visible" );
    $( "#search-big" ).focus();
} );

$( ".bdbg-overlay__button--close" ).on( "click", function() {
    $( ".bdbg-overlay" ).removeClass( "bdbg-overlay--visible" );
} );

$( "#search-big" ).on( "keypress", function( event ) {
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
