@extends('layouts.app')

@section('content')
    <!-- Header -->
    <div class="bg-secondary py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-center text-primary mb-4">Contacto</h1>
            <p class="text-xl text-center text-primary">Estamos aquí para ayudarte en tu camino de transformación</p>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Información de Contacto -->
            <div>
                <h2 class="text-3xl font-bold text-primary mb-6">Información de Contacto</h2>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="text-primary text-2xl">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Ubicación</h3>
                            <p class="text-gray-600">
                                Primer Teniente Manzotti 101,
                                <br>
                                Manzanares, Pilar
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="text-primary text-2xl">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Teléfono</h3>
                            <p class="text-gray-600">
                                1160399017<br>
                                Lunes a Viernes: 9:00 - 20:00<br>
                                Sábados: 10:00 - 14:00
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="text-primary text-2xl">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Email</h3>
                            <p class="text-gray-600">
                                yoganityamukta@gmail.com<br>
                                Respuesta en 12-24 horas
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Redes Sociales -->
                <div class="mt-12">
                    <h3 class="text-xl font-semibold mb-4">Síguenos en Redes Sociales</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/nityamuktayoga" class="text-white hover:text-secondary text-2xl">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="text-white hover:text-secondary text-2xl"
                            href="https://www.instagram.com/escuelaholisticanitya/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white hover:text-secondary text-2xl" href="https://wa.me/5491160399017">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Formulario de Contacto -->
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-primary mb-6">Envíanos un Mensaje</h2>
                <form action="/contacto" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="telefono" class="block text-gray-700 font-medium mb-2">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="servicio" class="block text-gray-700 font-medium mb-2">Servicio de Interés</label>
                        <select id="servicio" name="servicio" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                            <option value="">Selecciona un servicio</option>
                            <option value="yoga">Yoga</option>
                            <option value="reiki">Reiki</option>
                            <option value="coaching">Coaching</option>
                            <option value="tarot">Tarot</option>
                            <option value="decodificacion">Decodificación Biológica</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <div>
                        <label for="mensaje" class="block text-gray-700 font-medium mb-2">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="4" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-primary text-white py-3 px-6 rounded-full hover:bg-secondary hover:text-primary transition duration-300">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Mapa -->
    <div class="w-full h-96 bg-secondary mt-16">
        <!-- Aquí puedes integrar un mapa de Google Maps -->
        <div class="w-full h-full flex items-center justify-center text-primary">
            <p class="text-xl">Mapa de ubicación</p>
        </div>
    </div>
@endsection
