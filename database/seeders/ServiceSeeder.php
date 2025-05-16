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
                'name' => 'Kit Astral',
                'description' => 'Kit completo para tu desarrollo espiritual',
                'price' => 50000.00,
                'type' => 'carrito',
                'active' => true
            ],
            [
                'name' => 'Rito del corazón y Sanación del linaje Paterno',
                'description' => 'Sanación profunda del linaje paterno y el corazón',
                'price' => 17999.00,
                'type' => 'carrito',
                'active' => true
            ],
            [
                'name' => 'Tarjeta cuántica',
                'description' => 'Herramienta para la transformación cuántica',
                'price' => 74999.99,
                'type' => 'carrito',
                'active' => true
            ],
            [
                'name' => 'Mujer Sagrada',
                'description' => 'Programa de conexión con tu feminidad sagrada',
                'price' => 17999.00,
                'type' => 'service',
                'active' => true
            ],
            [
                'name' => 'Magnified Healing',
                'description' => 'Técnica de sanación magnificada',
                'price' => 17999.99,
                'type' => 'service',
                'active' => true
            ],
            [
                'name' => 'Rito del útero',
                'description' => 'Sanación y conexión con tu útero sagrado',
                'price' => 17999.98,
                'type' => 'service',
                'active' => true
            ],
            [
                'name' => 'Aromaterapia',
                'description' => 'Terapia con aceites esenciales',
                'price' => 17999.00,
                'type' => 'service',
                'active' => true
            ],
            [
                'name' => 'Johrei',
                'description' => 'Técnica de sanación energética japonesa',
                'price' => 17999.98,
                'type' => 'service',
                'active' => true
            ],
            [
                'name' => 'Velas ancestrales',
                'description' => 'Ritual con velas para la sanación ancestral',
                'price' => 4000.00,
                'type' => 'service',
                'active' => true
            ],
            [
                'name' => 'Protector Áurico',
                'description' => 'Protección energética para tu campo áurico',
                'price' => 3999.99,
                'type' => 'service',
                'active' => true
            ],
            [
                'name' => 'Botiquín holístico',
                'description' => 'Kit completo de herramientas holísticas',
                'price' => 19999.00,
                'type' => 'service',
                'active' => true
            ],
            [
                'name' => 'Coaching',
                'description' => 'Acompañamiento personalizado en tu desarrollo',
                'price' => 19999.00,
                'type' => 'service',
                'active' => true
            ],
            [
                'name' => 'Reiki',
                'description' => 'Sanación energética tradicional',
                'price' => 19998.99,
                'type' => 'service',
                'active' => true
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
