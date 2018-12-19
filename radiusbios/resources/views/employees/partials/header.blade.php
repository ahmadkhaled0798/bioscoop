<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="home">Bioscoop</a>
        </div>

        <ul class="nav navbar-nav">
            <li><a href="">Bezoeker registreren</a></li>
            <li><a href="">Ticket verkopen</a></li>
            <li><a href="">Film planner</a></li>
            <li><a href="">Prijs wijzigen</a></li>
        </ul>

        <ul class="navnavbar-nav">
            <span><ul><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></ul></span>
            <ul>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </ul>
        </ul>

    </div>
</nav>


