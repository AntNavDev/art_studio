jQuery( document ).ready( function() {
    var canvas = document.getElementById( 'drawing_pad' );
    canvas.height = canvas.clientHeight;
    canvas.width = canvas.clientWidth;

    if( canvas.getContext )
    {
        var ctx = canvas.getContext( '2d' );
        var mouse_coor = {};

        $( '#drawing_pad' ).mousedown( function( event ) {
            mouse_coor = getMousePos( canvas, event );
            
            if( $( '#current_utensil_color' ).val() )
            {
                ctx.strokeStyle = $( '#current_utensil_color' ).val();
            }
            else
            {
                ctx.strokeStyle = 'black';
            }

            if( $( '#current_utensil_width' ).val() )
            {
                ctx.lineWidth = $( '#current_utensil_width' ).val();
            }

            ctx.beginPath();
            ctx.moveTo( mouse_coor.x, mouse_coor.y );

            $( '#drawing_pad' ).mousemove( function( event ) {
                mouse_coor = getMousePos( canvas, event );
                ctx.lineTo( mouse_coor.x, mouse_coor.y );
                ctx.stroke();
             } );

            $( '#drawing_pad' ).mouseup( function( event ) {
                ctx.strokeStyle = 'transparent';
                ctx.closePath();
            } );

        } );

    }

    function getMousePos( canvas, event )
    {
        var rect = canvas.getBoundingClientRect();
        return {
            x: ( event.clientX - rect.left ) / ( rect.right - rect.left ) * canvas.width,
            y: ( event.clientY - rect.top ) / ( rect.bottom - rect.top ) * canvas.height
        };
    }

} );
