<!doctype html>
<html lang="{{ app()->getLocale() }}">

<!-- Bootstrap -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- jQuery CDN -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<!-- jQuery UI -->
<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>

<head>
    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset( 'css/font-awesome-4.7.0/css/font-awesome.css' ) }}">
    <title>{{ config( 'app.name' ) }}</title>
</head>

<body>
    <div class="row">

        <div id="homepage_sidebar" class="col-md-2">
            @include( 'app.sidebars.basic-menu' )
        </div>
        <div class="col-md-8">

            <div class="row">
                <div class="col-md-12">
                    @if( Session::has( 'success' ) )
                        <div class="alert alert-success">{{ Session::get( 'success' ) }}</div>
                    @elseif( Session::has( 'failure' ) )
                        <div class="alert alert-danger">{{ Session::get( 'failure' ) }}</div>
                    @endif
                    @yield( 'title-bar' )
                </div>
            </div>

            <div class="row">
                <div id="" class="col-md-12">
                    @yield( 'content' )
                </div>
            </div>

        </div>

        <div class="col-md-2">
            @include( 'app.sidebars.accents.basic-accents' )
        </div>

    </div>
    
    @yield( 'footer' )
</body>
</html>
