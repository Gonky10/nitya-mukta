@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-secondary bg-opacity-30 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white rounded-lg shadow-xl p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-primary mb-2">
                    Crear una cuenta
                </h2>
                <p class="text-gray-600">
                    Únete a nuestra comunidad y descubre nuestros servicios
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Nombre Completo
                    </label>
                    <div class="mt-1">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required
                            autocomplete="name" autofocus
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm @error('name') border-red-500 @enderror">

                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Correo Electrónico
                    </label>
                    <div class="mt-1">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                            autocomplete="email"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm @error('email') border-red-500 @enderror">

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Contraseña
                    </label>
                    <div class="mt-1">
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm @error('password') border-red-500 @enderror">

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password-confirm" class="block text-sm font-medium text-gray-700">
                        Confirmar Contraseña
                    </label>
                    <div class="mt-1">
                        <input id="password-confirm" type="password" name="password_confirmation" required
                            autocomplete="new-password"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-secondary hover:text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300">
                        Registrarse
                    </button>
                </div>

                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600">
                        ¿Ya tienes una cuenta?
                        <a href="{{ route('login') }}" class="font-medium text-primary hover:text-secondary">
                            Inicia sesión aquí
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
