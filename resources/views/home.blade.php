@extends('template/base')

@section('Title', 'Laravel-Migration')

@section('content')
    @foreach ($trains as $train)
        <p>{{ $train->Departure_station }} - {{ $train->Arrival_station }}</p>
        <p>{{ $train->Departure_time }}</p>
        <p>{{ $train->Arrival_time }}</p>
        <p>{{ $train->train }}</p>
    @endforeach
@endsection
