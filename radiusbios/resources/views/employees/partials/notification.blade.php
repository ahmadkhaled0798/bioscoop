@if(session('success_film'))
    <div>
        {{session('success_film')}}
    </div>
@endif

@if(session('success_planner'))
    <div>
        {{session('success_planner')}}
    </div>
@endif


@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach