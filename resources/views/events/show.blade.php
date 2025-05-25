@extends('master')

@section('header', 'Evento')

@section('sub_header')
    <div class="hero-section text-black text-center d-flex align-items-center"
        style=" background-size: cover; background-position: center; height: 250px;">
        <div class="container">
            <h2 class="display-4 fw-bold">Descubre las mejores fiestas</h2>
            <p class="lead">Eventos únicos, experiencias inolvidables. ¡Únete ahora!</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="container col-8 card shadow-lg p-5">
        <div class="position-relative">
            <h1 class="text-center mb-4">Detalles del evento</h1>
            <div class="position-absolute top-0 end-0 m-3">
                @if(Auth::check() && Auth::user()->role === 'creator')
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning me-2">Editar</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                @endif
            </div>
        </div>
        <ul class="list-group">
            <li class="list-group-item"><strong>Descripción:</strong> {{ $event->description }}</li>
            <li class="list-group-item"><strong>Fecha:</strong>
                {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</li>
            <li class="list-group-item"><strong>Pueblo:</strong> {{ $event->town->name ?? 'N/D' }}</li>
            <li class="list-group-item text-center">
                {{ $event->attendees->count() }} personas se han apuntado
            </li>
        </ul>
        @auth
            <div class="d-flex justify-content-center mt-4">
                @if($event->attendees && $event->attendees->contains(auth()->id()))
                    <form action="{{ route('event.leave', $event->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Cancelar asistencia</button>
                    </form>
                @else
                    @if ($event->price > 0)
                        <a href="{{ route('events.pay', $event->id) }}" class="btn btn-success">
                            Apuntarse al evento (€{{ $event->price }})
                        </a>
                    @else
                        <!-- Evento gratuito -->
                        <form action="{{ route('event.join', $event->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Apuntarse al evento</button>
                        </form>
                    @endif
                @endif
            </div>
        @endauth
        <a href="{{ route('towns.events', $event->town_id) }}" class="btn btn-secondary mt-4">← Volver atrás</a>

        <h3 class="mt-5">Deja tu opinión</h3>

        <form id="review-form" method="POST" action="{{ route('reviews.store', $event->id) }}" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="rate" class="form-label">Valoración (0 a 10):</label>
                <input type="number" name="rate" id="rate" class="form-control" min="0" max="10" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Comentario:</label>
                <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Enviar opinión</button>
            </div>
        </form>

        <h3 class="mt-5 text-center">Opiniones de los asistentes</h3>

        <ul class="list-group mt-3" id="review-list">
            @foreach ($event->reviews as $review)
                @include('components.review-item', ['review' => $review])
            @endforeach
        </ul>
    </div>

    <script>
        document.getElementById('review-form').addEventListener('submit', async function (e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                if (!response.ok) throw new Error('Error');

                const data = await response.json();

                const reviewList = document.getElementById('review-list');
                reviewList.insertAdjacentHTML('beforeend', data.html);

                form.reset();
            } catch (error) {
                alert('Error');
                console.error(error);
            }
        });
    </script>
    @if(session('message'))
        <script>
            alert("{{ session('message') }}")
        </script>
    @endif
@endsection
