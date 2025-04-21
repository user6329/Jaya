@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="w-full p-0 h-auto sm:h-60 md:h-80 lg:h-96 bg-cover object-cover bg-center" style="background-image: url('{{ asset('img/inicio.jfif') }}')" >
        <div class="pt-16">
            <h1 class="text-5xl font-serif text-center text-jaya-beige">Bienvenido</h1>
            <h1 class="text-jaya-beige  text-2x1 text-center" >A</h1>
            <h1 class="text-jaya-beige text-5xl font-serif text-center" >JAYA</h1>
        </div>
        <p class=" pt-16 text-center font-serif text-jaya-beige ">Artesanía que perdura. Piel trabajada con pasión y tradición</p>
    </div>
@endsection
