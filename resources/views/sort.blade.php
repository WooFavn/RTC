@section('sort')
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/girls/new') }}">Newest</a></li>
                    <li><a href="{{ url('/girls/online') }}">Open</a></li>
                    <li><a href="{{ url('/girls/private') }}">Private</a></li>
                    <li><a href="{{ url('/girls/group') }}">Group</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection