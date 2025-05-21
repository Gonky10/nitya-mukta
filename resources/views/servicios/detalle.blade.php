@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[60vh] overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset($imagen) }}" alt="{{ $titulo }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40"></div>
        </div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl lg:text-6xl font-bold mb-4">{{ $titulo }}</h1>
                <p class="text-xl lg:text-2xl">{{ $subtitulo }}</p>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <!-- Descripción -->
            <div class="prose prose-lg max-w-none mb-12">
                {!! $descripcion !!}
            </div>

            <!-- Beneficios -->
            @if (isset($beneficios) && count($beneficios) > 0)
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-6">Beneficios</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($beneficios as $beneficio)
                            <div class="flex items-start">
                                <div class="text-primary text-xl mr-3">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <p class="text-gray-700">{{ $beneficio }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Galería -->
            @if (isset($galeria) && count($galeria) > 0)
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-6">Galería</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($galeria as $imagen)
                            <div class="aspect-w-1 aspect-h-1">
                                <img src="{{ asset($imagen) }}" alt="{{ $titulo }}"
                                    class="w-full h-full object-cover rounded-lg shadow-md hover:shadow-xl transition duration-300">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- CTA -->
            <div class="bg-secondary bg-opacity-30 rounded-lg p-8 text-center">
                <h2 class="text-2xl font-bold text-primary mb-4">¿Lista para comenzar tu transformación?</h2>
                <p class="text-primary mb-6">Agenda tu sesión y descubre el poder de la sanación holística</p>
                <a href="/contacto"
                    class="inline-block bg-primary text-white px-8 py-3 rounded-full hover:bg-secondary hover:text-primary transition duration-300 font-semibold">
                    Agenda tu cita
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    @if (isset($testimonios) && count($testimonios) > 0)
        <section class="py-16 bg-secondary bg-opacity-30">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-primary text-center mb-12">Experiencias Transformadoras</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ($testimonios as $testimonio)
                        <div class="bg-white rounded-lg p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <div class="text-primary text-2xl mr-3">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-primary">{{ $testimonio['nombre'] }}</h3>
                                    <p class="text-sm text-gray-600">{{ $testimonio['fecha'] }}</p>
                                </div>
                            </div>
                            <p class="text-gray-700">{{ $testimonio['texto'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection

@push('styles')
    <style>
        .prose {
            color: #374151;
        }

        .prose h2 {
            color: #1F2937;
            font-weight: 600;
            margin-top: 2em;
            margin-bottom: 1em;
        }

        .prose p {
            margin-bottom: 1.5em;
            line-height: 1.75;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.5em;
            margin-bottom: 1.5em;
        }

        .prose li {
            margin-bottom: 0.5em;
        }
    </style>
@endpush
