/**
 * Slim ADVANCE - Official Web Catalog & WhatsApp Ordering System
 * Business Phone: +51 957350532
 */

const WHATSAPP_NUMBER = "51957350532";

// Catálogo de Productos y Tratamientos extraídos de las imágenes oficiales
const productsData = [
  {
    id: "super-pack-15",
    name: "SUPER PACK X15 DÍAS",
    tagline: "#SlimAdvanceTúAliado",
    category: "super-packs",
    price: 210,
    duration: "15 Días",
    badge: "⭐ SUPER PACK MÁS VENDIDO",
    image: "assets/images/super-pack-15-dias.jpg",
    shortDesc: "El combo ideal para quemar grasa, desinflamar y tonificar en 15 días con crioterapia.",
    fullDesc: "Tratamiento intensivo de choque de 15 días. Combina el poder adelgazante de las cápsulas Slim ADVANCE con la termogénesis del té Thermote, la desintoxicación del colon y el gel criogénico Ice Therapy para reafirmar y moldear la piel.",
    includes: [
      "1 Slim ADVANCE (fórmula reforzada)",
      "1 Thermote Premium (té dietético quemagrasa)",
      "1 Pack Detox",
      "1 Limpia Colon (limpia y desintoxica)",
      "1 Ice Therapy NF (Gel criogénico modelador 250g)"
    ],
    popular: true
  },
  {
    id: "super-pack-7",
    name: "SUPER PACK X7 DÍAS",
    tagline: "#SlimAdvanceTúAliado",
    category: "super-packs",
    price: 130,
    duration: "7 Días",
    badge: "⚡ PLAN DETOX EXPRESS",
    image: "assets/images/super-pack-7-dias.jpg",
    shortDesc: "Pack express de 1 semana para reactivar el metabolismo y desintoxicar tu organismo.",
    fullDesc: "Perfecto para iniciar tu cambio sin compromisos largos. Desintoxica el sistema digestivo, limpia el colon, quema grasa acumulada y ayuda a notar cambios desde los primeros 7 días.",
    includes: [
      "1 Slim ADVANCE",
      "1 Thermote Premium",
      "1 Pack Detox",
      "1 Limpia Colon"
    ],
    popular: false
  },
  {
    id: "trio-mega-slim",
    name: "TRÍO MEGA SLIM COMPLETO",
    tagline: "#SlimAdvanceTúAliado",
    category: "trio-completo",
    price: 360,
    duration: "30 Días",
    badge: "🔥 MÁXIMA PÉRDIDA: 8 A 12 KG/MES",
    image: "assets/images/trio-mega-slim-completo.jpg",
    shortDesc: "Tratamiento integral de 30 días con moldeador térmico Xtreme Gold para una transformación total.",
    fullDesc: "Nuestro tratamiento más potente y completo para un mes entero. Con este trío podrás reducir medidas drásticamente y bajar entre 8kg y 12kg al mes siguiendo las indicaciones con asesoramiento continuo.",
    includes: [
      "1 Tratamiento Slim Advance 30 días (pastillas x30)",
      "1 Thermote Premium para 30 días (300g)",
      "1 Pack Detox (8 tomas completas)",
      "1 Moldeador Xtreme Gold (crema reductora intensiva)",
      "1 Limpia Colon"
    ],
    popular: true
  },
  {
    id: "plan-basico-7",
    name: "TRATAMIENTO BÁSICO - 7 DÍAS",
    tagline: "Fórmula 100% Natural",
    category: "planes-basicos",
    price: 80,
    duration: "7 Días",
    badge: "🌱 PLAN INICIAL ECONÓMICO",
    image: "assets/images/tratamientos-planes-basicos.jpg",
    shortDesc: "Prueba el poder de Slim Advance durante 7 días con limpieza de colon incluida.",
    fullDesc: "Tratamiento de inicio para comprobar la tolerancia y efectividad de la fórmula 100% natural. Regula el apetito y reactiva el tránsito intestinal.",
    includes: [
      "Tratamiento Slim Advance 7 días",
      "Limpieza de colon incluida",
      "Asesoramiento personalizado"
    ],
    popular: false
  },
  {
    id: "plan-basico-15",
    name: "TRATAMIENTO BÁSICO - 15 DÍAS",
    tagline: "Fórmula 100% Natural",
    category: "planes-basicos",
    price: 130,
    duration: "15 Días",
    badge: "🌿 RESULTADOS VISIBLES",
    image: "assets/images/tratamientos-planes-basicos.jpg",
    shortDesc: "Tratamiento de 15 días con limpieza de colon para desinflamar el abdomen y perder peso.",
    fullDesc: "Plan de duración media ideal para personas que buscan una pérdida de peso controlada, reduciendo la ansiedad y purificando el tracto digestivo.",
    includes: [
      "Tratamiento Slim Advance 15 días",
      "Limpieza de colon incluida",
      "Asesoramiento y seguimiento"
    ],
    popular: false
  },
  {
    id: "plan-basico-30",
    name: "TRATAMIENTO BÁSICO - 30 DÍAS (MES COMPLETO)",
    tagline: "Fórmula 100% Natural",
    category: "planes-basicos",
    price: 230,
    duration: "30 Días",
    badge: "🏆 MES COMPLETO RECOMENDADO",
    image: "assets/images/tratamientos-planes-basicos.jpg",
    shortDesc: "Tratamiento clásico mensual completo de 30 días con pastillas y limpieza de colon.",
    fullDesc: "Tratamiento integral de 1 mes completo con 30 pastillas de Slim Advance y desintoxicación de colon. Garantiza una pérdida de peso progresiva, natural y duradera sin efecto rebote.",
    includes: [
      "Slim Advance Frasco x30 cápsulas",
      "Limpieza de colon incluida",
      "Guía y asesoría personalizada de uso"
    ],
    popular: true
  }
];

