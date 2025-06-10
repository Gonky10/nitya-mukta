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
                    <!-- Secciones Desplegables -->
                    <div class="space-y-6">
                        <!-- Sección 1: Coaching Ontológico -->
                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="w-full px-6 py-4 text-left bg-primary text-white font-semibold flex justify-between items-center"
                                onclick="toggleSection('coaching-section')">
                                <span>Coaching Ontológico</span>
                                <i class="fas fa-chevron-down transition-transform" id="coaching-icon"></i>
                            </button>
                            <div class="p-6 hidden" id="coaching-section">
                                <div class="prose prose-lg max-w-none">
                                    <h2>Conversaciones de Coaching Ontológico</h2>
                                    <h2>Talleres</h2>

                                    <h3>Teoría del Observador</h3>
                                    <ul>
                                        <li>No quiero cambiar a nadie</li>
                                        <li>Ya sé que no tengo razón</li>
                                        <li>Entonces, dejo de hablar de los demás como la causa de los problemas</li>
                                        <li>Las relaciones interpersonales son la mejor escuela que existe</li>
                                        <li>Vemos en el otro lo que no podemos ver en nosotros mismos</li>
                                        <li>Son un espejo que nos muestra lo que tenemos in corpere</li>
                                    </ul>

                                    <h3>Caso 1: Situación que me incomode</h3>
                                    <p>Previo: Me convierto en observación - fenómeno de disociación. No Juicios. No hay
                                        buenos ni malos. Dejo de hablar del otro como la causa de mis problemas.</p>
                                    <ul>
                                        <li>¿Qué recibo yo de la otra persona? - proyección</li>
                                        <li>¿Qué quiero cambiar?</li>
                                    </ul>
                                    <p>Una vez que quedo atrapado en la percepción - estoy en un sueño. Somos un campo de
                                        conciencia, atrapado en otro campo de conciencia.</p>

                                    <h3>Caso 2: Realidad</h3>
                                    <p>Borh dijo: "Realidad es aquello que tomamos por verdad"</p>
                                    <ul>
                                        <li>Tomamos por verdad aquello que creemos</li>
                                        <li>Creemos aquello que podemos percibir, lo que implica que percibimos lo que
                                            creemos y creemos aquello que percibimos</li>
                                        <li>Lo que percibimos depende de lo que buscamos</li>
                                        <li>Lo que buscamos depende de lo que pensamos</li>
                                        <li>Pensamos en base a lo que percibimos, y percibimos aquello en lo que creemos
                                        </li>
                                        <li>Nuestras creencias determinan lo que tomamos por "VERDAD"</li>
                                        <li>Lo que tomamos por VERDAD es nuestra realidad</li>
                                    </ul>

                                    <h3>Caso 3: Las creencias son buenas o malas? - Sufrimiento</h3>
                                    <ul>
                                        <li>Son filtros a través de las cuales vemos al mundo</li>
                                        <li>Son la base de nuestras percepciones</li>
                                        <li>Para que un pensamiento se convierta en carne, hace falta una creencia</li>
                                        <li>Nunca estoy disgustado por la razón que creo</li>
                                        <li>El sufrimiento está siempre basado en una experiencia del pasado</li>
                                        <li>Tenemos que "Entender al otro" o simplemente Aceptarlo</li>
                                        <li>Tú eres el reflejo de lo que piensas diariamente</li>
                                    </ul>

                                    <h3>Caso 4: El observador que estoy siendo - Transfondo espiritual</h3>
                                    <ul>
                                        <li>Tenemos una mente Dual - Pensamos en términos de buena, malo, frío, caliente,
                                            lindo y feo</li>
                                        <li>Conciencia de unidad:
                                            <ul>
                                                <li>Somos un campo de conciencia, dentro de otros campos más grandes</li>
                                                <li>Todo es una ilusión</li>
                                            </ul>
                                        </li>
                                        <li>Mi forma de ver la vida es simplemente una interpretación - NO es la verdad
                                            <ul>
                                                <li>Esta interpretación está vinculada a nuestras creencias</li>
                                                <li>Las historias que me cuento tampoco son verdad</li>
                                            </ul>
                                        </li>
                                        <li>Yo no soy aquello que pienso que soy</li>
                                    </ul>

                                    <h2>Formación en Coaching Ontológico</h2>
                                    <h3>¿Qué experimenta una persona que hace Coaching Ontológico?</h3>
                                    <ol>
                                        <li>Comienza a observar su propia vida, desde una nueva perspectiva. Observa la
                                            realidad, con otros ojos.</li>
                                        <li>Ese corrimiento del observador le permite entender y aceptar las cosas que antes
                                            no podía.</li>
                                        <li>Comienza un camino hacia lograr serenidad, paz y equilibrio en su vida.</li>
                                        <li>Comienza a aceptar a las demás personas, tal cual son, y deja de luchar por
                                            "como deberían ser".</li>
                                        <li>Vive su vida con mayor plenitud, gestiona sus emociones de una manera adecuada y
                                            útil para su vida.</li>
                                        <li>Desarrolla una manera de SER y de ESTAR presente en su vida, que cambia sus
                                            relaciones; primero consigo mismo, luego con su entorno.</li>
                                        <li>Comienza a ser útil a su propia vida, y a su entorno.</li>
                                    </ol>

                                    <h3>Definición y sentido del Coaching Ontológico</h3>
                                    <p>Es una profesión comprometida con la expansión del potencial personal, organizacional
                                        y social, basada en el Aprendizaje Ontológico dentro de un Marco Constructivista y
                                        una Perspectiva Sistémica.</p>

                                    <h3>Propósito del Coaching Ontológico</h3>
                                    <p>Facilitar un proceso de aprendizaje ontológico que, desde el compromiso del coachee,
                                        expanda la capacidad de acción, genere un cambio de observador y posibilite su
                                        transformación personal.</p>

                                    <h3>¿Para qué sirve el Coaching Ontológico?</h3>
                                    <p>Expande las posibilidades de la persona, no solamente en la realización de una
                                        acción, sino también y quizá más importante aún, expande las capacidades de SER y de
                                        ESTAR.</p>
                                    <p>Es una disciplina que le posibilita al coachee, realizar un crecimiento de su SER, de
                                        su persona, para poder "ESTAR" presente en su propia vida, y de "SER" la persona que
                                        quiere ser.</p>

                                    <h3>Misión 2028</h3>
                                    <p>Nuestra propuesta de formación está acompañada y supervisada por la profesionalidad
                                        de los equipos de entrenadores y formadores, puestos en función en los procesos
                                        educativos, y totalmente funcionales al aprendizaje ontológico.</p>
                                    <ul>
                                        <li>Generamos líderes que se hagan cargo de sus vidas, y que sean contribuidores
                                            activos de una nueva sociedad.</li>
                                        <li>Contribuimos en el desarrollo sustentable del ecosistema social.</li>
                                    </ul>

                                    <h3>Objetivos Formativos y Profesionales</h3>
                                    <ul>
                                        <li>Desarrollar un estilo propio de liderazgo, con un perfil profesional con
                                            capacidad de respuesta ante los requerimientos y oportunidades de época.</li>
                                        <li>Transitar los entornos complejos que se presentan con decisión, firmeza y
                                            amplitud de criterio, sabiendo que en la diversidad está el desafío, pero
                                            también las respuestas que muchas veces no encontramos.</li>
                                        <li>Formar profesionales comprometidos, audaces que integren la diversidad para
                                            interactuar con un modelo de comunicación y facilitación de procesos, que
                                            atienda el cuidado de las personas y las relaciones.</li>
                                        <li>Que no pierdan de vista los objetivos propuestos, y gestionen apropiadamente los
                                            recursos para cumplir con las metas acordadas.</li>
                                    </ul>

                                    <h3>Formación</h3>
                                    <h4>Primer Año</h4>
                                    <p>En la primera parte del proceso formativo se presentan contenidos y prácticas
                                        relacionadas con el desarrollo personal, liderazgo y la metodología emergente de la
                                        facilitación profesional.</p>
                                    <ul>
                                        <li>El foco y compromiso se centra en el desarrollo personal para favorecer la
                                            expansión de consciencia del potencial humano, tanto individual como social.
                                        </li>
                                        <li>En esta amplitud de consciencia comienza un despliegue ontológico, esto es, del
                                            sentido existencial, en especial del crecimiento de la confianza personal, como
                                            así también la mejora de la calidad de relacionamiento en los distintos ámbitos
                                            del hacer propio y con otros.</li>
                                        <li>Completando el proceso del primer año con un abordaje integral de competencias
                                            para la facilitación de procesos de aprendizaje y gestión de personas,
                                            relaciones y equipos de trabajo en empresas y organizaciones.</li>
                                    </ul>

                                    <h4>Segundo Año</h4>
                                    <p>En la siguiente etapa de la formación, para certificar como Coach Ontológico y
                                        Facilitador Profesional, se aborda el conjunto de competencias que le posibilitan al
                                        futuro profesional crear contextos conversacionales desde una escucha comprometida y
                                        un hablar responsable y que le permitan hacerse cargo de acompañar a la persona que
                                        solicita los servicios de un Coach, a partir de sus compromisos y objetivos.</p>
                                    <p>El Coach, mediante la facilitación de un aprendizaje ontológico, invita a la persona
                                        asistida a transitar y experimentar procesos de darse cuenta y hacerse cargo dada
                                        sus elecciones y decisiones, siempre, con la aceptación de las realidades en las que
                                        vive y socializa y con los ojos en la posibilidad que inspira el compromiso con una
                                        manera de ser y hacer que le permita superar y trascender los límites o condiciones
                                        personales que le impiden llegar a los resultados buscados.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Sección 2: Coaching Organizacional -->
                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="w-full px-6 py-4 text-left bg-primary text-white font-semibold flex justify-between items-center"
                                onclick="toggleSection('organizacional-section')">
                                <span>Coaching Organizacional</span>
                                <i class="fas fa-chevron-down transition-transform" id="organizacional-icon"></i>
                            </button>
                            <div class="p-6 hidden" id="organizacional-section">
                                <div class="prose prose-lg max-w-none">
                                    <h2>El Recurso Humano como Factor Diferenciador en un Entorno Altamente Tecnificado</h2>

                                    <h3>Transformación digital: más allá de la tecnología</h3>
                                    <p>En un escenario empresarial marcado por la transformación digital, la acelerada
                                        adopción de tecnologías como la inteligencia artificial (IA), el análisis de datos
                                        (Data Analytics), la automatización de procesos (RPA) y las soluciones de Business
                                        Intelligence (BI) está redefiniendo la manera en que las organizaciones operan y
                                        toman decisiones estratégicas.</p>
                                    <p>Este avance, si bien trae consigo significativos incrementos en eficiencia operativa
                                        y competitividad, también plantea desafíos complejos que trascienden lo tecnológico.
                                        Entre ellos, uno se vuelve particularmente crítico: el factor humano.</p>

                                    <h3>La tecnología necesita personas</h3>
                                    <p>A pesar de las múltiples ventajas que ofrecen las nuevas tecnologías —desde simples
                                        chatbots para atención al cliente hasta complejas herramientas de IA aplicadas a la
                                        toma de decisiones—, todos estos desarrollos comparten una necesidad común: contar
                                        con personas capaces de adoptarlas, gestionarlas y darles sentido estratégico dentro
                                        de la cultura organizacional.</p>
                                    <p>El capital humano no solo sigue siendo relevante, sino que se ha convertido en el
                                        principal driver de diferenciación estratégica en un entorno donde los avances
                                        tecnológicos son rápidamente replicables. La forma en que las personas se adaptan,
                                        aprenden y evolucionan junto a la tecnología marca la diferencia entre
                                        organizaciones que simplemente implementan herramientas y aquellas que realmente
                                        logran transformar su modelo de negocio.</p>

                                    <h3>Resistencia al cambio: un desafío real</h3>
                                    <p>Sin embargo, este proceso no está exento de tensiones. La incorporación de nuevas
                                        soluciones tecnológicas muchas veces genera resistencia al cambio por parte de los
                                        colaboradores, especialmente cuando perciben que su rol podría verse amenazado o
                                        reemplazado.</p>
                                    <p>Preguntas como "¿Esto me dejará sin trabajo?" o "Si el chatbot resuelve esto, ¿qué
                                        haré yo ahora?" reflejan temores legítimos que, si no se abordan adecuadamente,
                                        pueden deteriorar el clima laboral y entorpecer el proceso de transformación.</p>

                                    <h3>Coaching como soporte clave en la adopción tecnológica</h3>
                                    <p>Por ello, la gestión del cambio y una estrategia sólida de gestión del talento se
                                        vuelven esenciales. En este contexto, la incorporación temprana de Coaches
                                        Ejecutivos y Ontológicos cobra un rol clave para acompañar a líderes, equipos e
                                        individuos en los procesos de adopción tecnológica.</p>
                                    <p>A través del diseño de estrategias de comunicación claras, empáticas y alineadas con
                                        los valores de la organización, así como mediante instancias de acompañamiento
                                        personalizado y espacios de reflexión, el coaching facilita una comprensión profunda
                                        de los desafíos del cambio, reduciendo la incertidumbre y el miedo.</p>
                                    <p>Combinado con programas de formación y reskilling, este enfoque integral no solo
                                        acelera la adopción de nuevas soluciones, sino que fortalece el compromiso, la
                                        cohesión y la capacidad adaptativa de toda la organización.</p>

                                    <h3>Personas primero: la verdadera ventaja competitiva</h3>
                                    <p>En definitiva, en la era de la automatización y la inteligencia artificial, la
                                        ventaja competitiva sostenible no reside únicamente en la tecnología, sino en la
                                        capacidad de las organizaciones para alinear su estrategia tecnológica con una
                                        cultura organizacional centrada en las personas.</p>
                                    <p>Las empresas que logren potenciar a sus equipos como agentes activos del cambio y de
                                        la transformación digital, serán aquellas que se destaquen en un mercado cada vez
                                        más dinámico y desafiante.</p>
                                </div>
                            </div>
                        </div>
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

        .prose h4 {
            color: rgb(157 130 102);
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .prose p {
            margin-bottom: 1rem;
            line-height: 1.75;
        }

        .prose ul,
        .prose ol {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1rem;
        }

        .prose ol {
            list-style-type: decimal;
        }

        .prose li {
            margin-bottom: 0.5rem;
        }

        .prose img {
            border-radius: 0.5rem;
            margin: 1rem 0;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            const icon = document.getElementById(sectionId.replace('section', 'icon'));

            if (section.classList.contains('hidden')) {
                section.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                section.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

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
