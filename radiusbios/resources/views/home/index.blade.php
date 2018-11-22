@include ('layouts.header')
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        .mySlides{display: none}
        .w3-left, .w3-right , .w3-badge {cursor: pointer}
        .w3-badge{height: 13px; width: 13px; padding: 0;}
    </style>
</head>
<body>
<div class="home-page">

    <div class="w3-content w3-display-container">
        <img class="mySlides" src="https://via.placeholder.com/1000x500">
        <img class="mySlides" src="https://via.placeholder.com/1000x500">
        <img class="mySlides" src="https://via.placeholder.com/1000x500">
        <div class="w3-center w3-display-bottommiddle" style="width:100%">
            <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
        </div>
    </div>
    <div class="top-movies">
        <h1>top movies</h1>
    </div>


    <div class="images">

        @for($i = 0; $i <= 4; $i++)
            <div class="images-content">
                <a href=""><img style="-webkit-user-select: none;" src="https://img.omdbapi.com/?i=tt2093100&amp;apikey=c8307ab5"></a>
                <h3>name movie</h3>
            </div>
        @endfor


    </div>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n)
        }

        function currentDiv(n) {
            showDivs(slideIndex = n)
        }

        function showDivs(n) {

            var i;
            var x = document.getElementsByClassName("mySlides")
            var dots = document.getElementsByClassName("demo")
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }

            for (i = 0; i < dots.length; i++) {
                x[i].style.display = "none"
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace("w3-white", "")
            }

            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += "w3-white"
        }
    </script>
</div>
</body>
</html>
@include ('layouts.footer')
