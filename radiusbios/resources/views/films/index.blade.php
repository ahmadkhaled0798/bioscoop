<?php
/**
 * Created by PhpStorm.
 * User: ayub cige
 * Date: 22-11-2018
 * Time: 10:03
 */
?>
@include('layouts.header')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="content-films">
    <div class="films-page">

        <div class="top">
            <div class="title"><h1>Tijden en tickets vandaag</h1></div>

            <div class="w3-dropdown-hover w3-right">
                <button class="w3-button w3-black">Dropdown</button>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                    <a href="#" class="w3-bar-item w3-button">Vandaag</a>
                    <a href="#" class="w3-bar-item w3-button">24-11-2018</a>
                    <a href="#" class="w3-bar-item w3-button">25-11-2018</a>
                    <a href="#" class="w3-bar-item w3-button">26-11-2018</a>
                    <a href="#" class="w3-bar-item w3-button">27-11-2018</a>

            <div class="top">
                <div class="title"><h1>Films en tijden</h1></div>

                <div class="film-search">
                    <form action="{{route('search.function')}}" method="POST" >
                        <label>Enter Movie Name</label>
                        <input type="text" name="movie_name">

                        <button class="w3-button w3-black" type="submit">Search</button>
                        @csrf
                    </form>
                </div>

                <div class="w3-dropdown-hover w3-right">
                    <button class="w3-button w3-black">Kies een datum</button>
                    <div class="w3-dropdown-content w3-bar-block w3-border">
                        <div id="myBtnContainer">
                            <button class="btn" onclick="filterSelection('all')">Alle datums</button>
                            <button class="btn" onclick="filterSelection('7-12-18')">7-12-18</button>
                            <button class="btn" onclick="filterSelection('8-12-18')">8-12-18</button>
                            <button class="btn" onclick="filterSelection('9-12-18')">9-12-18</button>
                            <button class="btn" onclick="filterSelection('10-12-18')">10-12-18</button>
                            <button class="btn" onclick="filterSelection('11-12-18')">11-12-18</button>
                            <button class="btn" onclick="filterSelection('12-12-18')">12-12-18</button>
                            <button class="btn" onclick="filterSelection('13-12-18')">13-12-18</button>
                            <button class="btn" onclick="filterSelection('14-12-18')">14-12-18</button>
                            <button class="btn" onclick="filterSelection('15-12-18')">15-12-18</button>
                            <button class="btn" onclick="filterSelection('16-12-18')">16-12-18</button>
                            <button class="btn" onclick="filterSelection('17-12-18')">17-12-18</button>
                            <button class="btn" onclick="filterSelection('18-12-18')">18-12-18</button>



                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $today)}})">{{gmdate($date_format, $today)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow1)}})">{{gmdate($date_format, $tomorrow1)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow2)}})">{{gmdate($date_format, $tomorrow2)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow3)}})">{{gmdate($date_format, $tomorrow3)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow4)}})">{{gmdate($date_format, $tomorrow4)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow5)}})">{{gmdate($date_format, $tomorrow5)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow6)}})">{{gmdate($date_format, $tomorrow6)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow7)}})">{{gmdate($date_format, $tomorrow7)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow8)}})">{{gmdate($date_format, $tomorrow8)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow9)}})">{{gmdate($date_format, $tomorrow9)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow10)}})">{{gmdate($date_format, $tomorrow10)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow11)}})">{{gmdate($date_format, $tomorrow11)}}</button>--}}
                            {{--<button class="btn" onclick="filterSelection({{gmdate($date_format, $tomorrow12)}})">{{gmdate($date_format, $tomorrow12)}}</button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="middle">

                @for ($i = 0; $i <= 10; $i++)
                <div class="middle-content">
                    <div class="middle-content-img"><a href=""><img style="-webkit-user-select: none;" src="https://img.omdbapi.com/?i=tt2093100&amp;apikey=c8307ab5"></a></div>
                    <div class="middle-content-text">
                        <h2>Naam movie</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequuntur dicta doloribus, eligendi iste obcaecati quasi? Aliquid deserunt ducimus et exercitationem, explicabo itaque neque nostrum sunt ullam ut vitae voluptas.</p>
                        <p>16:15 - 18:46</p>
                        <p>Zaal 3</p>
                    </div>
                </div>
                @endfor


        </div>

    </div>
</div>
</body>
</html>
@include('layouts.footer')
