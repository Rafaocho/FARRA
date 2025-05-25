@extends('master')


@section('header')

    <div class="container">
        @if(Auth::check() && Auth::user()->role === 'creator')
            <a href="{{ route('events.create', ['town_id' => $town->id]) }}" class="btn fw-bold" style="background-color: #f28dd0; color: white;">Crear evento</a>
        @endif
    </div>
@endsection

@section('content')
<div class="container py-2">
    <div class="row gy-4">
        <!-- Mapa a la izquierda -->
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h4 class="card-title text-center">¿Cómo llegar a {{ $town->name }}?</h4>
                    <div id="map" style="height: 400px;"></div>
                </div>
            </div>
        </div>

        <!-- Eventos a la derecha -->
        <div class="col-md-8">
            <div class="card shadow p-3 h-100">
                <h1 class="text-center mb-4">Eventos en {{ $town->name }}</h1>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @if ($eventsList->isEmpty())
                        <p class="text-center">No hay eventos en este pueblo.</p>
                    @else
                        @foreach ($eventsList as $event)
                            <div class="col">
                                <div class="card h-100">
                                    @if($event->type == 'party')
                                        <img src="{{ asset('images/fiesta.jpg') }}" class="img-fluid" alt="Evento de fiesta">
                                    @elseif($event->type == 'religious')
                                        <img src="{{ asset('images/religion.png') }}" class="img-fluid" alt="Evento religioso">
                                    @elseif($event->type == 'cultural')
                                        <img src="{{ asset('images/cultura.webp') }}" class="img-fluid" alt="Evento cultural">
                                    @elseif($event->type == 'gastronomic')
                                        <img src="{{ asset('images/gastronomia.jpg') }}" class="img-fluid" alt="Evento gastronómico">
                                    @endif
                                    <a class="h5 text-center text-decoration-none text-dark" href="{{ route('events.show', $event->id) }}">
                                        {{ $event->title }}<br> {{ $event->date }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <a class="btn btn-secondary" href="{{ route('communities.provinces', $province->community_id) }}">
                        ← Volver a Provincias de la Comunidad
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mapa Script -->
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
