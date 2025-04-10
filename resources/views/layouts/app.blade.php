<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Nav -->
    <nav class="bg-gray-800 text-white p-4 flex gap-4">
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('productos') }}">Productos</a>
        <a href="{{ route('nosotros') }}">Nosotros</a>
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>

    <!-- Contenido -->
    <main class="flex-grow p-6">
        @yield('contenido')
    </main>

    <!-- Footer -->
    <footer class="bg-[#3e2723] text-white p-4 text-center">
        &copy; {{ date('Y') }} Mi Empresa. Todos los derechos reservados.
    </footer>
</body>
</html>
