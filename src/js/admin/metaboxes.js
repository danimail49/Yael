/**
 * Display Video URL metabox depending on selected post format.
 */

function postFormatControl() {
    if ( "checked" === $( "#post-format-video" ).attr( "checked" ) ) {
        $( "#bdbg_video_url" ).removeClass( "hidden" );
    } else {
        $( "#bdbg_video_url" ).addClass( "hidden" );
    }
 }

postFormatControl();

if ( $( "#post-formats-select" ).length ) {
    $( "#post-formats-select" ).find( ".post-format" ).on( "change", function() {
        postFormatControl();
    } );
}
