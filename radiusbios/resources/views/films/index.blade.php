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
