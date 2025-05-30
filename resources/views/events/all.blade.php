@extends('master')
<!--Vista que muestra todos los eventos del pueblo-->
@section('header')
    <div class="container">
        @if(Auth::check() && Auth::user()->role === 'creator')
<!--Boton de añadir eventos-->
            <a href="{{ route('events.create', ['town_id' => $town->id]) }}" class="btn fw-bold" style="background-color: #f28dd0; color: white;">
                {{ __('messages.addEvent') }}
            </a>
        @endif
    </div>
@endsection

@section('content')
<!--Se muestra un mapa de la ubicacion del pueblo-->
<div class="container py-2">
    <div class="row gy-4">
        <div class="col-md-4">
            <div class="card shadow h-100 ">
                <div class="card-header text-center text-white" style="background-color: rgb(11, 64, 161)">
                     <h4 class="p-1">{{ __('messages.arrive') }}{{ $town->name }}?</h4>
                </div>
                <div class="card-body">
                    <div id="map" style="height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow p-3 h-100">
                <h1 class="text-center mb-4">
                    {{ __('messages.eventsList') }} {{ $town->name }}
                </h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @forelse ($eventsList as $event)
                        <div class="col">
                            <div class="card h-100" style="border: 1px solid rgb(11, 64, 161);">
                                @if($event->type == 'party')
                                    <img src="{{ asset('images/fiesta.jpg') }}" class="img-fluid" alt="{{ __('messages.event') }} de fiesta">
                                @elseif($event->type == 'religious')
                                    <img src="{{ asset('images/religion.png') }}" class="img-fluid" alt="{{ __('messages.event') }} religioso">
                                @elseif($event->type == 'cultural')
                                    <img src="{{ asset('images/cultura.webp') }}" class="img-fluid" alt="{{ __('messages.event') }} cultural">
                                @elseif($event->type == 'gastronomic')
                                    <img src="{{ asset('images/gastronomia.jpg') }}" class="img-fluid" alt="{{ __('messages.event') }} gastronómico">
                                @endif
                                <a class="h5 text-center text-decoration-none text-dark d-block p-2" href="{{ route('events.show', $event->id) }}">
                                    {{ $event->title }}<br> {{ $event->date }}
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="card border border-primary text-center p-4">
                                <p class="mb-0 text-muted">{{ __('messages.noEvents') }}</p>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a class="btn fw-bold" style="background-color: #f28dd0; color: white;" href="{{ route('provinces.towns', $province->id) }}">
                        ← {{ __('messages.goBack') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var map = L.map('map').setView([{{ $town->latitude }}, {{ $town->longitude }}], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
    L.marker([{{ $town->latitude }}, {{ $town->longitude }}]).addTo(map)
        .bindPopup('<b>{{ $town->name }}</b>')
        .openPopup();
</script>
@endsection
