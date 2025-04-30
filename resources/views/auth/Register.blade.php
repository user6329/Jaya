@extends('layouts.app')

@section('contenido')
<div class="flex min-h-screen justify-center items-center bg-jaya-beige">
  <div class="bg-jaya-obscuro p-8 rounded-2xl shadow-lg w-full max-w-md">
    <h1 class="text-5xl font-serif pb-4 text-jaya-dorado text-center" >JAYA</h1>
    <h2 class="text-4xl font-bold mb-6 text-jaya-beige text-center">Crear Cuenta</h2>
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="mb-4">
        <label for="name" class="block text-jaya-beige mb-2">Nombre</label>
        <input type="text" name="name" id="name" required class="w-full p-2 border rounded-lg bg-jaya-beige focus:outline-none focus:ring-2 focus:ring-jaya-camel">
      </div>

      <div class="mb-4">
        <label for="lastname" class="block text-jaya-beige mb-2">Apellido</label>
        <input type="text" name="lastname" id="lastname" required class="w-full p-2 border rounded-lg bg-jaya-beige focus:outline-none focus:ring-2 focus:ring-jaya-camel">
      </div>

      <div class="mb-4">
        <label for="email" class="block text-jaya-beige mb-2">Correo Electrónico</label>
        <input type="email" name="email" id="email" required class="w-full p-2 border bg-jaya-beige rounded-lg focus:outline-none focus:ring-2 focus:ring-jaya-camel">
      </div>

      <div class="mb-4">
        <label for="password" class="block text-jaya-beige mb-2">Contraseña</label>
        <input type="password" name="password" id="password" required class="w-full p-2 border rounded-lg  bg-jaya-beige focus:outline-none focus:ring-2 focus:ring-jaya-camel">
      </div>

      <div class="mb-6">
        <label for="password_confirmation" class="block text-jaya-beige mb-2">Confirmar Contraseña</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full p-2 border rounded-lg bg-jaya-beige focus:outline-none focus:ring-2 focus:ring-jaya-camel">
      </div>

      <button type="submit" class="w-full bg-jaya-beige hover:bg-jaya-dorado text-jaya-cuero p-2 rounded-lg font-semibold">
        Registrarse
      </button>

      <p class="text-center text-jaya-beige text-sm mt-4">
        ¿Ya tienes cuenta? 
        <a href="{{ route('login') }}" class="text-jaya-camel font-bold hover:underline">Iniciar Sesión</a>
      </p>
    </form>
    @if ($errors->any())
    <div class="bg-jaya-beige  text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  </div>
</div>
@endsection
