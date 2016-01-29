<html>
    <head>
        <title>Github API</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

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