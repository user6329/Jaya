<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="flex flex-col min-h-screen m-0 p-0 bg-jaya-beige">

    <!-- Nav -->
<nav class="bg-jaya-obscuro text-white p-4 shadow-md">
  <div class="container mx-auto flex justify-between items-center">
    <a href="{{route('inicio')}}" class="text-2xl font-serif hover:text-jaya-dorado ">JAYA</a>
    <ul class="flex space-x-4">
      <li><a href="{{route('productos')}}" class="hover:text-jaya-dorado font-sans ">Productos</a></li>
      <li><a href="{{route('nosotros')}}" class="hover:text-jaya-dorado font-sans">Nosotros</a></li>
      <li><a href="{{route('contacto')}}" class="hover:text-jaya-dorado font-sans">Contacto</a></li>
      @auth
        <span> {{Auth::user()-> name }} </span>
       
        <form action="{{ route('logout') }}" method="POST" class="inline">
          @csrf
          <button type="submit" class="hover:text-jaya-dorado" >Logout</button>
        @else
          <li><a href="{{route('login')}}" class="hover:text-jaya-dorado font-sans">Login</a></li>
          <li><a href="{{route('register')}}" class="hover:text-jaya-dorado font-sans" >Register</a></li>

      @endauth
      
      
    </ul>
  </div>
</nav>

    <!-- Contenido -->
    <main class="flex-grow p-0">
        @yield('contenido')
    </main>

    <!-- Footer -->
    <footer class="bg-jaya-obscuro text-white p-4 text-center">
        &copy; {{ date('Y') }} Mi Empresa. Todos los derechos reservados.
    </footer>
</body>
</html>
