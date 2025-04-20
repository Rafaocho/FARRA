@extends('master')

@section('header', 'Detalles del Evento')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">{{ $event->title }}</h2>

            <ul class="list-group">
                <li class="list-group-item"><strong>Descripción:</strong> {{ $event->description }}</li>
                <li class="list-group-item"><strong>Fecha:</strong>
                    {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</li>
                <li class="list-group-item"><strong>Pueblo:</strong> {{ $event->town->name ?? 'N/D' }}</li>
            </ul>

            <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">← Volver atrás</a>

            <h3 class="mt-5">Deja tu opinión</h3>

            <form action="{{ route('reviews.store', $event->id) }}" method="POST" class="mt-3">
                @csrf
                <div class="mb-3">
                    <label for="rate" class="form-label">Valoración (0 a 10):</label>
                    <input type="number" name="rate" id="rate" class="form-control" min="0" max="10" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Comentario:</label>
                    <textarea name="content" id="content" class="form-control" rows="4"
                        placeholder="¿Qué te pareció el evento?"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Enviar opinión</button>
                </div>
            </form>

            <h3 class="mt-5 text-center">Opiniones de los asistentes</h3>

            @if ($event->reviews->isEmpty())
                <p class="text-muted text-center">Aún no hay opiniones para este evento.</p>
            @else
                <ul class="list-group mt-3">
                    @foreach ($event->reviews as $review)
                        <li class="list-group-item">
                            <strong>{{ $review->user->name ?? 'Usuario desconocido' }}</strong>
                            <span class="badge bg-primary ms-2">Valoración: {{ $review->rate }}/10</span>
                            <p class="mt-2 mb-0">{{ $review->content ?: 'Sin comentario escrito.' }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection