@extends( 'app.shell' )

@section( 'title-bar' )
    <script type="text/javascript" src="{{ asset( 'js/art-project/art-project.js' ) }}"></script>
    <link href="{{ asset('css/art-project.css') }}" rel="stylesheet">
@endsection

@section( 'content' )
    <canvas id="drawing_pad">

    </canvas>
@endsection

@section( 'footer' )
    
@endsection
