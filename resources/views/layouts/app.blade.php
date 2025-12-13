<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="flex flex-col min-h-screen p-0 m-0 bg-jaya-beige">

    <!-- Nav -->
<nav class="p-4 text-white shadow-md bg-jaya-obscuro">
  <div class="container flex items-center justify-between mx-auto">
    <a href="{{route('inicio')}}" class="font-serif text-2xl hover:text-jaya-dorado ">JAYA</a>
    <ul class="flex space-x-4">
      <li><a href="{{route('productos')}}" class="font-sans hover:text-jaya-dorado ">Productos</a></li>
      <li><a href="{{route('nosotros')}}" class="font-sans hover:text-jaya-dorado">Nosotros</a></li>
      <li><a href="{{route('contacto')}}" class="font-sans hover:text-jaya-dorado">Contacto</a></li>
      @auth
          <li><a href="{{route('perfil.mostrar')}}" class="font-sans hover:text-jaya-dorado">{{Auth::user()-> name }}</a></li>
              
        <form action="{{ route('logout') }}" method="POST" class="inline">
          @csrf
          <button type="submit" class="hover:text-jaya-dorado" >Logout</button>
        @else
          <li><a href="{{route('login')}}" class="font-sans hover:text-jaya-dorado">Login</a></li>
          <li><a href="{{route('register')}}" class="font-sans hover:text-jaya-dorado">Register</a></li>

      @endauth
      
      
    </ul>
  </div>
</nav>

    <!-- Contenido -->
    <main class="flex-grow p-0">
        @yield('contenido')
    </main>

    <!-- Footer -->
    <footer class="p-4 text-center text-white bg-jaya-obscuro">
        &copy; {{ date('Y') }} JAYA. Todos los Derechos Reservados.
    </footer>
</body>
</html>
