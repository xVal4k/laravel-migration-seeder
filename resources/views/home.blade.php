@extends('template/base')

@section('Title', 'Laravel-Migration')

@section('content')
    <main>
        <div class="table">
            <div class="row col_title">
                <h2>Partenza - Arrivo</h2>
                <p>Orario di partenza:</p>
                <p>Orario di arrivo:</p>
                <p>Binario treno:</p>
            </div>
            @foreach ($trains as $train)
                <div class="row">
                    <h2>{{ $train->Departure_station }} - {{ $train->Arrival_station }}</h2>
                    <p>{{ $train->Departure_time }}</p>
                    <p>{{ $train->Arrival_time }}</p>
                    <p>{{ $train->Train }}</p>
                </div>
            @endforeach
        </div>
    </main>
@endsection