// Estado de la cesta / cotizador interactivo
let selectedProducts = {};

// Inicialización cuando carga el DOM
document.addEventListener("DOMContentLoaded", () => {
  renderProducts("all");
  setupEventListeners();
  updateCartUI();
});

// Renderizar tarjetas de productos
function renderProducts(filterCategory = "all") {
  const container = document.getElementById("products-grid");
  if (!container) return;

  const filtered = filterCategory === "all" 
    ? productsData 
    : productsData.filter(p => p.category === filterCategory);

  container.innerHTML = filtered.map(product => {
    const isSelected = selectedProducts[product.id] ? true : false;
    const qty = selectedProducts[product.id] || 0;

    return `
      <div class="product-card glass-card rounded-2xl overflow-hidden border border-slate-200/80 flex flex-col justify-between relative group ${product.popular ? 'ring-2 ring-sky-500/30' : ''}">
        
        <!-- Badge Superior -->
        <div class="absolute top-3 left-3 z-10 flex flex-col gap-1">
          <span class="inline-block text-xs font-bold px-3 py-1 bg-white/90 backdrop-blur-md rounded-full shadow-sm text-sky-800 border border-sky-100">
            ${product.badge}
          </span>
          <span class="inline-block text-[11px] font-semibold px-2.5 py-0.5 bg-emerald-600/90 text-white rounded-full w-max shadow-xs">
            ${product.duration}
          </span>
        </div>

        <!-- Imagen del Producto con Zoom -->
        <div class="relative overflow-hidden bg-slate-50 aspect-square flex items-center justify-center p-4 cursor-pointer" onclick="openProductModal('${product.id}')">
          <img 
            src="${product.image}" 
            alt="${product.name}" 
            class="object-contain w-full h-full transform transition duration-500 group-hover:scale-105"
            loading="lazy"
          >
          <div class="absolute inset-0 bg-sky-950/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
            <span class="bg-white/95 text-sky-900 font-semibold text-xs px-3 py-1.5 rounded-full shadow-md flex items-center gap-1.5">
              <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
              Ver detalles completos
            </span>
          </div>
        </div>

        <!-- Contenido -->
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <div class="flex items-start justify-between gap-2 mb-2">
              <h3 class="font-bold text-lg text-slate-900 leading-snug group-hover:text-sky-600 transition-colors">
                ${product.name}
              </h3>
            </div>
            
            <p class="text-xs text-slate-500 font-medium mb-3">
              ${product.tagline}
            </p>

            <p class="text-sm text-slate-600 line-clamp-2 mb-4 leading-relaxed">
              ${product.shortDesc}
            </p>

            <!-- Lista rápida de lo que incluye -->
            <div class="bg-slate-50 rounded-xl p-3 mb-4 border border-slate-100">
              <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-1.5">Incluye:</span>
              <ul class="text-xs text-slate-700 space-y-1">
                ${product.includes.slice(0, 3).map(item => `
                  <li class="flex items-center gap-1.5">
                    <span class="text-emerald-500 font-bold">✓</span>
                    <span class="truncate">${item}</span>
                  </li>
                `).join('')}
                ${product.includes.length > 3 ? `
                  <li class="text-[11px] text-sky-600 font-semibold cursor-pointer" onclick="openProductModal('${product.id}')">
                    + ver ${product.includes.length - 3} beneficio(s) más...
                  </li>
                ` : ''}
              </ul>
            </div>
          </div>

          <!-- Precio y Botones de Acción -->
          <div class="pt-2 border-t border-slate-100">
            <div class="flex items-baseline justify-between mb-4">
              <div>
                <span class="text-xs text-slate-400 font-medium block">Inversión:</span>
                <div class="flex items-baseline gap-1">
                  <span class="text-sm font-black text-red-600">S/</span>
                  <span class="text-3xl font-black text-red-600 tracking-tight">${product.price}</span>
                  <span class="text-xs text-slate-500">PEN</span>
                </div>
              </div>
              <span class="text-[11px] font-semibold text-emerald-700 bg-emerald-50 border border-emerald-200 px-2.5 py-1 rounded-lg">
                100% Natural
              </span>
            </div>

            <!-- Botones CTA -->
            <div class="grid grid-cols-2 gap-2">
              <button 
                onclick="sendSingleProductWhatsApp('${product.id}')"
                class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2.5 px-3 rounded-xl transition duration-200 text-xs flex items-center justify-center gap-1.5 shadow-sm active:scale-95"
                title="Comprar directo por WhatsApp"
              >
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.969.54 1.769.814 2.792.815 3.182 0 5.77-2.587 5.77-5.768 0-3.18-2.587-5.769-5.77-5.769zm3.364 8.163c-.14.394-.74.743-1.026.791-.286.049-.652.072-1.054-.058-.403-.131-.926-.302-1.603-.687-1.127-.641-1.859-1.782-1.916-1.859-.057-.076-.462-.614-.462-1.171 0-.557.291-.831.395-.945.104-.114.229-.143.305-.143.077 0 .153.001.22.004.072.003.167-.027.26.196.096.229.324.791.353.849.029.058.048.125.01.201-.039.076-.058.124-.115.191-.057.067-.121.149-.172.2-.057.057-.117.119-.05.234.067.114.298.492.639.796.44.392.812.513.927.57.114.057.181.048.248-.029.067-.076.286-.334.363-.448.076-.115.153-.096.258-.057.105.038.669.315.784.372.114.057.191.086.22.134.028.048.028.277-.112.671z"/></svg>
                <span>Pedir</span>
              </button>

              <button 
                onclick="toggleProductSelection('${product.id}')"
                class="w-full font-bold py-2.5 px-3 rounded-xl transition duration-200 text-xs flex items-center justify-center gap-1.5 border active:scale-95 ${isSelected ? 'bg-sky-600 text-white border-sky-600' : 'bg-slate-100 hover:bg-slate-200 text-slate-800 border-slate-200'}"
              >
                <span>${isSelected ? '✓ Agregado (' + qty + ')' : '+ Cotizar'}</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    `;
  }).join("");
}

