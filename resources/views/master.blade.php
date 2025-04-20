<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h2 class="display-4">@yield('header')</h2>
        <img src="{{ asset('images/logo.png') }}" alt="LOGO">
        <div class="usuario">
                @auth
                    {{ Auth::user()->name }}
                    <a href="{{ route('profile.edit') }}" class="btn">Ver mi perfil</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Cerrar sesión</button>
                    </form>
                @else
                    <a class="btn btn-primary" href="{{ route('login') }}">Iniciar sesión</a>
                    <a class="btn btn-primary" href="{{ route('register')}}">Registrarse</a>
                @endauth
        </div>
    </header>
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