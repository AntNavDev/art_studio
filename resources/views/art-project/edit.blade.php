@extends( 'app.shell' )

@section( 'title-bar' )
    <script type="text/javascript" src="{{ asset( 'js/art-project/art-project-revamped.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset( 'js/art-project/art-project-edit.js' ) }}"></script>
    <link href="{{ asset('css/art-project.css') }}" rel="stylesheet">
@endsection

@section( 'content' )
    <input type="hidden" id="encoded_image" value="{{ $art_project->project_url }}" >

    <form method="POST" action="{{ route( 'art-project.update', $art_project ) }}">
        {{ method_field( 'PUT' ) }}
        {{ csrf_field() }}
        <canvas name="canvas" id="drawing_pad">

        </canvas>
        <input id="image_data" name="image_data" type="hidden" value="">
        <input id="user_id" name="user_id" type="hidden" value="{{ Auth::user()->id }}">
        <button type="submit" id="save_image">Save Canvas</button>
    </form>
@endsection
