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

    <script>
        filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        // Show filtered elements
        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        // Hide elements that are not selected
        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }
    </script>

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

                <form action="{{route('search.function')}}" method="POST" >
                    <label>Enter Movie Name</label>
                    <input type="text" name="movie_name">
                    <button class="w3-button w3-black" type="submit">Search</button>
                    @csrf
                </form>

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



            <div class="filterDiv 8-12-18">
                <img src="" alt="film poster">
                <p>MOVIE TITLE 8-12-18</p>
                <p>GENRE</p>
            </div>

            <div class="filterDiv 9-12-18">
                <img src="" alt="film poster">
                <p>MOVIE TITLE 9-12-18</p>
                <p>GENRE</p>
            </div>

            <div class="filterDiv 10-12-18">
                <img src="" alt="film poster">
                <p>MOVIE TITLE 10-12-18</p>
                <p>GENRE</p>
            </div>

            <div class="filterDiv 11-12-18">
                <img src="" alt="film poster">
                <p>MOVIE TITLE 11-12-18</p>
                <p>GENRE</p>
            </div>

            <div class="filterDiv 12-12-18">
                <img src="" alt="film poster">
                <p>MOVIE TITLE 12-12-18</p>
                <p>GENRE</p>
            </div>

            <div class="filterDiv 12-12-18">
                <img src="" alt="film poster">
                <p>MOVIE TITLE 12-12-18</p>
                <p>GENRE</p>
            </div>

            <div class="filterDiv 12-12-18">
                <img src="" alt="film poster">
                <p>MOVIE TITLE 12-12-18</p>
                <p>GENRE</p>
            </div>

            <div class="filterDiv 13-12-18">
                <img src="" alt="film poster">
                <p>MOVIE TITLE 13-12-18</p>
                <p>GENRE</p>
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

