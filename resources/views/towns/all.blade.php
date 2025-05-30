@extends('master')
<!--En esta vista vemos todos los pueblos de la provincia en la qque nos encontremos-->
@section('header')
    <div class="container">
<!--Boton para añadir pueblos-->
        @if(Auth::check() && Auth::user()->role === 'creator')
            <a href="{{ route('towns.create', ['province_id' => $province->id]) }}" class="btn fw-bold" style="background-color: #f28dd0; color: white;">
                {{ __('messages.addTown') ?? 'Añadir pueblo' }}
            </a>
        @endif
    </div>
@endsection

@section('content')
    <div class="container py-6">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="card shadow h-100">
                    <div class="card-header text-center text-white" style="background-color: rgb(11, 64, 161)">
                        <h4 class="mb-0">{{ __('messages.calendarTitle') }}</h4>
                    </div>
<!--Calendario con las fechas de los pueblos de la provincia-->
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card shadow">
                    <div class="card-header text-center text-white" style="background-color: rgb(11, 64, 161)">
                        <h4 class="mb-0">{{ __('messages.townsFrom') . $province->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-2 g-3">
                            @foreach ($townsList as $town)
                                <div class="col">
                                    <div class="card h-100 shadow-sm hover-effect p-1" style="border: 1px solid rgb(11, 64, 161);">

                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="text-decoration-none fw-bold text-dark p-2"
                                               href="{{ route('towns.events', $town->id) }}">
                                                {{ $town->name }}
                                            </a>
                                            @if(Auth::check())
<!--Posibilidad de agregar pueblos a favoritos-->
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
<!--Scripts para traer los eventos y para que funcione el calendario-->
    <script>
        var events = @json($eventsJson);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: '{{ __('messages.idiom') }}',
                initialView: 'dayGridMonth',
                height: 500,
                firstDay: 1,
                buttonText: {
                    today: '{{ __('messages.days') }}',
                    list: 'Agenda'
                },
                events: events.map(function (event) {
                    return {
                        title: event.title,
                        start: event.date,
                        extendedProps: {
                            town: event.town
                        },
                        title: event.title + " - {{ __('messages.town') }} " + event.town
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
