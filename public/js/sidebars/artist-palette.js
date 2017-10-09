jQuery( document ).ready( function() {
    var canvas = document.getElementById( 'drawing_pad' );
    var ctx = canvas.getContext( '2d' );

    //Set initial values
    $( '#utensil_width_value' ).text( $( '#utensil_width' ).val() );
    $( '#current_utensil_color' ).val( 'black' );

    //Events
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

    $( '#utensil_width' ).on( 'change', function() {
        $( '#current_utensil_width' ).val( $( '#utensil_width' ).val() );
        $( '#utensil_width_value' ).text( $( '#utensil_width' ).val() );
    } );

} );
