<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>films</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <?php
        $date_format = ('d-m-y');
        $today = strtotime('now');
        $tomorrow1 = strtotime('+1 day', $today);
        $tomorrow2 = strtotime('+2 day', $today);
        $tomorrow3 = strtotime('+3 day', $today);
        $tomorrow4 = strtotime('+4 day', $today);
        $tomorrow5 = strtotime('+5 day', $today);
        $tomorrow6 = strtotime('+6 day', $today);
        $tomorrow7 = strtotime('+7 day', $today);
        $tomorrow8 = strtotime('+8 day', $today);
        $tomorrow9 = strtotime('+9 day', $today);
        $tomorrow10 = strtotime('+10 day', $today);
        $tomorrow11 = strtotime('+11 day', $today);
        $tomorrow12 = strtotime('+12 day', $today);
    ?>

    @include('layouts.header')

    <div class="content-films">
        <div class="films-page">

            <div class="top">
                <div class="title"><h1>Films en tijden</h1></div>
                <div class="w3-dropdown-hover w3-right">
                    <button class="w3-button w3-black">Datums</button>

                    <form action="{{route('search.function')}}" method="POST" >
                        <label>Enter Movie Name</label>
                        <input type="text" name="movie_name">
                        <button type="submit">Search</button>
                        @csrf
                    </form>

                    <div class="w3-dropdown-content w3-bar-block w3-border">
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $today)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow1)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow2)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow3)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow4)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow5)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow6)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow7)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow8)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow9)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow10)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow11)}}</a>
                        <a href="#" class="w3-bar-item w3-button">{{gmdate($date_format, $tomorrow12)}}</a>
                    </div>
                </div>
            </div>


            {{--<div class="middle">--}}
                {{--@foreach( $films as $film)--}}
                    {{--<div class="middle-content">--}}
                        {{--<img class="middle-content-img" src="{{$film->poster}}" alt="film poster">--}}
                        {{--<div class="middle-content-text">--}}
                            {{--<h2><a href="">{{$film->titel}}</a></h2>--}}
                            {{--<p>{{$film->genre}}</p>--}}
                            {{--<ul>--}}
                                {{--@foreach($films as $film)--}}
                                    {{--<li><a href="{{route('films.show', $film->id)}}">{{$film->begintijd, "-", $film->eindtijd}}</a></li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}


        </div>
    </div>
    @include('layouts.footer')
</body>
</html>

