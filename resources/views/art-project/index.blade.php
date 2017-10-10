@extends( 'app.shell' )

@section( 'title-bar' )
    <link href="{{ asset('css/art-project.css') }}" rel="stylesheet">
@endsection

@section( 'content' )
    <p><a href="{{ route( 'art-project.create' ) }}">Create a new project</a></p>
    @foreach( $test as $t )
        <img src="{{ URL::to( '/' ) . '/' . $t[ 'dirname' ] . '/' . $t['basename']}}" class="project_thumbnail">
    @endforeach
@endsection

@section( 'footer' )
    
@endsection
