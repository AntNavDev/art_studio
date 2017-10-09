<div>
    <a href="{{ route( 'homepage' ) }}">Home</a><br>
    @auth
        <a href="{{ route( 'art-project.index' ) }}">My Projects</a><br>
    @endauth
    @guest
        <a href="{{ route( 'login' ) }}">Login</a><br>
        <a href="{{ route( 'register' ) }}">Register</a><br>
    @endguest
</div>
