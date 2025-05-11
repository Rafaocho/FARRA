@extends('master')

@section('header', 'Comunidades')
@section('sub_header')
    <div class="hero-section text-black text-center d-flex align-items-center"
        style=" background-size: cover; background-position: center; height: 250px;">
        <div class="container">
            <h2 class="display-4 fw-bold">Descubre los mejores eventos</h2>
            <p class="lead">Eventos únicos, experiencias inolvidables. ¡Únete ahora!</p>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">¡Estas son las comunidades disponibles!</h2>
            <div class="row mb-3">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('communities.search') }}" method="GET" class="input-group">
                        <input type="text" name="dato" class="form-control" placeholder="Encuentra tu comunidad">
                        <button type="submit" class="btn btn-dark">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
        @if(isset($communities))
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
            @forelse ($communities as $community)
                <div class="col">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <a href="{{ route('communities.provinces', $community->id) }}"
                                class="stretched-link text-decoration-none fw-bold">
                                <img src="{{ asset($community->image) }}" class="img-fluid">
                                {{ $community->name }}
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <span>No se han encontrado resultados</span>  
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    @endif
@endsection