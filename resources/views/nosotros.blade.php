@extends('layouts.app')

@section('content')
    <!-- Header -->
    <div class="bg-secondary bg-opacity-30 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-center text-primary mb-4">Nuestro Equipo</h1>
            <p class="text-xl text-center text-primary">Conoce a los profesionales que te acompañarán en tu camino de
                transformación</p>
        </div>
    </div>

    <!-- Equipo -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Pachi Crottollini -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-4">Pachi Crottollini</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Profesora de Reiki Usui
                        </li>
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Terapeuta de Flores de Bach
                        </li>
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Especialista en Aromaterapia
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Cecilia Vazquez -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-4">Cecilia Vazquez</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Profesora de Yoga
                        </li>
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Especialista en Cosmiatría Holística
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Cristina Schirstti -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-4">Cristina Schirstti</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Profesora de Yoga Integral
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Andrea Oliverio -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-4">Andrea Oliverio</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Profesora de Educación Física
                        </li>
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Profesora de Yoga y Yoga Kundalini
                        </li>
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Coach Ontológico
                        </li>
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Especialista en Aromaterapia
                        </li>
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Facilitadora de Ceremonias Holísticas
                        </li>
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Sacerdotisa de María Magdalena
                        </li>
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Master Teacher de Magnified Healing
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Julieta Ramirez -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-4">Julieta Ramirez</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <span class="text-primary mr-2">•</span>
                            Profesora de Yoga
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Mensaje Final -->
    <div class="bg-primary text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Un equipo comprometido con tu bienestar</h2>
            <p class="text-xl mb-8 text-secondary">Cada uno de nuestros profesores está dedicado a guiarte en tu camino de
                transformación personal</p>
            <a href="/contacto"
                class="bg-white text-primary px-8 py-3 rounded-full hover:bg-secondary transition duration-300 font-semibold">
                Conoce Más
            </a>
        </div>
    </div>
@endsection
