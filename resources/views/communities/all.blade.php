@extends('master')

@section('header', 'Comunidades')
@section('sub_header')
<div class="hero-section text-black text-center d-flex align-items-center" style=" background-size: cover; background-position: center; height: 250px;">
<div class="full-width-image-container">
    <div class="text-overlay">
        <h2 class="display-4 fw-bold">{{ __('messages.welcomeEvents') }}</h2>
        <p class="lead">{{ __('messages.subEvent') }}</p>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="card shadow-lg p-4 " style="border: 1px solid rgb(11, 64, 161)">
        <h2 class="text-center mb-5 mt-2" style="color:rgb(11, 64, 161)"><b>¡Estas son las comunidades disponibles!</b></h2>
        <div class="row mb-3">
  <div class="col-md-8 offset-md-2">
    <form action="{{ route('communities.search') }}" method="GET" class="input-group">
    @csrf  
    <input type="text" name="data" class="form-control" placeholder="Encuentra tu comunidad">
      <button type="submit" class="btn btn-dark">Buscar</button>
    </form>
  </div>
</div>
</div>
<div  class="row row-cols-1 row-cols-md-4 g-4 mt-5">
    @foreach ($communitiesList as $community)
        <div class="col">
            <div class="card h-100 text-center shadow-sm " style="border: 1px solid rgb(11, 64, 161)">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <a href="{{ route('communities.provinces', $community->id) }}" class="stretched-link text-decoration-none fw-bold">
                        <img  src="{{ asset($community->image) }}"class="img-fluid ">
                        {{ $community->name }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>

@endsection