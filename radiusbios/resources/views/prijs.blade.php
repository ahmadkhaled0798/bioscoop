<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radiusbios | Edit Price Page</title>
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <!-- Header -->
    @include ('layouts.header')

    <div class="center">
        
        <!-- Title -->
        <h1>Welcome on the edit page</h1>

        <!-- Messages -->
        @if(session('succes'))
            {{session('succes')}}
        @endif

        <!-- Form -->
        <form method="POST" action="{{route('prijs.update', 1)}}">
            @method('PATCH')
            @csrf
            <div class="grid">
                <div class="prijs">
                    <label for="prijs-normale-stoel">€</label>
                    <input class="input" type="number" name="prijs-normale-stoel"
                    placeholder='{{$data->ticket_price}}'>
                    <label for="prijs-normale-stoel">prijs normale stoel</label>
                </div>

                <div class="percentage">
                    <label for="percentage-loveseat">%</label>
                    <input class="input" type="number" name="percentage-loveseat"
                    placeholder='{{$data->loveseat_percentage}}'>
                    <label for="percentage-loveseat">percentage loveseat</label>
                </div>

            </div>

            <button class="w3-button w3-black" type="submit">Opslaan</button>
        </form>
    </div>

    <!-- Footer -->
    @include ('layouts.footer')
</body>
</html>
