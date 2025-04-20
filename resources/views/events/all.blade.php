@extends('master')

@section('header', 'Eventos en ' . $town->name)

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Eventos en {{ $town->name }}</h2>

            @if ($eventsList->isEmpty())
                <p class="text-center">No hay eventos en este pueblo.</p>
            @else
                <table class="table table-striped table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Título</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventsList as $event)
                            <tr>
                                <td>
                                    <a href="{{ route('events.show', $event->id) }}">
                                        {{ $event->title }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <a href="{{ route('communities.provinces', $province->community_id) }}" class="btn btn-secondary mt-4">
                ← Volver a Provincias de la Comunidad
            </a>
        </div>
    </div>
@endsection