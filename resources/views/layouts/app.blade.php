<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nitya Mukta</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#9d8266',
                        'secondary': '#e3d2bd',
                        'white': '#ffffff'
                    }
                }
            }
        }
    </script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
        }

        .mobile-menu {
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
            visibility: hidden;
            opacity: 0;
        }

        .mobile-menu.show {
            transform: translateX(0);
            visibility: visible;
            opacity: 1;
        }

        #mobile-menu-overlay {
            transition: opacity 0.3s ease-in-out;
            opacity: 0;
            visibility: hidden;
        }

        #mobile-menu-overlay.show {
            opacity: 1;
            visibility: visible;
        }
    </style>
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="font-sans antialiased">
    <header class="bg-white shadow relative">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo y botón de menú móvil -->
                <div class="flex items-center">
                    <button id="mobile-menu-button"
                        class="sm:hidden inline-flex items-center justify-center p-2 rounded-md text-primary hover:text-secondary hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                        <span class="sr-only">Abrir menú principal</span>
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div class="flex-shrink-0 flex items-center ml-2 sm:ml-0">
                        <a href="{{ url('/') }}" class="text-2xl font-bold text-primary">
                            Nitya Mukta
                        </a>
                    </div>
                </div>

                <!-- Menú de navegación desktop -->
                <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-8">
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center px-1 pt-1 text-gray-700 hover:text-primary">
                        Inicio
                    </a>
                    <a href="{{ url('/servicios') }}"
                        class="inline-flex items-center px-1 pt-1 text-gray-700 hover:text-primary">
                        Servicios
                    </a>
                    <a href="{{ url('/nosotros') }}"
                        class="inline-flex items-center px-1 pt-1 text-gray-700 hover:text-primary">
                        Nosotros
                    </a>
                    <a href="{{ url('/contacto') }}"
                        class="inline-flex items-center px-1 pt-1 text-gray-700 hover:text-primary">
                        Contacto
                    </a>
                </div>

                <!-- Botones de autenticación -->
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ route('cart.index') }}"
                            class="text-primary hover:text-secondary transition-colors relative">
                            <i class="fas fa-shopping-cart text-xl"></i>
                            @if (session()->has('cart') && count(session('cart')) > 0)
                                <span
                                    class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">
                                    {{ count(session('cart')) }}
                                </span>
                            @endif
                        </a>
                        <div class="hidden sm:flex items-center space-x-4">
                            <span class="text-gray-700">{{ Auth::user()->name }}</span>
                            <a href="{{ route('profile.index') }}"
                                class="text-primary hover:text-secondary transition-colors">
                                Mi Perfil
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-primary hover:text-secondary transition-colors">
                                    Cerrar Sesión
                                </button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-secondary hover:text-primary transition duration-300">
                            Iniciar Sesión
                        </a>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Menú móvil -->
        <div id="mobile-menu"
            class="mobile-menu fixed inset-y-0 left-0 w-64 bg-white shadow-lg transform sm:hidden z-50 overflow-y-auto">
            <div class="h-16 flex items-center justify-between px-4 border-b border-gray-200">
                <span class="text-xl font-bold text-primary">Menú</span>
                <button id="close-mobile-menu" class="text-gray-500 hover:text-primary">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ url('/') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">
                    Inicio
                </a>
                <a href="{{ url('/servicios') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">
                    Servicios
                </a>
                <a href="{{ url('/nosotros') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">
                    Nosotros
                </a>
                <a href="{{ url('/contacto') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">
                    Contacto
                </a>
                @auth
                    <div class="border-t border-gray-200 pt-4 mt-4">
                        <div class="px-3 text-gray-700 font-medium">{{ Auth::user()->name }}</div>
                        <a href="{{ route('cart.index') }}"
                            class="block px-3 py-2 rounded-md text-base font-medium text-primary hover:text-secondary">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Mi Carrito
                            @if (session()->has('cart') && count(session('cart')) > 0)
                                <span
                                    class="inline-flex items-center justify-center bg-red-500 text-white text-xs rounded-full h-4 w-4 ml-2">
                                    {{ count(session('cart')) }}
                                </span>
                            @endif
                        </a>
                        <a href="{{ route('profile.index') }}"
                            class="block px-3 py-2 rounded-md text-base font-medium text-primary hover:text-secondary">
                            <i class="fas fa-user mr-2"></i>
                            Mi Perfil
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="block px-3 py-2">
                            @csrf
                            <button type="submit" class="text-primary hover:text-secondary font-medium">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>

        <!-- Overlay para el menú móvil -->
        <div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 sm:hidden"></div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Centro nitya mukta</h3>
                    <p class="text-secondary">Tu espacio de sanación y crecimiento personal</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Contacto</h3>
                    <p class="text-secondary">
                        <i class="fas fa-phone mr-2"></i> 1160399017<br>
                        <i class="fas fa-envelope mr-2"></i> yoganityamukta@gmail.com<br>
                        <i class="fas fa-map-marker-alt mr-2"></i> Primer T.Manzotti 101, Pilar
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Síguenos</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-secondary"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-secondary"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white hover:text-secondary"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-secondary text-center">
                <p class="text-secondary">&copy; 2024 Centro nitya mukta. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // JavaScript para el menú móvil
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeMobileMenu = document.getElementById('close-mobile-menu');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

            function toggleMobileMenu() {
                mobileMenu.classList.toggle('show');
                mobileMenuOverlay.classList.toggle('show');
                document.body.classList.toggle('overflow-hidden');
            }

            function closeMobileMenuOnClick(e) {
                if (e.target.closest('#mobile-menu') && !e.target.closest('#close-mobile-menu')) {
                    if (e.target.tagName === 'A' || e.target.tagName === 'BUTTON') {
                        toggleMobileMenu();
                    }
                }
            }

            mobileMenuButton.addEventListener('click', toggleMobileMenu);
            closeMobileMenu.addEventListener('click', toggleMobileMenu);
            mobileMenuOverlay.addEventListener('click', toggleMobileMenu);
            mobileMenu.addEventListener('click', closeMobileMenuOnClick);
        });
    </script>
</body>

</html>
