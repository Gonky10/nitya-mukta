@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-[100vh] overflow-hidden">
        <!-- Carrusel Dinámico -->
        <div class="swiper heroSwiper h-full">
            <div class="swiper-wrapper">
                <!-- Las slides se cargarán dinámicamente según el dispositivo -->
            </div>
            <div class="swiper-pagination !bottom-4"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- Indicadores táctiles móvil -->
            <div class="swipe-indicators lg:hidden">
                <div class="swipe-left">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="swipe-right">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>

        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4 z-10">
                <h1 class="text-3xl lg:text-6xl font-bold mb-2 lg:mb-4">Centro nitya mukta</h1>
                <p class="text-lg lg:text-2xl mb-4 lg:mb-8">Tu espacio de sanación y crecimiento personal</p>
                <a href="/contacto"
                    class="bg-secondary text-primary px-6 lg:px-8 py-2 lg:py-3 rounded-full hover:bg-white transition duration-300 font-semibold text-sm lg:text-base">
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
            <a href="/contacto"
                class="bg-white text-primary px-8 py-3 rounded-full hover:bg-secondary transition duration-300 font-semibold">
                Agenda tu cita
            </a>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            width: 100%;
            height: 100%;
        }

        /* Estilos para navegación */
        .swiper-button-next,
        .swiper-button-prev {
            color: white !important;
            background: rgba(0, 0, 0, 0.3);
            padding: 1.5rem;
            border-radius: 50%;
            width: 40px !important;
            height: 40px !important;
            display: none;
            /* Oculto por defecto */
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 16px !important;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: rgba(0, 0, 0, 0.5);
        }

        /* Estilos para paginación */
        .swiper-pagination-bullet {
            width: 8px !important;
            height: 8px !important;
            background: white !important;
            opacity: 0.5;
            margin: 0 6px !important;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 24px !important;
            border-radius: 4px !important;
        }

        /* Indicadores táctiles móvil */
        .swipe-indicators {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            pointer-events: none;
            z-index: 10;
        }

        .swipe-left,
        .swipe-right {
            background: rgba(0, 0, 0, 0.3);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .swipe-left.active,
        .swipe-right.active {
            opacity: 1;
        }

        /* Ajustes para móvil */
        @media (max-width: 1024px) {
            .swiper-pagination {
                bottom: 16px !important;
            }

            .swiper-slide img {
                object-position: center !important;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .animate-fade-in-delay {
            animation: fadeIn 1s ease-out 0.3s forwards;
            opacity: 0;
        }

        .animate-fade-in-delay-2 {
            animation: fadeIn 1s ease-out 0.6s forwards;
            opacity: 0;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiperWrapper = document.querySelector('.swiper-wrapper');
            let swiper;

            // Configuración de imágenes para desktop y móvil
            const desktopImages = [{
                    src: 'img/talleres/talleres_7.jpeg',
                    alt: 'Centro Holístico'
                },
                {
                    src: 'img/yoga/yoga_3.jpeg',
                    alt: 'Centro Holístico'
                },
                {
                    src: 'img/centro4.jpg',
                    alt: 'Centro Holístico'
                }
            ];

            const mobileImages = [{
                    src: 'img/talleres/talleres_2.jpeg',
                    alt: 'Centro Holístico'
                },
                {
                    src: 'img/rito del utero/rito_2.jpeg',
                    alt: 'Centro Holístico'
                },
                {
                    src: 'img/yoga/yoga_4.jpeg',
                    alt: 'Centro Holístico'
                }
            ];

            // Función para crear el HTML de las slides
            function createSlides(images) {
                return images.map(image => `
                    <div class="swiper-slide">
                        <div class="relative h-full">
                            <img src="{{ asset('${image.src}') }}" alt="${image.alt}" 
                                class="w-full h-full object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40"></div>
                        </div>
                    </div>
                `).join('');
            }

            // Función para inicializar el carrusel
            function initSwiper() {
                const isDesktop = window.innerWidth >= 1024;
                const images = isDesktop ? desktopImages : mobileImages;

                // Actualizar el contenido del carrusel
                swiperWrapper.innerHTML = createSlides(images);

                // Destruir el carrusel existente si existe
                if (swiper) {
                    swiper.destroy();
                }

                // Mostrar/ocultar botones de navegación según el dispositivo
                const navButtons = document.querySelectorAll('.swiper-button-next, .swiper-button-prev');
                navButtons.forEach(button => {
                    button.style.display = isDesktop ? 'flex' : 'none';
                });

                // Inicializar nuevo carrusel
                swiper = new Swiper('.heroSwiper', {
                    loop: true,
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                    },
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    touchRatio: 1,
                    touchAngle: 45,
                    resistance: true,
                    resistanceRatio: 0.85,
                    speed: 800,
                    grabCursor: true
                });
            }

            // Inicializar al cargar
            initSwiper();

            // Escuchar cambios de tamaño de ventana
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    initSwiper();
                }, 250);
            });
        });
    </script>
@endpush
