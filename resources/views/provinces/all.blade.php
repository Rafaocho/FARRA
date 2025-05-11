@extends('master')

@section('header', 'Provincias de ' . $community->name)

@section('sub_header')
<div class="hero-section text-black text-center d-flex align-items-center" style=" background-size: cover; background-position: center; height: 250px;">
<div class="container">
        <h2 class="display-4 fw-bold">Descubre los mejores eventos</h2>
        <p class="lead">Eventos únicos, experiencias inolvidables. ¡Únete ahora!</p>
    </div>
</div>
@endsection

@section('content')
<div class="container">
        <h1 class="text-center mb-4">¡Estas son las provincias disponibles de {{ $community->name }}!</h1>
        
<div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
        @forelse ($provincesList as $province)
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <a href="{{ route('provinces.towns', $province->id) }}" class="stretched-link text-decoration-none fw-bold">
                        <img  src="{{ asset($province->image) }}"class="img-fluid">
                        {{ $province->name }}
                    </a>
                </div>
            </div>
        </div>

        @empty
            <p>No hay provincias en esta comunidad.</p>
    @endforelse
    
</div>
<a class="btn btn-primary d-flex justify-content-center mt-4" href="{{ route('communities.index') }}" >← Volver a Comunidades</a>
@endsection