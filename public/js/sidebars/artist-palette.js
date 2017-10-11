jQuery( document ).ready( function() {
    var canvas = document.getElementById( 'drawing_pad' );
    var ctx = canvas.getContext( '2d' );

    // Set initial values
    $( '#utensil_width_value' ).text( $( '#utensil_width' ).val() );
    $( '#current_utensil_color' ).val( '#000000' );

    // Color events
    $( '#utensil_color_red' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#FF0000' );
    } );

    $( '#utensil_color_orange' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#FF7F0C' );
    } );

    $( '#utensil_color_yellow' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#FFFF00' );
    } );

    $( '#utensil_color_green' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#00FF00' );
    } );

    $( '#utensil_color_blue' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#0000FF' );
    } );

    $( '#utensil_color_purple' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#D12AFF' );
    } );

    $( '#utensil_color_black' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#000000' );
    } );

    $( '#utensil_color_white' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#FFFFFF' );
    } );

    $( '#utensil_color_red2' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#CC0000' );
    } );

    $( '#utensil_color_orange2' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#CC6600' );
    } );

    $( '#utensil_color_yellow2' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#CCCC33' );
    } );

    $( '#utensil_color_green2' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#66CC66' );
    } );

    $( '#utensil_color_blue2' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#0000CC' );
    } );

    $( '#utensil_color_purple2' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#660066' );
    } );

    $( '#utensil_color_white2' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#F4F4F4' );
    } );

    $( '#utensil_color_black2' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( '#666666' );
    } );

    // Brush changes
    $( '#utensil_width' ).on( 'change', function() {
        $( '#current_utensil_width' ).val( $( '#utensil_width' ).val() );
        $( '#utensil_width_value' ).text( $( '#utensil_width' ).val() );
    } );

} );
