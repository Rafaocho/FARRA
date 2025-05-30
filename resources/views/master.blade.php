<!DOCTYPE html>
<html lang="es">
<!--Estructura principal de la página-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FARRA?!</title>
  <link rel="icon" href="{{ asset('images/Farra.png') }}">
  @if(Auth::user()->role === 'user')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @elseif(Auth::user()->role === 'creator')
    <link rel="stylesheet" href="{{ asset('css/creator.css') }}">
  @endif

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--Importando un tipo de letra y bootstrap-->
  <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!--Importamos leaflet y font-awesome-->
  <link href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<!--Los scripts necesarios para fullcalendar-->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales/es.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

  <header class="position-relative text-white" style="height: 330px;">
    <div class="full-width-image-container"></div>
  <!--Gestión de cambio de idiomas-->
    <div class="container h-100 position-relative d-flex justify-content-between align-items-start py-4">
      <div class="d-flex align-items-center gap-3 ms-auto">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
      <a rel="alternate" hreflang="{{ $localeCode }}"
        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
        class="text-decoration-none text-light fs-5">
        {{ strtoupper($localeCode) }}
      </a>
    @endforeach
<!--Sección para el usuario-->
        @auth
      <div class="dropdown position-relative">
        <a style="cursor: pointer;" class="d-inline-block" data-bs-toggle="dropdown" data-bs-display="static"
        aria-expanded="false">
        <img src="{{ asset('images/user.webp') }}" alt="{{ __('messages.user') ?? 'Usuario' }}"
          class="rounded-circle" style="width: 45px; height: 45px; object-fit: cover;">
        </a>

        <ul class="dropdown-menu mt-2 text-center" style="left: 50%; transform: translateX(-50%);">
        <li>
          <a class="dropdown-item fw-bold text-center" href="{{ route('profile.show', auth()->user()->id) }}">
          {{ __('messages.viewProfile') ?? 'Ver perfil' }}
          </a>
        </li>
        <li>
          <a class="dropdown-item fw-bold text-center" href="{{ route('profile.edit') }}">
          {{ __('messages.editProfile2') ?? 'Editar perfil' }}
          </a>
        </li>
        <li>
          <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="dropdown-item fw-bold text-danger text-center">
            {{ __('messages.logout') ?? 'Cerrar sesión' }}
          </button>
          </form>
        </li>
        </ul>
      </div>
    @endauth
      </div>
    </div>

    <div class="position-absolute start-50 translate-middle-x text-center" style="bottom: 35%;">
      <a href="{{ route('index') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="250" height="250">
      </a>
    </div>

    <div class="position-absolute bottom-0 start-50 translate-middle-x text-center mb-4">
      <h2 class="display-4 fw-bold">{{ __('messages.welcomeEvents') }}</h2>
      <p class="lead">{{ __('messages.subEvent') }}</p>
      @yield('header')
    </div>
  </header>

  <section>
    @yield('sub_header')

    <main>
      <h1 class="text-center mt-4">@yield('main_title')</h1>
      <div class="container">
        @yield('content')
      </div>
    </main>
  </section>

</body>

</html>