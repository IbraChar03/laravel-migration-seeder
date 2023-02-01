@extends('layouts.main-layout')
@section('content')
<ul>
    @foreach ($travels as $travel)
    <li>
        Place : {{$travel -> place }} <br>
        Price : {{$travel -> price_per_person }} &euro; <br>
        Description : {{$travel -> description }}<br>
        Departure Date : {{$travel -> departure_date }}<br>
        Arrival Vate : {{$travel -> arrival_date }}<br>
        Vote : {{$travel -> vote }} /10
    </li>
    @endforeach

</ul>
@endsection