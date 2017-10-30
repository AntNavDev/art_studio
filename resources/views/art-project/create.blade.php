@extends( 'app.shell' )

@section( 'title-bar' )
    <script type="text/javascript" src="{{ asset( 'js/art-project/art-project-revamped.js' ) }}"></script>
    <link href="{{ asset('css/art-project.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section( 'content' )
    <form method="POST" action="{{ route( 'art-project.store' ) }}">
        {{ csrf_field() }}
        <canvas name="canvas" id="drawing_pad">

        </canvas>
        <input id="image_data" name="image_data" type="hidden" value="">
        <input id="user_id" name="user_id" type="hidden" value="{{ Auth::user()->id }}">
        <button type="submit" id="save_image">Save Canvas</button>
    </form>
@endsection

@section( 'footer' )
    
@endsection