// Configurar event listeners
function setupEventListeners() {
  // Filtros de categoría
  const filterButtons = document.querySelectorAll(".filter-btn");
  filterButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      filterButtons.forEach(b => {
        b.classList.remove("bg-sky-600", "text-white", "shadow-md");
        b.classList.add("bg-white", "text-slate-600", "border-slate-200");
      });
      btn.classList.add("bg-sky-600", "text-white", "shadow-md");
      btn.classList.remove("bg-white", "text-slate-600", "border-slate-200");
      
      const category = btn.getAttribute("data-category");
      renderProducts(category);
    });
  });

  // Cerrar modal con tecla ESC
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      closeProductModal();
    }
  });
}

// Alternar producto en la cesta / cotizador
function toggleProductSelection(productId) {
  if (selectedProducts[productId]) {
    selectedProducts[productId] += 1;
  } else {
    selectedProducts[productId] = 1;
  }
  updateCartUI();
  // Refrescar vista actual
  const activeBtn = document.querySelector(".filter-btn.bg-sky-600");
  const category = activeBtn ? activeBtn.getAttribute("data-category") : "all";
  renderProducts(category);
}

// Restar producto
function decreaseProductSelection(productId) {
  if (selectedProducts[productId]) {
    selectedProducts[productId] -= 1;
    if (selectedProducts[productId] <= 0) {
      delete selectedProducts[productId];
    }
  }
  updateCartUI();
  const activeBtn = document.querySelector(".filter-btn.bg-sky-600");
  const category = activeBtn ? activeBtn.getAttribute("data-category") : "all";
  renderProducts(category);
}

// Limpiar cotización
function clearCart() {
  selectedProducts = {};
  updateCartUI();
  const activeBtn = document.querySelector(".filter-btn.bg-sky-600");
  const category = activeBtn ? activeBtn.getAttribute("data-category") : "all";
  renderProducts(category);
}

