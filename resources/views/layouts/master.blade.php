<html>
    <head>
        <title>Github API</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
            $(function () {
                $("#accordion").accordion();
            });
        </script>







        @yield('styles')
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="collapse navbar-collapse" id="navbar-brand-centered">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Repositories</a></li>
                        <li class="active"><a href="{{url('auth/logout')}}">Logout</a></li>
                    </ul>
                </div>
            </nav>

            @yield('content')

            @yield('scripts')
        </div>
    </body>
</html>