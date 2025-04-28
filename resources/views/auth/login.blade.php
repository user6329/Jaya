@extends('layouts.app')

@section('titulo', 'Login')

@section('contenido')
<div class="flex min-h-screen justify-center items-center bg-jaya-beige">
  <div class="bg-jaya-obscuro p-8 rounded-2xl shadow-lg w-full max-w-md">
    <h1 class="text-6xl font-serif pb-5 text-center text-jaya-dorado" >JAYA</h1>
    <h2 class="text-2xl pb-5 font-bold mb-6 text-jaya-beige text-center">Iniciar Sesión</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-4">
        <label for="email" class="block text-jaya-beige mb-2">Correo Electrónico</label>
        <input type="email" name="email" id="email" required autofocus class="w-full p-2 border rounded-lg bg-jaya-beige focus:outline-none focus:ring-2 focus:ring-jaya-camel">
      </div>

      <div class="mb-6">
        <label for="password" class="block text-jaya-beige mb-2">Contraseña</label>
        <input type="password" name="password" id="password" required class="w-full p-2 border rounded-lg bg-jaya-beige focus:outline-none focus:ring-2 focus:ring-jaya-camel">
      </div>

      <button type="submit" class="w-full bg-jaya-beige hover:bg-jaya-dorado text-jaya-cuero p-2 rounded-lg font-semibold">
        Entrar
      </button>

      <p class="text-center text-jaya-beige text-sm mt-4">
        ¿No tienes cuenta? 
        <a href="{{ route('register') }}" class="text-jaya-camel font-bold hover:underline">Regístrate</a>
      </p>
    </form>
  </div>
</div>
@endsection
