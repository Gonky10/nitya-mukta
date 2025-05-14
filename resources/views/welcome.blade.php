@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-screen">
        <img src="{{ asset('img/centro1.jpg') }}" alt="Centro Holístico" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-primary bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Centro nitya mukta</h1>
                <p class="text-xl md:text-2xl mb-8">Tu espacio de sanación y crecimiento personal</p>
                <a href="/public/contacto"
                    class="bg-secondary text-primary px-8 py-3 rounded-full hover:bg-white transition duration-300 font-semibold">
                    Reserva tu sesión
                </a>
            </div>
        </div>
    </div>

    <!-- Servicios Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-primary">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Coaching -->
                <div class="bg-secondary bg-opacity-30 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Coaching</h3>
                    <p class="text-primary">Descubre tu verdadero potencial y alcanza tus metas a través de un proceso de
                        transformación personal guiado. Nuestro coaching te ayuda a superar obstáculos y crear la vida que
                        deseas.</p>
                </div>

                <!-- Reiki -->
                <div class="bg-secondary bg-opacity-30 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-hands"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Reiki</h3>
                    <p class="text-primary">Técnica de sanación energética que equilibra tus centros energéticos, promueve
                        la relajación profunda y activa tu capacidad natural de autocuración física, mental y emocional.</p>
                </div>

                <!-- Rito del útero -->
                <div class="bg-secondary bg-opacity-30 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-venus"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Rito del útero</h3>
                    <p class="text-primary">Ceremonia sagrada de sanación ancestral que reconecta con la energía femenina,
                        sana heridas transgeneracionales y restaura el poder creativo de tu centro sagrado femenino.</p>
                </div>

                <!-- Tarjeta cuántica -->
                <div class="bg-secondary bg-opacity-30 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-infinity"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Tarjeta cuántica</h3>
                    <p class="text-primary">Herramienta de transformación que utiliza la física cuántica para reprogramar
                        patrones limitantes, atraer abundancia y manifestar tu realidad deseada a través de frecuencias
                        específicas.</p>
                </div>

                <!-- Aromaterapia -->
                <div class="bg-secondary bg-opacity-30 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Aromaterapia</h3>
                    <p class="text-primary">Terapia holística que utiliza aceites esenciales puros para promover el
                        bienestar físico, mental y emocional, armonizando cuerpo y mente a través de las propiedades
                        curativas de las plantas.</p>
                </div>

                <!-- Mujer Sagrada -->
                <div class="bg-secondary bg-opacity-30 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-moon"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Mujer Sagrada</h3>
                    <p class="text-primary">Programa de empoderamiento femenino que honra los ciclos naturales, reconecta
                        con la sabiduría ancestral y despierta el poder sagrado de la feminidad a través de rituales y
                        enseñanzas antiguas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Por qué elegirnos -->
    <section class="py-16 bg-secondary bg-opacity-30">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-primary">¿Por qué elegirnos?</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Experiencia</h3>
                    <p class="text-primary">Más de 10 años ayudando a personas en su camino de sanación</p>
                </div>
                <div class="text-center">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Profesionales Certificados</h3>
                    <p class="text-primary">Equipo de terapeutas altamente cualificados</p>
                </div>
                <div class="text-center">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Ambiente Acogedor</h3>
                    <p class="text-primary">Espacio diseñado para tu comodidad y tranquilidad</p>
                </div>
                <div class="text-center">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Atención Personalizada</h3>
                    <p class="text-primary">Tratamientos adaptados a tus necesidades específicas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Comienza tu viaje de transformación hoy</h2>
            <p class="text-xl mb-8 text-secondary">Todos nuestros servicios pueden pagarse hasta en 12 cuotas</p>
            <a href="/public/contacto"
                class="bg-white text-primary px-8 py-3 rounded-full hover:bg-secondary transition duration-300 font-semibold">
                Agenda tu cita
            </a>
        </div>
    </section>
@endsection
