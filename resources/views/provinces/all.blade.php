@extends('master')

@section('main_title', '¡Estas son las provincias disponibles de ' . $community->name . '!')

@section('content')
  @if($provincesList->isNotEmpty())
    <div class="mt-4 row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
      @foreach ($provincesList as $province)
        <div class="col">
          <div class="card h-100 shadow-sm hover-effect" style="border: 1px solid rgb(11, 64, 161);">
            <a href="{{ route('provinces.towns', $province->id) }}" class="text-decoration-none">
              <div class="image-container" style="height: 180px; overflow: hidden;">
                <img src="{{ asset($province->image) }}" alt="{{ $province->name }}" class="img-fluid w-100 p-2 h-100 object-cover">
              </div>
              <div class="card-body p-3 text-center">
                <h5 class="card-title mb-0 fw-bold" style="color: rgb(11, 64, 161);">{{ $province->name }}</h5>
              </div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p class="text-center mt-4">No hay provincias en esta comunidad.</p>
  @endif

  <div class="d-flex justify-content-center mt-4">
    <a class="btn btn-primary" href="{{ route('communities.index') }}">← Volver a Comunidades</a>
  </div>
@endsection
