@extends('layouts.main-layout')
@section('content')
<ul>

    @foreach ($trains as $train)
    <li>Agency :{{$train -> agency}} <br>
        Train Code :{{$train -> code}} <br>
        Carriages Number :{{$train -> carriages_number}} <br>
        Departure Time :{{$train -> departure_time}} <br>
        Arrival Time :{{$train -> arrival_time}} <br>
    </li>
    @endforeach

</ul>
@endsection