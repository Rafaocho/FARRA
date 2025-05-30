@extends('master')
<!--En esta vista podemos ver todas las provincias-->
@section('main_title', __('messages.provincesTitle') . $community->name . '!')

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
    <p class="text-center mt-4">{{ __('messages.noProvinces') ?? 'No hay provincias en esta comunidad.' }}</p>
  @endif

  <div class="d-flex justify-content-center mt-4">
    <a class="btn fw-bold"  style="background-color: #f28dd0; color: white;" href="{{ route('communities.index') }}">← {{ __('messages.goBackCommunity') }}</a>
  </div>
@endsection
