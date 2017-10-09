jQuery( document ).ready( function() {
    var canvas = document.getElementById( 'drawing_pad' );
    console.log( canvas );
    if( canvas.getContext )
    {
        var ctx = canvas.getContext( '2d' );
        ctx.fillStyle = 'rgba( 10, 10, 10, 0.5 )';
        ctx.strokeStyle = 'black';
        ctx.fillStyle = 'rgb(200, 0, 0)';
        ctx.fillRect(10, 10, 50, 50);

        ctx.fillStyle = 'rgba(0, 0, 200, 0.5)';
        ctx.fillRect(30, 30, 50, 50);
//         $( '#drawing_pad' ).mousedown( function( event ) {
//             ctx.beginPath();
//             ctx.moveTo( event.pageX, event.pageY );
// console.log(event.pageX + ' ' + event.pageY );
//             // ctx.lineTo( event.pageX, event.pageY );
//             // ctx.stroke();

//             // ctx.closePath();
//         } );

        // $( '#drawing_pad' ).mousemove( function( event ) {
        //     ctx.lineTo( event.pageX, event.pageY );
        //     ctx.stroke();
        //  } );

//         $( '#drawing_pad' ).mouseup( function( event ) {
//             // ctx.lineTo( event.pageX, event.pageY );
//             // ctx.stroke();
// console.log(event.pageX + ' ' + event.pageY );
//             ctx.closePath();
//         } );
    }

} );
