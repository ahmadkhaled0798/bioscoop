<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmplanner</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        window.onload = function() {
            var src = document.getElementById("start_at"),
                dst = document.getElementById("end_at");
            src.addEventListener('input', function() {
                dst.value = src.value;
            });
        };

    </script>
</head>
<body>

    @include('employees.partials.header')

    @include('employees.partials.notification')

    <div class="filmtoevoegen"><h2>FILM TOEVOEGEN</h2></div>
    {{--{{route('films.store')}}--}}

    <form action="{{route('films.store')}}" method="POST">
        @csrf
        <div>
            <label for="film_title">Type hier de film title</label>
            <input id="film_title" type="text" name="film_title">
        </div>

        <div>
            <input type="submit" value="toevoegen">
        </div>
    </form>

    <form action="{{route('plans.store')}}" method="POST">
        @csrf
        <div class="planner_top">
            <h2>FILM PLANNER</h2>
            <label for="hall">Zaal nummer</label>
            <input id="hall" type="number" name="hall" min="1" max="3">

            <div>
                <label for="date">Datum</label>
                <input id="date" type="date" name="date">
            </div>
        </div>

        <div class="filmplannen">

            <div class="planner">
                <div>
                    <label for="start_at">Begintijd</label>
                    <input id="start_at" type="time" name="start_at">
                </div>

                <div>
                    <label for="film">Kies Film</label>
                    <select id="film" name="film">


                        @forelse($filmTitles->reverse() as $film)
                            <option value="{{ $film->film_title}}">{{ $film->film_title}}</option>
                        @empty
                            <option value="Geen films toegevoegd">Geen films toegevoegd</option>
                        @endforelse

                    </select>
                </div>
            </div>


            {{--<div class="planner">--}}
                {{--<div>--}}
                    {{--<label for="begintijd">Begintijd</label>--}}
                    {{--<input id="begintijd" type="time" name="begintijd">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<label for="eindtijd">Eindtijd</label>--}}
                    {{--<input id="eindtijd" type="time" name="eindtijd">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<label for="film">Film</label>--}}
                    {{--<input id="film" type="text" name="film">--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="planner">--}}
                {{--<div>--}}
                    {{--<label for="begintijd">Begintijd</label>--}}
                    {{--<input id="begintijd" type="time" name="begintijd">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<label for="eindtijd">Eindtijd</label>--}}
                    {{--<input id="eindtijd" type="time" name="eindtijd">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<label for="film">Film</label>--}}
                    {{--<input id="film" type="text" name="film">--}}
                {{--</div>--}}
            {{--</div>--}}


        </div>


        <div>
            <input type="submit" value="submit">
        </div>
    </form>


</body>
</html>


