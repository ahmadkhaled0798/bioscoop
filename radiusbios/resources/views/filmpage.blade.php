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
        @include('layouts.footer')

        <img src="{{$obj->Poster}}">
        <ul>
            <li> Film Title: {{$obj->Title}} </li>
            <li>Released: {{$obj->Released}}</li>
            <li>Runtime: {{$obj->Runtime}} </li>
            <li>Genre: {{$obj->Genre}}</li>
            <li>Director: {{$obj->Director}}</li>
        </ul>

        @include('layouts.footer')
    </body>
</html>