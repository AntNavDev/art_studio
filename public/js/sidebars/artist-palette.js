jQuery( document ).ready( function() {
    var canvas = document.getElementById( 'drawing_pad' );
    var ctx = canvas.getContext( '2d' );

    $( '#utensil_color_blue' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( 'blue' );
    } );

    $( '#utensil_color_red' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( 'red' );
    } );

    $( '#utensil_color_green' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( 'green' );
    } );

    $( '#utensil_color_black' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( 'black' );
    } );

    $( '#utensil_width_increase' ).on( 'click', function() {
        $( '#current_utensil_width' ).val( ctx.lineWidth *= 2 );
    } );

    $( '#utensil_width_decrease' ).on( 'click', function() {
        $( '#current_utensil_width' ).val( ctx.lineWidth /= 2 );
    } );

} );
