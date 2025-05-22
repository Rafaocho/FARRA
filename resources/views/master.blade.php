<!DOCTYPE html>
<html lang="en">

<head>
  @if(Auth::user()->role === 'user')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @elseif(Auth::user()->role === 'creator')
    <link rel="stylesheet" href="{{ asset('css/creator.css') }}">
  @endif
  <link rel="icon" href="{{ asset('images/Farra.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FARRA?!</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales/es.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="bg-light">
  <header class="navbar navbar-expand-lg shadow-sm position-relative"
    style="background-color: var(--primary); color: white;">
    <div class="container d-flex justify-content-between align-items-center py-3">

      <div class="d-flex align-items-center">
        <h1 class="h3 fw-bold mb-0 text-white">@yield('header')</h1>
      </div>

      <div class="position-absolute top-50 start-50 translate-middle">
        <a href="{{ route('index') }}">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" width="170" height="170"
            class="me-3">
        </a>
      </div>

      <div class="d-flex align-items-center gap-3">
        <a href="{{ route('lang.switch', 'es') }}">
          <img src="{{ asset('images/flags/es.png') }}" alt="Español" style="width:24px; height:auto; cursor:pointer;">
        </a>
        <a href="{{ route('lang.switch', 'en') }}">
          <img src="{{ asset('images/flags/en.png') }}" alt="English" style="width:24px; height:auto; cursor:pointer;">
        </a>
        @auth
      <div class="dropdown position-relative text-center" style="z-index: 2">
        <a style="cursor: pointer;" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('images/user.webp') }}" alt="Usuario" class="rounded-circle"
          style="width: 45px; height: 45px; object-fit: cover;">
        </a>
        <ul class="dropdown-menu mt-2" style="left: 50%; transform: translateX(-50%);">
        <li>
          <a class="dropdown-item text-center fw-bold" href="{{ route('profile.show', auth()->user()->id) }}">Ver perfil</a>
        </li>
        <li>
          <a class="dropdown-item text-center fw-bold" href="{{ route('profile.edit') }}">Editar perfil</a>
        </li>
        <li>
          <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="dropdown-item fw-bold text-danger text-center"
            style="background: none; border: none;">Cerrar sesión</button>
          </form>
        </li>
        </ul>
      </div>
    @endauth
      </div>
    </div>
  </header>
  <div> @yield('sub_header')</div>

  </div>
  <section>
    <main>
      <h1>
        @yield('main_title')
      </h1><br><br>
      @section('content')
      @show
    </main>
  </section>
</body>

</html>