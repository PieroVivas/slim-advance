<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Muestra la página informativa y catálogo de Slim ADVANCE
     */
    public function index()
    {
        $whatsappNumber = '51957350532';
        $whatsappDisplay = '957 350 532';

        $socials = [
            'facebook' => 'https://www.facebook.com/share/1DsSevTP7Y/?mibextid=wwXIfr',
            'instagram' => 'https://www.instagram.com/slim_advance_peru?igsh=MW5mYzNhcmZqbXU1Ng%3D%3D&utm_source=qr',
            'tiktok' => 'https://www.tiktok.com/@slim_advance_peru?_r=1&_t=ZS-9AxsiM5nB3Q',
            'instagram_handle' => '@slim_advance_peru',
            'tiktok_handle' => '@slim_advance_peru'
        ];

        $products = [
            [
                'id' => 'super-pack-15',
                'name' => 'SUPER PACK X15 DÍAS',
                'tagline' => '#SlimAdvanceTúAliado',
                'category' => 'super-packs',
                'price' => 210,
                'duration' => '15 Días',
                'badge' => '⭐ SUPER PACK MÁS VENDIDO',
                'image' => 'assets/images/super-pack-15-dias.jpg',
                'shortDesc' => 'El combo ideal para quemar grasa, desinflamar y tonificar en 15 días con crioterapia.',
                'includes' => [
                    '1 Slim ADVANCE (fórmula reforzada)',
                    '1 Thermote Premium (té dietético quemagrasa)',
                    '1 Pack Detox',
                    '1 Limpia Colon (limpia y desintoxica)',
                    '1 Ice Therapy NF (Gel criogénico modelador 250g)'
                ],
                'popular' => true
            ],
            [
                'id' => 'super-pack-7',
                'name' => 'SUPER PACK X7 DÍAS',
                'tagline' => '#SlimAdvanceTúAliado',
                'category' => 'super-packs',
                'price' => 130,
                'duration' => '7 Días',
                'badge' => '⚡ PLAN DETOX EXPRESS',
                'image' => 'assets/images/super-pack-7-dias.jpg',
                'shortDesc' => 'Pack express de 1 semana para reactivar el metabolismo y desintoxicar tu organismo.',
                'includes' => [
                    '1 Slim ADVANCE',
                    '1 Thermote Premium',
                    '1 Pack Detox',
                    '1 Limpia Colon'
                ],
                'popular' => false
            ],
            [
                'id' => 'trio-mega-slim',
                'name' => 'TRÍO MEGA SLIM COMPLETO',
                'tagline' => '#SlimAdvanceTúAliado',
                'category' => 'trio-completo',
                'price' => 360,
                'duration' => '30 Días',
                'badge' => '🔥 MÁXIMA PÉRDIDA: 8 A 12 KG/MES',
                'image' => 'assets/images/trio-mega-slim-completo.jpg',
                'shortDesc' => 'Tratamiento integral de 30 días con moldeador térmico Xtreme Gold para una transformación total.',
                'includes' => [
                    '1 Tratamiento Slim Advance 30 días (pastillas x30)',
                    '1 Thermote Premium para 30 días (300g)',
                    '1 Pack Detox (8 tomas completas)',
                    '1 Moldeador Xtreme Gold (crema reductora intensiva)',
                    '1 Limpia Colon'
                ],
                'popular' => true
            ],
            [
                'id' => 'plan-basico-7',
                'name' => 'TRATAMIENTO BÁSICO - 7 DÍAS',
                'tagline' => 'Fórmula 100% Natural',
                'category' => 'planes-basicos',
                'price' => 80,
                'duration' => '7 Días',
                'badge' => '🌱 PLAN INICIAL ECONÓMICO',
                'image' => 'assets/images/tratamientos-planes-basicos.jpg',
                'shortDesc' => 'Prueba el poder de Slim Advance durante 7 días con limpieza de colon incluida.',
                'includes' => [
                    'Tratamiento Slim Advance 7 días',
                    'Limpieza de colon incluida',
                    'Asesoramiento personalizado'
                ],
                'popular' => false
            ],
            [
                'id' => 'plan-basico-15',
                'name' => 'TRATAMIENTO BÁSICO - 15 DÍAS',
                'tagline' => 'Fórmula 100% Natural',
                'category' => 'planes-basicos',
                'price' => 130,
                'duration' => '15 Días',
                'badge' => '🌿 RESULTADOS VISIBLES',
                'image' => 'assets/images/tratamientos-planes-basicos.jpg',
                'shortDesc' => 'Tratamiento de 15 días con limpieza de colon para desinflamar el abdomen y perder peso.',
                'includes' => [
                    'Tratamiento Slim Advance 15 días',
                    'Limpieza de colon incluida',
                    'Asesoramiento y seguimiento'
                ],
                'popular' => false
            ],
            [
                'id' => 'plan-basico-30',
                'name' => 'TRATAMIENTO BÁSICO - 30 DÍAS',
                'tagline' => 'Fórmula 100% Natural',
                'category' => 'planes-basicos',
                'price' => 230,
                'duration' => '30 Días',
                'badge' => '🏆 MES COMPLETO RECOMENDADO',
                'image' => 'assets/images/tratamientos-planes-basicos.jpg',
                'shortDesc' => 'Tratamiento clásico mensual completo de 30 días con pastillas y limpieza de colon.',
                'includes' => [
                    'Slim Advance Frasco x30 cápsulas',
                    'Limpieza de colon incluida',
                    'Guía y asesoría personalizada de uso'
                ],
                'popular' => true
            ]
        ];

        return view('landing', compact('whatsappNumber', 'whatsappDisplay', 'socials', 'products'));
    }
}
