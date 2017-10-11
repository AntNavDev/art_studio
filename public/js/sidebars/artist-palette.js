jQuery( document ).ready( function() {
    var canvas = document.getElementById( 'drawing_pad' );
    var ctx = canvas.getContext( '2d' );

    // Set initial values
    $( '#utensil_width_value' ).text( $( '#utensil_width' ).val() );
    $( '#current_utensil_color' ).val( '#000000' );

    // Color events
    $( '.color_palette' ).on( 'click', function() {
        $( '#current_utensil_color' ).val( $( this ).css( 'background-color' ) );    
    } );

    $( '.change_background' ).on( 'click', function() {
        $( '#drawing_pad' ).css( 'background-color', $( this ).css( 'background-color' ) );
    } );

    // Brush changes
    $( '#utensil_width' ).on( 'change', function() {
        $( '#current_utensil_width' ).val( $( '#utensil_width' ).val() );
        $( '#utensil_width_value' ).text( $( '#utensil_width' ).val() );
    } );

} );
