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
</head>
<body>

    @include('employees.partials.header')

    <div><h2>FILM TOEVOEGEN</h2></div>
    {{--{{route('films.store')}}--}}

    <form action="" method="POST">
        @csrf
        <div>
            <label for="film">Film toevoegen</label>
            <input id="film" type="text" name="film">
        </div>

        <div>
            <input type="submit" value="toevoegen">
        </div>
    </form>

    <h2>FILM PLANNER</h2>
    {{--{{route('plannings.store')}}--}}

    <form action="" method="POST">
        @csrf
        <div>
            <label for="hall">Zaal nummer</label>
            <input id="hall" type="number" name="hall" min="1" max="5">

            <div>
                <label for="date">Datum</label>
                <input id="date" type="date" name="date">
            </div>
        </div>


        <div class="filmplannen">


            <div class="planner">
                <div>
                    <label for="begintijd">Begintijd</label>
                    <input id="begintijd" type="time" name="begintijd">
                </div>
                <div>
                    <label for="eindtijd">Eindtijd</label>
                    <input id="eindtijd" type="time" name="eindtijd">
                </div>
                <div>
                    <label for="film">Film</label>
                    <input id="film" type="text" name="film">
                </div>
            </div>


            <div class="planner">
                <div>
                    <label for="begintijd">Begintijd</label>
                    <input id="begintijd" type="time" name="begintijd">
                </div>
                <div>
                    <label for="eindtijd">Eindtijd</label>
                    <input id="eindtijd" type="time" name="eindtijd">
                </div>
                <div>
                    <label for="film">Film</label>
                    <input id="film" type="text" name="film">
                </div>
            </div>

            <div class="planner">
                <div>
                    <label for="begintijd">Begintijd</label>
                    <input id="begintijd" type="time" name="begintijd">
                </div>
                <div>
                    <label for="eindtijd">Eindtijd</label>
                    <input id="eindtijd" type="time" name="eindtijd">
                </div>
                <div>
                    <label for="film">Film</label>
                    <input id="film" type="text" name="film">
                </div>
            </div>


        </div>


        <div>
            <input type="submit" value="submit">
        </div>
    </form>


</body>
</html>


