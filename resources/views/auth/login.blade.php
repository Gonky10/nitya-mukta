@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-secondary bg-opacity-30 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white rounded-lg shadow-xl p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-primary mb-2">
                    Bienvenido de nuevo
                </h2>
                <p class="text-gray-600">
                    Inicia sesión para acceder a nuestros servicios
                </p>
            </div>

            @if ($errors->any())
                <div class="mb-4 bg-red-50 border-l-4 border-red-500 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-circle text-red-500"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700">
                                Por favor verifica tus credenciales e intenta nuevamente.
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Correo Electrónico
                    </label>
                    <div class="mt-1">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm @error('email') border-red-500 @enderror">

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Contraseña
                    </label>
                    <div class="mt-1">
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm @error('password') border-red-500 @enderror">

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Recordarme
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-primary hover:text-secondary">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-secondary hover:text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Iniciar Sesión
                    </button>
                </div>

                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600">
                        ¿No tienes una cuenta?
                        <a href="{{ route('register') }}" class="font-medium text-primary hover:text-secondary">
                            Regístrate aquí
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
