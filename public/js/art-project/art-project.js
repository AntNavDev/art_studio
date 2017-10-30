jQuery( document ).ready( function() {
    var canvas = document.getElementById( 'drawing_pad' );
    canvas.height = canvas.clientHeight;
    canvas.width = canvas.clientWidth;

    if( canvas.getContext )
    {
        var ctx = canvas.getContext( '2d' );

        $( '#drawing_pad' ).mousedown( function( event ) {
            var start_point = getMousePos( canvas, event );

            if( $( '#current_utensil_color' ).val() )
            {
                ctx.strokeStyle = $( '#current_utensil_color' ).val();
            }
            else
            {
                ctx.strokeStyle = '#000000';
            }

            if( $( '#current_utensil_width' ).val() )
            {
                ctx.lineWidth = $( '#current_utensil_width' ).val();
            }

            ctx.beginPath();
            ctx.moveTo( start_point.x, start_point.y );

            $( '#drawing_pad' ).mousemove( function( event ) {
                var current_point = getMousePos( canvas, event );
                ctx.lineTo( current_point.x, current_point.y );
                ctx.stroke();
             } );

            $( '#drawing_pad' ).mouseup( function( event ) {
                ctx.strokeStyle = 'transparent';
                ctx.closePath();

                $( '#image_data' ).val( canvas.toDataURL() );
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
