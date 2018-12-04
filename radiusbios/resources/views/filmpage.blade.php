<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$obj->Title}}</title>
</head>
    <body>
        @include('layouts.header')
        <div class="content">

            <img src="{{$obj->Poster}}">

            <ul>
                <h1>{{$obj->Title}}</h1>
                <li>Released: {{$obj->Released}}</li>
                <li>Runtime: {{$obj->Runtime}} </li>
                <li>Genre: {{$obj->Genre}}</li>
                <li>Director: {{$obj->Director}}</li>
                <li>Language: {{$obj->Language}}</li>
                <li>Rated: {{$obj->Rated}}</li>
                <li>Rating: {{$obj->imdbRating}}</li>
                <br>
                <p>{{$obj->Plot}}</p>
            </ul>
        </div>
        @include('layouts.footer')
    </body>
</html>