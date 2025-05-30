@extends('master')

@section('header')
<!--En esta vista se muestran los elementos filtrados en la vista all-->
    <form action="{{ route('communities.search') }}" method="GET" class="input-group mt-3 justify-content-center"
        style="max-width: 500px; margin: 0 auto;">
        <input type="text" name="data" class="form-control" placeholder="Encuentra tu comunidad"
            aria-label="Buscar comunidad">
        <button type="submit" class="btn fw-bold text-black" style="background-color: #f28dd0; color: white;">Buscar</button>
    </form>
@endsection

@section('main_title', __('messages.communitiesTitle'))


@section('content')
<div class="container">
    @if(isset($communities))
        <div class="mt-4 row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4"">
              @forelse ($communities as $community)
                        <div class=" col">
                    <div class="card h-100 shadow-sm" style="border: 1px solid rgb(11, 64, 161);">
                        <a href="{{ route('communities.provinces', $community->id) }}" class="text-decoration-none">
                            <div class="image-container" style="height: 180px; overflow: hidden;">
                                <img src="{{ asset($community->image) }}" class="img-fluid w-100 h-100 p-2  object-cover"
                                    alt="{{ $community->name }}">
                            </div>
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title fw-bold mb-0" style="color: rgb(11, 64, 161);">{{ $community->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
            <div class="col">
                <div class="card h-100 shadow-sm text-center d-flex align-items-center justify-content-center">
                    <div class="card-body">
                        <h5 class="text-muted">No se han encontrado resultados</h5>
                    </div>
                </div>
            </div>

        @endforelse
        </div>
        </div>
    @endif
@endsection