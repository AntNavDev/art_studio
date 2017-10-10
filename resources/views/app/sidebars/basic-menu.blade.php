<div>
    <h4><a href="{{ route( 'homepage' ) }}">Home</a></h4><br>
    @auth

        <div class="row">
            <div class="col-md-12">
                <h4><a href="{{ route( 'art-project.index' ) }}">My Projects</a></h4><br>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <h4><a href="{{ route( 'logout' ) }}" onclick="event.preventDefault(); document.getElementById( 'logout-form' ).submit();" class="">Logout</a></h4>
                <form id="logout-form" action="{{ route( 'logout' ) }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

    @endauth
    @guest
        <h4><a href="{{ route( 'login' ) }}">Login</a></h4><br>
        <h4><a href="{{ route( 'register' ) }}">Register</a></h4><br>
    @endguest
</div>
