<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="home">Bioscoop</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="films">Films</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="faq">FAQ</a></li>
            <li><a href="privacy">Privacy</a></li>

        </ul>

        @if (Auth::check())

            <ul class="navnavbar-nav">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>

        @else
            <ul class="navnavbar-nav">


                <span><ul><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></ul></span>
                <ul>
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </ul>
            </ul>
          @endif


    </div>
</nav>

@yield('content')

</body>
</html>