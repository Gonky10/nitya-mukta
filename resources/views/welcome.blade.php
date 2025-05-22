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
                <h1 class="text-3xl lg:text-6xl font-bold mb-2 lg:mb-4">Escuela nitya mukta</h1>
                <p class="text-lg lg:text-2xl mb-4 lg:mb-8">Tu espacio de sanación y crecimiento personal</p>
                <a href="/servicios"
                    class="bg-secondary text-primary px-6 lg:px-8 py-2 lg:py-3 rounded-full hover:bg-white transition duration-300 font-semibold text-sm lg:text-base">
                    Que ofrecemos
                </a>
            </div>
        </div>
    </div>

    <!-- Quiénes Somos Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-primary">Quiénes Somos</h2>
            <div class="prose prose-lg mx-auto text-primary">
                <p class="mb-6" style="font-size: 1.5rem">
                    Somos un grupo de profesionales de diferentes disciplinas comprometidos con el desarrollo personal,
                    donde compartimos una mirada holística e integral respecto al ser humano.
                </p>
                <p class="mb-6" style="font-size: 1.5rem">
                    Entendemos a las personas como una unidad entre diferentes dominios como son "Mente, Emociones, Cuerpo y
                    Espíritu". Desde esta mirada comprendemos que el desbalance en cualquiera de esas áreas, produce un
                    desequilibrio general que termina afectando a todas nuestras actividades, y relaciones. Comenzando, con
                    la relación con "Nosotros mismos", y proyectándose hacia afuera en el resto de nuestros ámbitos. La
                    alineación de estos 4 dominios principales, consideramos que es la clave para transitar el camino de
                    nuestras vidas.
                </p>
                <p class="mb-6" style="font-size: 1.5rem">
                    Desde Nitya Mukta te invitamos a transitar el camino del desarrollo de la conciencia, como medio de
                    crecimiento personal, a través de las diferentes disciplinas que ofrecemos.
                </p>
                <p class="mb-6" style="font-size: 1.5rem">
                    Desde este lugar, la historia de nuestra vida no nos define. Sino mas bien, es nuestro punto de partida
                    en el camino, hacia una nueva forma de SER y ESTAR, que nos permite establecer relaciones sanas en
                    entornos sanos y productivos. Nadie puede DAR lo que NO TIENE. Si no tengo PAZ, no puedo dar PAZ, si no
                    tengo AMOR no puedo dar AMOR.
                </p>
                <p class="mb-6" style="font-size: 1.5rem">
                    Por eso extendemos esta invitación a todas las personas que quieran transitar este camino. Nuestro
                    compromiso es acompañarlos en el trayecto.
                </p>
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
            <p class="text-xl mb-8 text-secondary">Todos nuestros servicios y productos pueden pagarse hasta en 12 cuotas
            </p>
            <a href="/servicios"
                class="bg-white text-primary px-8 py-3 rounded-full hover:bg-secondary transition duration-300 font-semibold">
                Nuestros servicios
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
                },
                {
                    src: 'img/centro6.png',
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
                },
                {
                    src: 'img/centro7.png',
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
                        delay: 2000,
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
                    passiveListeners: true,
                    edgeSwipeDetection: true,
                    resistanceRatio: 0.85,
                    speed: 800,
                    grabCursor: true,
                    watchSlidesProgress: true,
                    preventInteractionOnTransition: true,
                    allowTouchMove: true,
                    touchStartPreventDefault: false,
                    touchMoveStopPropagation: false,
                    shortSwipes: true,
                    longSwipes: true,
                    followFinger: true,
                    threshold: 5,
                    touchEventsTarget: 'container'
                });
            }

            // Inicializar al cargar
            initSwiper();

            // Escuchar cambios de tamaño de ventana
            let currentMode = window.innerWidth >= 1024 ? 'desktop' : 'mobile';

            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    const newMode = window.innerWidth >= 1024 ? 'desktop' : 'mobile';
                    if (newMode !== currentMode) {
                        currentMode = newMode;
                        initSwiper(); // solo reinicia si cambió el modo
                    }
                }, 250);
            });

        });
    </script>
@endpush
