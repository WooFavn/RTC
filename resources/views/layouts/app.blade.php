<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/bower_resources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="/bower_resources/jquery/dist/jquery.min.js"></script>
    {{--<script src="/bower_resources/bootstrap/dist/js/bootstrap.min.js"></script>--}}
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/girls') }}">Girls</a></li>
                <li><a href="{{ url('/guys') }}">Guys</a></li>
                <li><a href="{{ url('/couples') }}">Couples</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="{{ url('/profile') }}"> {{ Auth::user()->name }} </a>
                    <li>
                        <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
    @yield('sort')
    @yield('content')
{{--<div class="panel panel-default">--}}
    {{--<div class="panel-footer"><span>RTC by San.</span><br><span>2016 - 2016</span></div>--}}
{{--</div>--}}
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/video.js"></script>

</body>
</html>
