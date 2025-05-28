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
                'image' => 'img/coaching/coaching1.png',
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
                'price' => 19999.00,
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
                'price' => 19998.99,
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
                'price' => 17999.98,
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
                'price' => 74999.99,
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
                'price' => 17999.00,
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
                'price' => 17999.00,
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
                'price' => 10000.00,
                'active' => true
            ],
            [
                'name' => 'Rito del corazón y Sanación del linaje Paterno',
                'slug' => 'rito-del-corazon',
                'subtitle' => 'Sanación profunda desde el amor y la compasión',
                'description' => '<h2>¿Qué es el Rito del Corazón?</h2>
                    <p>Es un ritual destinada a la Sanación de tu Linaje Masculino, al reconocimiento de las heridas de su corazón, facilitando así la liberación de cargas y patrones de desamor impuestos y heredados. La energía de la luna llena es la ideal para esta sanación. A través de la sanación de tu propia energía masculina, recuperas la fuerza, la energía, la potencia y, por lo tanto, el amor por la vida.</p>
                    <h2>Beneficios de recibir el Rito del Corazón</h2>
                    <ul>
                        <li>Conciencia y liberación del sufrimiento y de las heridas ancestrales de miedo, dolor, opresión y abusos, generados por desequilibrios de las energías de la creación, tanto femeninas como masculinas.</li>
                        <li>Sanación emocional y energética del Linaje Ancestral Masculino de pasado y futuro (7 generaciones).</li>
                        <li>Meditación con intención amorosa</li>
                        <li>Limpieza y renovación de la energía del corazóno</li>
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
                'price' => 17999.00,
                'active' => true
            ],
            [
                'name' => 'Kit Astral',
                'slug' => 'kit-astral',
                'subtitle' => 'Kit único para el uso adecuado de productos de Sagrada Madre',
                'description' => '<h2>Kit Astral</h2>
                    <p>Es un kit único que combina accesorios para el uso adecuado de los productos de Sagrada madre como ser sahumerios, sahumos, pastillas, hierbas bombitas etc.</p>
                    <h2>¿Qué contiene kit?</h2>
                    <ul>
                        <li>Porta Astral: para colocar tus sahumos y sahumerios.</li>
                        <li>Sahumador Astral: para acompañar tus sahumados con hierbas y resinas.</li>
                        <li>Cucharón Astral: para sahumar con bombitas de defumación activada.</li>
                        <li>Cuenco Astral: para tus sahumerios.</li>
                        <li>Cucharita Astral: para verter hierbas en tus sahumados.</li>
                    </ul>',
                'image' => 'img/kit-astral/kit1.png',
                'benefits' => [
                    'Accesorios de alta calidad',
                    'Diseño único y artesanal',
                    'Perfecto para prácticas espirituales',
                    'Ideal para limpieza energética',
                    'Conjunto completo para sahumar'
                ],
                'gallery' => [
                    'img/kit-astral/kit1.png',
                    'img/kit-astral/kit2.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'María González',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'El Kit Astral es perfecto para mis prácticas diarias. Los accesorios son de excelente calidad y muy hermosos.'
                    ]
                ],
                'price' => 50000.00,
                'active' => true
            ],
            [
                'name' => 'Reiki I II Y Maestría',
                'slug' => 'reiki-maestria',
                'subtitle' => 'Reencuentro con tu mejor versión a través de la energía universal',
                'description' => '<h2>LLEGO EL MOMENTO AL REENCUENTRO DE TU MEJOR VERSION!</h2>
                    <p>Seres iluminados, te brindamos estas terapias holísticas, para así poder recibir toda la luz vital de tu alma, en conexión y amor. Es momento de aceptación, de gratitud para una gran transformación y liberación.</p>
                    <p>Les invito a tener un momento de gratitud, de amor, de reencuentro, de armonía a través de la diferente terapia holísticas.</p>
                    <p>La frecuencia de este momento es especial para compartir con todos ustedes una vez que ingresan a este sistema de terapia holísticas cambia la realidad y la frecuencia vibratoria cósmica en sus vidas y cada uno va creando un nuevo camino, una nueva evolución.</p>

                    <h2>REIKI USUI NIVEL 1</h2>
                    <p>Reiki es un poderoso sendero hacia el autoconocimiento y la sanación, una puerta hacia el despertar de la energía interior. Este sistema integral nos guía en la expansión interior y el desarrollo personal profundo.</p>
                    <p>A través del Primer Nivel de Reiki, se adquieren técnicas simples pero efectivas para armonizar nuestra propia energía y la de los demás.</p>
                    <h3>TEMAS:</h3>
                    <ul>
                        <li>El origen y la historia del Reiki.</li>
                        <li>Naturaleza de la energía Reiki y proceso de Sanación.</li>
                        <li>Sistema Energético Humano.</li>
                        <li>Los Chakras y su relación con las Emociones.</li>
                        <li>Protecciones Energéticas.</li>
                        <li>Autotratamiento.</li>
                        <li>Tratamiento y como suministrar energía a las demás Personas, Animales, Plantas.</li>
                        <li>Posturas especiales para determinadas dolencias o dificultades.</li>
                    </ul>

                    <h2>REIKI USUI NIVEL 2</h2>
                    <p>A través del Segundo Nivel de Reiki, experimentarás una amplificación de tu energía vital y percibirás un notable cambio en tu bienestar energético. Este nivel potencia la capacidad de recibir y canalizar energía, fortaleciendo la conexión con la fuerza vital universal.</p>
                    <h3>TEMAS:</h3>
                    <ul>
                        <li>Tres símbolos maravillosos para potenciar nuestra energía, que trabajan nuestro ser Físico, Mental / Emocional y Espiritual usos y aplicación en los tratamientos.</li>
                        <li>Envío de Reiki a Distancia a Personas, Lugares y Situaciones sin límite de tiempo y espacio.</li>
                        <li>Tratamiento de Adicciones y Malos hábitos.</li>
                        <li>Limpieza de Ambientes, Hogares y Energías Contaminantes.</li>
                        <li>Protección Energética.</li>
                    </ul>

                    <h2>REIKI USUI NIVEL 3</h2>
                    <p>En el Tercer Nivel de Reiki, también llamado Maestría Interior, avanzamos hacia la sanación espiritual profunda. Este nivel nos permite trabajar directamente con el cuerpo espiritual, estableciendo una conexión más amplia con una fuente superior de energía.</p>
                    <h3>TEMAS:</h3>
                    <ul>
                        <li>Meditación de Tercer nivel.</li>
                        <li>Meditación en Movimiento.</li>
                        <li>Símbolo Antakarana de Meditación.</li>
                        <li>Símbolo Maestros Usui para potenciar la energia.</li>
                        <li>Cirugía Psíquica o eterica de sanación.</li>
                        <li>Protección y Armonización de tu campo Áurico.</li>
                        <li>Parrilla Reiki, uso de reiki con cristales para envío a distancia.</li>
                    </ul>

                    <h2>REIKI USUI NIVEL MAESTRÍA</h2>
                    <p>Para muchos de nosotros, el Reiki ha sido un descubrimiento tan impactante que nos ha inspirado a seguir avanzando y profundizando en este camino de sanación. El grado de Maestría nos brinda tanto los conocimientos prácticos como teóricos necesarios para iniciar y guiar a otros en todos los niveles de Reiki.</p>
                    <h3>TEMAS:</h3>
                    <ul>
                        <li>Principios y elementos que te guiarán en tu forma de trabajar con las clases de reiki.</li>
                        <li>Dos nuevos símbolos sagrados para sintonizar a los demás en todos los niveles de Reiki Usui.</li>
                        <li>Una poderosa técnica de armonización para tus pacientes, la sintonización de sanación.</li>
                        <li>Todas las técnicas para realizar las sintonizaciones en todos los niveles.</li>
                        <li>Sintonización de Maestría.</li>
                    </ul>',
                'image' => 'img/reiki/reiki-maestria.png',
                'benefits' => [
                    'Sus beneficios son infinitos ya que llegan a la raíz del problema',
                    'Facilita la relajación a nivel energético y físico',
                    'Alivia dolores y tensiones',
                    'Libera la energía bloqueada en el cuerpo',
                    'Equilibra la energía',
                    'Facilita la autocuración del cuerpo, estimulando el sistema inmunológico',
                    'Tiene efecto a nivel emocional y mental',
                    'Puedes utilizarlo como un método de crecimiento personal'
                ],
                'gallery' => [
                    'img/reiki/reiki-maestria.png',
                    'img/reiki/reiki-nivel1.png',
                    'img/reiki/reiki-nivel2.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Ana Martínez',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'La formación en Reiki ha transformado mi vida. Ahora puedo ayudar a otros y a mí misma de una manera más profunda y significativa.'
                    ]
                ],
                'price' => 29999.00,
                'active' => true
            ],
            [
                'name' => 'Armonización de Espacios para Negocios',
                'slug' => 'armonizacion-espacios',
                'subtitle' => 'Un ambiente armonizado y próspero para tu negocio o empresa',
                'description' => '<h2>Armonización de Espacios para Negocios</h2>
                    <p>Las armonizaciones con radiestesia y radiónica, protectores aúricos para espacios son ideales para medir y ajustar las energías presentes en un entorno, buscando promover un equilibrio energético que favorezca el bienestar, la productividad y la prosperidad.</p>
                    <p>Si sientes que la energía de tu negocio está estancada este método es el ideal.</p>',
                'image' => 'img/armonizacion/espacio1.png',
                'benefits' => [
                    'Mejora el ambiente laboral',
                    'Aumenta la productividad',
                    'Atrae prosperidad',
                    'Elimina energías negativas',
                    'Promueve el bienestar general'
                ],
                'gallery' => [
                    'img/armonizacion/espacio1.png',
                    'img/armonizacion/espacio2.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Carlos Rodríguez',
                        'fecha' => 'Febrero 2024',
                        'texto' => 'Desde que armonizamos nuestro local, hemos notado un cambio significativo en el ambiente y en las ventas. Los clientes se sienten más cómodos y el personal más motivado.'
                    ]
                ],
                'price' => 49999.00,
                'active' => true
            ],
            [
                'name' => 'Mesa Radiónica',
                'slug' => 'mesa-radionica',
                'subtitle' => 'Herramienta de sanación holística para detectar y armonizar energías',
                'description' => '<h2>Mesa Radiónica Cuántica</h2>
                    <p>La mesa radiónica cuántica es una herramienta de sanación holística, basada en los principios de la Radiostesia(captación de la energía y revelaciones del inconsciente), la Radionica(diagnóstico de la frecuencia energética vital y los campos electromagnéticos), la Geometria Sagrada (uso de símbolos y figuras de poder), la psicotrónica (canalización de la energía universal) y la espiritualidad (conexión con el Universo y el Yo Divino).</p>
                    
                    <h2>¿Para qué se utiliza?</h2>
                    <p>La mesa radiónica cuántica es utilizada para detectar bloqueos energéticos, larvas y parásitos espirituales, brujería, traumas, patrones, hologramas y registros negativos para el alma (creados en esta vida o existencias anteriores), mandatos, lazos kármicos, votos de consciencia, maldiciones generacionales (o cargas ancestrales), fobias, y vidas paralelas, entre otras.</p>

                    <h2>Otras ventajas del uso de la mesa radiónica cuántica:</h2>
                    <ul>
                        <li>Enviar energía a distancia</li>
                        <li>Armonizar (energéticamente) espacios o personas</li>
                        <li>Ayudar a tomar decisiones importantes</li>
                        <li>Reconocer talentos o dones bloqueados y liberarlos</li>
                        <li>Impulsar el desarrollo personal</li>
                    </ul>

                    <h2>NOTA:</h2>
                    <ul>
                        <li>La sesión tiene duración entre 45 - 90 min.</li>
                        <li>El tratamiento se realiza a distancia.</li>
                        <li>Enviar nombre completo, fecha de nacimiento, motivo de consulta.</li>
                        <li>Se coordinará día y horario.</li>
                        <li>Se te darán recomendaciones para que te prepares antes de la sesión.</li>
                        <li>Es importante que estés en un lugar tranquilo y seguro.</li>
                        <li>Una vez finalizada la sesión se enviará una devolución vía WhatsApp.</li>
                    </ul>',
                'image' => 'img/mesa-radionica/mesa1.png',
                'benefits' => [
                    'Detección de bloqueos energéticos',
                    'Limpieza y armonización vibracional',
                    'Liberación de patrones negativos',
                    'Desarrollo personal y espiritual',
                    'Conexión con lo Divino'
                ],
                'gallery' => [
                    'img/mesa-radionica/mesa1.png',
                    'img/mesa-radionica/mesa2.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Laura Sánchez',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'La sesión con la mesa radiónica me ayudó a identificar y liberar bloqueos que tenía desde hace años. Me siento más ligera y conectada con mi propósito.'
                    ]
                ],
                'price' => 40000.00,
                'active' => true
            ],
            [
                'name' => 'Magnified Healing',
                'slug' => 'magnified-healing',
                'subtitle' => 'Sanación y elevación de la frecuencia vibratoria',
                'description' => '<h2>Magnified Healing</h2>
                    <p>Magnified Healing establece un flujo constante de Energía, que va desde tu corazón hasta La Fuente, la cual te transforma en un pilar de Luz armonizando tu sistema energético y descendiendo hasta el Centro Cristal de la Tierra. Al girar, esta conexión crea un profundo estado de Gracia haciendo fluir Luz desde la Fuente Suprema a cada una de tus células preparando, así, los cimientos para tu Proceso de la Ascensión.</p>

                    <p>Esto se logra a través de una serie de ejercicios, que, al ir practicándolos cotidianamente, la persona va elevando su frecuencia vibratoria. Este aumento vibracional tiene como consecuencia una sanación en la persona ya que se van disolviendo bloqueos energéticos, se van cerrando círculos karmáticos, se va adecuando el cuerpo físico para que pueda "contener" este nuevo flujo de energía, y por sobre todas las cosas, la persona va tomando consciencia que es un Ser de Luz manifestado en la Tierra.</p>

                    <p>También trabaja con la limpieza del Karma y alcanza la activación de todas las cadenas del ADN. Mediante una sesión se atraviesan distintas etapas que consisten en Sensibilizar, Despertar, Reinstalar y Conectar el Sistema Nervioso, Exploración y Sanación del cuerpo y Estimulación del calcio en la columna vertebral, Sanación de la Tierra, Sanación del Karma y Expansión de la Llama Trina, Preparación para la Ascensión.</p>

                    <h2>NOTA:</h2>
                    <ul>
                        <li>La sesión tiene duración entre 30-40 min.</li>
                        <li>El tratamiento se realiza a distancia.</li>
                        <li>Enviar nombre completo, fecha de nacimiento, motivo de consulta.</li>
                        <li>Se coordinará día y horario.</li>
                        <li>Se te darán recomendaciones para que te prepares antes de la sesión.</li>
                        <li>Es importante que estés en un lugar tranquilo y seguro.</li>
                        <li>Una vez finalizada la sesión se enviará una meditación vía WhatsApp.</li>
                    </ul>',
                'image' => 'img/magnified-healing/healing1.png',
                'benefits' => [
                    'Elevación de la frecuencia vibratoria',
                    'Disolución de bloqueos energéticos',
                    'Cierre de círculos karmáticos',
                    'Activación de cadenas de ADN',
                    'Preparación para la Ascensión'
                ],
                'gallery' => [
                    'img/magnified-healing/healing1.png',
                    'img/magnified-healing/healing2.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Sofía Ramírez',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'Magnified Healing me ha ayudado a conectar con mi esencia más profunda y a experimentar una sanación integral que nunca antes había sentido.'
                    ]
                ],
                'price' => 17999.00,
                'active' => true
            ],
            [
                'name' => 'Johrei',
                'slug' => 'johrei',
                'subtitle' => 'Canalización de energía espiritual para la armonización integral',
                'description' => '<h2>Johrei</h2>
                    <p>Johrei es un método de canalización de energía espiritual a través de la imposición de las manos que permite la armonización física, mental y espíritu.</p>

                    <h2>Beneficios de Johrei:</h2>
                    <ul>
                        <li>Lo vuelve saludable física y espiritualmente.</li>
                        <li>Eleva su inteligencia y personalidad.</li>
                        <li>Lo vuelve más sereno y pacífico.</li>
                        <li>Despierta al ser humano a la existencia del creador.</li>
                        <li>Lo fortalece para sobrepasar los desafíos de la vida.</li>
                        <li>Expande su aura, protegiéndolo de los infortunios.</li>
                    </ul>

                    <h2>NOTA:</h2>
                    <ul>
                        <li>La sesión tiene duración entre 30-40 min.</li>
                        <li>El tratamiento se realiza a distancia.</li>
                        <li>Enviar nombre completo, fecha de nacimiento, motivo de consulta.</li>
                        <li>Se coordinará día y horario.</li>
                        <li>Se te darán recomendaciones para que te prepares antes de la sesión.</li>
                        <li>Es importante que estés en un lugar tranquilo y seguro.</li>
                        <li>Una vez finalizada la sesión se enviará una devolución en audio de la sesión.</li>
                    </ul>',
                'image' => 'img/johrei/johrei1.png',
                'benefits' => [
                    'Armonización física y espiritual',
                    'Elevación de la conciencia',
                    'Paz interior',
                    'Protección energética',
                    'Fortalecimiento personal'
                ],
                'gallery' => [
                    'img/johrei/johrei1.png',
                    'img/johrei/johrei2.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Juan Pérez',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'Las sesiones de Johrei me han ayudado a encontrar paz interior y a manejar mejor los desafíos de la vida. Me siento más conectado con mi espiritualidad.'
                    ]
                ],
                'price' => 17999.98,
                'active' => true
            ],
            [
                'name' => 'Protector Aúrico',
                'slug' => 'protector-aurico',
                'subtitle' => 'Protección energética para personas y espacios',
                'description' => '<h2>Protector Aúrico</h2>
                    <p>El protector áurico es un producto que se usa para proteger el campo energético de las personas o de los lugares. Se dice que protege de energías negativas, malas vibras, envidia y atrae la buena suerte.</p>

                    <p>Los protectores áuricos pueden ser sprays, roll-ons o lluvias corporales. Están hechos a base de aceites esenciales y cristales.</p>

                    <h2>Los protectores áuricos pueden ayudar a:</h2>
                    <ul>
                        <li>Armonizar y despejar el ambiente de energías densas y negativas</li>
                        <li>Generar una limpieza energética en el espacio áurico</li>
                        <li>Proteger de ambientes o energías densas</li>
                        <li>Alejar las malas vibras y la envidia</li>
                        <li>Atraer la buena suerte</li>
                        <li>Purificar mentales y emocionales</li>
                        <li>Brindar equilibrio cuando nos encontramos con emociones intensas</li>
                        <li>Eliminar la energía negativa tanto interna como externa</li>
                    </ul>',
                'image' => 'img/protector-aurico/protector1.png',
                'benefits' => [
                    'Protección energética',
                    'Limpieza de espacios',
                    'Armonización ambiental',
                    'Equilibrio emocional',
                    'Atracción de energías positivas'
                ],
                'gallery' => [
                    'img/protector-aurico/protector1.png',
                    'img/protector-aurico/protector2.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'María López',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'El protector aúrico ha transformado la energía de mi hogar. Me siento más protegida y en armonía con mi entorno.'
                    ]
                ],
                'price' => 3999.99,
                'active' => true
            ],
            [
                'name' => 'Botiquín Holístico',
                'slug' => 'botiquin-holistico',
                'subtitle' => 'Kit completo para el bienestar integral',
                'description' => '<h2>Botiquín Holístico</h2>
                    <p>Un conjunto completo de herramientas y productos naturales para mantener tu bienestar físico, mental y espiritual en el día a día.</p>

                    <h2>Contenido del Kit:</h2>
                    <ul>
                        <li>Aceites esenciales seleccionados</li>
                        <li>Cristales de sanación</li>
                        <li>Hierbas medicinales</li>
                        <li>Velas aromáticas</li>
                        <li>Manual de uso y guía práctica</li>
                        <li>Inciensos naturales</li>
                        <li>Sales minerales</li>
                        <li>Spray protector energético</li>
                    </ul>

                    <h2>Beneficios:</h2>
                    <ul>
                        <li>Primeros auxilios naturales</li>
                        <li>Armonización energética</li>
                        <li>Relajación y bienestar</li>
                        <li>Protección espiritual</li>
                        <li>Equilibrio emocional</li>
                    </ul>',
                'image' => 'img/botiquin/botiquin1.png',
                'benefits' => [
                    'Kit completo de bienestar',
                    'Productos naturales',
                    'Fácil de usar',
                    'Versátil y práctico',
                    'Ideal para el hogar'
                ],
                'gallery' => [
                    'img/botiquin/botiquin1.png',
                    'img/botiquin/botiquin2.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Ana Martínez',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'El botiquín holístico es mi compañero diario. Me ayuda a mantener el equilibrio y la armonía en mi vida cotidiana.'
                    ]
                ],
                'price' => 24999.99,
                'active' => true
            ],
            [
                'name' => 'Velas Ancestrales',
                'slug' => 'velas-ancestrales',
                'subtitle' => 'Iluminación sagrada para rituales y meditación',
                'description' => '<h2>Velas Ancestrales</h2>
                    <p>Velas artesanales elaboradas con cera natural y aceites esenciales, diseñadas para rituales sagrados, meditación y armonización de espacios.</p>

                    <h2>Características:</h2>
                    <ul>
                        <li>Elaboradas con cera 100% natural</li>
                        <li>Aceites esenciales puros</li>
                        <li>Diseño artesanal único</li>
                        <li>Duración prolongada</li>
                        <li>Aroma suave y natural</li>
                    </ul>

                    <h2>Usos:</h2>
                    <ul>
                        <li>Meditación y contemplación</li>
                        <li>Rituales de limpieza energética</li>
                        <li>Armonización de espacios</li>
                        <li>Celebraciones sagradas</li>
                        <li>Terapia de luz y aromaterapia</li>
                    </ul>',
                'image' => 'img/velas/vela1.png',
                'benefits' => [
                    'Iluminación natural',
                    'Aromaterapia integrada',
                    'Energía purificadora',
                    'Ambiente sagrado',
                    'Conexión espiritual'
                ],
                'gallery' => [
                    'img/velas/vela1.png',
                    'img/velas/vela2.png'
                ],
                'testimonials' => [
                    [
                        'nombre' => 'Laura Sánchez',
                        'fecha' => 'Marzo 2024',
                        'texto' => 'Las velas ancestrales crean un ambiente mágico y sagrado. Su aroma y luz me ayudan a conectar con mi espiritualidad.'
                    ]
                ],
                'price' => 4000.00,
                'active' => true
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
