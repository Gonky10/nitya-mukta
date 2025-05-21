@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[60vh] overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('img/talleres/talleres_7.jpeg') }}" alt="Coaching" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40"></div>
        </div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl lg:text-6xl font-bold mb-4">Coaching Transformacional</h1>
                <p class="text-xl lg:text-2xl">Descubre tu verdadero potencial y alcanza tus metas</p>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <!-- Descripción -->
            <div class="prose prose-lg max-w-none mb-12">
                <h2>¿Qué es el Coaching Transformacional?</h2>
                <p>El Coaching Transformacional es un proceso de acompañamiento personalizado que te ayuda a descubrir tu
                    verdadero potencial y alcanzar tus metas más significativas. A través de técnicas y herramientas
                    especializadas, trabajamos juntos para identificar y superar obstáculos, desarrollar nuevas perspectivas
                    y crear un plan de acción efectivo para tu crecimiento personal.</p>

                <h2>¿Cómo funciona?</h2>
                <p>Nuestro proceso de coaching se desarrolla en sesiones individuales donde:</p>
                <ul>
                    <li>Exploramos tus objetivos y aspiraciones más profundas</li>
                    <li>Identificamos patrones limitantes y creencias que te impiden avanzar</li>
                    <li>Desarrollamos estrategias personalizadas para superar obstáculos</li>
                    <li>Creamos un plan de acción concreto y medible</li>
                    <li>Te acompañamos en la implementación y seguimiento de tus metas</li>
                </ul>
            </div>

            <!-- Beneficios -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-primary mb-6">Beneficios</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start">
                        <div class="text-primary text-xl mr-3">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="text-gray-700">Mayor claridad sobre tus objetivos y propósito de vida</p>
                    </div>
                    <div class="flex items-start">
                        <div class="text-primary text-xl mr-3">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="text-gray-700">Desarrollo de habilidades de liderazgo personal</p>
                    </div>
                    <div class="flex items-start">
                        <div class="text-primary text-xl mr-3">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="text-gray-700">Superación de obstáculos y limitaciones</p>
                    </div>
                    <div class="flex items-start">
                        <div class="text-primary text-xl mr-3">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="text-gray-700">Mejora en la toma de decisiones</p>
                    </div>
                    <div class="flex items-start">
                        <div class="text-primary text-xl mr-3">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="text-gray-700">Mayor confianza y autoestima</p>
                    </div>
                    <div class="flex items-start">
                        <div class="text-primary text-xl mr-3">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="text-gray-700">Equilibrio entre vida personal y profesional</p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="bg-secondary bg-opacity-30 rounded-lg p-8 text-center">
                <h2 class="text-2xl font-bold text-primary mb-4">¿Lista para comenzar tu transformación?</h2>
                <p class="text-primary mb-6">Agenda tu sesión de coaching y descubre tu verdadero potencial</p>
                <a href="/contacto"
                    class="inline-block bg-primary text-white px-8 py-3 rounded-full hover:bg-secondary hover:text-primary transition duration-300 font-semibold">
                    Agenda tu cita
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="py-16 bg-secondary bg-opacity-30">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary text-center mb-12">Experiencias Transformadoras</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-primary text-2xl mr-3">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-primary">María González</h3>
                            <p class="text-sm text-gray-600">Enero 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"El coaching me ayudó a encontrar mi verdadero propósito y a tomar decisiones
                        más alineadas con mis valores. Ahora me siento más segura y confiada en mi camino."</p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-primary text-2xl mr-3">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-primary">Ana Martínez</h3>
                            <p class="text-sm text-gray-600">Diciembre 2023</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"Gracias al coaching pude superar mis miedos y limitaciones. Ahora tengo las
                        herramientas necesarias para enfrentar cualquier desafío con confianza y determinación."</p>
                </div>
            </div>
        </div>
    </section>
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
