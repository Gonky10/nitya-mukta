@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[50vh] overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40"></div>
        </div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl lg:text-6xl font-bold mb-4">{{ $service->name }}</h1>
                <p class="text-xl lg:text-2xl">{{ $service->subtitle }}</p>
            </div>
        </div>
    </div>

    <!-- Contenido del Servicio -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Contenido Principal -->
                <div class="lg:col-span-2">
                    <div class="prose prose-lg max-w-none">
                        {!! $service->description !!}
                    </div>

                    <!-- Beneficios -->
                    @if (count($service->benefits) > 0)
                        <div class="mt-12">
                            <h2 class="text-3xl font-bold mb-6 text-primary">Beneficios</h2>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach ($service->benefits as $benefit)
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                        <span>{{ $benefit }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Testimonios -->
                    @if (count($service->testimonials) > 0)
                        <div class="mt-12">
                            <h2 class="text-3xl font-bold mb-6 text-primary">Testimonios</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach ($service->testimonials as $testimonial)
                                    <div class="bg-secondary bg-opacity-10 p-6 rounded-lg">
                                        <p class="text-gray-600 italic mb-4">"{{ $testimonial['texto'] }}"</p>
                                        <div class="flex items-center">
                                            <div>
                                                <p class="font-semibold text-primary">{{ $testimonial['nombre'] }}</p>
                                                <p class="text-sm text-gray-500">{{ $testimonial['fecha'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Galería -->
                    <div class="bg-secondary bg-opacity-10 p-6 rounded-lg mb-8" x-data="{ open: false, currentImage: null }">
                        <h3 class="text-xl font-bold mb-4 text-primary">Galería</h3>
                        <div class="grid grid-cols-2 gap-4">
                            @if (count($service->gallery) > 0)
                                @foreach ($service->gallery as $image)
                                    <div class="aspect-w-1 aspect-h-1 cursor-pointer"
                                        @click="currentImage = '{{ asset($image) }}'; open = true">
                                        <img src="{{ asset($image) }}" alt="Galería"
                                            class="object-cover rounded-lg hover:opacity-90 transition-opacity">
                                    </div>
                                @endforeach
                            @else
                                <div class="aspect-w-1 aspect-h-1 cursor-pointer"
                                    @click="currentImage = '{{ asset('img/centro9.png') }}'; open = true">
                                    <img src="{{ asset('img/centro9.png') }}" alt="Galería"
                                        class="object-cover rounded-lg hover:opacity-90 transition-opacity">
                                </div>
                                <div class="aspect-w-1 aspect-h-1 cursor-pointer"
                                    @click="currentImage = '{{ asset('img/centro10.png') }}'; open = true">
                                    <img src="{{ asset('img/centro10.png') }}" alt="Galería"
                                        class="object-cover rounded-lg hover:opacity-90 transition-opacity">
                                </div>
                            @endif
                        </div>

                        <!-- Modal -->
                        <div x-show="open" x-cloak class="fixed inset-0 z-50 overflow-y-auto"
                            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            <!-- Overlay -->
                            <div class="fixed inset-0 bg-black bg-opacity-75" @click="open = false"></div>

                            <!-- Modal content -->
                            <div class="relative min-h-screen flex items-center justify-center p-4">
                                <div class="relative bg-white rounded-lg max-w-4xl w-full">
                                    <button @click="open = false"
                                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-500">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                    <img :src="currentImage" alt="Imagen ampliada" class="w-full h-auto rounded-lg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Videos -->
                    @if (isset($service->videos) && count($service->videos) > 0)
                        <div class="bg-secondary bg-opacity-10 p-6 rounded-lg mb-8">
                            <h3 class="text-xl font-bold mb-4 text-primary">Videos</h3>
                            <div class="space-y-4">
                                @foreach ($service->videos as $video)
                                    <div class="aspect-w-16 aspect-h-9">
                                        <video controls class="w-full h-full rounded-lg">
                                            <source src="{{ asset($video) }}" type="video/mp4">
                                            Tu navegador no soporta el elemento de video.
                                        </video>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Precio -->
                    <div class="bg-primary text-white p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-4">Costo:</h3>
                        <p class="text-3xl font-bold mb-4">${{ number_format($service->price, 2) }}</p>
                        <a href="/contacto"
                            class="block text-center bg-white text-primary px-6 py-3 rounded-full hover:bg-secondary transition duration-300 font-semibold">
                            Contactanos
                        </a>
                    </div>
                </div>
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
        [x-cloak] {
            display: none !important;
        }

        .prose {
            color: #374151;
        }

        .prose h2 {
            color: rgb(157 130 102);
            font-size: 1.875rem;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .prose h3 {
            color: rgb(157 130 102);
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .prose p {
            margin-bottom: 1rem;
            line-height: 1.75;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1rem;
        }

        .prose li {
            margin-bottom: 0.5rem;
        }

        .prose img {
            border-radius: 0.5rem;
            margin: 1rem 0;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('gallery', () => ({
                selectedImage: null,
                init() {
                    this.selectedImage = null;
                }
            }))
        })
    </script>
@endpush
