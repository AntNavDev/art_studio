jQuery( document ).ready( function() {
    var canvas = document.getElementById( 'drawing_pad' );
    var context = canvas.getContext( '2d' );
    var img = new Image();

    img.onload = function() {
        context.drawImage( this, 0, 0, canvas.width, canvas.height );
    }

    img.src = $( '#encoded_image' ).val();

} );
