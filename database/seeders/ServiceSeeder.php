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
                'name' => 'Coaching Transformacional',
                'slug' => 'coaching',
                'subtitle' => 'Descubre tu verdadero potencial y alcanza tus metas',
                'description' => '<h2>¿Qué es el Coaching Transformacional?</h2>
                    <p>El Coaching Transformacional es un proceso de acompañamiento personalizado que te ayuda a descubrir tu verdadero potencial y alcanzar tus metas más significativas. A través de técnicas y herramientas especializadas, trabajamos juntos para identificar y superar obstáculos, desarrollar nuevas perspectivas y crear un plan de acción efectivo para tu crecimiento personal.</p>
                    <h2>¿Cómo funciona?</h2>
                    <p>Nuestro proceso de coaching se desarrolla en sesiones individuales donde:</p>
                    <ul>
                        <li>Exploramos tus objetivos y aspiraciones más profundas</li>
                        <li>Identificamos patrones limitantes y creencias que te impiden avanzar</li>
                        <li>Desarrollamos estrategias personalizadas para superar obstáculos</li>
                        <li>Creamos un plan de acción concreto y medible</li>
                        <li>Te acompañamos en la implementación y seguimiento de tus metas</li>
                    </ul>',
                'image' => 'img/talleres/talleres_7.jpeg',
                'benefits' => [
                    'Mayor claridad sobre tus objetivos y propósito de vida',
                    'Desarrollo de habilidades de liderazgo personal',
                    'Superación de obstáculos y limitaciones',
                    'Mejora en la toma de decisiones',
                    'Mayor confianza y autoestima',
                    'Equilibrio entre vida personal y profesional'
                ],
                'gallery' => [
                    'img/talleres/talleres_7.jpeg',
                    'img/talleres/talleres_2.jpeg',
                    'img/talleres/talleres_3.jpeg'
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
