<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo SITE_NAME; ?> | Catálogo y Tratamientos Naturales</title>
  
  <meta name="description" content="Catálogo oficial de <?php echo SITE_NAME; ?>. Tratamientos naturales para pérdida de peso, desintoxicación de colon y reducción de medidas. WhatsApp: <?php echo WHATSAPP_DISPLAY; ?>">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="icon" type="image/svg+xml" href="../assets/images/logo.svg">
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-sky-500 selection:text-white">

  <!-- Top Announcement Bar -->
  <div class="bg-gradient-to-r from-sky-700 via-sky-600 to-emerald-600 text-white text-xs font-semibold py-2 px-4">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-1 text-center">
      <div class="flex items-center gap-2">
        <span class="bg-emerald-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">🇵🇪 Envíos Nacionales</span>
        <span>¡Envíos garantizados a todo el Perú!</span>
      </div>
      <div class="flex items-center gap-3">
        <span>Canales Oficiales:</span>
        <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-200">Facebook</a>
        <span>•</span>
        <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-200">Instagram</a>
        <span>•</span>
        <a href="<?php echo TIKTOK_URL; ?>" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-200">TikTok</a>
        <span>•</span>
        <a href="<?php echo getWhatsAppUrl('Hola ' . SITE_NAME . ', quisiera asesoría personalizada'); ?>" 
           target="_blank" 
           class="underline hover:text-emerald-200 font-bold">
          WA: <?php echo WHATSAPP_DISPLAY; ?>
        </a>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="sticky top-0 z-40 glass-header">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      <a href="#inicio" class="flex items-center gap-2">
        <img src="../assets/images/logo.svg" alt="<?php echo SITE_NAME; ?>" class="h-10 w-auto">
      </a>

      <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-700">
        <a href="#inicio" class="hover:text-sky-600 transition">Inicio</a>
        <a href="#beneficios" class="hover:text-sky-600 transition">Beneficios</a>
        <a href="#catalogo" class="hover:text-sky-600 transition">Catálogo</a>
        <a href="#canales-oficiales" class="hover:text-sky-600 transition text-emerald-700 font-bold">🛡️ Canales Oficiales</a>
        <a href="#garantia" class="hover:text-sky-600 transition">Garantía</a>
      </nav>

      <a 
        href="<?php echo getWhatsAppUrl('Hola ' . SITE_NAME . ', deseo consultar sobre los planes'); ?>"
        target="_blank"
        class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-4 py-2.5 rounded-full text-xs sm:text-sm flex items-center gap-2 shadow-sm transition"
      >
        <span>Hablar por WhatsApp</span>
      </a>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="inicio" class="relative overflow-hidden bg-mesh-radial pt-12 pb-20 lg:pt-20 lg:pb-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-100/80 border border-sky-200 text-sky-800 text-xs font-bold">
            <?php echo SITE_TAGLINE; ?> • 100% Natural
          </div>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-[1.1]">
            Tu cambio comienza hoy con <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-emerald-600"><?php echo SITE_NAME; ?></span>
          </h1>
          <p class="text-base sm:text-lg text-slate-600 font-medium max-w-2xl mx-auto lg:mx-0">
            Fórmula altamente mejorada respaldada con ingredientes naturales para acelerar la quema de grasa y desintoxicar tu organismo desde la primera semana.
          </p>
          <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 pt-4">
            <a href="#catalogo" class="w-full sm:w-auto bg-sky-600 hover:bg-sky-700 text-white font-extrabold px-8 py-3.5 rounded-xl shadow-md transition">
              Ver Catálogo de Productos
            </a>
            <a href="<?php echo getWhatsAppUrl('¡Hola ' . SITE_NAME . '! 👋 QUIERO COMENZAR mi plan para bajar de peso.'); ?>" target="_blank" class="w-full sm:w-auto bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-7 py-3.5 rounded-xl shadow-md transition flex items-center justify-center gap-2">
              Escribir "QUIERO COMENZAR"
            </a>
          </div>
        </div>
        <div class="lg:col-span-5">
          <div class="bg-white p-4 rounded-3xl shadow-xl border border-slate-100 max-w-md mx-auto">
            <img src="../assets/images/super-pack-15-dias.jpg" alt="Super Pack 15 Días" class="w-full h-auto rounded-2xl object-contain">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PHP Dynamic Catalog Grid -->
  <section id="catalogo" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-12">
      <span class="text-xs font-bold uppercase tracking-wider text-sky-600 bg-sky-50 px-3 py-1 rounded-full border border-sky-100">
        Planes Disponibles
      </span>
      <h2 class="text-3xl font-black text-slate-900 mt-2 mb-3">Catálogo Oficial</h2>
      <p class="text-slate-600 text-sm">Selecciona tu tratamiento preferido y pide directamente con atención personalizada.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($products as $prod): ?>
        <?php 
          $itemMsg = "¡Hola " . SITE_NAME . "! 👋 Deseo adquirir:\n👉 *" . $prod['name'] . "*\n💵 Precio: " . CURRENCY_SYMBOL . " " . $prod['price'] . " " . CURRENCY_CODE;
          $orderUrl = "https://wa.me/" . WHATSAPP_PHONE . "?text=" . rawurlencode($itemMsg);
        ?>
        <div class="glass-card rounded-2xl overflow-hidden border border-slate-200/80 flex flex-col justify-between p-5 relative group hover:shadow-xl transition">
          <div class="relative bg-slate-50 rounded-xl aspect-square flex items-center justify-center p-3 mb-4">
            <img src="../<?php echo $prod['image']; ?>" alt="<?php echo htmlspecialchars($prod['name']); ?>" class="object-contain w-full h-full">
            <span class="absolute top-2 right-2 bg-red-600 text-white font-extrabold text-xs px-2.5 py-1 rounded-lg">
              <?php echo CURRENCY_SYMBOL . ' ' . $prod['price']; ?>
            </span>
          </div>

          <div>
            <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">
              <?php echo $prod['duration']; ?>
            </span>
            <h3 class="font-bold text-lg text-slate-900 mt-2 mb-1"><?php echo htmlspecialchars($prod['name']); ?></h3>
            <p class="text-xs text-slate-500 mb-3"><?php echo htmlspecialchars($prod['shortDesc']); ?></p>

            <div class="bg-slate-50 rounded-lg p-2.5 mb-4 text-xs space-y-1 text-slate-700">
              <span class="font-bold text-[10px] text-slate-400 uppercase">Incluye:</span>
              <?php foreach (array_slice($prod['includes'], 0, 3) as $inc): ?>
                <div class="flex items-center gap-1.5 truncate">
                  <span class="text-emerald-500 font-bold">✓</span>
                  <span><?php echo htmlspecialchars($inc); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <a 
            href="<?php echo $orderUrl; ?>" 
            target="_blank"
            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2.5 rounded-xl text-center text-xs block transition active:scale-95 shadow-sm"
          >
            Pedir por WhatsApp (S/ <?php echo $prod['price']; ?>)
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Canales Oficiales y Seguridad -->
  <section id="canales-oficiales" class="py-16 bg-gradient-to-b from-slate-100 to-sky-50/60 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-100 px-3 py-1 rounded-full">
          🛡️ CANALES 100% VERIFICADOS
        </span>
        <h2 class="text-3xl font-black text-slate-900 mt-3 mb-2">Cuentas Oficiales de SLIM ADVANCE PERÚ</h2>
        <div class="bg-amber-50 border border-amber-200 rounded-xl p-3 text-amber-900 text-xs sm:text-sm font-semibold max-w-xl mx-auto mt-3">
          ⚠️ Para evitar estafas o páginas falsas, realiza tus consultas y pedidos únicamente por nuestras cuentas oficiales:
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition">
          <span class="text-xs font-bold text-[#1877F2] uppercase block mb-1">▶️ Facebook Oficial</span>
          <h4 class="font-bold text-slate-900">Página de Facebook</h4>
          <p class="text-xs text-slate-500 mt-1">Comunidad oficial y anuncios.</p>
        </a>

        <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition">
          <span class="text-xs font-bold text-pink-600 uppercase block mb-1">▶️ Instagram Oficial</span>
          <h4 class="font-bold text-slate-900"><?php echo INSTAGRAM_HANDLE; ?></h4>
          <p class="text-xs text-slate-500 mt-1">Historias y fotos de clientes.</p>
        </a>

        <a href="<?php echo TIKTOK_URL; ?>" target="_blank" rel="noopener noreferrer" class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg transition">
          <span class="text-xs font-bold text-slate-900 uppercase block mb-1">➡️ TikTok Oficial</span>
          <h4 class="font-bold text-slate-900"><?php echo TIKTOK_HANDLE; ?></h4>
          <p class="text-xs text-slate-500 mt-1">Videos demostrativos y tips.</p>
        </a>

        <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" class="bg-white p-5 rounded-2xl border-2 border-emerald-500/40 shadow-sm hover:shadow-lg transition">
          <span class="text-xs font-bold text-emerald-600 uppercase block mb-1">💬 WhatsApp Oficial</span>
          <h4 class="font-bold text-slate-900"><?php echo WHATSAPP_DISPLAY; ?></h4>
          <p class="text-xs text-slate-500 mt-1">Atención y ventas directas.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-slate-950 text-slate-400 py-10 border-t border-slate-800 text-xs text-center">
    <p>© <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Todos los derechos reservados. WhatsApp: <?php echo WHATSAPP_DISPLAY; ?></p>
  </footer>

</body>
</html>
