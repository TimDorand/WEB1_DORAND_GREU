<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plateforme BAP - IIM</title>

    <link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}">

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('assets/app.assets') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            font-weight:300;
        }
        h1{
            font-weight:200;
        }

        .fa-btn {
            margin-right: 6px;

        }

        .navbar{
            background:white;
        }
        .navbar-brand img{
            margin-top:-15px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="http://www.iim.fr/ecole-web/wp-content/uploads/2013/06/log_iim_site_web.png" height="50">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Accueil</a></li>
                    @if (Auth::check() && Auth::user()->admin == 1)
                        <li><a href="{{ route('admin.index') }}">Administration</a></li>
                        <li><a href="{{ route('posts.create') }}">Rédiger un article</a></li>
                        <li><a href="{{ route('user.index') }}">Les utilisateurs</a></li>


                    @elseif (Auth::check())
                        <li><a href="{{ route('bap.create') }}">Soumettre un projet</a></li>
                        <li><a href="{{ route('bap.index') }}">Mon projet</a></li>
                        <li><a href="{{ route('contact.create') }}">Contactez-nous</a></li>
                    @endif

                    <li><a href="{{ route('posts.index') }}">Blog</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('user.index') }}"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }} </a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
