<x-guest-layout>
    <style>
        .login-wrapper {
            display: flex;
            flex-direction: row;
            border: 1px solid black;
            max-width: 1100px;
            margin: 40px auto;
            height: auto;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .left-side {
            flex: 1;
            background-color: #f28dd0;
            padding: 60px 50px;
            color: black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: left;
        }

        .left-side h1 {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 20px;
        }

        .left-side p {
            font-size: 1.15rem;
            line-height: 1.6;
            margin-bottom: 14px;
        }

        .right-side {
            flex: 1.3;
            padding: 60px 50px;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .right-side img {
            max-width: 350px;
            margin-bottom: 30px;
        }

        .login-form {
            width: 100%;
            max-width: 600px;
        }

        .mb-4 {
            margin-bottom: 2rem;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            height: 48px;
            font-size: 1.15rem;
            padding: 0 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #f28dd0;
            outline: none;
            box-shadow: 0 0 5px rgba(242, 141, 208, 0.6);
        }

        .remember-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.95rem;
            margin-bottom: 25px;
        }

        .remember-row input[type="checkbox"] {
            margin-right: 8px;
            width: 18px;
            height: 18px;
        }

        .remember-row a {
            color: #f28dd0;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .remember-row a:hover {
            color: #d26bb0;
        }

        .w-full {
            width: 100%;
        }

        

        button.x-primary-button:hover {
            background-color: #d26bb0;
        }

        .register-text {
            margin-top: 30px;
            text-align: center;
            font-size: 1rem;
        }

        .register-text a {
            color: #f28dd0;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .register-text a:hover {
            color: #d26bb0;
        }

        @media (max-width: 768px) {
            .login-wrapper {
                flex-direction: column;
                max-width: 90vw;
            }

            .left-side,
            .right-side {
                width: 100%;
                padding: 30px 20px;
                text-align: center;
            }

            .left-side {
                order: 2;
            }

            .right-side {
                order: 1;
            }

            .login-form {
                max-width: 100%;
            }

            .remember-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>

    <div class="login-wrapper">
        <!-- Lado izquierdo -->
        <div class="left-side">
            <h1>¡Bienvenido de nuevo a Farra!</h1>
            <p>Farra es la app donde las fiestas de pueblo cobran vida. Descubre fiestas, gastronomia, culturas y todo
                tipo de eventos cerca de ti.</p>
            <p>Descubre pueblos, apúntate a tus fiestas favoritas y conéctate con otros que también viven la experiencia al
                máximo.</p>
            <p>Inicia sesión para explorar, guardar eventos y recibir notificaciones personalizadas. ¡No te pierdas la
                próxima farra!</p>
        </div>

        <!-- Lado derecho -->
        <div class="right-side">
            <img src="{{ asset('images/Farra.png') }}" alt="FARRA Logo">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Correo electrónico')" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                        autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Contraseña')" />
                    <x-text-input id="password" type="password" name="password" required
                        autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me + Forgot -->
                <div class="remember-row">
                    <label>
                        <input type="checkbox" name="remember"> Recordárme
                    </label>
                    <a href="{{ route('password.request') }}">¿Has olvidado tu contraseña?</a>
                </div>

                <!-- Submit -->
                <x-primary-button class="w-full text-center">
                    {{ __('Entrar') }}
                </x-primary-button>

                <!-- Register -->
                <div class="register-text">
                    ¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>