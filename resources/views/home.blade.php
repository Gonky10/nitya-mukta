@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-primary text-white px-6 py-4">
                    <h2 class="text-2xl font-bold">{{ __('Dashboard') }}</h2>
                </div>

                <div class="p-6">
                    @if (session('status'))
                        <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center mb-8">
                        <h3 class="text-xl text-gray-700 mb-4">{{ __('¡Bienvenido a nuestra Escuela!') }}</h3>
                        <p class="text-gray-600">{{ __('Estás conectado y listo para explorar nuestros servicios.') }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <a href="{{ route('servicios.index') }}"
                            class="block p-6 bg-white border rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
                            <div class="text-center">
                                <i class="fas fa-spa text-4xl text-primary mb-4"></i>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Servicios</h4>
                                <p class="text-gray-600">Explora nuestros servicios holísticos</p>
                            </div>
                        </a>

                        <a href="{{ route('profile.index') }}"
                            class="block p-6 bg-white border rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
                            <div class="text-center">
                                <i class="fas fa-user text-4xl text-primary mb-4"></i>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Mi Perfil</h4>
                                <p class="text-gray-600">Gestiona tu información personal</p>
                            </div>
                        </a>

                        <a href="{{ url('/') }}"
                            class="block p-6 bg-white border rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
                            <div class="text-center">
                                <i class="fas fa-home text-4xl text-primary mb-4"></i>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Inicio</h4>
                                <p class="text-gray-600">Volver a la página principal</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
