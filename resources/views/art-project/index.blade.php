@extends( 'app.shell' )

@section( 'title-bar' )

@endsection

@section( 'content' )
    <a href="{{ route( 'art-project.create' ) }}">Create a new project</a>
    @foreach( $projects as $project )
        {{ base64_decode($project->project_url) }}

    @endforeach
@endsection

@section( 'footer' )
    
@endsection
