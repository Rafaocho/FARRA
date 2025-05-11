@extends('master')

@section('header', 'Eventos en ' . $town->name)

@section('sub_header')
<div class="hero-section text-black text-center d-flex align-items-center" style=" background-size: cover; background-position: center; height: 250px;">
<div class="container">
        <h2 class="display-4 fw-bold">Descubre las mejores fiestas</h2>
        <p class="lead">Eventos únicos, experiencias inolvidables. ¡Únete ahora!</p>
        @if(Auth::check() && Auth::user()->role === 'creator')
            <a href="{{ route('events.create', ['town_id' => $town->id]) }}" class="btn btn-primary">Crear evento</a>
        @endif
    </div>
</div>
@endsection
@section('content')
    <div class="d-flex row">

        <!-- Mapa a la izquierda -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center">¿Como llegar a {{ $town->name }}?</h4>
                    <div id="map" style="height: 500px;"></div> <!-- Aquí va el mapa -->
                </div>
            </div>
        </div>
        <div class="col-md-8 card p-2">
            
                <div class="position-relative">
                    <h1 class="text-center mb-4">Eventos en {{ $town->name }}</h1>
                

                <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
                    @if ($eventsList->isEmpty())
                        <p class="text-center">No hay eventos en este pueblo.</p>
                    @else
                        @foreach ($eventsList as $event)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    @if($event->type == 'party')
                                        <img src="{{ asset('images/fiesta.jpg') }}" class="img-fluid" alt="Evento de fiesta">
                                    @elseif($event->type == 'religious')
                                        <img src="{{ asset('images/religion.png') }}" class="img-fluid" alt="Evento religioso">
                                    @elseif($event->type == 'cultural')
                                        <img src="{{ asset('images/cultura.webp') }}" class="img-fluid" alt="Evento cultural">
                                    @elseif($event->type == 'gastronomic')
                                        <img src="{{ asset('images/gastronomia.jpg') }}" class="img-fluid" alt="Evento gastronómico">
                                    @endif
                                    <a class="h5 text-center text-decoration-none" href="{{ route('events.show', $event->id) }}">
                                        {{ $event->title }}<br> {{$event->date}}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    
                </div>
                <a class="d-flex justify-content-center btn btn-secondary mt-4"
                        href="{{ route('communities.provinces', $province->community_id) }}">
                        ← Volver a Provincias de la Comunidad
                    </a>
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
