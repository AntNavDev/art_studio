jQuery( document ).ready( function() {
    var canvas = document.getElementById( 'drawing_pad' );
    canvas.height = canvas.clientHeight;
    canvas.width = canvas.clientWidth;

    if( canvas.getContext )
    {
        var ctx = canvas.getContext( '2d' );
        // vv These were used for the attempt at drawing a square during runtime vv
        var building_shape = false;

        $( '#drawing_pad' ).mousedown( function( event ) {
            var current_action = $( '#current_utensil_action' ).val();
            var start_point = getMousePos( canvas, event );
            var prev_rendering_coor = {};

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

            // Decide what we're drawing and start rendering here
            ctx.beginPath();
            ctx.moveTo( start_point.x, start_point.y );

            if( current_action == 'drawing_line' )
            {
                $( '#drawing_pad' ).mousemove( function( event ) {
                    var current_point = getMousePos( canvas, event );
                    ctx.lineTo( current_point.x, current_point.y );
                    ctx.stroke();
                 } );

                $( '#drawing_pad' ).mouseup( function( event ) {
                    ctx.strokeStyle = 'transparent';
                    ctx.closePath();

                    $( '#image_data' ).val( canvas.toDataURL() );
                    $( '#drawing_pad' ).unbind( 'mouseup' );
                    $( '#drawing_pad' ).unbind( 'mousemove' );
                } );
            }
            else if( current_action == 'drawing_rectangle' )
            {
                // Draw rectangle...
                building_shape = true;
                $( '#image_data' ).val( canvas.toDataURL() );

                $( '#drawing_pad' ).mousemove( function( event ) {

                    if( building_shape )
                    {
                        var current_point = getMousePos( canvas, event );
                        /*
                        This isn't working well.
                        clearRect() is clearing everything its covering.
                        This looks ok until you start to make a bigger rectangle smaller.
                        Causes 'hallway(?)' effect. <~~~~~~ (arbitrary term to explain what the pic is doing. I hope I don't try to look this up later...)
                        */
                        // if( prev_rendering_coor )
                        // {
                        //     ctx.clearRect( start_point.x, start_point.y, (prev_rendering_coor.x - start_point.x), (prev_rendering_coor.y - start_point.y) );
                        // }
                        // prev_rendering_coor = current_point;
                        ctx.strokeRect( start_point.x, start_point.y, (current_point.x - start_point.x), (current_point.y - start_point.y) );
                    }
                    
                } );

                $( '#drawing_pad' ).mouseup( function( event ) {
                    var end_point = getMousePos( canvas, event );
                    ctx.strokeRect( start_point.x, start_point.y, (end_point.x - start_point.x), (end_point.y - start_point.y) );

                    building_shape = false;
                    $( '#image_data' ).val( canvas.toDataURL() );
                    $( '#drawing_pad' ).unbind( 'mouseup' );
                    $( '#drawing_pad' ).unbind( 'mousemove' );
                } );

            }
            
        } ); // End of mouse down function

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
