@extends('master')

@section('header', 'Provincias de ' . $province->name)

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Pueblos en {{ $province->name }}</h2>

        <ul class="list-group">
            @forelse ($townsList as $town)
                <li class="list-group-item text-center">
                <a href="{{ route('towns.events', $town->id) }}">{{ $town->name }}</a>
                </li>
            @empty
                <li class="list-group-item">No hay provincias de este pueblo</li>
            @endforelse
        </ul>
        <a href="{{ route('communities.provinces', $community->id) }}" class="btn btn-secondary mt-4">← Volver a Provincias de {{ $community->name }}
</a>
    </div>
</div>
@endsection