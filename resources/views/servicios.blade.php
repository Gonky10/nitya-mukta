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

    <!-- Servicios Grid -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Kit Astral -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Kit Astral</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$50.000,00</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Solicitar
                    </a>
                </div>
            </div>

            <!-- Rito del corazón y Sanación -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Rito del corazón y Sanación del linaje Paterno</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$17.999,00</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Reservar
                    </a>
                </div>
            </div>

            <!-- Tarjeta cuántica -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Tarjeta cuántica</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$74.999,99</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Solicitar
                    </a>
                </div>
            </div>

            <!-- Mujer Sagrada -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Mujer Sagrada</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$17.999,00</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Reservar
                    </a>
                </div>
            </div>

            <!-- Magnified Healing -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Magnified Healing</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$17.999,99</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Reservar
                    </a>
                </div>
            </div>

            <!-- Rito del útero -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Rito del útero</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$17.999,98</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Reservar
                    </a>
                </div>
            </div>

            <!-- Aromaterapia -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Aromaterapia</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$17.999,00</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Reservar
                    </a>
                </div>
            </div>

            <!-- Johrei -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Johrei</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$17.999,98</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Reservar
                    </a>
                </div>
            </div>

            <!-- Velas ancestrales -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Velas ancestrales</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$4.000,00</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Solicitar
                    </a>
                </div>
            </div>

            <!-- Protector Áurico -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Protector Áurico</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$3.999,99</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Solicitar
                    </a>
                </div>
            </div>

            <!-- Botiquín holístico -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Botiquín holístico</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$19.999,00</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Solicitar
                    </a>
                </div>
            </div>

            <!-- Coaching -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Coaching</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$19.999,00</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Reservar
                    </a>
                </div>
            </div>

            <!-- Reiki -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-2">Reiki</h3>
                    <p class="text-3xl font-bold text-primary mb-4">$19.998,99</p>
                    <a href="/contacto"
                        class="block text-center bg-primary text-white px-6 py-2 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Reservar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Final -->
    <div class="bg-primary text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">¿Listo para comenzar tu viaje de transformación?</h2>
            <p class="text-xl mb-4 text-secondary">Todos nuestros servicios pueden pagarse hasta en 12 cuotas</p>
            <a href="/contacto"
                class="bg-white text-primary px-8 py-3 rounded-full hover:bg-secondary transition duration-300 font-semibold">
                Contactar Ahora
            </a>
        </div>
    </div>
@endsection
