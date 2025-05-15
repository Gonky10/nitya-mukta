<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro nitya mukta - Espacio Holístico</title>
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
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-semibold text-primary">Centro nitya mukta</a>
                </div>
                <!-- Menú de escritorio -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/" class="text-primary hover:text-secondary">Inicio</a>
                    <a href="/servicios" class="text-primary hover:text-secondary">Servicios</a>
                    <a href="/nosotros" class="text-primary hover:text-secondary">Nosotros</a>
                    <a href="/contacto" class="text-primary hover:text-secondary">Contacto</a>
                </div>
                <!-- Botón de menú móvil -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-primary hover:text-secondary focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
            <!-- Menú móvil -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="text-primary hover:text-secondary">Inicio</a>
                    <a href="/servicios" class="text-primary hover:text-secondary">Servicios</a>
                    <a href="/nosotros" class="text-primary hover:text-secondary">Nosotros</a>
                    <a href="/contacto" class="text-primary hover:text-secondary">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
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
                        <a href="#" class="text-white hover:text-secondary"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-secondary"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white hover:text-secondary"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-secondary text-center">
                <p class="text-secondary">&copy; 2024 Centro nitya mukta. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Script para el menú móvil -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = mobileMenuButton.querySelector('i');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                if (mobileMenu.classList.contains('hidden')) {
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                } else {
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-times');
                }
            });
        });
    </script>
</body>

</html>
