# 🌿 Slim ADVANCE - Catálogo Web & Sistema de Redirección a WhatsApp

Página web moderna, informativa, 100% responsiva y optimizada para **Slim ADVANCE**. Diseñada para mostrar la línea de productos y tratamientos naturales con redirección directa al WhatsApp empresarial **957 350 532** y canales oficiales de redes sociales para evitar estafas o páginas falsas.

---

## 🛡️ Cuentas Oficiales de SLIM ADVANCE PERÚ

Para garantizar la seguridad de los clientes y evitar suplantaciones o páginas falsas, la web enlaza y promueve únicamente los canales verificados de la marca:

* ▶️ **Página oficial de Facebook:**  
  [https://www.facebook.com/share/1DsSevTP7Y/?mibextid=wwXIfr](https://www.facebook.com/share/1DsSevTP7Y/?mibextid=wwXIfr)
* ▶️ **Cuenta oficial de Instagram:**  
  [@slim_advance_peru](https://www.instagram.com/slim_advance_peru?igsh=MW5mYzNhcmZqbXU1Ng%3D%3D&utm_source=qr)
* ➡️ **Cuenta oficial de TikTok:**  
  [@slim_advance_peru](https://www.tiktok.com/@slim_advance_peru?_r=1&_t=ZS-9AxsiM5nB3Q)
* 💬 **WhatsApp Empresarial Oficial:**  
  [+51 957 350 532 (wa.me/51957350532)](https://wa.me/51957350532)

---

## 🚀 Opciones de Despliegue

Este repositorio incluye una solución híbrida pensada para ofrecer el máximo rendimiento y flexibilidad:

1. **Versión Estática (Lista para GitHub Pages a Costo $0):**
   * Archivo principal: `index.html`
   * Tecnologías: HTML5 semántico, Tailwind CSS, JavaScript modular.
   * Cero configuración de servidor, carga ultra-rápida y compatible de forma nativa con **GitHub Pages**.

2. **Versión PHP Modular (`/php-version`):**
   * Archivo de configuración central: `php-version/config.php`
   * Vista renderizada: `php-version/index.php`
   * Lista para subir a cualquier hosting PHP (cPanel, XAMPP, Apache, InfinityFree, Render).

3. **Versión Laravel 11 (`/laravel-version`):**
   * Controlador: `app/Http/Controllers/ProductController.php`
   * Rutas: `routes/web.php`
   * Vista Blade: `resources/views/landing.blade.php`

---

## 🌐 Cómo Desplegar en GitHub Pages Gratis ($0 Costo)

GitHub Pages permite hospedar páginas web de forma completamente gratuita y accesible a todo el público en una URL tipo `https://tu-usuario.github.io/slim-advance`.

### Pasos rápidos:

1. **Crear repositorio en GitHub:**
   * Entra a [github.com/new](https://github.com/new) y crea un repositorio llamado `slim-advance` (público).

2. **Subir los archivos:**
   Abre una terminal en esta carpeta y ejecuta:
   ```bash
   git init
   git add .
   git commit -m "feat: canales oficiales y catalogo web Slim ADVANCE"
   git branch -M main
   git remote add origin https://github.com/TU-USUARIO/slim-advance.git
   git push -u origin main
   ```

3. **Activar GitHub Pages:**
   * En tu repositorio de GitHub, ve a **Settings** > **Pages** (en el menú lateral izquierdo).
   * En **Build and deployment**:
     * **Source**: `Deploy from a branch`
     * **Branch**: selecciona `main` y la carpeta `/ (root)`
     * Presiona **Save**.
   * En 1 o 2 minutos, GitHub te dará el enlace público:  
     👉 `https://TU-USUARIO.github.io/slim-advance/`

---

## 📦 Productos y Tratamientos Incluidos

| Producto / Plan | Duración | Precio | Incluye |
| :--- | :---: | :---: | :--- |
| **Super Pack x15 Días** | 15 días | **S/ 210** | Slim Advance + Thermote Premium + Pack Detox + Limpia Colon + Ice Therapy Gel Criogénico |
| **Super Pack x7 Días** | 7 días | **S/ 130** | Slim Advance + Thermote Premium + Pack Detox + Limpia Colon |
| **Trío Mega Slim Completo** | 30 días | **S/ 360** | Slim Advance x30 + Thermote 300g + Detox 8 tomas + Moldeador Xtreme Gold + Limpia Colon |
| **Tratamiento Pérdida de Peso 7 Días** | 7 días | **S/ 80** | Slim Advance 7 días + Limpieza de colon |
| **Tratamiento Pérdida de Peso 15 Días** | 15 días | **S/ 130** | Slim Advance 15 días + Limpieza de colon |
| **Tratamiento Pérdida de Peso 30 Días** | 30 días | **S/ 230** | Slim Advance Mes Completo (x30) + Limpieza de colon |

---

## 🛠️ Estructura del Proyecto

```text
slim-advance/
├── assets/
│   ├── css/
│   │   └── styles.css              # Estilos personalizados, gradientes y animaciones
│   ├── js/
│   │   └── app.js                  # Lógica del catálogo, filtros, modal y cotizador
│   └── images/
│       ├── logo.svg                # Logotipo vectorial Slim ADVANCE
│       ├── super-pack-15-dias.jpg
│       ├── super-pack-7-dias.jpg
│       ├── trio-mega-slim-completo.jpg
│       ├── tratamientos-planes-basicos.jpg
│       └── garantia-formula-beneficios.jpg
├── index.html                      # Landing page principal lista para GitHub Pages ($0)
├── php-version/
│   ├── config.php                  # Configuración centralizada de productos, redes y WhatsApp
│   └── index.php                   # Versión PHP dinámica para cPanel/Apache
├── laravel-version/
│   ├── app/Http/Controllers/ProductController.php
│   ├── resources/views/landing.blade.php
│   └── routes/web.php
└── README.md                       # Documentación y guía de despliegue
```
