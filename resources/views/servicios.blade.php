@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[50vh] overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('img/centro5.png') }}" alt="Centro Holístico" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40"></div>
        </div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl lg:text-6xl font-bold mb-4">Nuestros Servicios</h1>
                <p class="text-xl lg:text-2xl">Descubre tu camino hacia el bienestar integral</p>
            </div>
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
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <a href="{{ route('servicios.show', ['slug' => $service->slug]) }}" class="group">
                        <div
                            class="bg-secondary bg-opacity-30 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                            <div class="text-primary text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
                                @switch($service->slug)
                                    @case('coaching')
                                        <i class="fas fa-brain"></i>
                                    @break

                                    @case('reiki')
                                        <i class="fas fa-hands"></i>
                                    @break

                                    @case('rito-utero')
                                        <i class="fas fa-venus"></i>
                                    @break

                                    @case('tarjeta-cuantica')
                                        <i class="fas fa-infinity"></i>
                                    @break

                                    @case('aromaterapia')
                                        <i class="fas fa-leaf"></i>
                                    @break

                                    @case('mujer-sagrada')
                                        <i class="fas fa-moon"></i>
                                    @break

                                    @default
                                        <i class="fas fa-star"></i>
                                @endswitch
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-primary">{{ $service->name }}</h3>
                            <p class="text-primary">{{ $service->subtitle }}</p>
                            <div
                                class="mt-4 text-primary flex items-center group-hover:translate-x-2 transition-transform duration-300">
                                <span class="mr-2">Conoce más</span>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">¿Lista para comenzar tu viaje de transformación?</h2>
            <p class="text-xl mb-8 text-secondary">Agenda tu sesión y descubre el poder de la sanación holística</p>
            <a href="/contacto"
                class="bg-white text-primary px-8 py-3 rounded-full hover:bg-secondary transition duration-300 font-semibold">
                Agenda tu cita
            </a>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }

        .group:hover .group-hover\:translate-x-2 {
            transform: translateX(0.5rem);
        }
    </style>
@endpush
