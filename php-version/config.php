<?php
/**
 * Slim ADVANCE - Archivo de Configuración Global (PHP)
 * Modifica fácilmente números, redes sociales y catálogo de productos aquí.
 */

// Teléfono WhatsApp empresarial (Código de país +51 Perú + 9 dígitos)
define('WHATSAPP_PHONE', '51957350532');
define('WHATSAPP_DISPLAY', '957 350 532');

// Canales y Redes Sociales Oficiales (Para evitar estafas y suplantaciones)
define('FACEBOOK_URL', 'https://www.facebook.com/share/1DsSevTP7Y/?mibextid=wwXIfr');
define('INSTAGRAM_URL', 'https://www.instagram.com/slim_advance_peru?igsh=MW5mYzNhcmZqbXU1Ng%3D%3D&utm_source=qr');
define('TIKTOK_URL', 'https://www.tiktok.com/@slim_advance_peru?_r=1&_t=ZS-9AxsiM5nB3Q');
define('INSTAGRAM_HANDLE', '@slim_advance_peru');
define('TIKTOK_HANDLE', '@slim_advance_peru');

// Información de la Marca
define('SITE_NAME', 'Slim ADVANCE');
define('SITE_TAGLINE', '#SlimAdvanceTúAliado');
define('SITE_URL', 'https://tu-usuario.github.io/slim-advance');
define('CURRENCY_SYMBOL', 'S/');
define('CURRENCY_CODE', 'PEN');

// Catálogo de Productos Oficial
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
        'fullDesc' => 'Tratamiento intensivo de choque de 15 días. Combina el poder adelgazante de las cápsulas Slim ADVANCE con la termogénesis del té Thermote, la desintoxicación del colon y el gel criogénico Ice Therapy para reafirmar y moldear la piel.',
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
        'fullDesc' => 'Perfecto para iniciar tu cambio sin compromisos largos. Desintoxica el sistema digestivo, limpia el colon, quema grasa acumulada y ayuda a notar cambios desde los primeros 7 días.',
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
        'fullDesc' => 'Nuestro tratamiento más potente y completo para un mes entero. Con este trío podrás reducir medidas drásticamente y bajar entre 8kg y 12kg al mes siguiendo las indicaciones con asesoramiento continuo.',
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
        'fullDesc' => 'Tratamiento de inicio para comprobar la tolerancia y efectividad de la fórmula 100% natural. Regula el apetito y reactiva el tránsito intestinal.',
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
        'fullDesc' => 'Plan de duración media ideal para personas que buscan una pérdida de peso controlada, reduciendo la ansiedad y purificando el tracto digestivo.',
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
        'fullDesc' => 'Tratamiento integral de 1 mes completo con 30 pastillas de Slim Advance y desintoxicación de colon. Garantiza una pérdida de peso progresiva, natural y duradera sin efecto rebote.',
        'includes' => [
            'Slim Advance Frasco x30 cápsulas',
            'Limpieza de colon incluida',
            'Guía y asesoría personalizada de uso'
        ],
        'popular' => true
    ]
];

// Helper para generar URLs de WhatsApp seguras
function getWhatsAppUrl($message = '') {
    if (empty($message)) {
        $message = "¡Hola " . SITE_NAME . "! 👋 Deseo más información sobre los tratamientos para bajar de peso.";
    }
    return "https://wa.me/" . WHATSAPP_PHONE . "?text=" . rawurlencode($message);
}
?>
