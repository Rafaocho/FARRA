@extends('master')

@section('header', 'Provincias de ' . $province->name)

@section('sub_header')
<div class="hero-section text-black text-center d-flex align-items-center" style="background-size: cover; background-position: center; height: 250px;">
    <div class="container">
        <h2 class="display-4 fw-bold">Descubre las mejores fiestas</h2>
        <p class="lead">Eventos únicos, experiencias inolvidables. ¡Únete ahora!</p>
        @if(Auth::check() && Auth::user()->role === 'creator')
            <a href="{{ route('towns.create', ['province_id' => $province->id]) }}" class="btn btn-primary">Añadir pueblo</a>
        @endif
    </div>
</div>
@endsection

@section('content')
<div class="container py-6">
    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card shadow h-100">
                <div class="card-header text-center bg-primary text-white">
                    <h4 class="mb-0">Eventos de esta provincia</h4>
                </div>
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4 class="mb-0">Provincias de {{ $province->name }}</h4>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2 g-3">
                        @foreach ($townsList as $town)
                            <div class="col">
                                <div class="card h-100 border-0 shadow-sm text-center">
                                    <div class="card-body overflow-auto" style="max-height: 400px;">
                                        <a class="stretched-link text-decoration-none fw-bold text-dark" href="{{ route('towns.events', $town->id) }}">
                                            {{ $town->name }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var events = @json($events);

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 400,
            events: events.map(function(event) {
                return {
                    title: event.title,
                    start: event.date,
                };
            })
        });

        calendar.render();
    });
</script>
@endsection