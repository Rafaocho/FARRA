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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
</head>
<body class="bg-light">
<header class="navbar navbar-expand-lg shadow-sm position-relative">
  <div class="container d-flex justify-content-between align-items-center py-3">
    <div class="d-flex align-items-center">  
      <h1 class="h3 fw-bold mb-0 text-white">@yield('header')</h1>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle">
      <a href="{{ route('index') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="170" height="170" class="me-3 animate__animated animate__pulse animate__infinite">
      </a>
    </div>
    <div class="d-flex align-items-center">
      @auth
        <a href="{{ route('profile.edit') }}" class="btn btn-light rounded-pill px-4 me-2 shadow-sm">Editar mi perfil</a>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-error text-white bg-primary rounded-pill px-4 shadow-sm">Cerrar sesión</button>
        </form>
      @else
        <a class="btn btn-light rounded-pill px-4 me-2 shadow-sm" href="{{ route('login') }}">Iniciar sesión</a>
        <a class="btn btn-white text-white bg-primary rounded-pill px-4 shadow-sm" href="{{ route('register')}}">Registrarse</a>
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