<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'name' => 'Taller Coaching ontologico',
                'slug' => 'Taller Coaching ontologico',
                'subtitle' => 'Descubre tu verdadero potencial y alcanza tus metas',
                'description' => '<h2>¿Qué es el Coaching Transformacional?</h2>
                    <p>El Coaching Transformacional es un proceso de acompañamiento personalizado que te ayuda a descubrir tu verdadero potencial y alcanzar tus metas más significativas. A través de técnicas y herramientas especializadas, trabajamos juntos para identificar y superar obstáculos, desarrollar nuevas perspectivas y crear un plan de acción efectivo para tu crecimiento personal.</p>
                    
                    <h2>Teoría del Observador</h2>
                    <ul>
                        <li>No quiero cambiar a nadie</li>
                        <li>Ya sé que no tengo razón</li>
                        <li>Entonces, dejo de hablar de los demás como la causa de los problemas</li>
                        <li>Las relaciones interpersonales son la mejor escuela que existe</li>
                        <li>Vemos en el otro lo que no podemos ver en nosotros mismos</li>
                        <li>Son un espejo que nos muestra lo que tenemos in corpere</li>
                    </ul>

                    <h2>Caso 1: Situación que me incomode</h2>
                    <p>Previo: Me convierto en observación - fenómeno de disociación. No Juicios. No hay buenos ni malos. Dejo de hablar del otro como la causa de mis problemas.</p>
                    <ul>
                        <li>¿Qué recibo yo de la otra persona? - proyección</li>
                        <li>¿Qué quiero cambiar?</li>
                    </ul>
                    <p>Una vez que quedo atrapado en la percepción - estoy en un sueño. Somos un campo de conciencia, atrapado en otro campo de conciencia.</p>

                    <h2>Caso 2: Realidad</h2>
                    <p>Borh dijo: "Realidad es aquello que tomamos por verdad"</p>
                    <ul>
                        <li>Tomamos por verdad aquello que creemos</li>
                        <li>Creemos aquello que podemos percibir, lo que implica que percibimos lo que creemos y creemos aquello que percibimos</li>
                        <li>Lo que percibimos depende de lo que buscamos</li>
                        <li>Lo que buscamos depende de lo que pensamos</li>
                        <li>Pensamos en base a lo que percibimos, y percibimos aquello en lo que creemos</li>
                        <li>Nuestras creencias determinan lo que tomamos por "VERDAD"</li>
                        <li>Lo que tomamos por VERDAD es nuestra realidad</li>
                    </ul>

                    <h2>Caso 3: Las creencias son buenas o malas? - Sufrimiento</h2>
                    <ul>
                        <li>Son filtros a través de las cuales vemos al mundo</li>
                        <li>Son la base de nuestras percepciones</li>
                        <li>Para que un pensamiento se convierta en carne, hace falta una creencia</li>
                        <li>Nunca estoy disgustado por la razón que creo</li>
                        <li>El sufrimiento está siempre basado en una experiencia del pasado</li>
                        <li>Tenemos que "Entender al otro" o simplemente Aceptarlo</li>
                        <li>Tú eres el reflejo de lo que piensas diariamente</li>
                    </ul>

                    <h2>Caso 4: El observador que estoy siendo - Transfondo espiritual</h2>
                    <ul>
                        <li>Tenemos una mente Dual - Pensamos en términos de buena, malo, frío, caliente, lindo y feo</li>
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

                    <h2>¿Para qué sirve el Coaching Ontológico?</h2>
                    <p>Expande las posibilidades de la persona, no solamente en la realización de una acción, sino también y quizá más importante aún, expande las capacidades de SER y de ESTAR.</p>
                    <p>Es una disciplina que le posibilita al coachee, realizar un crecimiento de su SER, de su persona, para poder "ESTAR" presente en su propia vida, y de "SER" la persona que quiere ser.</p>

                    <h2>Misión 2028</h2>
                    <p>Nuestra propuesta de formación está acompañada y supervisada por la profesionalidad de los equipos de entrenadores y formadores, puestos en función en los procesos educativos, y totalmente funcionales al aprendizaje ontológico.</p>
                    <ul>
                        <li>Generamos líderes que se hagan cargo de sus vidas, y que sean contribuidores activos de una nueva sociedad.</li>
                        <li>Contribuimos en el desarrollo sustentable del ecosistema social.</li>
                    </ul>

                    <h2>Objetivos Formativos y Profesionales</h2>
                    <ul>
                        <li>Desarrollar un estilo propio de liderazgo, con un perfil profesional con capacidad de respuesta ante los requerimientos y oportunidades de época.</li>
                        <li>Transitar los entornos complejos que se presentan con decisión, firmeza y amplitud de criterio, sabiendo que en la diversidad está el desafío, pero también las respuestas que muchas veces no encontramos.</li>
                        <li>Formar profesionales comprometidos, audaces que integren la diversidad para interactuar con un modelo de comunicación y facilitación de procesos, que atienda el cuidado de las personas y las relaciones.</li>
                        <li>Que no pierdan de vista los objetivos propuestos, y gestionen apropiadamente los recursos para cumplir con las metas acordadas.</li>
                    </ul>

                    <h2>Formación</h2>
                    
                    <h3>Primer Año</h3>
                    <p>En la primera parte del proceso formativo se presentan contenidos y prácticas relacionadas con el desarrollo personal, liderazgo y la metodología emergente de la facilitación profesional.</p>
                    <ul>
                        <li>El foco y compromiso se centra en el desarrollo personal para favorecer la expansión de consciencia del potencial humano, tanto individual como social.</li>
                        <li>En esta amplitud de consciencia comienza un despliegue ontológico, esto es, del sentido existencial, en especial del crecimiento de la confianza personal, como así también la mejora de la calidad de relacionamiento en los distintos ámbitos del hacer propio y con otros.</li>
                        <li>Completando el proceso del primer año con un abordaje integral de competencias para la facilitación de procesos de aprendizaje y gestión de personas, relaciones y equipos de trabajo en empresas y organizaciones.</li>
                    </ul>

                    <h3>Segundo Año</h3>
                    <p>En la siguiente etapa de la formación, para certificar como Coach Ontológico y Facilitador Profesional, se aborda el conjunto de competencias que le posibilitan al futuro profesional crear contextos conversacionales desde una escucha comprometida y un hablar responsable y que le permitan hacerse cargo de acompañar a la persona que solicita los servicios de un Coach, a partir de sus compromisos y objetivos.</p>
                    <p>El Coach, mediante la facilitación de un aprendizaje ontológico, invita a la persona asistida a transitar y experimentar procesos de darse cuenta y hacerse cargo dada sus elecciones y decisiones, siempre, con la aceptación de las realidades en las que vive y socializa y con los ojos en la posibilidad que inspira el compromiso con una manera de ser y hacer que le permita superar y trascender los límites o condiciones personales que le impiden llegar a los resultados buscados.</p>',
                'image' => 'img/coaching/coaching3.png',
                'benefits' => [
                    'Mayor claridad sobre tus objetivos y propósito de vida',
                    'Desarrollo de habilidades de liderazgo personal',
                    'Superación de obstáculos y limitaciones',
                    'Mejora en la toma de decisiones',
                    'Mayor confianza y autoestima',
                    'Equilibrio entre vida personal y profesional'
                ],
                'gallery' => [
                    'img/coaching/coaching1.png',
                    'img/coaching/coaching2.png',
                    'img/coaching/coaching3.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'María González',
                        'fecha' => 'Enero 2024',
                        'texto' => 'El coaching me ayudó a encontrar mi verdadero propósito y a tomar decisiones más alineadas con mis valores. Ahora me siento más segura y confiada en mi camino.'
                    ],
                    [
                        'nombre' => 'Ana Martínez',
                        'fecha' => 'Diciembre 2023',
                        'texto' => 'Gracias al coaching pude superar mis miedos y limitaciones. Ahora tengo las herramientas necesarias para enfrentar cualquier desafío con confianza y determinación.'
                    ]
                ],
                'price' => 150.00,
                'active' => true
            ],
            [
                'name' => 'Reiki',
                'slug' => 'reiki',
                'subtitle' => 'Sanación energética para el equilibrio integral',
                'description' => '<h2>¿Qué es el Reiki?</h2>
                    <p>El Reiki es una técnica de sanación energética que equilibra tus centros energéticos, promueve la relajación profunda y activa tu capacidad natural de autocuración física, mental y emocional.</p>
                    <h2>¿Cómo funciona?</h2>
                    <p>Durante una sesión de Reiki:</p>
                    <ul>
                        <li>El terapeuta canaliza la energía universal a través de sus manos</li>
                        <li>La energía fluye a los puntos donde más se necesita</li>
                        <li>Se liberan bloqueos energéticos</li>
                        <li>Se restaura el equilibrio natural del cuerpo</li>
                        <li>Se promueve la relajación profunda</li>
                    </ul>',
                'image' => 'img/reiki/reiki_2.jpg',
                'benefits' => [
                    'Reducción del estrés y la ansiedad',
                    'Alivio del dolor físico',
                    'Mejora del sueño',
                    'Equilibrio emocional',
                    'Fortalecimiento del sistema inmunológico',
                    'Aceleración de la recuperación de lesiones'
                ],
                'gallery' => [
                    'img/reiki/reiki_1.jpg',
                    'img/reiki/reiki_2.jpg',
                    'img/reiki/reiki_3.jpg'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Laura Sánchez',
                        'fecha' => 'Febrero 2024',
                        'texto' => 'Las sesiones de Reiki me han ayudado a manejar mejor mi ansiedad y a dormir mejor. Me siento más equilibrada y en paz.'
                    ],
                    [
                        'nombre' => 'Carmen Rodríguez',
                        'fecha' => 'Enero 2024',
                        'texto' => 'El Reiki ha sido fundamental en mi recuperación después de una cirugía. El dolor disminuyó significativamente y la recuperación fue más rápida.'
                    ]
                ],
                'price' => 80.00,
                'active' => true
            ],
            [
                'name' => 'Rito del Útero',
                'slug' => 'rito-utero',
                'subtitle' => 'Sanación y reconexión con tu feminidad sagrada',
                'description' => '<h2>¿Qué es el Rito del Útero?</h2>
                    <p>El Rito del Útero es una ceremonia ancestral que nos conecta con nuestra sabiduría femenina interior, sanando heridas emocionales y físicas relacionadas con nuestra feminidad y sexualidad.</p>
                    <h2>¿Qué incluye?</h2>
                    <ul>
                        <li>Ceremonia de apertura y conexión</li>
                        <li>Meditación guiada para la sanación</li>
                        <li>Ritual de reconexión con el útero</li>
                        <li>Sanación de memorias ancestrales</li>
                        <li>Integración y cierre ceremonial</li>
                    </ul>',
                'image' => 'img/rito del utero/rito_4.jpeg',
                'benefits' => [
                    'Sanación de traumas uterinos',
                    'Reconexión con la feminidad',
                    'Mejora de la salud menstrual',
                    'Liberación de bloqueos emocionales',
                    'Mayor conexión con la intuición',
                    'Equilibrio hormonal natural'
                ],
                'gallery' => [
                    'img/rito del utero/rito_1.jpeg',
                    'img/rito del utero/rito_2.jpeg',
                    'img/rito del utero/rito_3.jpeg'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Sofía Ramírez',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'El rito del útero fue una experiencia transformadora. Me ayudó a sanar heridas profundas y a reconectarme con mi feminidad de una manera más consciente.'
                    ]
                ],
                'price' => 120.00,
                'active' => true
            ],
            [
                'name' => 'Tarjeta Cuántica',
                'slug' => 'tarjeta-cuantica',
                'subtitle' => 'Transformación cuántica para tu evolución personal',
                'description' => '<h2>¿Qué es la Tarjeta Cuántica?</h2>
                    <p>La Tarjeta Cuántica es una herramienta de transformación personal que trabaja con la física cuántica para crear cambios profundos en tu realidad.</p>
                    <h2>¿Cómo funciona?</h2>
                    <ul>
                        <li>Activación de la tarjeta personalizada</li>
                        <li>Programación de intenciones específicas</li>
                        <li>Meditación cuántica guiada</li>
                        <li>Proceso de integración energética</li>
                    </ul>',
                'image' => 'img/tarjeta-cuantica/tarjeta_1.jpeg',
                'benefits' => [
                    'Transformación de patrones limitantes',
                    'Activación de potencial cuántico',
                    'Manifestación de deseos',
                    'Expansión de conciencia',
                    'Sanación cuántica'
                ],
                'gallery' => [
                    'img/tarjeta-cuantica/tarjeta_1.jpeg',
                    'img/tarjeta-cuantica/tarjeta_2.jpeg'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Elena Torres',
                        'fecha' => 'Febrero 2024',
                        'texto' => 'La tarjeta cuántica me ha ayudado a manifestar cambios significativos en mi vida. Es una herramienta poderosa para la transformación personal.'
                    ]
                ],
                'price' => 200.00,
                'active' => true
            ],
            [
                'name' => 'Aromaterapia',
                'slug' => 'aromaterapia',
                'subtitle' => 'Sanación natural a través de aceites esenciales',
                'description' => '<h2>¿Qué es la Aromaterapia?</h2>
                    <p>La Aromaterapia es una terapia holística que utiliza aceites esenciales para promover la salud física, mental y emocional.</p>
                    <h2>¿Qué incluye?</h2>
                    <ul>
                        <li>Evaluación personalizada</li>
                        <li>Selección de aceites esenciales</li>
                        <li>Aplicación terapéutica</li>
                        <li>Guía para uso en casa</li>
                    </ul>',
                'image' => 'img/aromaterapia/aroma_1.jpeg',
                'benefits' => [
                    'Alivio del estrés y ansiedad',
                    'Mejora del sueño',
                    'Equilibrio emocional',
                    'Fortalecimiento del sistema inmunológico',
                    'Mejora de la concentración'
                ],
                'gallery' => [
                    'img/aromaterapia/aroma_1.jpeg',
                    'img/aromaterapia/aroma_2.jpeg'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Patricia López',
                        'fecha' => 'Enero 2024',
                        'texto' => 'La aromaterapia ha mejorado significativamente mi calidad de sueño y mi bienestar general. Los aceites esenciales son maravillosos.'
                    ]
                ],
                'price' => 90.00,
                'active' => true
            ],
            [
                'name' => 'Mujer Sagrada',
                'slug' => 'mujer-sagrada',
                'subtitle' => 'Reconexión con tu esencia femenina',
                'description' => '<h2>¿Qué es el Programa Mujer Sagrada?</h2>
                    <p>Un programa transformador que te guía en el camino de reconexión con tu esencia femenina, honrando tu sabiduría ancestral y tu poder creativo.</p>
                    <h2>¿Qué incluye?</h2>
                    <ul>
                        <li>Ceremonias de reconexión</li>
                        <li>Meditaciones guiadas</li>
                        <li>Rituales de sanación</li>
                        <li>Prácticas de autoconocimiento</li>
                        <li>Grupo de apoyo y comunidad</li>
                    </ul>',
                'image' => 'img/mujer-sagrada/mujer_1.jpeg',
                'benefits' => [
                    'Reconexión con la feminidad sagrada',
                    'Sanación de heridas ancestrales',
                    'Desarrollo de la intuición',
                    'Empoderamiento femenino',
                    'Conexión con la sabiduría ancestral'
                ],
                'gallery' => [
                    'img/mujer-sagrada/mujer_1.jpeg',
                    'img/mujer-sagrada/mujer_2.jpeg'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Isabel Martínez',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'El programa Mujer Sagrada me ha ayudado a reconectarme con mi esencia femenina y a honrar mi poder creativo. Es una experiencia transformadora.'
                    ]
                ],
                'price' => 180.00,
                'active' => true
            ],
            [
                'name' => 'Yoga',
                'slug' => 'yoga',
                'subtitle' => 'Armonía entre cuerpo, mente y espíritu',
                'description' => '<h2>¿Qué es nuestra experiencia de Yoga?</h2>
                    <p>Una práctica integral diseñada para ayudarte a reconectar con tu cuerpo, calmar tu mente y expandir tu conciencia. Ideal tanto para principiantes como para practicantes avanzados.</p>
                    <h2>¿Qué incluye?</h2>
                    <ul>
                        <li>Clases guiadas de Hatha y Vinyasa Yoga</li>
                        <li>Ejercicios de respiración (pranayama)</li>
                        <li>Meditaciones conscientes</li>
                        <li>Corrección postural personalizada</li>
                        <li>Ambiente armónico y relajante</li>
                    </ul>',
                'image' => 'img/yoga/yoga_3.jpeg',
                'benefits' => [
                    'Mejora de la flexibilidad y postura',
                    'Reducción del estrés y la ansiedad',
                    'Incremento de la energía vital',
                    'Conexión profunda con el momento presente',
                    'Fortalecimiento del sistema inmunológico'
                ],
                'gallery' => [
                    'img/yoga/yoga_1.jpeg',
                    'img/yoga/yoga_2.jpeg',
                    'img/yoga/yoga_4.jpeg'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Lucía Fernández',
                        'fecha' => 'Abril 2024',
                        'texto' => 'Las clases de Yoga han sido un refugio de paz para mí. Cada sesión me llena de energía y claridad. Recomiendo esta experiencia a todos los que buscan bienestar integral.'
                    ]
                ],
                'price' => 180.00,
                'active' => true
            ],
            [
                'name' => 'Rito del Corazón',
                'slug' => 'rito-del-corazon',
                'subtitle' => 'Sanación profunda desde el amor y la compasión',
                'description' => '<h2>¿Qué es el Rito del Corazón?</h2>
                    <p>Es una ceremonia de sanación energética enfocada en abrir, limpiar y fortalecer el centro del corazón. Te ayuda a liberar cargas emocionales y reconectar con el amor incondicional hacia ti y los demás.</p>
                    <h2>¿Qué incluye?</h2>
                    <ul>
                        <li>Ritual de apertura y conexión con la energía del corazón</li>
                        <li>Sanación energética guiada</li>
                        <li>Meditación con intención amorosa</li>
                        <li>Acompañamiento emocional personalizado</li>
                        <li>Integración y cierre en círculo de contención</li>
                    </ul>',
                'image' => 'img/talleres/talleres_7.jpeg',
                'benefits' => [
                    'Liberación de bloqueos emocionales',
                    'Mayor conexión con el amor propio',
                    'Apertura del chakra corazón',
                    'Sanación de vínculos afectivos',
                    'Paz interior y claridad emocional'
                ],
                'gallery' => [
                    'img/rito del corazon/rito_1.jpeg',
                    'img/rito del corazon/rito_2.jpeg'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Marina López',
                        'fecha' => 'Febrero 2024',
                        'texto' => 'Sentí cómo se aliviaban dolores guardados desde hace años. El Rito del Corazón me permitió abrirme nuevamente al amor con confianza y calma. Una experiencia poderosa y sanadora.'
                    ]
                ],
                'price' => 220.00,
                'active' => true
            ]


        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
