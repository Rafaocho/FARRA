<x-guest-layout>
    <style>
        .register-wrapper {
            display: flex;
            flex-direction: row;
            border: 1px solid black;
            max-width: 1000px;
            margin: 30px auto;
            height: 90vh;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .left-side {
            flex: 1;
            background-color: #f28dd0;
            padding: 40px 35px;
            color: black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .left-side h1 {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 16px;
        }

        .left-side p {
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .right-side {
            flex: 1.2;
            padding: 40px 35px;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .right-side img {
            max-width: 280px;
            height: 280px;
            margin-bottom: 20px;
        }

        .register-form {
            width: 100%;
            max-width: 400px;
        }

        .register-form .block {
            margin-bottom: 14px;
        }

        select,
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            height: 42px;
            font-size: 0.95rem;
            padding: 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: 0.3s ease;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        input[type="password"]:focus {
            border-color: #f28dd0;
            outline: none;
            box-shadow: 0 0 5px rgba(242, 141, 208, 0.6);
        }
        input:focus,
        select:focus {
            border-color: #f28dd0;
            outline: none;
            box-shadow: 0 0 4px rgba(242, 141, 208, 0.4);
        }

        button.x-primary-button {
            background-color: #f28dd0;
            border: none;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            padding: 10px 0;
            border-radius: 7px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button.x-primary-button:hover {
            background-color: #d26bb0;
        }

        .register-form a {
            color: #f28dd0;
            font-weight: 600;
            text-decoration: none;
            font-size: 0.95rem;
        }

        .register-form a:hover {
            color: #d26bb0;
        }

        @media (max-width: 768px) {
            .register-wrapper {
                flex-direction: column;
                max-width: 90vw;
            }

            .left-side,
            .right-side {
                padding: 25px 20px;
                text-align: center;
            }

            .left-side {
                order: 2;
            }

            .right-side {
                order: 1;
            }

            .register-form {
                max-width: 100%;
            }
        }
    </style>

    <div class="register-wrapper">
        <!-- Lado izquierdo -->
        <div class="left-side">
            <h1 >¡Bienvenido a Farra!</h1>
            <p>Farra es la app donde las fiestas de pueblo cobran vida. Descubre fiestas, gastronomia, culturas y todo
                tipo de eventos cerca de ti.</p>
            <p>Descubre pueblos, apúntate a tus fiestas favoritas y conéctate con otros que también viven la experiencia al
                máximo.</p>
            <p>Registrate para explorar, guardar eventos y recibir notificaciones personalizadas. ¡No te pierdas la
                próxima farra!</p>
        </div>

        <!-- Lado derecho -->
        <div class="right-side">
            <img src="{{ asset('images/Farra.png') }}" alt="FARRA Logo" >

            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf

                <!-- Nombre -->
                <div>
                    <x-input-label for="name" :value="__('Nombre de usuario:')" />
                    <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Correo electrónico')" />
                    <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Edad -->
                <div>
                    <x-input-label for="age" :value="__('Edad')" />
                    <x-text-input id="age" class="block w-full" type="number" name="age" :value="old('age')" required />
                    <x-input-error :messages="$errors->get('age')" class="mt-2" />
                </div>

                <!-- Rol -->
                <div>
                    <x-input-label for="role" :value="__('Tipo de usuario')" />
                    <select name="role" id="role">
                        <option value="user">Usuario</option>
                        <option value="creator">Creador</option>
                    </select>
                </div>

                <!-- Contraseña -->
                <div>
                    <x-input-label for="password" :value="__('Contraseña')" class="mt-4" />
                    <x-text-input id="password" class="block w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirmar contraseña -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                    <x-text-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Botón -->
                <div style="margin-top: 16px;">
                    <x-primary-button class="w-full">
                        {{ __('REGISTRARSE') }}
                    </x-primary-button>
                </div>

                <!-- Enlace a login -->
                <div style="margin-top: 16px; text-align: center;">
                    ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
