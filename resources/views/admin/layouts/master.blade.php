<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>@yield('page_title','')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description')">
    <meta name="author" content="Coder Studios Ltd">

    <link rel="stylesheet" href="{{ env('APP_BASE','') }}{{ elixir("css/app.css") }}">

    @yield('header')

</head>

<body class="admin">

<div class="container">

    <nav class="navbar navbar-default">

        <div class="container-fluid">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">{{ env('APP_NAME') }}</a>

            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">

                <ul class="nav navbar-nav">

                    <li><a href="{{ route('admin.home') }}">Home</a></li>

                    @if (!Auth::guest())

                    <li><a href="{{ route('admin.blog.index') }}">Blog</a></li>

                    <li><a href="{{ route('admin.clear-cache') }}">Clear Cache</a></li>

                    @endif

                </ul>

                @if (!Auth::guest())
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="{{ url('/logout') }}">Logout</a></li>

                </ul>
                @endif


            </div>

        </div>

    </nav>

</div>

@if($success_message)
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {!! $success_message !!}
        </div>
    </div>
</div>
@endif

@yield('content')

<script src="{{ env('APP_BASE','') }}{{ elixir("js/app.js") }}" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
<script src="//cdn.ckeditor.com/4.5.7/full-all/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.4/adapters/jquery.js"></script>


@yield('footer')

</body>
</html>