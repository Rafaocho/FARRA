@extends('master')

@section('header')
  {{-- Buscador solo en esta vista --}}
  <form action="{{ route('communities.search') }}" method="GET" class="input-group mt-3 justify-content-center" style="max-width: 500px; margin: 0 auto;">
    <input type="text" name="data" class="form-control" placeholder="{{ __('messages.placeholderCommunities') }}" aria-label="{{ __('messages.placeholderCommunities') }}">
    <button type="submit" class="btn fw-bold text-black" style="background-color: #f28dd0; color: white;">
      {{ __('messages.search') }}
    </button>
  </form>
@endsection

@section('main_title', __('messages.communitiesTitle'))

@section('content')
  <div class="mt-4 row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
    @foreach ($communitiesList as $community)
      <div class="col">
        <div class="card h-100 shadow-sm hover-effect" style="border: 1px solid rgb(11, 64, 161);">
          <a href="{{ route('communities.provinces', $community->id) }}" class="text-decoration-none">
            <div class="image-container" style="height: 180px; overflow: hidden;">
              <img src="{{ asset($community->image) }}" alt="{{ $community->name }}" class="img-fluid w-100 p-2 h-100 object-cover">
            </div>
            <div class="card-body p-3 text-center">
              <h5 class="card-title mb-0 fw-bold" style="color: rgb(11, 64, 161);">{{ $community->name }}</h5>
            </div>
          </a>
        </div>
      </div>
    @endforeach
  </div>
@endsection
