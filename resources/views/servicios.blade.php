@extends('layouts.app')

@section('content')
    <!-- Header -->
    <div class="bg-secondary bg-opacity-30 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-center text-primary mb-4">Nuestros Servicios</h1>
            <p class="text-xl text-center text-primary">Descubre el camino hacia tu bienestar integral</p>
            <p class="text-lg text-center text-primary mt-4">Todos nuestros servicios pueden pagarse hasta en 12 cuotas</p>
        </div>
    </div>

    @if (session('message'))
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
                <p>{{ session('message') }}</p>
            </div>
        </div>
    @endif

    <!-- Servicios Grid -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($services as $service)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-primary mb-2">{{ $service->name }}</h3>
                        @if ($service->description)
                            <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                        @endif
                        <p class="text-3xl font-bold text-primary mb-4">${{ number_format($service->price, 2, ',', '.') }}
                        </p>
                        @auth
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                <input type="hidden" name="name" value="{{ $service->name }}">
                                <input type="hidden" name="price" value="{{ $service->price }}">
                                <button type="submit"
                                    class="w-full bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                                    Agregar al Carrito
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                                class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                                Iniciar Sesión para Solicitar
                            </a>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- CTA Final -->
    <div class="bg-primary text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">¿Listo para comenzar tu viaje de transformación?</h2>
            <p class="text-xl mb-4 text-secondary">Todos nuestros servicios pueden pagarse hasta en 12 cuotas</p>
            @auth
                <a href="{{ route('cart.index') }}"
                    class="inline-block bg-white text-primary px-8 py-3 rounded-full font-bold hover:bg-secondary transition duration-300">
                    Ver Carrito
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="inline-block bg-white text-primary px-8 py-3 rounded-full font-bold hover:bg-secondary transition duration-300">
                    Iniciar Sesión
                </a>
            @endauth
        </div>
    </div>
@endsection