// Actualizar barra flotante de cotizador
function updateCartUI() {
  const bar = document.getElementById("floating-quote-bar");
  const countEl = document.getElementById("quote-count");
  const totalEl = document.getElementById("quote-total");
  const listEl = document.getElementById("quote-summary-list");

  if (!bar) return;

  const productIds = Object.keys(selectedProducts);
  let totalCount = 0;
  let totalPrice = 0;

  productIds.forEach(id => {
    const prod = productsData.find(p => p.id === id);
    const qty = selectedProducts[id];
    if (prod && qty > 0) {
      totalCount += qty;
      totalPrice += prod.price * qty;
    }
  });

  if (totalCount > 0) {
    bar.classList.remove("translate-y-full", "opacity-0", "pointer-events-none");
    bar.classList.add("translate-y-0", "opacity-100");

    if (countEl) countEl.textContent = totalCount;
    if (totalEl) totalEl.textContent = `S/ ${totalPrice}`;

    if (listEl) {
      listEl.innerHTML = productIds.map(id => {
        const prod = productsData.find(p => p.id === id);
        const qty = selectedProducts[id];
        return `
          <div class="flex items-center justify-between text-xs py-1 border-b border-slate-100 last:border-0">
            <span class="font-medium text-slate-800 truncate max-w-[170px]">${prod.name}</span>
            <div class="flex items-center gap-2">
              <span class="font-bold text-slate-600">x${qty}</span>
              <span class="font-black text-red-600">S/ ${prod.price * qty}</span>
              <button onclick="decreaseProductSelection('${prod.id}')" class="text-slate-400 hover:text-red-500 font-bold px-1">✕</button>
            </div>
          </div>
        `;
      }).join('');
    }
  } else {
    bar.classList.add("translate-y-full", "opacity-0", "pointer-events-none");
    bar.classList.remove("translate-y-0", "opacity-100");
  }
}

// Enviar solicitud de un producto individual a WhatsApp
function sendSingleProductWhatsApp(productId) {
  const product = productsData.find(p => p.id === productId);
  if (!product) return;

  const message = `¡Hola Slim ADVANCE! 👋 
Estoy visitando su catálogo web y me interesa adquirir el siguiente plan:

👉 *${product.name}*
🏷️ Categoría: ${product.duration}
💵 Inversión: *S/ ${product.price} PEN*

📦 *Incluye:*
${product.includes.map(item => ` • ${item}`).join('\n')}

¿Tienen stock disponible y me podrían dar información para realizar el pago y coordinar el envío? ¡Muchas gracias!`;

  const encodedUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(message)}`;
  window.open(encodedUrl, "_blank");
}

// Enviar pedido acumulado del cotizador a WhatsApp
function sendCartWhatsApp() {
  const productIds = Object.keys(selectedProducts);
  if (productIds.length === 0) return;

  let totalPrice = 0;
  let itemsText = "";

  productIds.forEach(id => {
    const prod = productsData.find(p => p.id === id);
    const qty = selectedProducts[id];
    if (prod && qty > 0) {
      const subtotal = prod.price * qty;
      totalPrice += subtotal;
      itemsText += ` • *${prod.name}* (Cant: ${qty}) - S/ ${subtotal} PEN\n`;
    }
  });

  const message = `¡Hola Slim ADVANCE! 👋
He seleccionado los siguientes productos desde su página web para mi tratamiento:

${itemsText}
💰 *TOTAL ESTIMADO: S/ ${totalPrice} PEN*
🚚 Envíos a todo el Perú

¿Me podrían brindar los números de cuenta / Yape / Plin y la asesoría para confirmar mi pedido? ¡Quedo atento(a)!`;

  const encodedUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(message)}`;
  window.open(encodedUrl, "_blank");
}

