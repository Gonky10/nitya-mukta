@extends('layouts.app')

@section('content')
    <div class="py-12 bg-secondary bg-opacity-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 sm:p-8">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-primary">Mi Perfil</h2>
                        <p class="mt-1 text-gray-600">Administra tu información personal y configuración de cuenta</p>
                    </div>

                    @if (session('success'))
                        <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Información Personal -->
                        <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                            <h3 class="text-xl font-semibold text-primary mb-4">Información Personal</h3>

                            <div class="space-y-4">
                                <!-- Nombre -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">
                                        Nombre Completo
                                    </label>
                                    <input type="text" name="name" id="name"
                                        value="{{ old('name', $user->name) }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm @error('name') border-red-500 @enderror">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">
                                        Correo Electrónico
                                    </label>
                                    <input type="email" name="email" id="email"
                                        value="{{ old('email', $user->email) }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm @error('email') border-red-500 @enderror">
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Cambiar Contraseña -->
                        <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                            <h3 class="text-xl font-semibold text-primary mb-4">Cambiar Contraseña</h3>
                            <p class="text-sm text-gray-600 mb-4">Deja estos campos en blanco si no deseas cambiar tu
                                contraseña</p>

                            <div class="space-y-4">
                                <!-- Contraseña Actual -->
                                <div>
                                    <label for="current_password" class="block text-sm font-medium text-gray-700">
                                        Contraseña Actual
                                    </label>
                                    <input type="password" name="current_password" id="current_password"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm @error('current_password') border-red-500 @enderror">
                                    @error('current_password')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Nueva Contraseña -->
                                <div>
                                    <label for="new_password" class="block text-sm font-medium text-gray-700">
                                        Nueva Contraseña
                                    </label>
                                    <input type="password" name="new_password" id="new_password"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm @error('new_password') border-red-500 @enderror">
                                    @error('new_password')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Confirmar Nueva Contraseña -->
                                <div>
                                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">
                                        Confirmar Nueva Contraseña
                                    </label>
                                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                                </div>
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="flex justify-end space-x-4">
                            <a href="{{ url()->previous() }}"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-primary hover:text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors">
                                Cancelar
                            </a>
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-secondary hover:text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors">
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
