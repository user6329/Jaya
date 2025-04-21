# Jaya

# 🐂 JAYA - Tienda en línea de artículos de piel

**JAYA** es una plataforma de comercio electrónico enfocada en la venta de productos artesanales de piel como cinturones, carteras y bolsas, elaborados con técnicas tradicionales de marroquinería y talabartería por el maestro artesano **Delfino Valerio Montalvo**.

## 🛠️ Tecnologías utilizadas

- [Laravel](https://laravel.com/) - Framework backend PHP
- [Vite](https://vitejs.dev/) - Bundler moderno para frontend
- [Tailwind CSS](https://tailwindcss.com/) - Framework de estilos CSS
- [Blade](https://laravel.com/docs/blade) - Motor de plantillas de Laravel
- [Node.js](https://nodejs.org/) + NPM - Entorno JavaScript para desarrollo frontend



├── app/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── productos.blade.php
│   │   ├── inicio.blade.php
│   │   └── ...
│   ├── css/app.css
│   └── js/app.js
├── public/
│   └── build/ (Archivos generados por Vite)
├── routes/
│   └── web.php
├── tailwind.config.js
├── vite.config.js
└── package.json

## Clonar el repositorio

git clone https://github.com/tu_usuario/jaya.git
cd jaya

## Instalar Dependecia de PHP
composer install

## Instalar Dependecias de Front
npm install

## Copia el Archivo .env
cp .env.example .env

## Genera la Clave de la Aplicacion
php artisan key:generate

## Compila el Front
npm run dev # o npm run build para producción

## Inicia el Servidor de Desarrollo
npm run dev # o npm run build para producción


Captura de pantalla

    Desarrollado por: Jael Omar Valerio Sandoval

    Artesano principal: Delfino Valerio Montal