// Enlace directo de consulta general
function sendGeneralWhatsApp(topic = "asesoria") {
  let message = "";
  if (topic === "comenzar") {
    message = "¡Hola Slim ADVANCE! 👋 QUIERO COMENZAR mi plan para bajar de peso. ¿Me podrían brindar toda la información?";
  } else {
    message = "¡Hola Slim ADVANCE! 👋 Deseo recibir asesoramiento personalizado sobre los tratamientos naturales para bajar de peso que vi en su página web.";
  }

  const encodedUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(message)}`;
  window.open(encodedUrl, "_blank");
}

// Abrir modal de detalle
function openProductModal(productId) {
  const product = productsData.find(p => p.id === productId);
  if (!product) return;

  const modal = document.getElementById("product-modal");
  const modalBody = document.getElementById("modal-content");
  if (!modal || !modalBody) return;

  modalBody.innerHTML = `
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
      <!-- Imagen Ampliada -->
      <div class="relative bg-slate-50 rounded-2xl p-4 flex items-center justify-center border border-slate-100">
        <img 
          src="${product.image}" 
          alt="${product.name}" 
          class="max-h-96 w-auto object-contain rounded-xl shadow-sm"
        >
        <span class="absolute top-4 left-4 bg-emerald-600 text-white font-bold text-xs px-3 py-1 rounded-full shadow-md">
          ${product.duration}
        </span>
      </div>

      <!-- Información Detallada -->
      <div class="flex flex-col justify-between">
        <div>
          <span class="text-xs font-bold text-sky-600 tracking-wider uppercase">${product.tagline}</span>
          <h2 class="text-2xl font-black text-slate-900 mt-1 mb-2">${product.name}</h2>
          
          <div class="flex items-baseline gap-2 mb-4">
            <span class="text-sm font-bold text-slate-500">Precio especial:</span>
            <span class="text-3xl font-black text-red-600">S/ ${product.price}</span>
            <span class="text-xs text-slate-500 font-medium">PEN (Soles)</span>
          </div>

          <p class="text-sm text-slate-600 mb-5 leading-relaxed">
            ${product.fullDesc}
          </p>

          <div class="bg-sky-50/70 border border-sky-100 rounded-xl p-4 mb-5">
            <h4 class="text-xs font-extrabold text-sky-900 uppercase tracking-wider mb-2 flex items-center gap-1.5">
              <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              Contenido oficial del paquete:
            </h4>
            <ul class="space-y-1.5 text-xs text-slate-700">
              ${product.includes.map(inc => `
                <li class="flex items-center gap-2">
                  <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                  <span><strong>${inc}</strong></span>
                </li>
              `).join('')}
            </ul>
          </div>

          <div class="grid grid-cols-2 gap-3 mb-6 text-[11px] text-slate-500 font-medium">
            <div class="flex items-center gap-1.5">
              <span>🇵🇪</span> Envíos a todo el Perú
            </div>
            <div class="flex items-center gap-1.5">
              <span>🌿</span> Ingredientes 100% naturales
            </div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-3 pt-3 border-t border-slate-100">
          <button 
            onclick="sendSingleProductWhatsApp('${product.id}')"
            class="flex-1 bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-xl text-sm flex items-center justify-center gap-2 shadow-md transition duration-200"
          >
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.668-.699c.969.54 1.769.814 2.792.815 3.182 0 5.77-2.587 5.77-5.768 0-3.18-2.587-5.769-5.77-5.769zm3.364 8.163c-.14.394-.74.743-1.026.791-.286.049-.652.072-1.054-.058-.403-.131-.926-.302-1.603-.687-1.127-.641-1.859-1.782-1.916-1.859-.057-.076-.462-.614-.462-1.171 0-.557.291-.831.395-.945.104-.114.229-.143.305-.143.077 0 .153.001.22.004.072.003.167-.027.26.196.096.229.324.791.353.849.029.058.048.125.01.201-.039.076-.058.124-.115.191-.057.067-.121.149-.172.2-.057.057-.117.119-.05.234.067.114.298.492.639.796.44.392.812.513.927.57.114.057.181.048.248-.029.067-.076.286-.334.363-.448.076-.115.153-.096.258-.057.105.038.669.315.784.372.114.057.191.086.22.134.028.048.028.277-.112.671z"/></svg>
            Pedir ahora por WhatsApp
          </button>
          <button 
            onclick="toggleProductSelection('${product.id}'); closeProductModal();"
            class="bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold py-3 px-4 rounded-xl text-sm transition duration-200"
          >
            + Agregar a mi cotización
          </button>
        </div>
      </div>
    </div>
  `;

  modal.classList.remove("hidden");
  setTimeout(() => {
    modal.classList.remove("opacity-0");
    const box = modal.querySelector(".modal-content-box");
    if (box) box.classList.remove("scale-95");
  }, 10);
  document.body.style.overflow = "hidden";
}

// Cerrar modal
function closeProductModal() {
  const modal = document.getElementById("product-modal");
  if (!modal) return;
  modal.classList.add("opacity-0");
  const box = modal.querySelector(".modal-content-box");
  if (box) box.classList.add("scale-95");
  setTimeout(() => {
    modal.classList.add("hidden");
    document.body.style.overflow = "auto";
  }, 200);
}
