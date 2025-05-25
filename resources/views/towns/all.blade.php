@extends('master')

@section('header')
        <div class="container">
            @if(Auth::check() && Auth::user()->role === 'creator')
                <a href="{{ route('towns.create', ['province_id' => $province->id]) }}" class="btn fw-bold" style="background-color: #f28dd0; color: white;">Añadir
                    pueblo</a>
            @endif
        </div>
@endsection

@section('content')
    <div class="container py-6">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="card shadow h-100">
                    <div class="card-header text-center text-white" style="background-color: rgb(11, 64, 161)">
                        <h4 class="mb-0">Eventos de esta provincia</h4>
                    </div>
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card shadow">
                    <div class="card-header text-center text-white" style="background-color: rgb(11, 64, 161)">
                        <h4 class="mb-0">Provincias de {{ $province->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-2 g-3">
                            @foreach ($townsList as $town)
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm text-center">
                                        <div class="d-flex justify-content-between align-items-center ">
                                            <a class="text-decoration-none fw-bold text-dark p-2"
                                                href="{{ route('towns.events', $town->id) }}">
                                                {{ $town->name }}
                                            </a>
                                            @if(Auth::check())
                                                <form method="POST" action="{{ route('towns.toggleFavorite', $town->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link p-0 border-0"
                                                        style="font-size: 1.5rem; color: {{ $town->favorite ? 'red' : '#ccc' }}">
                                                        <i class="fas fa-heart p-1"></i>
                                                    </button>
                                                </form>
                                            @endif
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
        var events = @json($eventsJson);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es',
                initialView: 'dayGridMonth',
                height: 500,
                firstDay: 1,
                buttonText: {
                    today: 'Hoy',
                    list: 'Agenda'
                },
                events: events.map(function (event) {
                    return {
                        title: event.title,
                        start: event.date,
                        extendedProps: {
                            town: event.town
                        },
                        // Tooltip nativo:
                        title: event.title + " - Pueblo: " + event.town
                    };
                }),
                eventDidMount: function (info) {
                    info.el.setAttribute('title', info.event.title);
                }
            });

            calendar.render();
        });
    </script>
@endsection