@extends('master')

@section('header', 'Provincias de ' . $community->name)

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Provincias en {{ $community->name }}</h2>

        <ul class="list-group">
            @forelse ($provincesList as $province)
                <li class="list-group-item text-center"><a href="{{ route('provinces.towns', $province->id) }}">{{ $province->name }}</a> </li>
            @empty
                <li class="list-group-item">No hay provincias en esta comunidad.</li>
            @endforelse
        </ul>
        <a href="{{ route('communities.index') }}" class="btn btn-secondary mt-4">← Volver a Comunidades</a>
    </div>
</div>
@endsection